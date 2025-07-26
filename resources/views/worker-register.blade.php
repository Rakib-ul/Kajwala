<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professional Registration | KaajWala</title>
  <meta name="description" content="Register as a skilled professional with KaajWala to access premium job opportunities in Bangladesh">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #2563eb;
      --primary-dark: #1d4ed8;
      --primary-light: #93c5fd;
      --secondary: #f8fafc;
      --text: #1e293b;
      --text-light: #64748b;
      --border: #e2e8f0;
      --white: #ffffff;
      --black: #0f172a;
      --success: #10b981;
      --error: #ef4444;
      --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
      --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
      --radius-sm: 0.25rem;
      --radius: 0.5rem;
      --radius-lg: 0.75rem;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      line-height: 1.5;
      color: var(--text);
      background-color: var(--secondary);
    }

    /* Header Styles */
    .site-header {
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: var(--white);
      position: relative;
      overflow: hidden;
    }

    .header-overlay {
      position: absolute;
      inset: 0;
      background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0h30v30H0V0zm30 30h30v30H30V30z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
      opacity: 0.3;
    }

    .header-container {
      position: relative;
      max-width: 1200px;
      margin: 0 auto;
      padding: 1.5rem;
    }

    .brand-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--white);
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .logo-icon {
      font-size: 1.75rem;
    }

    .nav-container {
      display: flex;
      align-items: center;
    }

    .main-nav {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: var(--radius-lg);
      padding: 0.5rem;
    }

    .nav-links {
      display: flex;
      list-style: none;
      gap: 0.5rem;
    }

    .nav-links a {
      color: var(--white);
      text-decoration: none;
      font-weight: 500;
      font-size: 0.9rem;
      padding: 0.5rem 1rem;
      border-radius: var(--radius);
      transition: all 0.2s ease;
    }

    .nav-links a:hover {
      background: rgba(255, 255, 255, 0.2);
    }

    .nav-links a.active {
      background: var(--white);
      color: var(--primary);
    }

    .header-content {
      text-align: center;
      padding: 2rem 0 3rem;
      max-width: 800px;
      margin: 0 auto;
    }

    .header-title {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
      line-height: 1.2;
    }

    .header-subtitle {
      font-size: 1.1rem;
      font-weight: 400;
      opacity: 0.9;
    }

    /* Main Content */
    .main-container {
      max-width: 1200px;
      margin: -2rem auto 0;
      padding: 0 1.5rem;
      position: relative;
    }

    .registration-card {
      background: var(--white);
      border-radius: var(--radius-lg);
      box-shadow: var(--shadow-md);
      overflow: hidden;
      max-width: 600px;
      margin: 0 auto;
    }

    .card-header {
      padding: 1.5rem;
      border-bottom: 1px solid var(--border);
      text-align: center;
    }

    .card-title {
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--primary);
    }

    .card-body {
      padding: 2rem;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 500;
      font-size: 0.9rem;
    }

    .input-container {
      position: relative;
    }

    .input-icon {
      position: absolute;
      left: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-light);
    }

    .form-input {
      width: 100%;
      padding: 0.875rem 1rem 0.875rem 2.5rem;
      border: 1px solid var(--border);
      border-radius: var(--radius);
      font-family: inherit;
      font-size: 0.95rem;
      transition: all 0.2s ease;
    }

    .form-input:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px var(--primary-light);
    }

    .profession-list {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
      gap: 0.75rem;
      margin-top: 1rem;
    }

    .profession-tag {
      display: inline-block;
      background: var(--secondary);
      color: var(--text);
      padding: 0.5rem 1rem;
      border-radius: var(--radius);
      font-size: 0.8rem;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .profession-tag:hover {
      background: var(--primary-light);
      color: var(--primary-dark);
    }

    .submit-btn {
      width: 100%;
      background: var(--primary);
      color: var(--white);
      padding: 1rem;
      border: none;
      border-radius: var(--radius);
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.2s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
    }

    .submit-btn:hover {
      background: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: var(--shadow);
    }

    .submit-btn:active {
      transform: translateY(0);
    }

    .auth-link {
      text-align: center;
      margin-top: 1.5rem;
      font-size: 0.9rem;
      color: var(--text-light);
    }

    .auth-link a {
      color: var(--primary);
      text-decoration: none;
      font-weight: 500;
    }

    .auth-link a:hover {
      text-decoration: underline;
    }

    /* Footer */
    .site-footer {
      background: var(--black);
      color: var(--white);
      padding: 4rem 1.5rem 2rem;
      margin-top: 4rem;
    }

    .footer-container {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
    }

    .footer-section h3 {
      font-size: 1.2rem;
      margin-bottom: 1.25rem;
      position: relative;
      padding-bottom: 0.75rem;
    }

    .footer-section h3::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      width: 40px;
      height: 3px;
      background: var(--primary);
      border-radius: 3px;
    }

    .footer-section p {
      color: #94a3b8;
      font-size: 0.9rem;
      margin-bottom: 1rem;
    }

    .footer-links {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 0.75rem;
    }

    .footer-links a {
      color: #94a3b8;
      text-decoration: none;
      font-size: 0.9rem;
      transition: color 0.2s ease;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .footer-links a:hover {
      color: var(--white);
    }

    .contact-info {
      margin-top: 1rem;
    }

    .contact-item {
      display: flex;
      align-items: flex-start;
      gap: 0.75rem;
      margin-bottom: 1rem;
      color: #94a3b8;
      font-size: 0.9rem;
    }

    .contact-icon {
      color: var(--primary);
      font-size: 1rem;
      margin-top: 0.15rem;
    }

    .copyright {
      text-align: center;
      padding-top: 2rem;
      margin-top: 3rem;
      border-top: 1px solid #334155;
      color: #94a3b8;
      font-size: 0.85rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .header-title {
        font-size: 2rem;
      }
      
      .header-subtitle {
        font-size: 1rem;
      }
      
      .nav-links {
        display: none;
      }
      
      .mobile-menu-btn {
        display: block;
        background: none;
        border: none;
        color: var(--white);
        font-size: 1.5rem;
        cursor: pointer;
      }
    }

    @media (max-width: 480px) {
      .header-title {
        font-size: 1.75rem;
      }
      
      .card-body {
        padding: 1.5rem;
      }
      
      .profession-list {
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
      }
    }
  </style>
</head>
<body>
  <header class="site-header">
    <div class="header-overlay"></div>
    <div class="header-container">
      <div class="brand-bar">
        <a href="{{ url('/') }}" class="logo">
          <i class="fas fa-hands-helping logo-icon"></i>
          <span>KaajWala</span>
        </a>
        
        <div class="nav-container">
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
      </div>
      
      <div class="header-content">
        <h1 class="header-title">Join Our Professional Network</h1>
        <p class="header-subtitle">Register with KaajWala to access premium job opportunities and grow your professional career</p>
      </div>
    </div>
  </header>

  <main class="main-container">
    <div class="registration-card">
      <div class="card-header">
        <h2 class="card-title">Professional Registration</h2>
      </div>
      
      <div class="card-body">
        <form action="{{ url('/register-worker') }}" method="POST" class="registration-form">
          @csrf
          
          <div class="form-group">
            <label for="name" class="form-label">Full Name</label>
            <div class="input-container">
              <i class="fas fa-user input-icon"></i>
              <input type="text" id="name" name="name" class="form-input" required placeholder="John Doe">
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <div class="input-container">
              <i class="fas fa-envelope input-icon"></i>
              <input type="email" id="email" name="email" class="form-input" required placeholder="john.doe@example.com">
            </div>
          </div>

          <div class="form-group">
            <label for="phone" class="form-label">Phone Number</label>
            <div class="input-container">
              <i class="fas fa-phone input-icon"></i>
              <input type="tel" id="phone" name="phone" class="form-input" required placeholder="+880 1XXXXXXXXX">
            </div>
          </div>

          <div class="form-group">
            <label for="profession" class="form-label">Profession</label>
            <div class="input-container">
              <i class="fas fa-briefcase input-icon"></i>
              <select id="profession" name="profession" class="form-input" required>
                <option value="" disabled selected>Select your profession</option>
                <option value="Electrician">Electrician</option>
                <option value="Plumber">Plumber</option>
                <option value="Cleaner">Cleaner</option>
                <option value="Mechanic">Mechanic</option>
                <option value="Painter">Painter</option>
                <option value="Carpenter">Carpenter</option>
                <option value="Mason">Mason</option>
                <option value="Welder">Welder</option>
                <option value="AC Technician">AC Technician</option>
                <option value="Cook">Cook</option>
                <option value="Driver">Driver</option>
                <!-- More options can be added here -->
              </select>
            </div>
            
            <div class="profession-list">
              <span class="profession-tag">Electrician</span>
              <span class="profession-tag">Plumber</span>
              <span class="profession-tag">Cleaner</span>
              <span class="profession-tag">Mechanic</span>
              <span class="profession-tag">Painter</span>
              <span class="profession-tag">Carpenter</span>
            </div>
          </div>

          <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <div class="input-container">
              <i class="fas fa-lock input-icon"></i>
              <input type="password" id="password" name="password" class="form-input" required placeholder="At least 8 characters">
            </div>
          </div>

          <button type="submit" class="submit-btn">
            <i class="fas fa-user-plus"></i> Register Now
          </button>
          
          <p class="auth-link">
            Already have an account? <a href="{{ url('/worker-login') }}">Sign in here</a>
          </p>
        </form>
      </div>
    </div>
  </main>

  <footer class="site-footer">
    <div class="footer-container">
      <div class="footer-section">
        <h3>About KaajWala</h3>
        <p>Connecting skilled professionals with clients who need their services. Our platform ensures quality, reliability, and trust.</p>
      </div>
      
      <div class="footer-section">
        <h3>Quick Links</h3>
        <ul class="footer-links">
          <li><a href="{{ url('/') }}"><i class="fas fa-chevron-right"></i> Home</a></li>
          <li><a href="{{ url('/services') }}"><i class="fas fa-chevron-right"></i> Services</a></li>
          <li><a href="{{ url('/how-it-works') }}"><i class="fas fa-chevron-right"></i> How It Works</a></li>
          <li><a href="{{ url('/pricing') }}"><i class="fas fa-chevron-right"></i> Pricing</a></li>
        </ul>
      </div>
      
      <div class="footer-section">
        <h3>Contact Us</h3>
        <div class="contact-info">
          <div class="contact-item">
            <i class="fas fa-phone contact-icon"></i>
            <span>+880 1518996430</span>
          </div>
          <div class="contact-item">
            <i class="fas fa-envelope contact-icon"></i>
            <span>kaajwala247@gmail.com</span>
          </div>
          <div class="contact-item">
            <i class="fas fa-map-marker-alt contact-icon"></i>
            <span>Road no-5, Block A, Mirpur 1, Dhaka, Bangladesh</span>
          </div>
          <div class="contact-item">
            <i class="fas fa-clock contact-icon"></i>
            <span>Saturday to Saturday, 9:00 AM - 9:00 PM</span>
          </div>
        </div>
      </div>
    </div>
    
    <div class="copyright">
      &copy; 2023 KaajWala Professional Services. All rights reserved.
    </div>
  </footer>

  <script>
    // Profession tags click handler
    document.querySelectorAll('.profession-tag').forEach(tag => {
      tag.addEventListener('click', () => {
        document.getElementById('profession').value = tag.textContent;
      });
    });
  </script>
</body>
</html>