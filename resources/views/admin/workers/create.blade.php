@extends('admin.layouts.app')

@section('title', 'Add Worker')

@section('content')
<div class="container mt-4">
    <h1>Add Worker</h1>

    <form action="{{ route('admin.workers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Assign Service</label>
            <select name="service_id" class="form-control" required>
                <option value="">Select Service</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Save</button>
        <a href="{{ route('admin.workers.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
