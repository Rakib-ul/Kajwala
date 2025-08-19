@extends('admin.layouts.app')

@section('title', 'Edit Worker')

@section('content')
<div class="container mt-4">
    <h1>Edit Worker</h1>

    <form action="{{ route('admin.workers.update', $worker->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $worker->name }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $worker->email }}" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $worker->phone }}" required>
        </div>
        <div class="mb-3">
            <label>Assign Service</label>
            <select name="service_id" class="form-control" required>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ $worker->service_id == $service->id ? 'selected' : '' }}>
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.workers.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
