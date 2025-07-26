<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Worker Profile | KaajWala Professional Services</title>
  <meta name="description" content="Manage your professional profile on KaajWala">
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
      --success: #10b981;
      --warning: #f59e0b;
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
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Header Styles */
    .site-header {
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: var(--white);
      padding: 1.5rem;
      position: relative;
      overflow: hidden;
    }

    .header-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
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

    .nav-links {
      display: flex;
      list-style: none;
      gap: 1.5rem;
    }

    .nav-links a {
      color: var(--white);
      text-decoration: none;
      font-weight: 500;
      font-size: 0.95rem;
      transition: opacity 0.2s ease;
    }

    .nav-links a:hover {
      opacity: 0.9;
    }

    /* Main Content */
    .main-content {
      flex: 1;
      padding: 2rem 1.5rem;
    }

    .profile-container {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 300px 1fr;
      gap: 2rem;
    }

    .profile-sidebar {
      background: var(--white);
      border-radius: var(--radius-lg);
      box-shadow: var(--shadow-md);
      padding: 2rem;
      height: fit-content;
    }

    .profile-main {
      background: var(--white);
      border-radius: var(--radius-lg);
      box-shadow: var(--shadow-md);
      padding: 2rem;
    }

    .profile-header {
      display: flex;
      align-items: center;
      margin-bottom: 2rem;
    }

    .profile-avatar {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid var(--primary-light);
      margin-right: 1.5rem;
    }

    .profile-info h2 {
      font-size: 1.75rem;
      margin-bottom: 0.25rem;
      color: var(--primary);
    }

    .profile-info p {
      color: var(--text-light);
      font-size: 0.95rem;
    }

    .profile-badge {
      display: inline-block;
      background: var(--primary-light);
      color: var(--primary-dark);
      padding: 0.25rem 0.75rem;
      border-radius: 1rem;
      font-size: 0.8rem;
      font-weight: 600;
      margin-top: 0.5rem;
    }

    .profile-stats {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1rem;
      margin-bottom: 2rem;
    }

    .stat-card {
      background: var(--secondary);
      border-radius: var(--radius);
      padding: 1.5rem;
      text-align: center;
    }

    .stat-value {
      font-size: 1.75rem;
      font-weight: 700;
      color: var(--primary);
      margin-bottom: 0.25rem;
    }

    .stat-label {
      color: var(--text-light);
      font-size: 0.9rem;
    }

    .section-title {
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 1.5rem;
      color: var(--primary);
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .section-title i {
      font-size: 1.1rem;
    }

    .detail-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1.5rem;
    }

    .detail-item {
      margin-bottom: 1rem;
    }

    .detail-label {
      font-size: 0.85rem;
      color: var(--text-light);
      margin-bottom: 0.25rem;
    }

    .detail-value {
      font-weight: 500;
    }

    .rating-stars {
      color: var(--warning);
      margin-right: 0.5rem;
    }

    .btn-group {
      display: flex;
      gap: 1rem;
      margin-top: 2rem;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding: 0.75rem 1.5rem;
      border-radius: var(--radius);
      font-weight: 500;
      cursor: pointer;
      transition: all 0.2s ease;
      text-decoration: none;
    }

    .btn-primary {
      background: var(--primary);
      color: var(--white);
      border: 1px solid var(--primary);
    }

    .btn-primary:hover {
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
      background: var(--primary-light);
      transform: translateY(-2px);
      box-shadow: var(--shadow);
    }

    /* Skills Section */
    .skills-container {
      margin-top: 2rem;
    }

    .skills-list {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
    }

    .skill-tag {
      background: var(--secondary);
      color: var(--text);
      padding: 0.5rem 1rem;
      border-radius: 1rem;
      font-size: 0.85rem;
    }

    /* Footer */
    .site-footer {
      background: var(--black);
      color: var(--white);
      padding: 2rem 1.5rem;
      margin-top: 3rem;
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
      margin-top: 2rem;
      border-top: 1px solid #334155;
      color: #94a3b8;
      font-size: 0.85rem;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .profile-container {
        grid-template-columns: 1fr;
      }
      
      .profile-stats {
        grid-template-columns: 1fr;
      }
      
      .detail-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 768px) {
      .header-container {
        flex-direction: column;
        gap: 1rem;
      }
      
      .nav-links {
        gap: 1rem;
      }
      
      .profile-header {
        flex-direction: column;
        text-align: center;
      }
      
      .profile-avatar {
        margin-right: 0;
        margin-bottom: 1rem;
      }
      
      .btn-group {
        flex-direction: column;
      }
    }

    @media (max-width: 480px) {
      .nav-links {
        flex-wrap: wrap;
        justify-content: center;
      }
    }
  </style>
