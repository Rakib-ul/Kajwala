{{-- File: resources/views/user/profile.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile | KaajWala</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #2563eb;
      --primary-dark: #1d4ed8;
      --secondary: #059669;
      --dark: #111827;
      --light: #f9fafb;
      --gray: #6b7280;
      --light-gray: #f3f4f6;
      --border-radius: 8px;
      --shadow-sm: 0 1px 3px rgba(0,0,0,0.1);
      --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
      --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
      --transition: all 0.2s ease-in-out;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light-gray);
      color: var(--dark);
      margin: 0;
      padding: 0;
      line-height: 1.5;
    }
    
    /* Navigation Styles */
    .navbar {
      background: white;
      box-shadow: var(--shadow-sm);
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    
    .nav-container {
      max-width: 1024px;
      margin: 0 auto;
      padding: 0 1.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 64px;
    }
    
    .logo {
      font-weight: 700;
      font-size: 1.25rem;
      color: var(--primary);
      text-decoration: none;
      display: flex;
      align-items: center;
    }
    
    .logo i {
      margin-right: 8px;
    }
    
    .nav-links {
      display: flex;
      align-items: center;
      gap: 1.5rem;
    }
    
    .nav-links a {
      color: var(--dark);
      text-decoration: none;
      font-weight: 500;
      font-size: 0.9375rem;
      transition: var(--transition);
      display: flex;
      align-items: center;
      gap: 6px;
    }
    
    .nav-links a:hover {
      color: var(--primary);
    }
    
    .nav-links a i {
      font-size: 0.875rem;
    }
    
    .user-menu {
      display: flex;
      align-items: center;
      gap: 1rem;
    }
    
    .user-avatar {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid var(--light-gray);
    }
    
    .mobile-menu-btn {
      display: none;
      background: none;
      border: none;
      font-size: 1.25rem;
      color: var(--dark);
      cursor: pointer;
    }
    
    .container {
      max-width: 1024px;
      margin: 0 auto;
      padding: 0 1.5rem;
    }
    
    .main-header {
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: white;
      padding: 5rem 0 3rem;
      position: relative;
      overflow: hidden;
      margin-top: -1px; /* Fix for sticky navbar */
    }
    
    /* Rest of your existing styles... */
    .profile-header-content {
      position: relative;
      z-index: 2;
      text-align: center;
    }
    
    .profile-pic-container {
      position: relative;
      display: inline-block;
      margin-bottom: 1.25rem;
    }
    
    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid rgba(255,255,255,0.2);
      box-shadow: var(--shadow-lg);
      transition: var(--transition);
    }
    
    .edit-profile-pic {
      position: absolute;
      bottom: 0;
      right: 0;
      background: var(--secondary);
      width: 36px;
      height: 36px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      box-shadow: var(--shadow-sm);
      cursor: pointer;
      transition: var(--transition);
    }
    
    .edit-profile-pic:hover {
      transform: scale(1.1);
    }
    
    .profile-section, .form-container {
      background: white;
      padding: 2rem;
      margin: -2rem auto 2rem;
      border-radius: var(--border-radius);
      box-shadow: var(--shadow-md);
      position: relative;
      z-index: 3;
    }
    
    .section-title {
      display: flex;
      align-items: center;
      margin-bottom: 1.5rem;
      padding-bottom: 0.75rem;
      border-bottom: 1px solid var(--light-gray);
      color: var(--dark);
    }
    
    .section-title i {
      margin-right: 0.75rem;
      color: var(--primary);
      font-size: 1.25rem;
    }
    
    .profile-info {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }
    
    .info-label {
      font-weight: 500;
      color: var(--gray);
      margin-bottom: 0.25rem;
      font-size: 0.875rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    
    .info-value {
      font-weight: 600;
      font-size: 1rem;
    }
    
    .form-group {
      margin-bottom: 1.25rem;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 500;
      color: var(--dark);
      font-size: 0.875rem;
    }
    
    .form-control {
      width: 100%;
      padding: 0.75rem 1rem;
      border: 1px solid #e5e7eb;
      border-radius: var(--border-radius);
      background-color: white;
      font-family: inherit;
      font-size: 0.9375rem;
      transition: var(--transition);
    }
    
    .form-control:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }
    
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 0.75rem 1.5rem;
      border-radius: var(--border-radius);
      font-weight: 600;
      cursor: pointer;
      transition: var(--transition);
      border: none;
      font-size: 0.9375rem;
    }
    
    .btn i {
      margin-right: 0.5rem;
    }
    
    .btn-primary {
      background: var(--primary);
      color: white;
    }
    
    .btn-primary:hover {
      background: var(--primary-dark);
      transform: translateY(-1px);
      box-shadow: var(--shadow-md);
    }
    
    .alert {
      padding: 0.75rem 1rem;
      border-radius: var(--border-radius);
      margin-bottom: 1.5rem;
      font-size: 0.875rem;
    }
    
    .alert-success {
      background: #ecfdf5;
      color: #065f46;
      border: 1px solid #a7f3d0;
    }
    
    .alert-danger {
      background: #fef2f2;
      color: #b91c1c;
      border: 1px solid #fecaca;
    }
    
    .alert ul {
      margin: 0;
      padding-left: 1.25rem;
    }
    
    .alert li {
      margin-bottom: 0.25rem;
    }
    
    h1 {
      font-size: 1.75rem;
      margin-bottom: 0.5rem;
    }
    
    h2 {
      font-size: 1.25rem;
      margin: 0;
    }
    
    @media (max-width: 768px) {
      .container {
        padding: 0 1rem;
      }
      
      .nav-container {
        padding: 0 1rem;
      }
      
      .nav-links {
        display: none;
      }
      
      .mobile-menu-btn {
        display: block;
      }
      
      .profile-section, .form-container {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar">
    <div class="nav-container">
      <a href="/" class="logo">
        <i class="fas fa-briefcase"></i>
        <span>KaajWala</span>
      </a>
      
      <div class="nav-links">
        <a href="/dashboard"><i class="fas fa-home"></i> Dashboard</a>
        <a href="/jobs"><i class="fas fa-search"></i> Find Jobs</a>
        <a href="/messages"><i class="fas fa-envelope"></i> Messages</a>
        <a href="/notifications"><i class="fas fa-bell"></i> Notifications</a>
        
        <div class="user-menu">
          <a href="/profile" class="active">
            <img src="{{ asset($user->profile_picture ?? 'images/default.png') }}" alt="Profile" class="user-avatar">
            <span>Profile</span>
          </a>
        </div>
      </div>
      
      <button class="mobile-menu-btn">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </nav>

  <header class="main-header">
    <div class="container">
      <div class="profile-header-content">
        <div class="profile-pic-container">
          <img src="{{ asset($user->profile_picture ?? 'images/default.png') }}" alt="Profile Picture" class="profile-pic" id="profilePreview">
          <div class="edit-profile-pic" title="Change Photo" onclick="document.getElementById('profile_picture').click();">
            <i class="fas fa-camera"></i>
          </div>
        </div>
        <h1>{{ $user->name }}</h1>
        <p>Welcome back to your KaajWala profile</p>
      </div>
    </div>
  </header>

  <div class="container">
    {{-- Flash Messages --}}
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {{-- Profile Info --}}
    <section class="profile-section">
      <div class="section-title">
        <i class="fas fa-user-circle"></i>
        <h2>Profile Information</h2>
      </div>
      <div class="profile-info">
        <div>
          <div class="info-label">Full Name</div>
          <div class="info-value">{{ $user->name }}</div>
        </div>
        <div>
          <div class="info-label">Email Address</div>
          <div class="info-value">{{ $user->email }}</div>
        </div>
        <div>
          <div class="info-label">Phone Number</div>
          <div class="info-value">{{ $user->phone ?? 'Not set' }}</div>
        </div>
        <div>
          <div class="info-label">Member Since</div>
          <div class="info-value">{{ $user->created_at->format('F Y') }}</div>
        </div>
      </div>
    </section>

    {{-- Update Form --}}
    <section class="form-container">
      <div class="section-title">
        <i class="fas fa-edit"></i>
        <h2>Update Profile</h2>
      </div>
      <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" class="form-control" value="{{ $user->phone }}">
        </div>

        <div class="form-group">
          <label for="password">New Password (leave blank to keep current)</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="••••••••">
        </div>

        <div class="form-group">
          <label for="profile_picture">Profile Picture</label>
          <input type="file" id="profile_picture" name="profile_picture" class="form-control" accept="image/*" onchange="previewImage(event)">
        </div>

        <button type="submit" class="btn btn-primary">
          <i class="fas fa-save"></i> Save Changes
        </button>
      </form>
    </section>
  </div>

  <script>
    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function(){
        document.getElementById('profilePreview').src = reader.result;
        // Also update the avatar in the navigation if it's the same image
        const navAvatar = document.querySelector('.user-avatar');
        if (navAvatar) {
          navAvatar.src = reader.result;
        }
      }
      reader.readAsDataURL(event.target.files[0]);
    }

    // Mobile menu toggle functionality
    document.addEventListener('DOMContentLoaded', function() {
      const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
      const navLinks = document.querySelector('.nav-links');
      
      if (mobileMenuBtn && navLinks) {
        mobileMenuBtn.addEventListener('click', function() {
          navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
        });
      }
    });
  </script>
</body>
</html>