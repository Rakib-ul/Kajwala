<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Service;

class ServiceController extends Controller
{
    // Show profiles for a given service category using the skill field
    public function showCategory($category)
    {
        // Convert category slug to readable format
        $categoryName = str_replace(['-', '_'], ' ', $category);
        $categoryName = ucwords($categoryName);
        
        // Filter workers by skill field containing the category name (case-insensitive)
        $profiles = Worker::whereRaw('LOWER(skill) LIKE ?', ['%' . strtolower($categoryName) . '%'])
            ->where('is_verified', true)
            ->get();
            
        return view('service_category', [
            'category' => $categoryName,
            'categorySlug' => $category,
            'profiles' => $profiles,
        ]);
    }

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
}