</head>
<body>
  <header class="site-header">
    <div class="header-container">
      <a href="{{ url('/') }}" class="logo">
        <i class="fas fa-hands-helping logo-icon"></i>
        <span>KaajWala</span>
      </a>
      
<ul class="nav-links">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/about') }}">About</a></li>
          <li><a href="{{ url('/services') }}">Services</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
          <li><a href="{{ url('/portfolio') }}" class="active">Portfolio</a></li>
          <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        </ul>
    </div>
  </header>

  <main class="main-content">
    <div class="profile-container">
      <aside class="profile-sidebar">
        <div class="profile-header">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Shoriful Likhon" class="profile-avatar">
          <div class="profile-info">
            <h2>Shoriful Likhon</h2>
            <p>Professional Plumber</p>
            <span class="profile-badge">
              <i class="fas fa-check-circle"></i> Verified
            </span>
          </div>
        </div>
        
        <div class="profile-stats">
          <div class="stat-card">
            <div class="stat-value">35</div>
            <div class="stat-label">Jobs Completed</div>
          </div>
          <div class="stat-card">
            <div class="stat-value">4.7</div>
            <div class="stat-label">Avg Rating</div>
          </div>
          <div class="stat-card">
            <div class="stat-value">92%</div>
            <div class="stat-label">Success Rate</div>
          </div>
        </div>
        
        <div class="skills-container">
          <h3 class="section-title">
            <i class="fas fa-tools"></i> Skills
          </h3>
          <div class="skills-list">
            <span class="skill-tag">Pipe Installation</span>
            <span class="skill-tag">Leak Repair</span>
            <span class="skill-tag">Water Heater</span>
            <span class="skill-tag">Drain Cleaning</span>
            <span class="skill-tag">Faucet Repair</span>
          </div>
        </div>
      </aside>
      
      <div class="profile-main">
        <h2 class="section-title">
          <i class="fas fa-user-circle"></i> Profile Details
        </h2>
        
        <div class="detail-grid">
          <div class="detail-item">
            <div class="detail-label">Full Name</div>
            <div class="detail-value">Shoriful Likhon</div>
          </div>
          <div class="detail-item">
            <div class="detail-label">Email Address</div>
            <div class="detail-value">likhon1234@gmail.com</div>
          </div>
          <div class="detail-item">
            <div class="detail-label">Phone Number</div>
            <div class="detail-value">+880 1780000000</div>
          </div>
          <div class="detail-item">
            <div class="detail-label">Profession</div>
            <div class="detail-value">Plumber</div>
          </div>
          <div class="detail-item">
            <div class="detail-label">Location</div>
            <div class="detail-value">Mirpur 1, Dhaka, Bangladesh</div>
          </div>
          <div class="detail-item">
            <div class="detail-label">Member Since</div>
            <div class="detail-value">January 2022</div>
          </div>
          <div class="detail-item">
            <div class="detail-label">Rating</div>
            <div class="detail-value">
              <span class="rating-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </span>
              4.7 (28 reviews)
            </div>
          </div>
          <div class="detail-item">
            <div class="detail-label">Response Time</div>
            <div class="detail-value">Within 2 hours</div>
          </div>
        </div>
        
        <h2 class="section-title" style="margin-top: 2rem;">
          <i class="fas fa-file-alt"></i> About Me
        </h2>
        <p style="margin-bottom: 1.5rem; line-height: 1.7;">
          Experienced plumber with 5+ years of professional service in residential and commercial properties. 
          Specialized in pipe installation, leak detection, and water heater maintenance. Committed to providing 
          high-quality service with attention to detail and customer satisfaction.
        </p>
        
        <div class="btn-group">
          <a href="#" class="btn btn-primary">
            <i class="fas fa-edit"></i> Edit Profile
          </a>
          <a href="#" class="btn btn-outline">
            <i class="fas fa-history"></i> Service History
          </a>
        </div>
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
        </div>
      </div>
      
      <div class="footer-section">
        <h3>Working Hours</h3>
        <div class="contact-item">
          <i class="fas fa-clock contact-icon"></i>
          <span>Saturday to Saturday, 9:00 AM - 9:00 PM</span>
        </div>
      </div>
    </div>
    
    <div class="copyright">
      &copy; 2023 KaajWala Professional Services. All rights reserved.
    </div>
  </footer>
</body>
</html>