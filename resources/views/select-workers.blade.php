<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select Workers | KaajWala</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #f96d00;
      --primary-dark: #e06700;
      --secondary-color: #393e46;
      --light-color: #f4f4f4;
      --dark-color: #222831;
      --white: #ffffff;
      --gray: #eeeeee;
      --shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background: var(--light-color);
      color: var(--dark-color);
      line-height: 1.6;
    }
    
    a {
      text-decoration: none;
      color: inherit;
    }
    
    /* Header & Navigation */
    header {
      background: var(--white);
      box-shadow: var(--shadow);
      position: sticky;
      top: 0;
      z-index: 100;
    }
    
    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 0;
    }
    
    .logo {
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--primary-color);
    }
    
    .nav-links {
      display: flex;
      list-style: none;
    }
    
    .nav-links li {
      margin-left: 30px;
    }
    
    .nav-links a {
      font-weight: 500;
      transition: color 0.3s;
      position: relative;
    }
    
    .nav-links a:hover,
    .nav-links a.active {
      color: var(--primary-color);
    }
    
    .nav-links a.active:after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 100%;
      height: 2px;
      background: var(--primary-color);
    }
    
    /* Hero Section */
    .hero {
      background: var(--primary-color);
      color: var(--white);
      padding: 60px 0;
      text-align: center;
    }
    
    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: 15px;
    }
    
    .hero p {
      font-size: 1.1rem;
      opacity: 0.9;
    }
    
    /* Main Content */
    .main {
      padding: 40px 0;
    }
    
    .page-title {
      text-align: center;
      margin-bottom: 40px;
    }
    
    .page-title h2 {
      font-size: 2rem;
      color: var(--secondary-color);
      margin-bottom: 10px;
    }
    
    /* Worker Cards */
    .worker-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      gap: 25px;
      margin-bottom: 40px;
    }
    
    .worker-card {
      background: var(--white);
      border-radius: 10px;
      overflow: hidden;
      box-shadow: var(--shadow);
      transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .worker-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .worker-header {
      display: flex;
      align-items: center;
      padding: 20px;
      border-bottom: 1px solid var(--gray);
    }
    
    .worker-photo {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid var(--primary-color);
      margin-right: 20px;
    }
    
    .worker-info h3 {
      color: var(--primary-color);
      margin-bottom: 5px;
      font-size: 1.2rem;
    }
    
    .worker-info p {
      font-size: 0.9rem;
      color: var(--secondary-color);
      margin-bottom: 3px;
    }
    
    .worker-body {
      padding: 20px;
    }
    
    .worker-stats {
      display: flex;
      justify-content: space-between;
      margin-bottom: 15px;
    }
    
    .stat-item {
      text-align: center;
    }
    
    .stat-item .stat-value {
      font-weight: 600;
      color: var(--primary-color);
      font-size: 1.1rem;
    }
    
    .stat-item .stat-label {
      font-size: 0.8rem;
      color: var(--secondary-color);
    }
    
    .worker-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .checkbox-container {
      display: flex;
      align-items: center;
    }
    
    .checkbox-container input[type="checkbox"] {
      width: 18px;
      height: 18px;
      margin-right: 8px;
      accent-color: var(--primary-color);
      cursor: pointer;
    }
    
    .checkbox-container label {
      font-size: 0.9rem;
      cursor: pointer;
    }
    
    .btn {
      display: inline-block;
      padding: 8px 20px;
      border-radius: 5px;
      font-weight: 500;
      transition: all 0.3s;
      border: none;
      cursor: pointer;
    }
    
    .btn-primary {
      background: var(--primary-color);
      color: var(--white);
    }
    
    .btn-primary:hover {
      background: var(--primary-dark);
    }
    
    .btn-outline {
      background: transparent;
      color: var(--primary-color);
      border: 1px solid var(--primary-color);
    }
    
    .btn-outline:hover {
      background: var(--primary-color);
      color: var(--white);
    }
    
    .text-center {
      text-align: center;
    }
    
    /* Footer */
    footer {
      background: var(--dark-color);
      color: var(--white);
      padding: 50px 0 20px;
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
      color: var(--primary-color);
    }
    
    .footer-column p, 
    .footer-column a {
      font-size: 0.9rem;
      opacity: 0.8;
      margin-bottom: 10px;
      display: block;
    }
    
    .footer-column a:hover {
      opacity: 1;
      color: var(--primary-color);
    }
    
    .social-links {
      display: flex;
      gap: 15px;
      margin-top: 15px;
    }
    
    .social-links a {
      font-size: 1.2rem;
    }
    
    .footer-bottom {
      text-align: center;
      padding-top: 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      font-size: 0.8rem;
      opacity: 0.7;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }
      
      .hero h1 {
        font-size: 2rem;
      }
      
      .worker-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <nav>
        <div class="logo">KaajWala</div>
        <ul class="nav-links">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/about') }}">About</a></li>
          <li><a href="{{ url('/services') }}" class="active">Services</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
          <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <h1>Find the Right Worker for Your Needs</h1>
      <p>Browse our verified professionals and select the best match for your project</p>
    </div>
  </section>

  <main class="main">
    <div class="container">
      <div class="page-title">
        <h2>Available Workers</h2>
        <p>Select one or more workers to proceed with your booking</p>
      </div>
      
      <div class="worker-grid">
        <!-- Worker Card 1 -->
        <div class="worker-card">
          <div class="worker-header">
            <img src="{{ asset('images/rohim.png') }}" alt="Rahim Uddin" class="worker-photo">
            <div class="worker-info">
              <h3>Rahim Uddin</h3>
              <p>Electrician</p>
              <p>Dhaka, Bangladesh</p>
            </div>
          </div>
          <div class="worker-body">
            <div class="worker-stats">
              <div class="stat-item">
                <span class="stat-value">42</span>
                <span class="stat-label">Jobs Done</span>
              </div>
              <div class="stat-item">
                <span class="stat-value">4.8</span>
                <span class="stat-label">Rating</span>
              </div>
              <div class="stat-item">
                <span class="stat-value">5</span>
                <span class="stat-label">Years Exp.</span>
              </div>
            </div>
            <div class="worker-actions">
              <div class="checkbox-container">
                <input type="checkbox" id="worker1" name="select_worker">
                <label for="worker1">Select Worker</label>
              </div>
              <a href="{{ url('/worker-details') }}" class="btn btn-outline">View Details</a>
            </div>
          </div>
        </div>
        
        <!-- Worker Card 2 -->
        <div class="worker-card">
          <div class="worker-header">
            <img src="{{ asset('images/Shamim.png') }}" alt="Shoriful Islam" class="worker-photo">
            <div class="worker-info">
              <h3>Shoriful Islam</h3>
              <p>Plumber</p>
              <p>Dhaka, Bangladesh</p>
            </div>
          </div>
          <div class="worker-body">
            <div class="worker-stats">
              <div class="stat-item">
                <span class="stat-value">32</span>
                <span class="stat-label">Jobs Done</span>
              </div>
              <div class="stat-item">
                <span class="stat-value">4.6</span>
                <span class="stat-label">Rating</span>
              </div>
              <div class="stat-item">
                <span class="stat-value">4</span>
                <span class="stat-label">Years Exp.</span>
              </div>
            </div>
            <div class="worker-actions">
              <div class="checkbox-container">
                <input type="checkbox" id="worker2" name="select_worker">
                <label for="worker2">Select Worker</label>
              </div>
              <a href="{{ url('/worker-details') }}" class="btn btn-outline">View Details</a>
            </div>
          </div>
        </div>
        
        <!-- Worker Card 3 -->
        <div class="worker-card">
          <div class="worker-header">
            <img src="{{ asset('images/nasima.png') }}" alt="Nasima Akter" class="worker-photo">
            <div class="worker-info">
              <h3>Nasima Akter</h3>
              <p>Cleaner</p>
              <p>Dhaka, Bangladesh</p>
            </div>
          </div>
          <div class="worker-body">
            <div class="worker-stats">
              <div class="stat-item">
                <span class="stat-value">28</span>
                <span class="stat-label">Jobs Done</span>
              </div>
              <div class="stat-item">
                <span class="stat-value">4.9</span>
                <span class="stat-label">Rating</span>
              </div>
              <div class="stat-item">
                <span class="stat-value">3</span>
                <span class="stat-label">Years Exp.</span>
              </div>
            </div>
            <div class="worker-actions">
              <div class="checkbox-container">
                <input type="checkbox" id="worker3" name="select_worker">
                <label for="worker3">Select Worker</label>
              </div>
              <a href="{{ url('/worker-details') }}" class="btn btn-outline">View Details</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center">
        <form action="{{ url('/payment') }}" method="GET">
          <button type="submit" class="btn btn-primary" style="padding: 12px 30px; font-size: 1.1rem;">
            Confirm and Proceed to Payment
          </button>
        </form>
      </div>
    </div>
  </main>

  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-column">
          <h3>About KaajWala</h3>
          <p>Connecting skilled workers with clients who need their services quickly and reliably.</p>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="footer-column">
          <h3>Quick Links</h3>
          <a href="{{ url('/') }}">Home</a>
          <a href="{{ url('/services') }}">Services</a>
          <a href="{{ url('/portfolio') }}">Worker Portfolio</a>
          <a href="{{ url('/about') }}">About Us</a>
          <a href="{{ url('/contact') }}">Contact</a>
        </div>
        <div class="footer-column">
          <h3>Contact Info</h3>
          <p><i class="fas fa-phone-alt"></i> +880 1518996430</p>
          <p><i class="fas fa-envelope"></i> kaajwala247@gmail.com</p>
          <p><i class="fas fa-map-marker-alt"></i> Road no-5, Block A, Mirpur 1, Dhaka, Bangladesh</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2023 KaajWala. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
</body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select Workers | KaajWala</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #f96d00;
      --primary-dark: #e06700;
      --secondary-color: #393e46;
      --light-color: #f4f4f4;
      --dark-color: #222831;
      --white: #ffffff;
      --gray: #eeeeee;
      --shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background: var(--light-color);
      color: var(--dark-color);
      line-height: 1.6;
    }
    
    a {
      text-decoration: none;
      color: inherit;
    }
    
    /* Header & Navigation */
    header {
      background: var(--white);
      box-shadow: var(--shadow);
      position: sticky;
      top: 0;
      z-index: 100;
    }
    
    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 0;
    }
    
    .logo {
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--primary-color);
    }
    
    .nav-links {
      display: flex;
      list-style: none;
    }
    
    .nav-links li {
      margin-left: 30px;
    }
    
    .nav-links a {
      font-weight: 500;
      transition: color 0.3s;
      position: relative;
    }
    
    .nav-links a:hover,
    .nav-links a.active {
      color: var(--primary-color);
    }
    
    .nav-links a.active:after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 100%;
      height: 2px;
      background: var(--primary-color);
    }
    
    /* Hero Section */
    .hero {
      background: var(--primary-color);
      color: var(--white);
      padding: 60px 0;
      text-align: center;
    }
    
    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: 15px;
    }
    
    .hero p {
      font-size: 1.1rem;
      opacity: 0.9;
    }
    
    /* Main Content */
    .main {
      padding: 40px 0;
    }
    
    .page-title {
      text-align: center;
      margin-bottom: 40px;
    }
    
    .page-title h2 {
      font-size: 2rem;
      color: var(--secondary-color);
      margin-bottom: 10px;
    }
    
    /* Filter Section */
    .filter-section {
      background: var(--white);
      padding: 20px;
      border-radius: 8px;
      box-shadow: var(--shadow);
      margin-bottom: 30px;
    }
    
    .filter-form {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }
    
    .filter-group {
      flex: 1;
      min-width: 200px;
    }
    
    .filter-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
      color: var(--secondary-color);
    }
    
    .filter-group select,
    .filter-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid var(--gray);
      border-radius: 5px;
      font-family: 'Poppins', sans-serif;
    }
    
    /* Worker Cards */
    .worker-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      gap: 25px;
      margin-bottom: 40px;
    }
    
    .worker-card {
      background: var(--white);
      border-radius: 10px;
      overflow: hidden;
      box-shadow: var(--shadow);
      transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .worker-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .worker-header {
      display: flex;
      align-items: center;
      padding: 20px;
      border-bottom: 1px solid var(--gray);
    }
    
    .worker-photo {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid var(--primary-color);
      margin-right: 20px;
    }
    
    .worker-info h3 {
      color: var(--primary-color);
      margin-bottom: 5px;
      font-size: 1.2rem;
    }
    
    .worker-info p {
      font-size: 0.9rem;
      color: var(--secondary-color);
      margin-bottom: 3px;
    }
    
    .worker-body {
      padding: 20px;
    }
    
    .worker-stats {
      display: flex;
      justify-content: space-between;
      margin-bottom: 15px;
    }
    
    .stat-item {
      text-align: center;
    }
    
    .stat-item .stat-value {
      font-weight: 600;
      color: var(--primary-color);
      font-size: 1.1rem;
    }
    
    .stat-item .stat-label {
      font-size: 0.8rem;
      color: var(--secondary-color);
    }
    
    .worker-skills {
      margin-bottom: 15px;
    }
    
    .skill-tag {
      display: inline-block;
      background: var(--gray);
      color: var(--secondary-color);
      padding: 3px 8px;
      border-radius: 4px;
      font-size: 0.8rem;
      margin-right: 5px;
      margin-bottom: 5px;
    }
    
    .worker-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .checkbox-container {
      display: flex;
      align-items: center;
    }
    
    .checkbox-container input[type="checkbox"] {
      width: 18px;
      height: 18px;
      margin-right: 8px;
      accent-color: var(--primary-color);
      cursor: pointer;
    }
    
    .checkbox-container label {
      font-size: 0.9rem;
      cursor: pointer;
    }
    
    .btn {
      display: inline-block;
      padding: 8px 20px;
      border-radius: 5px;
      font-weight: 500;
      transition: all 0.3s;
      border: none;
      cursor: pointer;
    }
    
    .btn-primary {
      background: var(--primary-color);
      color: var(--white);
    }
    
    .btn-primary:hover {
      background: var(--primary-dark);
    }
    
    .btn-outline {
      background: transparent;
      color: var(--primary-color);
      border: 1px solid var(--primary-color);
    }
    
    .btn-outline:hover {
      background: var(--primary-color);
      color: var(--white);
    }
    
    .text-center {
      text-align: center;
    }
    
    /* No Results */
    .no-results {
      text-align: center;
      padding: 40px;
      grid-column: 1 / -1;
    }
    
    /* Footer */
    footer {
      background: var(--dark-color);
      color: var(--white);
      padding: 50px 0 20px;
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
      color: var(--primary-color);
    }
    
    .footer-column p, 
    .footer-column a {
      font-size: 0.9rem;
      opacity: 0.8;
      margin-bottom: 10px;
      display: block;
    }
    
    .footer-column a:hover {
      opacity: 1;
      color: var(--primary-color);
    }
    
    .social-links {
      display: flex;
      gap: 15px;
      margin-top: 15px;
    }
    
    .social-links a {
      font-size: 1.2rem;
    }
    
    .footer-bottom {
      text-align: center;
      padding-top: 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      font-size: 0.8rem;
      opacity: 0.7;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }
      
      .hero h1 {
        font-size: 2rem;
      }
      
      .worker-grid {
        grid-template-columns: 1fr;
      }
      
      .filter-form {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <nav>
        <div class="logo">KaajWala</div>
        <ul class="nav-links">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/about') }}">About</a></li>
          <li><a href="{{ url('/services') }}" class="active">Services</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
          <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <h1>Find the Right Worker for Your Needs</h1>
      <p>Browse our verified professionals and select the best match for your project</p>
    </div>
  </section>

  <main class="main">
    <div class="container">
      <div class="page-title">
        <h2>Available Workers in {{ $location }}</h2>
        <p>Select one or more workers to proceed with your booking</p>
      </div>
      
      <!-- Filter Section -->
      <div class="filter-section">
        <form id="worker-filter" class="filter-form">
          <div class="filter-group">
            <label for="service-filter">Service</label>
            <select id="service-filter" class="form-control">
              <option value="">All Services</option>
              @foreach($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="filter-group">
            <label for="rating-filter">Minimum Rating</label>
            <select id="rating-filter" class="form-control">
              <option value="">Any Rating</option>
              <option value="4">4+ Stars</option>
              <option value="3">3+ Stars</option>
            </select>
          </div>
          <div class="filter-group">
            <label for="price-filter">Hourly Rate</label>
            <select id="price-filter" class="form-control">
              <option value="">Any Price</option>
              <option value="500">Under ৳500</option>
              <option value="1000">Under ৳1000</option>
              <option value="2000">Under ৳2000</option>
            </select>
          </div>
          <div class="filter-group">
            <label for="experience-filter">Experience</label>
            <select id="experience-filter" class="form-control">
              <option value="">Any Experience</option>
              <option value="1">1+ Years</option>
              <option value="3">3+ Years</option>
              <option value="5">5+ Years</option>
            </select>
          </div>
        </form>
      </div>
      
      <div class="worker-grid">
        @forelse($workers as $worker)
        <div class="worker-card" data-service="{{ implode(',', $worker->services->pluck('id')->toArray()) }}" 
             data-rating="{{ $worker->rating }}" 
             data-price="{{ $worker->hourly_rate }}" 
             data-experience="{{ $worker->experience_years }}">
            <div class="worker-header">
              <img src="{{ $worker->profile_image ? asset('storage/'.$worker->profile_image) : asset('images/default-worker.jpg') }}" 
                   alt="{{ $worker->name }}" class="worker-photo">
              <div class="worker-info">
                <h3>{{ $worker->name }}</h3>
                <p>{{ $worker->primary_service }}</p>
                <p>{{ $worker->location }}</p>
              </div>
            </div>
            <div class="worker-body">
              <div class="worker-stats">
                <div class="stat-item">
                  <span class="stat-value">{{ $worker->completed_jobs }}</span>
                  <span class="stat-label">Jobs Done</span>
                </div>
                <div class="stat-item">
                  <span class="stat-value">{{ number_format($worker->rating, 1) }}</span>
                  <span class="stat-label">Rating</span>
                </div>
                <div class="stat-item">
                  <span class="stat-value">{{ $worker->experience_years }}</span>
                  <span class="stat-label">Years Exp.</span>
                </div>
              </div>
              
              <div class="worker-skills">
                @foreach($worker->services->take(3) as $service)
                  <span class="skill-tag">{{ $service->name }}</span>
                @endforeach
                @if($worker->services->count() > 3)
                  <span class="skill-tag">+{{ $worker->services->count() - 3 }} more</span>
                @endif
              </div>
              
              <div class="worker-actions">
                <div class="checkbox-container">
                  <input type="checkbox" id="worker{{ $worker->id }}" name="selected_workers[]" value="{{ $worker->id }}">
                  <label for="worker{{ $worker->id }}">Select Worker</label>
                </div>
                <a href="{{ route('worker.details', $worker) }}" class="btn btn-outline">View Details</a>
              </div>
            </div>
          </div>
        @empty
          <div class="no-results">
            <h3>No workers available for your selected services</h3>
            <p>Please try different search criteria or check back later</p>
            <a href="{{ url('/services') }}" class="btn btn-primary" style="margin-top: 15px;">Back to Services</a>
          </div>
        @endforelse
      </div>
      
      @if($workers->count() > 0)
      <div class="text-center">
        <form id="worker-selection-form" action="{{ route('payment') }}" method="POST">
          @csrf
          <input type="hidden" name="location" value="{{ $location }}">
          <input type="hidden" name="service_ids" value="{{ implode(',', $serviceIds) }}">
          <input type="hidden" id="selected-workers" name="selected_workers">
          
          <button type="submit" class="btn btn-primary" style="padding: 12px 30px; font-size: 1.1rem;">
            Confirm and Proceed to Payment
          </button>
        </form>
      </div>
      @endif
    </div>
  </main>

  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-column">
          <h3>About KaajWala</h3>
          <p>Connecting skilled workers with clients who need their services quickly and reliably.</p>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="footer-column">
          <h3>Quick Links</h3>
          <a href="{{ url('/') }}">Home</a>
          <a href="{{ url('/services') }}">Services</a>
          <a href="{{ url('/portfolio') }}">Worker Portfolio</a>
          <a href="{{ url('/about') }}">About Us</a>
          <a href="{{ url('/contact') }}">Contact</a>
        </div>
        <div class="footer-column">
          <h3>Contact Info</h3>
          <p><i class="fas fa-phone-alt"></i> +880 1518996430</p>
          <p><i class="fas fa-envelope"></i> kaajwala247@gmail.com</p>
          <p><i class="fas fa-map-marker-alt"></i> Road no-5, Block A, Mirpur 1, Dhaka, Bangladesh</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2023 KaajWala. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Handle worker selection form submission
      const form = document.getElementById('worker-selection-form');
      if (form) {
        form.addEventListener('submit', function(e) {
          const selectedWorkers = Array.from(document.querySelectorAll('input[name="selected_workers[]"]:checked'))
            .map(checkbox => checkbox.value);
          
          if (selectedWorkers.length === 0) {
            e.preventDefault();
            alert('Please select at least one worker to proceed');
            return;
          }
          
          document.getElementById('selected-workers').value = selectedWorkers.join(',');
        });
      }
      
      // Filter workers based on selection
      const filterForm = document.getElementById('worker-filter');
      if (filterForm) {
        const filters = filterForm.querySelectorAll('select');
        filters.forEach(filter => {
          filter.addEventListener('change', function() {
            const serviceFilter = document.getElementById('service-filter').value;
            const ratingFilter = document.getElementById('rating-filter').value;
            const priceFilter = document.getElementById('price-filter').value;
            const experienceFilter = document.getElementById('experience-filter').value;
            
            document.querySelectorAll('.worker-card').forEach(card => {
              let show = true;
              
              if (serviceFilter && !card.dataset.service.includes(serviceFilter)) {
                show = false;
              }
              
              if (ratingFilter && parseFloat(card.dataset.rating) < parseFloat(ratingFilter)) {
                show = false;
              }
              
              if (priceFilter && parseFloat(card.dataset.price) > parseFloat(priceFilter)) {
                show = false;
              }
              
              if (experienceFilter && parseInt(card.dataset.experience) < parseInt(experienceFilter)) {
                show = false;
              }
              
              card.style.display = show ? 'block' : 'none';
            });
          });
        });
      }
    });
  </script>
</body>
</html> --}}