<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f1f3f6;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            background: linear-gradient(to bottom, #343a40, #212529);
            color: #fff;
            padding-top: 20px;
            position: fixed;
            width: 220px;
            transition: all 0.3s;
        }

        .sidebar h4 {
            margin-bottom: 30px;
            font-weight: bold;
        }

        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            margin: 4px 12px;
            transition: all 0.2s;
        }

        .sidebar a i {
            margin-right: 10px;
            font-size: 18px;
        }

        .sidebar a:hover, .sidebar a.active {
            background-color: #495057;
            color: #fff;
            padding-left: 25px;
        }

        /* Main content */
        .main-content {
            margin-left: 220px;
            padding: 20px;
            min-height: 100vh;
        }

        /* Top Navbar inside content */
        .top-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 10px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        .top-nav h2 {
            font-size: 22px;
            font-weight: 600;
            margin: 0;
        }

        .top-nav .user-actions a {
            margin-left: 15px;
            font-weight: 500;
            color: #495057;
        }

        .top-nav .user-actions a:hover {
            text-decoration: underline;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .sidebar {
                width: 60px;
                padding-top: 10px;
            }
            .sidebar a {
                padding: 10px 10px;
                font-size: 0;
                justify-content: center;
            }
            .sidebar a i {
                margin: 0;
                font-size: 20px;
            }
            .main-content {
                margin-left: 60px;
            }
            .top-nav h2 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column">
        <h4 class="text-center">Admin Panel</h4>
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="{{ route('admin.services.index') }}" class="{{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
            <i class="fas fa-concierge-bell"></i> Services
        </a>
        <a href="{{ route('admin.workers.index') }}" class="{{ request()->routeIs('admin.workers.*') ? 'active' : '' }}">
            <i class="fas fa-user-tie"></i> Workers
        </a>
        <a href="/" target="_blank">
            <i class="fas fa-home"></i> Home
        </a>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="top-nav">
            <h2>@yield('title', 'Dashboard')</h2>
            <div class="user-actions">
                <span>Admin</span>
            </div>
        </div>

        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
