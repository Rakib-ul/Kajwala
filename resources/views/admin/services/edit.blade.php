@extends('admin.layouts.app')

@section('content')
<h3>Create Service</h3>
<form action="{{ route('admin.services.store') }}" method="POST" class="mt-3">
  @csrf
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input name="name" class="form-control" required value="{{ old('name') }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Category</label>
    <input name="category" class="form-control" value="{{ old('category') }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Price</label>
    <input name="price" type="number" step="0.01" class="form-control" required value="{{ old('price',0) }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
  </div>
  <div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" {{ old('is_active') ? 'checked' : '' }}>
    <label class="form-check-label" for="is_active">Active</label>
  </div>
  <button class="btn btn-primary">Save</button>
  <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
