@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="mb-4 text-center">{{ ucfirst($category) }} Profiles</h1>
    <div class="row">
        @forelse($profiles as $profile)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $profile->name }}</h5>
                        <p class="card-text">{{ $profile->description ?? 'No description available.' }}</p>
                        <a href="{{ url('/profile/' . $profile->id) }}" class="btn btn-primary">View Profile</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center">No profiles found for this category.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
