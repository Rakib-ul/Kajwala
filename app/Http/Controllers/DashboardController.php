<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Sample data - replace with your actual data logic
        $stats = [
            'total_services' => 12,
            'completed' => 8,
            'in_progress' => 3,
            'cancelled' => 1
        ];

        $recentRequests = [
            [
                'service' => 'Electrician',
                'date' => now()->subDays(2)->format('d M Y'),
                'worker' => 'Md. Rahman',
                'amount' => '৳1200',
                'status' => 'Completed'
            ],
            // Add more sample data as needed
        ];

        return view('dashboard', compact('user', 'stats', 'recentRequests'));
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
            'services' => 'required|array',
            'services.*' => 'string'
        ]);

        // Process the request here
        // Typically you would save to database, etc.

        return redirect()->route('select.workers')->with([
            'location' => $validated['location'],
            'services' => $validated['services']
        ]);
    }
}