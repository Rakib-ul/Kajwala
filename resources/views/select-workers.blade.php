{{-- resources/views/select-workers.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Available Workers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- FontAwesome for icons --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar-brand {
            font-weight: bold;
            color: #0d6efd !important;
        }
        .card {
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 20px rgba(0,0,0,0.1);
        }
        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #0d6efd;
        }
        .btn-custom {
            border-radius: 20px;
            font-size: 0.9rem;
        }
        .header-title {
            font-weight: 700;
            color: #333;
        }
    </style>
</head>
<body>

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><i class="fas fa-tools"></i> KaajWala</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}"><i class="fas fa-home"></i> Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user"></i> Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-bell"></i> Notifications</a></li>
                <li class="nav-item"><a class="nav-link text-danger" href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

{{-- MAIN CONTENT --}}
<div class="container py-5">
    <h2 class="header-title mb-4">
        <i class="fas fa-users"></i> Available Workers 
        @if(!empty($location)) in <span class="text-primary">"{{ $location }}"</span> @endif
    </h2>

    @if($workers->isEmpty())
        <div class="alert alert-warning shadow-sm">⚠️ No matching workers found.</div>
    @else
        <div class="row">
            @foreach($workers as $w)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $w->name }}</h5>
                            <p class="text-muted mb-2"><i class="fas fa-tools"></i> {{ $w->skill ?? '—' }}</p>
                            <p class="mb-1"><strong><i class="fas fa-phone"></i></strong> {{ $w->phone ?? 'N/A' }}</p>
                            <p class="mb-3"><strong><i class="fas fa-map-marker-alt"></i></strong> {{ $w->location ?? 'N/A' }}</p>
                            
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-outline-primary btn-sm btn-custom">
                                    <i class="fas fa-id-card"></i> View Profile
                                </a>
                                <a href="#" class="btn btn-success btn-sm btn-custom">
                                    <i class="fas fa-check"></i> Select Worker
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">
        <i class="fas fa-arrow-left"></i> Back
    </a>
</div>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
