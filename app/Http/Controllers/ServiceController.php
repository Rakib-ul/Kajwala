<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // In your ServiceController
    public function findServices(Request $request)
    {
        $request->validate([
            'location' => 'required|string|max:255'
        ]);

        $services = Service::where('is_active', true)->get();

        return view('dashboard', [
            'services' => $services,
            'location' => $request->location
        ]);
    }

    public function selectWorkers(Request $request)
    {
        $request->validate([
            'location' => 'required|string|max:255',
            'services' => 'required|array',
            'services.*' => 'exists:services,id'
        ]);

        $workers = Worker::whereHas('services', function ($query) use ($request) {
            $query->whereIn('service_id', $request->services);
        })
            ->where('is_available', true)
            ->with([
                'services' => function ($query) use ($request) {
                    $query->whereIn('service_id', $request->services);
                }
            ])
            ->get();

        return view('select-workers', [
            'workers' => $workers,
            'services' => Service::whereIn('id', $request->services)->get(),
            'location' => $request->location
        ]);
    }

    // Show profiles for a given service category
    public function category($category)
    {
        // Map category slug to service name if needed
        $serviceName = str_replace(['-', '_'], ' ', $category);
        $serviceName = ucwords($serviceName);

        // Find service by name
        $service = \App\Models\Service::whereRaw('LOWER(name) = ?', [strtolower($serviceName)])->first();
        if (!$service) {
            abort(404, 'Service not found');
        }

        // Get workers for this service
        $profiles = \App\Models\Worker::whereHas('services', function ($q) use ($service) {
            $q->where('service_id', $service->id);
        })->get();

        return view('service_category', [
            'category' => $category,
            'profiles' => $profiles,
        ]);
    }
}
