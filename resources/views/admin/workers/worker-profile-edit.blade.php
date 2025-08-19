@extends('admin.layouts.app')

@section('title', 'Edit Worker')

@section('content')
<div class="container mt-4">
    <h1>Edit Worker Profile</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.workers.update', $worker->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $worker->name) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $worker->phone) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Skill</label>
            <input type="text" name="skill" class="form-control" value="{{ old('skill', $worker->skill) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Profile Image</label>
            <input type="file" name="profile_image" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Verified</label>
            <select name="is_verified" class="form-select">
                <option value="0" {{ $worker->is_verified ? '' : 'selected' }}>No</option>
                <option value="1" {{ $worker->is_verified ? 'selected' : '' }}>Yes</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Services</label>
            <select name="services[]" class="form-select" multiple>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ $worker->services->contains($service->id) ? 'selected' : '' }}>
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update Worker</button>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
    </form>
</div>
@endsection
