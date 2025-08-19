@extends('admin.layouts.app')

@section('title', 'Add Worker')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Add Worker</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.workers.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Optional">
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="Optional">
        </div>

        <div class="mb-3">
            <label class="form-label">Skill <span class="text-muted">(e.g., Electrician, Plumber)</span></label>
            <input type="text" name="skill" class="form-control" value="{{ old('skill') }}">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_verified" class="form-check-input" id="is_verified" value="1">
            <label class="form-check-label" for="is_verified">Verified</label>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('admin.workers.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
a