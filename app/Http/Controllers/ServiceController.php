<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreServiceRequest;
use App\Http\Requests\Admin\UpdateServiceRequest;

class ServiceController extends Controller
{
    // ===== Admin CRUD =====
    public function index()
    {
        $services = Service::latest()->paginate(12);
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'category' => 'nullable|string|max:255',
        'price' => 'required|numeric',
        'description' => 'nullable|string',
        'is_active' => 'nullable|boolean',
    ]);

    // Handle checkbox
    $data['is_active'] = $request->has('is_active');

    Service::create($data);

    return redirect()->route('admin.services.index')->with('success', 'Service added successfully.');
}

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        $data['is_active'] = $request->boolean('is_active');
        $service->update($data);

        return redirect()->route('admin.services.index')->with('success', 'Service updated.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted.');
    }

    // Optional quick toggle
    public function toggle(Service $service)
    {
        $service->update(['is_active' => !$service->is_active]);
        return back()->with('success', 'Service status updated.');
    }

    // ===== Keep your existing user-side methods below (if any) =====
}
