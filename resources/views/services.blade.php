<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KaajWala Services - Professional Help at Your Doorstep</title>
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
    header {
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: var(--white);
      padding: 30px 0;
      position: relative;
      overflow: hidden;
    }
    
    .header-content {
      text-align: center;
      position: relative;
      z-index: 2;
    }
    
    .logo {
      height: 70px;
      margin-bottom: 15px;
      transition: var(--transition);
    }
    
    .logo:hover {
      transform: scale(1.05);
    }
    
    header h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
      font-weight: 700;
    }
    
    header p {
      font-size: 1.1rem;
      margin-bottom: 25px;
      opacity: 0.9;
    }
    
    /* Navigation */
    nav {
      margin-top: 20px;
    }
    
    .nav-links {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 15px;
    }
    
    .nav-links a {
      color: var(--white);
      font-weight: 500;
      padding: 8px 15px;
      border-radius: 30px;
      transition: var(--transition);
      font-size: 1rem;
      position: relative;
    }
    
    .nav-links a:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: translateY(-3px);
    }
    
    .nav-links a.active {
      background: var(--white);
      color: var(--primary);
    }
    
    /* Services Section */
    .services-container {
      padding: 60px 0;
    }
    
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 25px;
      margin-top: 30px;
    }
    
    .service-card {
      background: var(--white);
      border-radius: 10px;
      box-shadow: var(--shadow);
      padding: 25px;
      transition: var(--transition);
      border-left: 4px solid var(--primary);
    }
    
    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    
    .service-icon {
      font-size: 2rem;
      color: var(--primary);
      margin-bottom: 15px;
    }
    
    .service-card h2 {
      font-size: 1.4rem;
      margin-bottom: 10px;
      color: var(--primary);
    }
    
    .service-card p {
      color: var(--secondary);
      opacity: 0.9;
      font-size: 0.95rem;
    }
    
    /* Footer */
    footer {
      background: var(--dark);
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
    
    .social-links {
      display: flex;
      gap: 15px;
      margin-top: 15px;
    }
    
    .social-links a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      transition: var(--transition);
    }
    
    .social-links a:hover {
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
    @media (max-width: 768px) {
      header h1 {
        font-size: 2rem;
      }
      
      .nav-links {
        gap: 10px;
      }
      
      .nav-links a {
        padding: 6px 12px;
        font-size: 0.9rem;
      }
      
      .services-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      }
      
      .service-card {
        padding: 20px;
      }
    }
    
    @media (max-width: 480px) {
      .logo {
        height: 50px;
      }
      
      header h1 {
        font-size: 1.8rem;
      }
      
      header p {
        font-size: 1rem;
      }
      
      .nav-links {
        flex-direction: column;
        align-items: center;
        gap: 8px;
      }
      
      .nav-links a {
        width: 80%;
        text-align: center;
      }
      
      .services-grid {
        grid-template-columns: 1fr;
      }
    }
    
    /* Animation */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .service-card {
      animation: fadeIn 0.5s ease forwards;
      opacity: 0;
    }
    
    .service-card:nth-child(1) { animation-delay: 0.1s; }
    .service-card:nth-child(2) { animation-delay: 0.2s; }
    .service-card:nth-child(3) { animation-delay: 0.3s; }
    .service-card:nth-child(4) { animation-delay: 0.4s; }
    .service-card:nth-child(5) { animation-delay: 0.5s; }
    .service-card:nth-child(6) { animation-delay: 0.6s; }
    .service-card:nth-child(7) { animation-delay: 0.7s; }
    .service-card:nth-child(8) { animation-delay: 0.8s; }
    .service-card:nth-child(9) { animation-delay: 0.9s; }
    .service-card:nth-child(10) { animation-delay: 1s; }
    .service-card:nth-child(11) { animation-delay: 1.1s; }
    .service-card:nth-child(12) { animation-delay: 1.2s; }
    .service-card:nth-child(13) { animation-delay: 1.3s; }
    .service-card:nth-child(14) { animation-delay: 1.4s; }
    .service-card:nth-child(15) { animation-delay: 1.5s; }
    .service-card:nth-child(16) { animation-delay: 1.6s; }
    .service-card:nth-child(17) { animation-delay: 1.7s; }
    .service-card:nth-child(18) { animation-delay: 1.8s; }
    .service-card:nth-child(19) { animation-delay: 1.9s; }
    .service-card:nth-child(20) { animation-delay: 2s; }
  </style>
