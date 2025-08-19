<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Worker;
use App\Models\ServiceRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'servicesCount'   => Service::count(),
            'workersCount'    => Worker::count(),
            'pendingRequests' => ServiceRequest::where('status','pending')->count(),
            'usersCount'      => User::count(),
        ]);
    }

    // Services Management
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'slug' => 'required|string|unique:services,slug',
        ]);

        Service::create($validated);
        return redirect()->route('admin.services.index')->with('success', 'Service created successfully!');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'slug' => 'required|string|unique:services,slug,' . $service->id,
        ]);

        $service->update($validated);
        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully!');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully!');
    }

    // Workers Management
    public function workers()
    {
        $workers = Worker::all();
        return view('admin.workers.index', compact('workers'));
    }

    public function createWorker()
    {
        $services = Service::all();
        return view('admin.workers.create', compact('services'));
    }

    public function storeWorker(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:workers,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'service' => 'required|string',
            'hourly_rate' => 'required|numeric|min:0',
            'experience_years' => 'required|integer|min:0',
        ]);

        Worker::create($validated);
        return redirect()->route('admin.workers.index')->with('success', 'Worker created successfully!');
    }

    public function editWorker(Worker $worker)
    {
        $services = Service::all();
        return view('admin.workers.edit', compact('worker', 'services'));
    }

    public function updateWorker(Request $request, Worker $worker)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:workers,email,' . $worker->id,
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'service' => 'required|string',
            'hourly_rate' => 'required|numeric|min:0',
            'experience_years' => 'required|integer|min:0',
        ]);

        $worker->update($validated);
        return redirect()->route('admin.workers.index')->with('success', 'Worker updated successfully!');
    }

    public function destroyWorker(Worker $worker)
    {
        $worker->delete();
        return redirect()->route('admin.workers.index')->with('success', 'Worker deleted successfully!');
    }

    // Service Requests Management
    public function requests()
    {
        $requests = ServiceRequest::with(['user', 'worker'])->get();
        return view('admin.requests.index', compact('requests'));
    }

    public function showRequest(ServiceRequest $request)
    {
        return view('admin.requests.show', compact('request'));
    }

    // Users Management
    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
}
