<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

// Add these for Admin CRUD validation
use App\Http\Requests\Admin\StoreWorkerRequest;
use App\Http\Requests\Admin\UpdateWorkerRequest;

class WorkerController extends Controller
{
    /**
     * Show worker registration form
     */
    public function showRegisterForm()
    {
        // Fetch active services
        $services = Service::where('is_active', true)->get();
        return view('worker-register', compact('services'));
    }

    /**
     * Handle worker registration
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:workers,email',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'required|string|max:255',
            'service' => 'required|string|in:plumber,electrician,cleaner,painter,mover',
            'hourly_rate' => 'required|numeric|min:0',
            'experience' => 'required|integer|min:0',
            'profile_image' => 'nullable|image|max:2048',
            'documents' => 'nullable|file|mimes:pdf,jpg,png|max:5120'
        ]);

        $profileImagePath = $request->hasFile('profile_image')
            ? $request->file('profile_image')->store('worker_profiles', 'public')
            : null;

        $documentPath = $request->hasFile('documents')
            ? $request->file('documents')->store('worker_documents', 'public')
            : null;

        Worker::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'password' => bcrypt($validated['password']),
            'address' => $validated['address'],
            'service' => $validated['service'],
            'hourly_rate' => $validated['hourly_rate'],
            'experience_years' => $validated['experience'],
            'profile_image' => $profileImagePath,
            'documents' => $documentPath,
            'is_verified' => false,
        ]);

        return redirect()->route('worker.login')->with('success', 'Registration successful! Your account is pending verification.');
    }

    public function showLoginForm()
    {
        return view('worker-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('worker')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('worker.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function dashboard()
    {
        $worker = auth()->guard('worker')->user();
        $upcomingJobs = $worker->serviceRequests()
            ->where('status', 'assigned')
            ->orderBy('scheduled_at')
            ->limit(5)
            ->get();

        return view('worker-dashboard', compact('worker', 'upcomingJobs'));
    }

    public function logout(Request $request)
    {
        auth()->guard('worker')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'You have been logged out.');
    }

    public function showForgotPasswordForm()
    {
        return view('worker-forgot-password');
    }

    public function handleForgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $status = Password::sendResetLink($request->only('email'));

        return $status == Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }

    public function show(Worker $worker)
    {
        $worker->load('services', 'reviews.user');
        return view('worker-details', compact('worker'));
    }

    public function edit(Worker $worker)
    {
        $services = Service::where('is_active', true)->get();
        $worker->load('services'); // load current services
        return view('admin.workers.worker-profile-edit', compact('worker', 'services'));
    }


    public function update(Request $request, Worker $worker)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'skill' => 'nullable|string|max:255',
            'profile_image' => 'nullable|image|max:2048',
            'services' => 'nullable|array',
            'services.*' => 'exists:services,id',
            'is_verified' => 'required|boolean',
        ]);

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            if ($worker->profile_image) {
                Storage::disk('public')->delete($worker->profile_image);
            }
            $validated['profile_image'] = $request->file('profile_image')->store('worker_profiles', 'public');
        }

        $worker->update($validated);

        // Sync services
        if (isset($validated['services'])) {
            $worker->services()->sync($validated['services']);
        }

        return redirect()->route('admin.dashboard')->with('success', 'Worker updated successfully!');
    }

    // ===== Admin CRUD =====
    public function index()
    {
        $workers = Worker::latest()->paginate(10);
        return view('admin.workers.index', compact('workers'));
    }

    public function create()
    {
        return view('admin.workers.create');
    }

    public function store(StoreWorkerRequest $request)
    {
        $data = $request->validated();
        $data['is_verified'] = $request->boolean('is_verified');
        Worker::create($data);

        return redirect()->route('admin.workers.index')->with('success', 'Worker created.');
    }

    // ⚠ already have `show(Worker $worker)` for frontend → keep both
    public function adminShow(Worker $worker)
    {
        return view('admin.workers.show', compact('worker'));
    }

    public function editAdmin(Worker $worker)
    {
        return view('admin.workers.edit', compact('worker'));
    }

    public function updateAdmin(UpdateWorkerRequest $request, Worker $worker)
    {
        $data = $request->validated();
        $data['is_verified'] = $request->boolean('is_verified');
        $worker->update($data);

        return redirect()->route('admin.workers.index')->with('success', 'Worker updated.');
    }

    public function destroy(Worker $worker)
    {
        $worker->delete();
        return redirect()->route('admin.workers.index')->with('success', 'Worker deleted.');
    }

    public function verify(Worker $worker)
    {
        $worker->update(['is_verified' => true]);
        return back()->with('success', 'Worker verified.');
    }
}
