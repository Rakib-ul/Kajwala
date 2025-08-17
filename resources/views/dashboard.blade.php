<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KaajWala | User Dashboard</title>
  <meta name="description" content="KaajWala dashboard for managing your home service requests and profile">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    :root {
      --primary: #5a67d8;
      --primary-dark: #4c51bf;
      --secondary: #4a5568;
      --light: #f7fafc;
      --dark: #2d3748;
      --white: #ffffff;
      --gray: #e2e8f0;
      --success: #48bb78;
      --warning: #ed8936;
      --danger: #f56565;
      --info: #4299e1;
      --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
      --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background: var(--light);
      color: var(--secondary);
      line-height: 1.6;
    }
    
    a {
      text-decoration: none;
      color: inherit;
    }
    
    ul {
      list-style: none;
    }
    
    img {
      max-width: 100%;
      height: auto;
      display: block;
    }
    
    .container {
      width: 100%;
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    /* Header Styles */
    .main-header {
      background: var(--white);
      box-shadow: var(--shadow);
      padding: 15px 0;
      position: sticky;
      top: 0;
      z-index: 100;
    }
    
    .header-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .logo {
      height: 40px;
    }
    
    .user-menu {
      display: flex;
      align-items: center;
      gap: 20px;
    }
    
    .user-menu .notification {
      position: relative;
      color: var(--secondary);
      font-size: 1.2rem;
    }
    
    .notification-badge {
      position: absolute;
      top: -5px;
      right: -5px;
      background: var(--danger);
      color: white;
      border-radius: 50%;
      width: 18px;
      height: 18px;
      font-size: 0.7rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .user-avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: var(--gray);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--primary);
      cursor: pointer;
      overflow: hidden;
    }
    
    .user-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    /* Dashboard Layout */
    .dashboard-container {
      display: grid;
      grid-template-columns: 280px 1fr;
      gap: 30px;
      padding: 30px 0;
      min-height: calc(100vh - 70px);
    }
    
    /* Sidebar */
    .sidebar {
      background: var(--white);
      border-radius: 10px;
      box-shadow: var(--shadow);
      padding: 25px 0;
      height: 100%;
      position: sticky;
      top: 90px;
    }
    
    .user-profile {
      text-align: center;
      margin-bottom: 30px;
      padding: 0 25px;
    }
    
    .user-avatar-large {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background: var(--gray);
      margin: 0 auto 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      color: var(--primary);
      overflow: hidden;
    }
    
    .user-name {
      font-weight: 600;
      margin-bottom: 5px;
      font-size: 1.1rem;
    }
    
    .user-email {
      font-size: 0.85rem;
      color: var(--secondary);
      opacity: 0.8;
    }
    
    .nav-menu {
      margin-top: 20px;
    }
    
    .nav-item {
      margin-bottom: 5px;
    }
    
    .nav-link {
      display: flex;
      align-items: center;
      padding: 12px 25px;
      border-radius: 0;
      transition: var(--transition);
      font-weight: 500;
      color: var(--secondary);
      border-left: 3px solid transparent;
    }
    
    .nav-link:hover, .nav-link.active {
      background: rgba(90, 103, 216, 0.05);
      color: var(--primary);
      border-left: 3px solid var(--primary);
    }
    
    .nav-link i {
      margin-right: 12px;
      width: 20px;
      text-align: center;
      font-size: 1.1rem;
    }
    
    /* Main Content */
    .main-content {
      display: grid;
      gap: 30px;
    }
    
    /* Dashboard Cards */
    .dashboard-card {
      background: var(--white);
      border-radius: 10px;
      box-shadow: var(--shadow);
      padding: 25px;
      transition: var(--transition);
    }
    
    .dashboard-card:hover {
      box-shadow: var(--shadow-lg);
    }
    
    .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      padding-bottom: 15px;
      border-bottom: 1px solid var(--gray);
    }
    
    .card-header h2 {
      font-size: 1.3rem;
      color: var(--primary);
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    .card-header .btn {
      padding: 8px 15px;
      font-size: 0.9rem;
    }
    
    /* Stats Cards */
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }
    
    .stat-card {
      background: var(--white);
      border-radius: 8px;
      padding: 20px;
      box-shadow: var(--shadow);
      display: flex;
      align-items: center;
      gap: 15px;
    }
    
    .stat-icon {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3rem;
    }
    
    .stat-icon.primary {
      background: rgba(90, 103, 216, 0.1);
      color: var(--primary);
    }
    
    .stat-icon.success {
      background: rgba(72, 187, 120, 0.1);
      color: var(--success);
    }
    
    .stat-icon.warning {
      background: rgba(237, 137, 54, 0.1);
      color: var(--warning);
    }
    
    .stat-icon.danger {
      background: rgba(245, 101, 101, 0.1);
      color: var(--danger);
    }
    
    .stat-info h3 {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 5px;
    }
    
    .stat-info p {
      font-size: 0.9rem;
      color: var(--secondary);
      opacity: 0.8;
    }
    
    /* Location Section */
    .location-form {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 10px;
      margin-bottom: 20px;
    }
    
    .form-control {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid var(--gray);
      border-radius: 6px;
      font-family: 'Poppins', sans-serif;
      transition: var(--transition);
      background: var(--light);
    }
    
    .form-control:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(90, 103, 216, 0.1);
      background: var(--white);
    }
    
    /* Services Section */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 15px;
      margin-top: 20px;
    }
    
    .service-card {
      border: 1px solid var(--gray);
      border-radius: 8px;
      padding: 20px 15px;
      transition: var(--transition);
      cursor: pointer;
      text-align: center;
      background: var(--light);
    }
    
    .service-card:hover {
      border-color: var(--primary);
      transform: translateY(-3px);
    }
    
    .service-card.selected {
      background: rgba(90, 103, 216, 0.1);
      border-color: var(--primary);
    }
    
    .service-card input {
      display: none;
    }
    
    .service-icon {
      width: 50px;
      height: 50px;
      background: rgba(90, 103, 216, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--primary);
      margin: 0 auto 15px;
      font-size: 1.3rem;
    }
    
    .service-name {
      font-weight: 500;
      margin-bottom: 5px;
    }
    
    .service-price {
      font-size: 0.9rem;
      color: var(--success);
      font-weight: 600;
    }
    
    /* Recent Requests */
    .requests-table {
      width: 100%;
      border-collapse: collapse;
    }
    
    .requests-table th, .requests-table td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid var(--gray);
    }
    
    .requests-table th {
      font-weight: 600;
      color: var(--primary);
      text-transform: uppercase;
      font-size: 0.8rem;
      letter-spacing: 0.5px;
    }
    
    .status {
      display: inline-block;
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 500;
    }
    
    .status-pending {
      background: #fff3cd;
      color: #856404;
    }
    
    .status-completed {
      background: #d4edda;
      color: #155724;
    }
    
    .status-processing {
      background: #cce5ff;
      color: #004085;
    }
    
    .status-cancelled {
      background: #f8d7da;
      color: #721c24;
    }
    
    /* Buttons */
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: var(--primary);
      color: var(--white);
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 500;
      transition: var(--transition);
      gap: 8px;
      font-size: 0.95rem;
    }
    
    .btn:hover {
      background: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: var(--shadow);
    }
    
    .btn-outline {
      background: transparent;
      color: var(--primary);
      border: 1px solid var(--primary);
    }
    
    .btn-outline:hover {
      background: var(--primary);
      color: var(--white);
    }
    
    .btn-sm {
      padding: 6px 12px;
      font-size: 0.85rem;
    }
    
    .btn-danger {
      background: var(--danger);
    }
    
    .btn-danger:hover {
      background: #e53e3e;
    }
    
    .btn-success {
      background: var(--success);
    }
    
    .btn-success:hover {
      background: #38a169;
    }
    
    /* Footer */
    .footer {
      background: var(--dark);
      color: var(--white);
      padding: 40px 0 20px;
      margin-top: 50px;
    }
    
    .footer-content {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin-bottom: 30px;
    }
    
    .footer-column h3 {
      font-size: 1.2rem;
      margin-bottom: 20px;
      color: var(--white);
    }
    
    .footer-column p, .footer-column a {
      opacity: 0.8;
      margin-bottom: 10px;
      display: block;
      transition: var(--transition);
      font-size: 0.95rem;
    }
    
    .footer-column a:hover {
      opacity: 1;
      color: var(--white);
      padding-left: 5px;
    }
    
    .footer-social {
      display: flex;
      gap: 15px;
      margin-top: 15px;
    }
    
    .footer-social a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      transition: var(--transition);
    }
    
    .footer-social a:hover {
      background: var(--primary);
      transform: translateY(-3px);
    }
    
    .copyright {
      text-align: center;
      padding-top: 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      font-size: 0.9rem;
      opacity: 0.7;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 1200px) {
      .container {
        max-width: 100%;
        padding: 0 15px;
      }
    }
    
    @media (max-width: 992px) {
      .dashboard-container {
        grid-template-columns: 1fr;
      }
      
      .sidebar {
        position: static;
        margin-bottom: 30px;
      }
      
      .stats-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    
    @media (max-width: 768px) {
      .header-content {
        flex-direction: column;
        gap: 15px;
      }
      
      .user-menu {
        width: 100%;
        justify-content: space-between;
      }
      
      .location-form {
        grid-template-columns: 1fr;
      }
      
      .stats-grid {
        grid-template-columns: 1fr;
      }
      
      .services-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    
    @media (max-width: 576px) {
      .services-grid {
        grid-template-columns: 1fr;
      }
      
      .requests-table {
        display: block;
        overflow-x: auto;
      }
    }
  </style>
</head>
<body>
  <!-- Header with User Menu -->
  <header class="main-header">
    <div class="container header-content">
      <a href="{{url('/')}}">
        <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala Logo" class="logo">
      </a>
      
      <div class="user-menu">
        <a href="#" class="notification">
          <i class="fas fa-bell"></i>
          <span class="notification-badge">3</span>
        </a>
        <div class="user-avatar">
          <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=5a67d8&color=fff" alt="User Avatar">
        </div>
      </div>
    </div>
  </header>

  <div class="container dashboard-container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="user-profile">
        <div class="user-avatar-large">
          <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=5a67d8&color=fff&size=100" alt="User Avatar">
        </div>
        <h3 class="user-name">{{ auth()->user()->name }}</h3>
        <p class="user-email">{{ auth()->user()->email }}</p>
      </div>
      
      <nav class="nav-menu">
        <ul>
          <li class="nav-item">
            <a href="{{ url('/dashboard') }}" class="nav-link active">
              <i class="fas fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/profile') }}" class="nav-link">
              <i class="fas fa-user"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/service-history') }}" class="nav-link">
              <i class="fas fa-history"></i>
              <span>Service History</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/bookings') }}" class="nav-link">
              <i class="fas fa-calendar-alt"></i>
              <span>Bookings</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/messages') }}" class="nav-link">
              <i class="fas fa-comments"></i>
              <span>Messages</span>
              <span class="notification-badge" style="position: static; margin-left: auto;">2</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/payments') }}" class="nav-link">
              <i class="fas fa-credit-card"></i>
              <span>Payments</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/settings') }}" class="nav-link">
              <i class="fas fa-cog"></i>
              <span>Settings</span>
            </a>
          </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="nav-link" style="background:none; border:none; width:100%; text-align:left;">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
              </button>
            </form>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <!-- Stats Overview -->
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-icon primary">
            <i class="fas fa-tools"></i>
          </div>
          <div class="stat-info">
            <h3>12</h3>
            <p>Total Services</p>
          </div>
        </div>
        
        <div class="stat-card">
          <div class="stat-icon success">
            <i class="fas fa-check-circle"></i>
          </div>
          <div class="stat-info">
            <h3>8</h3>
            <p>Completed</p>
          </div>
        </div>
        
        <div class="stat-card">
          <div class="stat-icon warning">
            <i class="fas fa-spinner"></i>
          </div>
          <div class="stat-info">
            <h3>3</h3>
            <p>In Progress</p>
          </div>
        </div>
        
        <div class="stat-card">
          <div class="stat-icon danger">
            <i class="fas fa-times-circle"></i>
          </div>
          <div class="stat-info">
            <h3>1</h3>
            <p>Cancelled</p>
          </div>
        </div>
      </div>
      
      <!-- Request Services Card -->
      <div class="dashboard-card">
        <div class="card-header">
          <h2><i class="fas fa-plus-circle"></i> Request New Service</h2>
        </div>
        <form id="location-form" class="location-form">
          <input type="text" id="location" class="form-control" placeholder="Enter your area (e.g., Mirpur 1)" required>
          <button type="submit" class="btn">
            <i class="fas fa-search"></i> Find Services
          </button>
        </form>
        
        <div id="services-section" style="display: none; margin-top: 30px;">
          <h3 style="margin-bottom: 20px;">Available Services in <span id="user-location" style="color: var(--primary);"></span></h3>
          <form id="services-form" action="{{ url('/select-workers') }}" method="GET">
            <input type="text" id="service-search" class="form-control" placeholder="Search services..." style="margin-bottom: 20px;">
            
            <div class="services-grid">
              <label class="service-card">
                <input type="checkbox" name="services[]" value="Electrician">
                <div class="service-icon">
                  <i class="fas fa-bolt"></i>
                </div>
                <div class="service-name">Electrician</div>
                <div class="service-price">৳500-৳1500</div>
              </label>
              
              <label class="service-card">
                <input type="checkbox" name="services[]" value="Plumber">
                <div class="service-icon">
                  <i class="fas fa-faucet"></i>
                </div>
                <div class="service-name">Plumber</div>
                <div class="service-price">৳400-৳1200</div>
              </label>
              
              <label class="service-card">
                <input type="checkbox" name="services[]" value="Cleaner">
                <div class="service-icon">
                  <i class="fas fa-broom"></i>
                </div>
                <div class="service-name">Cleaner</div>
                <div class="service-price">৳300-৳800</div>
              </label>
              
              <label class="service-card">
                <input type="checkbox" name="services[]" value="Painter">
                <div class="service-icon">
                  <i class="fas fa-paint-roller"></i>
                </div>
                <div class="service-name">Painter</div>
                <div class="service-price">৳600-৳2000</div>
              </label>
              
              <label class="service-card">
                <input type="checkbox" name="services[]" value="Carpenter">
                <div class="service-icon">
                  <i class="fas fa-hammer"></i>
                </div>
                <div class="service-name">Carpenter</div>
                <div class="service-price">৳500-৳1800</div>
              </label>
              
              <label class="service-card">
                <input type="checkbox" name="services[]" value="AC Technician">
                <div class="service-icon">
                  <i class="fas fa-snowflake"></i>
                </div>
                <div class="service-name">AC Technician</div>
                <div class="service-price">৳800-৳2500</div>
              </label>
            </div>
            
            <button type="submit" class="btn" style="margin-top: 20px;">
              <i class="fas fa-arrow-right"></i> Continue to Workers
            </button>
          </form>
        </div>
      </div>
      
      <!-- Recent Requests Card -->
      <div class="dashboard-card">
        <div class="card-header">
          <h2><i class="fas fa-clock"></i> Recent Service Requests</h2>
          <a href="{{ url('/service-history') }}" class="btn btn-outline btn-sm">
            <i class="fas fa-list"></i> View All
          </a>
        </div>
        
        <div class="table-responsive">
          <table class="requests-table">
            <thead>
              <tr>
                <th>Service</th>
                <th>Date</th>
                <th>Worker</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Electrician</td>
                <td>15 Jun 2023</td>
                <td>Md. Rahman</td>
                <td>৳1200</td>
                <td><span class="status status-completed">Completed</span></td>
                <td>
                  <a href="{{ url('/request-details/1') }}" class="btn btn-outline btn-sm">
                    <i class="fas fa-eye"></i> View
                  </a>
                </td>
              </tr>
              <tr>
                <td>Plumber</td>
                <td>10 Jun 2023</td>
                <td>Abdul Karim</td>
                <td>৳800</td>
                <td><span class="status status-processing">In Progress</span></td>
                <td>
                  <a href="{{ url('/request-details/2') }}" class="btn btn-outline btn-sm">
                    <i class="fas fa-eye"></i> View
                  </a>
                </td>
              </tr>
              <tr>
                <td>Cleaner</td>
                <td>05 Jun 2023</td>
                <td>Fatima Begum</td>
                <td>৳500</td>
                <td><span class="status status-pending">Pending</span></td>
                <td>
                  <a href="{{ url('/request-details/3') }}" class="btn btn-outline btn-sm">
                    <i class="fas fa-eye"></i> View
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-column">
          <h3>KaajWala</h3>
          <p>Your trusted partner for all home and office service needs. We connect you with skilled professionals for any task.</p>
          <div class="footer-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        
        <div class="footer-column">
          <h3>Quick Links</h3>
          <a href="{{ url('/') }}">Home</a>
          <a href="{{ url('/about') }}">About Us</a>
          <a href="{{ url('/services') }}">Services</a>
          <a href="{{ url('/contact') }}">Contact</a>
          <a href="{{ url('/faq') }}">FAQ</a>
        </div>
        
        <div class="footer-column">
          <h3>Contact Info</h3>
          <p><i class="fas fa-phone-alt"></i> +880 1518996430</p>
          <p><i class="fas fa-envelope"></i> kaajwala247@gmail.com</p>
          <p><i class="fas fa-map-marker-alt"></i> Road no-5, Block A, Mirpur 1, Dhaka, Bangladesh</p>
        </div>
        
        <div class="footer-column">
          <h3>Newsletter</h3>
          <p>Subscribe to get updates on new services and offers.</p>
          <form class="newsletter-form">
            <input type="email" placeholder="Your Email" class="form-control" style="margin-bottom: 10px;">
            <button type="submit" class="btn btn-sm">Subscribe</button>
          </form>
        </div>
      </div>
      
      <div class="copyright">
        <p>&copy; 2023 KaajWala. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Location form submission
      const locationForm = document.getElementById('location-form');
      const locationInput = document.getElementById('location');
      const servicesSection = document.getElementById('services-section');
      const locationText = document.getElementById('user-location');
      const servicesForm = document.getElementById('services-form');
      
      if (locationForm) {
        locationForm.addEventListener('submit', function(e) {
          e.preventDefault();
          const location = locationInput.value.trim();
          if (location !== '') {
            locationText.textContent = location;
            servicesSection.style.display = 'block';
            
            // Scroll to services section
            servicesSection.scrollIntoView({ behavior: 'smooth' });
          } else {
            alert('Please enter your location to find available services.');
          }
        });
      }
      
      // Service form validation
      if (servicesForm) {
        servicesForm.addEventListener('submit', function(e) {
          const selectedServices = [...document.querySelectorAll('input[name="services[]"]:checked')];
          if (selectedServices.length === 0) {
            e.preventDefault();
            alert('Please select at least one service to continue.');
          }
        });
      }
      
      // Service search functionality
      const searchInput = document.getElementById('service-search');
      if (searchInput) {
        searchInput.addEventListener('input', function() {
          const query = this.value.toLowerCase();
          const serviceCards = document.querySelectorAll('.service-card');
          
          serviceCards.forEach(card => {
            const serviceName = card.querySelector('.service-name').textContent.toLowerCase();
            card.style.display = serviceName.includes(query) ? 'block' : 'none';
          });
        });
      }
      
      // Service card selection
      const serviceCards = document.querySelectorAll('.service-card');
      serviceCards.forEach(card => {
        card.addEventListener('click', function() {
          const checkbox = this.querySelector('input');
          checkbox.checked = !checkbox.checked;
          this.classList.toggle('selected', checkbox.checked);
        });
      });
      
      // Set active nav link based on current page
      const currentPage = window.location.pathname;
      const navLinks = document.querySelectorAll('.nav-link');
      navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
          link.classList.add('active');
        } else {
          link.classList.remove('active');
        }
      });
    });
  </script>
</body>
</html>