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
      --primary: #f96d00;
      --primary-dark: #e05e00;
      --secondary: #393e46;
      --light: #f9f9f9;
      --dark: #222831;
      --white: #ffffff;
      --gray: #eeeeee;
      --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      --transition: all 0.3s ease;
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
    }
    
    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    /* Header Styles */
    .main-header {
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: var(--white);
      padding: 20px 0;
      position: relative;
      overflow: hidden;
    }
    
    .header-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
      z-index: 2;
    }
    
    .logo {
      height: 50px;
      margin-bottom: 15px;
    }
    
    .main-header h1 {
      font-size: 1.8rem;
      margin-bottom: 15px;
      font-weight: 700;
    }
    
    /* Main Navigation */
    .main-nav {
      width: 100%;
      margin-top: 15px;
    }
    
    .nav-links {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 5px;
    }
    
    .nav-links a {
      color: var(--white);
      font-weight: 500;
      padding: 8px 15px;
      border-radius: 30px;
      transition: var(--transition);
      font-size: 0.95rem;
    }
    
    .nav-links a:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: translateY(-2px);
    }
    
    .nav-links a.active {
      background: var(--white);
      color: var(--primary);
    }
    
    /* Dashboard Layout */
    .dashboard-container {
      display: grid;
      grid-template-columns: 250px 1fr;
      gap: 30px;
      padding: 30px 0;
    }
    
    /* Sidebar */
    .sidebar {
      background: var(--white);
      border-radius: 10px;
      box-shadow: var(--shadow);
      padding: 20px;
      height: fit-content;
    }
    
    .user-profile {
      text-align: center;
      margin-bottom: 30px;
    }
    
    .user-avatar {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background: var(--gray);
      margin: 0 auto 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      color: var(--primary);
    }
    
    .user-name {
      font-weight: 600;
      margin-bottom: 5px;
    }
    
    .user-email {
      font-size: 0.9rem;
      opacity: 0.8;
    }
    
    .nav-menu {
      margin-top: 20px;
    }
    
    .nav-item {
      margin-bottom: 10px;
    }
    
    .nav-link {
      display: flex;
      align-items: center;
      padding: 10px;
      border-radius: 6px;
      transition: var(--transition);
    }
    
    .nav-link:hover, .nav-link.active {
      background: rgba(249, 109, 0, 0.1);
      color: var(--primary);
    }
    
    .nav-link i {
      margin-right: 10px;
      width: 20px;
      text-align: center;
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
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .card-header h2 {
      font-size: 1.4rem;
      color: var(--primary);
    }
    
    .card-header .btn {
      padding: 8px 15px;
      font-size: 0.9rem;
    }
    
    /* Location Section */
    .location-form {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 10px;
    }
    
    .form-control {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-family: 'Poppins', sans-serif;
      transition: var(--transition);
    }
    
    .form-control:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(249, 109, 0, 0.1);
    }
    
    /* Services Section */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 15px;
      margin-top: 20px;
    }
    
    .service-card {
      border: 1px solid var(--gray);
      border-radius: 8px;
      padding: 15px;
      transition: var(--transition);
      cursor: pointer;
    }
    
    .service-card:hover {
      border-color: var(--primary);
    }
    
    .service-card.selected {
      background: rgba(249, 109, 0, 0.1);
      border-color: var(--primary);
    }
    
    .service-card input {
      display: none;
    }
    
    .service-icon {
      width: 40px;
      height: 40px;
      background: rgba(249, 109, 0, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--primary);
      margin-bottom: 10px;
    }
    
    .service-name {
      font-weight: 500;
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
    }
    
    .status {
      display: inline-block;
      padding: 4px 10px;
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
    
    /* Buttons */
    .btn {
      display: inline-block;
      background: var(--primary);
      color: var(--white);
      border: none;
      padding: 12px 25px;
      border-radius: 30px;
      cursor: pointer;
      font-weight: 500;
      transition: var(--transition);
      text-align: center;
    }
    
    .btn:hover {
      background: var(--primary-dark);
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(249, 109, 0, 0.3);
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
    
    .btn-danger {
      background: #dc3545;
    }
    
    .btn-danger:hover {
      background: #c82333;
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
      font-size: 1.3rem;
      margin-bottom: 20px;
      color: var(--primary);
    }
    
    .footer-column p, .footer-column a {
      opacity: 0.8;
      margin-bottom: 10px;
      display: block;
      transition: var(--transition);
    }
    
    .footer-column a:hover {
      opacity: 1;
      color: var(--primary);
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
    @media (max-width: 992px) {
      .dashboard-container {
        grid-template-columns: 1fr;
      }
      
      .services-grid {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
      }
    }
    
    @media (max-width: 768px) {
      .main-header h1 {
        font-size: 1.6rem;
      }
      
      .location-form {
        grid-template-columns: 1fr;
      }
      
      .requests-table {
        display: block;
        overflow-x: auto;
      }
      
      .nav-links {
        gap: 3px;
      }
      
      .nav-links a {
        padding: 6px 12px;
        font-size: 0.85rem;
      }
    }
    
    @media (max-width: 576px) {
      .main-header h1 {
        font-size: 1.5rem;
      }
      
      .services-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      
      .nav-links {
        flex-direction: column;
        align-items: center;
        gap: 5px;
      }
      
      .nav-links a {
        width: 100%;
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <header class="main-header">
    <div class="container header-content">
      <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala Logo" class="logo">
      <h1>Welcome to Your Dashboard</h1>
      
      <!-- Main Navigation Bar -->
      <nav class="main-nav">
        <ul class="nav-links">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/about') }}">About</a></li>
          <li><a href="{{ url('/services') }}">Services</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
          <li><a href="{{ url('/portfolio') }}" class="active">Portfolio</a></li>
          <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="container dashboard-container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="user-profile">
        <div class="user-avatar">
          <i class="fas fa-user"></i>
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
      <!-- Request Services Card -->
      <div class="dashboard-card">
        <div class="card-header">
          <h2><i class="fas fa-map-marker-alt"></i> Request Services</h2>
        </div>
        <form id="location-form" class="location-form">
          <input type="text" id="location" class="form-control" placeholder="Enter your area (e.g., Mirpur 1)" required>
          <button type="submit" class="btn">Find Services</button>
        </form>
        
        <div id="services-section" style="display: none; margin-top: 30px;">
          <h3>Available Services in <span id="user-location"></span></h3>
          <form id="services-form" action="{{ url('/select-workers') }}" method="GET">
            <input type="text" id="service-search" class="form-control" placeholder="Search services..." style="margin-bottom: 20px;">
            
            <div class="services-grid">
              <label class="service-card">
                <input type="checkbox" name="services[]" value="Electrician">
                <div class="service-icon">
                  <i class="fas fa-bolt"></i>
                </div>
                <div class="service-name">Electrician</div>
              </label>
              
              <label class="service-card">
                <input type="checkbox" name="services[]" value="Plumber">
                <div class="service-icon">
                  <i class="fas fa-faucet"></i>
                </div>
                <div class="service-name">Plumber</div>
              </label>
              
              <label class="service-card">
                <input type="checkbox" name="services[]" value="Cleaner">
                <div class="service-icon">
                  <i class="fas fa-broom"></i>
                </div>
                <div class="service-name">Cleaner</div>
              </label>
              
              <label class="service-card">
                <input type="checkbox" name="services[]" value="Painter">
                <div class="service-icon">
                  <i class="fas fa-paint-roller"></i>
                </div>
                <div class="service-name">Painter</div>
              </label>
              
              <label class="service-card">
                <input type="checkbox" name="services[]" value="Carpenter">
                <div class="service-icon">
                  <i class="fas fa-hammer"></i>
                </div>
                <div class="service-name">Carpenter</div>
              </label>
              
              <label class="service-card">
                <input type="checkbox" name="services[]" value="AC Technician">
                <div class="service-icon">
                  <i class="fas fa-snowflake"></i>
                </div>
                <div class="service-name">AC Technician</div>
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
          <a href="{{ url('/service-history') }}" class="btn btn-outline">View All</a>
        </div>
        
        <div class="table-responsive">
          <table class="requests-table">
            <thead>
              <tr>
                <th>Service</th>
                <th>Date</th>
                <th>Worker</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Electrician</td>
                <td>15 Jun 2023</td>
                <td>Md. Rahman</td>
                <td><span class="status status-completed">Completed</span></td>
                <td><a href="{{ url('/request-details/1') }}" class="btn btn-outline" style="padding: 5px 10px; font-size: 0.8rem;">Details</a></td>
              </tr>
              <tr>
                <td>Plumber</td>
                <td>10 Jun 2023</td>
                <td>Abdul Karim</td>
                <td><span class="status status-processing">In Progress</span></td>
                <td><a href="{{ url('/request-details/2') }}" class="btn btn-outline" style="padding: 5px 10px; font-size: 0.8rem;">Details</a></td>
              </tr>
              <tr>
                <td>Cleaner</td>
                <td>05 Jun 2023</td>
                <td>Fatima Begum</td>
                <td><span class="status status-pending">Pending</span></td>
                <td><a href="{{ url('/request-details/3') }}" class="btn btn-outline" style="padding: 5px 10px; font-size: 0.8rem;">Details</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <!-- Quick Actions Card -->
      <div class="dashboard-card">
        <div class="card-header">
          <h2><i class="fas fa-bolt"></i> Quick Actions</h2>
        </div>
        
        <div class="quick-actions" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 15px;">
          <a href="{{ url('/services') }}" class="btn btn-outline">
            <i class="fas fa-plus"></i> New Request
          </a>
          <a href="{{ url('/bookings') }}" class="btn btn-outline">
            <i class="fas fa-calendar"></i> Schedule
          </a>
          <a href="{{ url('/profile') }}" class="btn btn-outline">
            <i class="fas fa-user-edit"></i> Edit Profile
          </a>
          <a href="{{ url('/contact') }}" class="btn btn-outline">
            <i class="fas fa-question-circle"></i> Help
          </a>
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
          <a href="{{ url('/portfolio') }}">Portfolio</a>
        </div>
        
        <div class="footer-column">
          <h3>Contact Info</h3>
          <p><i class="fas fa-phone-alt"></i> +880 1518996430</p>
          <p><i class="fas fa-envelope"></i> kaajwala247@gmail.com</p>
          <p><i class="fas fa-map-marker-alt"></i> Road no-5, Block A, Mirpur 1, Dhaka, Bangladesh</p>
        </div>
        
        <div class="footer-column">
          <h3>Working Hours</h3>
          <p>Saturday to Saturday</p>
          <p>9:00 AM - 9:00 PM</p>
          <p>Emergency services available 24/7</p>
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
      const navLinks = document.querySelectorAll('.nav-links a');
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