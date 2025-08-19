<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Worker;
use App\Models\ServiceRequest;
use App\Models\User;

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
}
