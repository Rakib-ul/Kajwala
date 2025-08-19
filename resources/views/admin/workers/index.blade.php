@extends('admin.layouts.app')

@section('title', 'Manage Workers')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Workers</h1>
    <a href="{{ route('admin.workers.create') }}" class="btn btn-primary mb-3">➕ Add Worker</a>

    @if($workers->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Service</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($workers as $worker)
                <tr>
                    <td>{{ $worker->id }}</td>
                    <td>{{ $worker->name }}</td>
                    <td>{{ $worker->service->name ?? 'N/A' }}</td>
                    <td>{{ $worker->email }}</td>
                    <td>{{ $worker->phone }}</td>
                    <td>
                        <a href="{{ route('admin.workers.edit', $worker->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.workers.destroy', $worker->id) }}" method="POST" style="display:inline-block">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No workers found.</p>
    @endif
</div>
@endsection
