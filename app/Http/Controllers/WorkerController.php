<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

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
    // Validate the incoming request
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

    // Handle file uploads
    $profileImagePath = $request->hasFile('profile_image')
        ? $request->file('profile_image')->store('worker_profiles', 'public')
        : null;

    $documentPath = $request->hasFile('documents')
        ? $request->file('documents')->store('worker_documents', 'public')
        : null;

    // Create worker
    Worker::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'phone' => $validated['phone'],
        'password' => bcrypt($validated['password']),
        'address' => $validated['address'],
        'service' => $validated['service'],   // ✅ save one service
        'hourly_rate' => $validated['hourly_rate'],
        'experience_years' => $validated['experience'],
        'profile_image' => $profileImagePath,
        'documents' => $documentPath,
        'is_verified' => false, // Admin needs to verify
    ]);

    return redirect()->route('worker.login')->with('success', 'Registration successful! Your account is pending verification.');
}

    /**
     * Show worker login form
     */
    public function showLoginForm()
    {
        return view('worker-login');
    }

    /**
     * Handle worker login
     */
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

    /**
     * Display worker dashboard
     */
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

    /**
     * Handle worker logout
     */
    public function logout(Request $request)
    {
        auth()->guard('worker')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'You have been logged out.');
    }

    /**
     * Show forgot password form
     */
    public function showForgotPasswordForm()
    {
        return view('worker-forgot-password');
    }

    /**
     * Handle forgot password request
     */
    public function handleForgotPassword(Request $request)
    {
        // Validate email
        $request->validate(['email' => 'required|email']);

        // Send password reset link
        $status = Password::sendResetLink($request->only('email'));

        return $status == Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }

    /**
     * Show worker profile
     */
    public function show(Worker $worker)
    {
        $worker->load('services', 'reviews.user');
        return view('worker-details', compact('worker'));
    }

    /**
     * Display worker edit profile form
     */
    public function edit()
    {
        $worker = auth()->guard('worker')->user();
        $services = Service::where('is_active', true)->get();
        return view('worker-profile-edit', compact('worker', 'services'));
    }

    /**
     * Update worker profile
     */
    public function update(Request $request)
    {
        $worker = auth()->guard('worker')->user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'hourly_rate' => 'required|numeric|min:0',
            'experience' => 'required|integer|min:0',
            'bio' => 'nullable|string|max:1000',
            'profile_image' => 'nullable|image|max:2048',
            'services' => 'required|array',
            'services.*' => 'exists:services,id'
        ]);

        // Handle profile image update
        if ($request->hasFile('profile_image')) {
            // Delete old image if exists
            if ($worker->profile_image) {
                Storage::disk('public')->delete($worker->profile_image);
            }
            $validated['profile_image'] = $request->file('profile_image')->store('worker_profiles', 'public');
        }

        $worker->update($validated);

        // Sync services
        $worker->services()->sync($validated['services']);

        return redirect()->route('worker.profile')->with('success', 'Profile updated successfully!');
    }
}
