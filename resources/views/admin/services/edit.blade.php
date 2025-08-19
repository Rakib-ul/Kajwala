@extends('admin.layouts.app')

@section('title', 'Edit Service')

@section('content')
<div class="container mt-4">
    <h1>Edit Service</h1>

    <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $service->name }}" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required>{{ $service->description }}</textarea>
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
