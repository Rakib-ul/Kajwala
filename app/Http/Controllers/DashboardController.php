<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\ServiceRequest;
use App\Models\Worker;
use App\Http\Requests\StoreServiceRequestRequest;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        
        // Get stats from database
        $stats = [
            'total_services' => ServiceRequest::where('user_id', $user->id)->count(),
            'completed' => ServiceRequest::where('user_id', $user->id)
                            ->where('status', 'completed')->count(),
            'in_progress' => ServiceRequest::where('user_id', $user->id)
                            ->whereIn('status', ['assigned', 'in_progress'])->count(),
            'cancelled' => ServiceRequest::where('user_id', $user->id)
                            ->where('status', 'cancelled')->count(),
        ];

        // Get recent service requests with eager loading
        $recentRequests = ServiceRequest::with(['service', 'worker'])
            ->where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        // Get all active services for the service selection form
        $services = Service::where('is_active', true)->get();

        return view('dashboard', compact('user', 'stats', 'recentRequests', 'services'));
    }

    /**
     * Handle service requests
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function requestService(Request $request)
    {
        $validated = $request->validate([
            'location' => 'required|string|max:255',
            'services' => 'required|array|min:1',
            'services.*' => 'exists:services,id'
        ]);

        // Store selected services in session for the next step
        session()->put('service_request', [
            'location' => $validated['location'],
            'service_ids' => $validated['services']
        ]);

        return redirect()->route('select.workers');
    }

    /**
     * Store a new service request
     *
     * @param  StoreServiceRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeServiceRequest(StoreServiceRequestRequest $request)
    {
        $serviceRequest = ServiceRequest::create([
            'user_id' => Auth::id(),
            'service_id' => $request->service_id,
            'description' => $request->description,
            'location' => $request->location,
            'notes' => $request->notes,
            'scheduled_at' => $request->scheduled_at,
            'status' => 'pending',
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Service request created successfully!');
    }

    /**
     * Calculate service price based on service ID
     *
     * @param  int  $serviceId
     * @return float
     */
    protected function calculateServicePrice($serviceId)
    {
        $service = Service::findOrFail($serviceId);
        
        // Use min_price and max_price if available, otherwise fall back to price
        if ($service->min_price && $service->max_price) {
            return ($service->min_price + $service->max_price) / 2;
        }
        
        // Fall back to single price field
        return $service->price ?? 0;
    }

    /**
     * Show service request details
     *
     * @param  ServiceRequest  $serviceRequest
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showServiceRequest(ServiceRequest $serviceRequest)
    {
        // Ensure the request belongs to the current user
        if ($serviceRequest->user_id !== Auth::id()) {
            abort(403);
        }

        return view('service-requests.show', compact('serviceRequest'));
    }
}