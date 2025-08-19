<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Worker; 
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

    public function searchByLocation(Request $request)
    {
        $location = trim($request->query('location', ''));

        // If you want "services in that location", either store location on services
        // or ignore location if you want to show all.
        $query = Service::query()->where('is_active', true);

        if ($location !== '') {
            $query->where(function ($q) use ($location) {
                $q->where('location', 'like', "%{$location}%")
                  ->orWhereNull('location'); // include global services
            });
        }

        $services = $query->orderBy('name')->get(['id','name','category','price','description']);

        return response()->json([
            'services' => $services,
        ]);
    }

    /**
     * Page: show workers matching selected services + location
     * GET /select-workers?location=Mirpur&services[]=1&services[]=2
     */
    public function selectWorkers(Request $request)
{
    $location = strtolower($request->get('location'));
    $service  = $request->get('service');

    // Debug request first
    // dd($request->all());

    $workers = Worker::query()
        ->when($service, fn($q) => $q->where('service_id', $service))
        ->whereRaw('LOWER(location) LIKE ?', ["%{$location}%"])
        ->get();

    if ($workers->isEmpty()) {
        return view('select-workers', [
            'workers' => [],
            'message' => "No matching workers found in {$location}"
        ]);
    }

    return view('select-workers', compact('workers', 'location', 'service'));
}

 

    // ===== Keep your existing user-side methods below (if any) =====
}