</head>
<body>
  <header>
    <div class="container header-content">
      <a href="{{ url('/') }}">
        <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala Logo" class="logo">
      </a>
      <h1>Our Services</h1>
      <p>Professional help right at your doorstep</p>
      <nav>
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

  <section class="services-container">
    <div class="container">
      <div class="services-grid">
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-bolt"></i></div>
          <h2>Electrician</h2>
          <p>Expert electrical repair and installation services for your home or office.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-faucet"></i></div>
          <h2>Plumber</h2>
          <p>From leaky faucets to full pipe installations, our plumbers are here to help.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-broom"></i></div>
          <h2>Cleaner</h2>
          <p>Deep cleaning, regular house cleaning, and move-in/move-out services.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-tools"></i></div>
          <h2>Mechanic</h2>
          <p>On-demand mechanical service and repair for household and light industrial tools.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-paint-roller"></i></div>
          <h2>Painter</h2>
          <p>Interior and exterior wall painting with premium materials and expert finish.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-hammer"></i></div>
          <h2>Mason</h2>
          <p>Brickwork, plastering, and concrete repair for new and old structures.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-wood"></i></div>
          <h2>Carpenter</h2>
          <p>Custom furniture, repairs, and woodwork done professionally.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-snowflake"></i></div>
          <h2>AC Technician</h2>
          <p>AC installation, servicing, and gas refilling at your doorstep.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-refrigerator"></i></div>
          <h2>Refrigerator Repair</h2>
          <p>Professional diagnosis and repair for fridges and freezers.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-utensils"></i></div>
          <h2>Cook</h2>
          <p>Hire experienced cooks for daily meals or special occasions.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-house-user"></i></div>
          <h2>Housemaid</h2>
          <p>Full-time and part-time domestic help for all your cleaning and maintenance needs.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-shield-alt"></i></div>
          <h2>Security Guard</h2>
          <p>Licensed and trained security personnel for home and business premises.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-cut"></i></div>
          <h2>Tailor</h2>
          <p>Custom tailoring and alterations for men, women, and kids.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-car"></i></div>
          <h2>Driver</h2>
          <p>Hire experienced drivers for personal or corporate use.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-leaf"></i></div>
          <h2>Gardener</h2>
          <p>Landscape maintenance and gardening for homes and institutions.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-wifi"></i></div>
          <h2>Internet Technician</h2>
          <p>Router installation, troubleshooting, and broadband setup.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-bug"></i></div>
          <h2>Pest Control</h2>
          <p>Safe and effective pest removal for homes, offices, and restaurants.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-laptop"></i></div>
          <h2>Computer Repair</h2>
          <p>Fix slow PCs, replace parts, and install software with ease.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-camera"></i></div>
          <h2>Photographer</h2>
          <p>Book professional photographers for weddings, events, or portraits.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-magic"></i></div>
          <h2>Makeup Artist</h2>
          <p>Skilled makeup professionals for parties, bridal events, and more.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-tshirt"></i></div>
          <h2>Laundry Service</h2>
          <p>Doorstep laundry and ironing services with pickup and delivery.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-truck-moving"></i></div>
          <h2>Mover & Packer</h2>
          <p>Professional packing, moving, and relocation services.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-home"></i></div>
          <h2>Roofer</h2>
          <p>Roof repairs, waterproofing, and full installations.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-solar-panel"></i></div>
          <h2>Solar Installer</h2>
          <p>Solar panel setup and maintenance for energy efficiency.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-spa"></i></div>
          <h2>Beautician</h2>
          <p>Beauty services including facials, waxing, and threading at home.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-gift"></i></div>
          <h2>Decorator</h2>
          <p>Wedding, party, and corporate event decoration services.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-key"></i></div>
          <h2>Locksmith</h2>
          <p>Emergency lock repair, key duplication, and door unlocking.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-calendar-check"></i></div>
          <h2>Event Organizer</h2>
          <p>Plan and execute weddings, parties, and corporate events.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-gas-pump"></i></div>
          <h2>Gas Line Fitter</h2>
          <p>Installation and repair of residential gas pipelines.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-user-nurse"></i></div>
          <h2>Home Nurse</h2>
          <p>Trained medical staff for elderly or patient care at home.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-money-bill-wave"></i></div>
          <h2>ATM Technician</h2>
          <p>Technical support for ATM and banking machines.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-print"></i></div>
          <h2>Printer Repair</h2>
          <p>Maintenance and repair for all brands of printers and copiers.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-couch"></i></div>
          <h2>Upholsterer</h2>
          <p>Repair and restoration of sofas, chairs, and other furniture.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-window-maximize"></i></div>
          <h2>Window Cleaner</h2>
          <p>High and low-rise window cleaning professionals.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-truck"></i></div>
          <h2>Delivery Rider</h2>
          <p>Express delivery of packages and goods across the city.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-chalkboard-teacher"></i></div>
          <h2>Tutor</h2>
          <p>Home tutoring in math, science, and language subjects.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-tv"></i></div>
          <h2>Cable Installer</h2>
          <p>TV, broadband, and network cable setup services.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-paint-brush"></i></div>
          <h2>Interior Designer</h2>
          <p>Creative residential and commercial space design solutions.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-video"></i></div>
          <h2>CCTV Technician</h2>
          <p>Installation and repair of security camera systems.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-baby"></i></div>
          <h2>Babysitter</h2>
          <p>Trusted child care services for working parents.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-briefcase"></i></div>
          <h2>Office Assistant</h2>
          <p>Part-time or full-time help for small office tasks.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-exclamation-triangle"></i></div>
          <h2>Emergency Repairs</h2>
          <p>Urgent home or utility repair services on call.</p>
        </div>
        
        <div class="service-card">
          <div class="service-icon"><i class="fas fa-wrench"></i></div>
          <h2>Welding Specialist</h2>
          <p>Welding and fabrication jobs for metal structures.</p>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-column">
          <h3>KaajWala</h3>
          <p>Your trusted partner for all home and office service needs. We connect you with skilled professionals for any task.</p>
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
          <a href="{{ url('/about') }}">About Us</a>
          <a href="{{ url('/services') }}">Services</a>
          <a href="{{ url('/portfolio') }}">Portfolio</a>
          <a href="{{ url('/contact') }}">Contact</a>
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
</body>
</html>