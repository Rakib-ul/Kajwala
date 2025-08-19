@extends('admin.layouts.app')

@section('title', 'Add Service')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Add Service</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.services.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Service Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" name="category" class="form-control" value="{{ old('category') }}" placeholder="e.g., Plumbing, Electrical">
        </div>

        <div class="mb-3">
            <label class="form-label">Price <span class="text-danger">*</span></label>
            <input type="number" name="price" step="0.01" class="form-control" value="{{ old('price', 0) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_active" class="form-check-input" id="is_active" value="1" checked>
            <label class="form-check-label" for="is_active">Active</label>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
