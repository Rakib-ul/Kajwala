<?php

namespace App\Http\Controllers;

use App\Models\ServiceRequest;
use App\Http\Requests\StoreServiceRequestRequest;

class ServiceRequestController extends Controller
{
    public function store(StoreServiceRequestRequest $request)
    {
        $serviceRequest = ServiceRequest::create([
            'user_id' => auth()->id(),
            'service_id' => $request->service_id,
            'description' => $request->description,
            'location' => $request->location,
            'scheduled_date' => $request->scheduled_date,
            'status' => 'pending',
        ]);
        
        return redirect()->route('dashboard')
            ->with('success', 'Service request created successfully!');
    }
    
    public function show(ServiceRequest $serviceRequest)
    {
        return view('service-requests.show', compact('serviceRequest'));
    }
}
