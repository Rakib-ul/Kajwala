@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Admin Dashboard</h1>

    {{-- Dashboard Stats --}}
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Services</h5>
                    <p class="card-text h4">{{ $servicesCount }}</p>
                    <a href="{{ route('admin.services.index') }}" class="btn btn-light btn-sm">Manage Services</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-success shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Workers</h5>
                    <p class="card-text h4">{{ $workersCount }}</p>
                    <a href="{{ route('admin.workers.index') }}" class="btn btn-light btn-sm">Manage Workers</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div class="card shadow-sm">
        <div class="card-header">Quick Actions</div>
        <div class="card-body">
            <a href="{{ route('admin.services.create') }}" class="btn btn-primary">➕ Add Service</a>
            <a href="{{ route('admin.workers.create') }}" class="btn btn-success">➕ Add Worker</a>
        </div>
    </div>
</div>
@endsection
