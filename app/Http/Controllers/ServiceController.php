<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Service;

class ServiceController extends Controller
{
    // Show profiles for a given service category using the skill field with filtering
    public function showCategory($category, Request $request)
    {
        // Convert category slug to readable format
        $categoryName = str_replace(['-', '_'], ' ', $category);
        $categoryName = ucwords($categoryName);
        
        // Start with base query
        $query = Worker::whereRaw('LOWER(skill) LIKE ?', ['%' . strtolower($categoryName) . '%'])
            ->where('is_verified', true);
        
        // Apply filters
        $query = $this->applyFilters($query, $request);
        
        // Apply sorting
        $query = $this->applySorting($query, $request);
        
        // Get filtered and sorted results
        $profiles = $query->get();
        
        // Get unique locations for filter dropdown
        $locations = Worker::whereRaw('LOWER(skill) LIKE ?', ['%' . strtolower($categoryName) . '%'])
            ->where('is_verified', true)
            ->distinct()
            ->pluck('address')
            ->filter()
            ->sort()
            ->values();
        
        // Get unique experience levels for filter dropdown
        $experienceLevels = Worker::whereRaw('LOWER(skill) LIKE ?', ['%' . strtolower($categoryName) . '%'])
            ->where('is_verified', true)
            ->distinct()
            ->pluck('experience_years')
            ->filter()
            ->sort()
            ->values();
        
        return view('service_category', [
            'category' => $categoryName,
            'categorySlug' => $category,
            'profiles' => $profiles,
            'locations' => $locations,
            'experienceLevels' => $experienceLevels,
            'filters' => $request->all(),
        ]);
    }

    private function applyFilters($query, Request $request)
    {
        // Filter by experience
        if ($request->filled('experience')) {
            $query->where('experience_years', '>=', $request->experience);
        }
        
        // Filter by location
        if ($request->filled('location')) {
            $query->where('address', 'LIKE', '%' . $request->location . '%');
        }
        
        // Filter by rating
        if ($request->filled('rating')) {
            $query->where('rating', '>=', $request->rating);
        }
        
        // Filter by hourly rate range
        if ($request->filled('min_rate')) {
            $query->where('hourly_rate', '>=', $request->min_rate);
        }
        
        if ($request->filled('max_rate')) {
            $query->where('hourly_rate', '<=', $request->max_rate);
        }
        
        return $query;
    }

    private function applySorting($query, Request $request)
    {
        $sortBy = $request->get('sort_by', 'rating');
        $sortOrder = $request->get('sort_order', 'desc');
        
        switch ($sortBy) {
            case 'hourly_rate':
                $query->orderBy('hourly_rate', $sortOrder);
                break;
            case 'experience':
                $query->orderBy('experience_years', $sortOrder);
                break;
            case 'rating':
                $query->orderBy('rating', $sortOrder);
                break;
            case 'name':
                $query->orderBy('name', $sortOrder);
                break;
            default:
                $query->orderBy('rating', 'desc');
        }
        
        return $query;
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
