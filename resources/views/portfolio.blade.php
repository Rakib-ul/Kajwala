<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KaajWala Portfolio - Our Completed Projects</title>
  <meta name="description" content="View KaajWala's portfolio of completed home service projects across Bangladesh. See our quality work in electrical, plumbing, cleaning and more.">
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
      display: block;
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
      padding: 40px 0;
      position: relative;
      overflow: hidden;
    }
    
    .header-content {
      text-align: center;
      position: relative;
      z-index: 2;
    }
    
    .logo {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 70px;
      margin-bottom: 15px;
      transition: var(--transition);
    }
    
    .logo:hover {
      justify-content: center;
      align-items: center;
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
    
    /* Portfolio Section */
    .portfolio-container {
      padding: 60px 0;
    }
    
    .section-title {
      text-align: center;
      margin-bottom: 40px;
    }
    
    .section-title h2 {
      font-size: 2rem;
      color: var(--primary);
      position: relative;
      display: inline-block;
      padding-bottom: 15px;
    }
    
    .section-title h2::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: var(--primary);
    }
    
    .portfolio-filter {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 30px;
    }
    
    .filter-btn {
      padding: 8px 20px;
      background: var(--white);
      border: 1px solid var(--gray);
      border-radius: 30px;
      cursor: pointer;
      transition: var(--transition);
      font-weight: 500;
    }
    
    .filter-btn:hover, .filter-btn.active {
      background: var(--primary);
      color: var(--white);
      border-color: var(--primary);
    }
    
    .portfolio-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      gap: 30px;
    }
    
    .portfolio-item {
      background: var(--white);
      border-radius: 10px;
      overflow: hidden;
      box-shadow: var(--shadow);
      transition: var(--transition);
    }
    
    .portfolio-item:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    
    .portfolio-img {
      height: 250px;
      overflow: hidden;
      position: relative;
    }
    
    .portfolio-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: var(--transition);
    }
    
    .portfolio-item:hover .portfolio-img img {
      transform: scale(1.05);
    }
    
    .portfolio-info {
      padding: 20px;
    }
    
    .portfolio-info h3 {
      font-size: 1.3rem;
      margin-bottom: 10px;
      color: var(--primary);
    }
    
    .portfolio-info p {
      margin-bottom: 15px;
      color: var(--secondary);
      opacity: 0.9;
    }
    
    .portfolio-meta {
      display: flex;
      justify-content: space-between;
      font-size: 0.9rem;
      color: var(--secondary);
      opacity: 0.7;
    }
    
    .portfolio-tag {
      display: inline-block;
      padding: 4px 10px;
      background: rgba(249, 109, 0, 0.1);
      color: var(--primary);
      border-radius: 4px;
      font-size: 0.8rem;
      margin-right: 8px;
      margin-bottom: 8px;
    }
    
    /* Testimonials */
    .testimonials {
      margin: 60px 0;
    }
    
    .testimonial-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 30px;
    }
    
    .testimonial-card {
      background: var(--white);
      padding: 30px;
      border-radius: 10px;
      box-shadow: var(--shadow);
      position: relative;
    }
    
    .testimonial-card::before {
      content: '\f10d';
      font-family: 'Font Awesome 6 Free';
      font-weight: 900;
      position: absolute;
      top: 20px;
      left: 20px;
      font-size: 2rem;
      color: rgba(249, 109, 0, 0.1);
      z-index: 0;
    }
    
    .testimonial-content {
      position: relative;
      z-index: 1;
      margin-bottom: 20px;
      font-style: italic;
      line-height: 1.8;
    }
    
    .testimonial-author {
      display: flex;
      align-items: center;
    }
    
    .author-img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      overflow: hidden;
      margin-right: 15px;
    }
    
    .author-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .author-info h4 {
      font-size: 1rem;
      margin-bottom: 5px;
    }
    
    .author-info p {
      font-size: 0.8rem;
      opacity: 0.7;
    }
    
    /* Stats Section */
    .stats {
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
      background-size: cover;
      background-position: center;
      color: var(--white);
      text-align: center;
      padding: 80px 0;
      margin: 60px 0;
    }
    
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 30px;
    }
    
    .stat-item {
      padding: 20px;
    }
    
    .stat-number {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 10px;
      color: var(--primary);
    }
    
    .stat-label {
      font-size: 1.1rem;
      opacity: 0.9;
    }
    
    /* CTA Section */
    .cta {
      background: var(--primary);
      color: var(--white);
      text-align: center;
      padding: 60px 20px;
      border-radius: 10px;
      margin: 60px 0;
    }
    
    .cta h2 {
      font-size: 2rem;
      margin-bottom: 20px;
    }
    
    .cta p {
      max-width: 700px;
      margin: 0 auto 30px;
      opacity: 0.9;
    }
    
    .cta-btn {
      display: inline-block;
      background: var(--white);
      color: var(--primary);
      padding: 12px 30px;
      border-radius: 30px;
      font-weight: 600;
      transition: var(--transition);
    }
    
    .cta-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
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
      .portfolio-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      }
    }
    
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
      
      .section-title h2 {
        font-size: 1.8rem;
      }
      
      .portfolio-grid {
        grid-template-columns: 1fr;
      }
      
      .stats-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    
    @media (max-width: 576px) {
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
      
      .stats-grid {
        grid-template-columns: 1fr;
      }
      
      .stat-number {
        font-size: 2.5rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="container header-content">
      <a href="{{ url('/') }}">
        <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala Logo" class="logo">
      </a>
      <h1>Our Portfolio</h1>
      <p>Showcasing our quality work and satisfied customers</p>
      <nav>
        <ul class="nav-links">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/about') }}">About</a></li>
          <li><a href="{{ url('/services') }}">Services</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
          <li><a href="{{ url('/portfolio') }}" class="active">Portfolio</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="portfolio-container">
    <div class="container">
      <div class="section-title">
        <h2>Our Completed Projects</h2>
      </div>
      
      <div class="portfolio-filter">
        <button class="filter-btn active" data-filter="all">All Projects</button>
        <button class="filter-btn" data-filter="electrical">Electrical</button>
        <button class="filter-btn" data-filter="plumbing">Plumbing</button>
        <button class="filter-btn" data-filter="cleaning">Cleaning</button>
        <button class="filter-btn" data-filter="construction">Construction</button>
      </div>
      
      <div class="portfolio-grid">
        <!-- Project 1 -->
        <div class="portfolio-item" data-category="electrical">
          <div class="portfolio-img">
            <img src="https://images.unsplash.com/photo-1605152276897-4f618f831968?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Electrical Work">
          </div>
          <div class="portfolio-info">
            <h3>Mirpur Electric Overhaul</h3>
            <p>Complete rewiring and lighting installation for a 3-bedroom apartment in Mirpur, including smart home integration.</p>
            <div>
              <span class="portfolio-tag">Electrical</span>
              <span class="portfolio-tag">Wiring</span>
              <span class="portfolio-tag">Lighting</span>
            </div>
            <div class="portfolio-meta">
              <span><i class="far fa-calendar-alt"></i> Jan 2023</span>
              <span><i class="fas fa-map-marker-alt"></i> Mirpur, Dhaka</span>
            </div>
          </div>
        </div>
        
        <!-- Project 2 -->
        <div class="portfolio-item" data-category="plumbing">
          <div class="portfolio-img">
            <img src="https://images.unsplash.com/photo-1600566752227-8f3b540323d6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Plumbing Work">
          </div>
          <div class="portfolio-info">
            <h3>Dhanmondi Plumbing Rescue</h3>
            <p>Emergency pipe burst repair with complete bathroom renovation including new fixtures and waterproofing.</p>
            <div>
              <span class="portfolio-tag">Plumbing</span>
              <span class="portfolio-tag">Bathroom</span>
              <span class="portfolio-tag">Emergency</span>
            </div>
            <div class="portfolio-meta">
              <span><i class="far fa-calendar-alt"></i> Mar 2023</span>
              <span><i class="fas fa-map-marker-alt"></i> Dhanmondi, Dhaka</span>
            </div>
          </div>
        </div>
        
        <!-- Project 3 -->
        <div class="portfolio-item" data-category="cleaning">
          <div class="portfolio-img">
            <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cleaning Service">
          </div>
          <div class="portfolio-info">
            <h3>Uttara Deep Clean Project</h3>
            <p>Pre-festival deep cleaning of a 2000 sqft residence including carpet cleaning, window washing, and kitchen degreasing.</p>
            <div>
              <span class="portfolio-tag">Cleaning</span>
              <span class="portfolio-tag">Deep Clean</span>
              <span class="portfolio-tag">Residential</span>
            </div>
            <div class="portfolio-meta">
              <span><i class="far fa-calendar-alt"></i> Apr 2023</span>
              <span><i class="fas fa-map-marker-alt"></i> Uttara, Dhaka</span>
            </div>
          </div>
        </div>
        
        <!-- Project 4 -->
        <div class="portfolio-item" data-category="construction">
          <div class="portfolio-img">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Construction Work">
          </div>
          <div class="portfolio-info">
            <h3>Gulshan Office Renovation</h3>
            <p>Complete office space renovation including partition walls, flooring, and electrical setup for a corporate client.</p>
            <div>
              <span class="portfolio-tag">Construction</span>
              <span class="portfolio-tag">Renovation</span>
              <span class="portfolio-tag">Commercial</span>
            </div>
            <div class="portfolio-meta">
              <span><i class="far fa-calendar-alt"></i> Feb 2023</span>
              <span><i class="fas fa-map-marker-alt"></i> Gulshan, Dhaka</span>
            </div>
          </div>
        </div>
        
        <!-- Project 5 -->
        <div class="portfolio-item" data-category="electrical">
          <div class="portfolio-img">
            <img src="https://images.unsplash.com/photo-1606744837616-56c9a5c6a6eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Electrical Maintenance">
          </div>
          <div class="portfolio-info">
            <h3>Banani Electrical Maintenance</h3>
            <p>Quarterly electrical maintenance for a residential complex including panel checks and safety inspections.</p>
            <div>
              <span class="portfolio-tag">Electrical</span>
              <span class="portfolio-tag">Maintenance</span>
              <span class="portfolio-tag">Safety</span>
            </div>
            <div class="portfolio-meta">
              <span><i class="far fa-calendar-alt"></i> May 2023</span>
              <span><i class="fas fa-map-marker-alt"></i> Banani, Dhaka</span>
            </div>
          </div>
        </div>
        
        <!-- Project 6 -->
        <div class="portfolio-item" data-category="plumbing">
          <div class="portfolio-img">
            <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Plumbing Installation">
          </div>
          <div class="portfolio-info">
            <h3>Mohakhali Plumbing Installation</h3>
            <p>Complete plumbing system installation for a new apartment building with modern water-saving fixtures.</p>
            <div>
              <span class="portfolio-tag">Plumbing</span>
              <span class="portfolio-tag">Installation</span>
              <span class="portfolio-tag">New Construction</span>
            </div>
            <div class="portfolio-meta">
              <span><i class="far fa-calendar-alt"></i> Dec 2022</span>
              <span><i class="fas fa-map-marker-alt"></i> Mohakhali, Dhaka</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials">
    <div class="container">
      <div class="section-title">
        <h2>What Our Clients Say</h2>
      </div>
      
      <div class="testimonial-grid">
        <div class="testimonial-card">
          <div class="testimonial-content">
            "KaajWala's electricians did an outstanding job rewiring our entire apartment. They were professional, punctual, and left no mess behind. Highly recommend their services!"
          </div>
          <div class="testimonial-author">
            <div class="author-img">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client">
            </div>
            <div class="author-info">
              <h4>Arif Mahmud</h4>
              <p>Mirpur Resident</p>
            </div>
          </div>
        </div>
        
        <div class="testimonial-card">
          <div class="testimonial-content">
            "The deep cleaning service before Eid was worth every taka. My house hasn't been this clean since we moved in! The team was thorough and respectful of our home."
          </div>
          <div class="testimonial-author">
            <div class="author-img">
              <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client">
            </div>
            <div class="author-info">
              <h4>Nusrat Jahan</h4>
              <p>Uttara Resident</p>
            </div>
          </div>
        </div>
        
        <div class="testimonial-card">
          <div class="testimonial-content">
            "When our office needed urgent renovation before reopening, KaajWala completed the project ahead of schedule. Their workmanship is excellent and pricing was fair."
          </div>
          <div class="testimonial-author">
            <div class="author-img">
              <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Client">
            </div>
            <div class="author-info">
              <h4>Rahim Khan</h4>
              <p>Business Owner</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="stats">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item">
          <div class="stat-number">500+</div>
          <div class="stat-label">Projects Completed</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">98%</div>
          <div class="stat-label">Satisfaction Rate</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">50+</div>
          <div class="stat-label">Skilled Professionals</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">10+</div>
          <div class="stat-label">Cities Served</div>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="cta">
      <h2>Ready to Start Your Project?</h2>
      <p>Contact us today for a free consultation and estimate. Our team is ready to bring your vision to life with quality workmanship and professional service.</p>
      <a href="{{ url('/contact') }}" class="cta-btn">Get a Free Quote</a>
    </div>
  </section>

  <footer>
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
      // Portfolio filtering
      const filterBtns = document.querySelectorAll('.filter-btn');
      const portfolioItems = document.querySelectorAll('.portfolio-item');
      
      filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          // Remove active class from all buttons
          filterBtns.forEach(btn => btn.classList.remove('active'));
          // Add active class to clicked button
          this.classList.add('active');
          
          const filterValue = this.getAttribute('data-filter');
          
          portfolioItems.forEach(item => {
            if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
              item.style.display = 'block';
            } else {
              item.style.display = 'none';
            }
          });
        });
      });
      
      // Smooth scrolling for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          if (target) {
            window.scrollTo({
              top: target.offsetTop - 100,
              behavior: 'smooth'
            });
          }
        });
      });
      
      // Animate stats when they come into view
      const statsSection = document.querySelector('.stats');
      const statNumbers = document.querySelectorAll('.stat-number');
      
      const animateStats = (entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            statNumbers.forEach(stat => {
              const target = +stat.textContent.replace('%', '').replace('+', '');
              const increment = target / 50;
              let current = 0;
              
              const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                  clearInterval(timer);
                  stat.textContent = stat.textContent.includes('%') 
                    ? target + '%' 
                    : target + (stat.textContent.includes('+') ? '+' : '');
                } else {
                  stat.textContent = Math.floor(current) + 
                    (stat.textContent.includes('%') ? '%' : 
                     stat.textContent.includes('+') ? '+' : '');
                }
              }, 20);
            });
          }
        });
      };
      
      const observer = new IntersectionObserver(animateStats, { threshold: 0.5 });
      observer.observe(statsSection);
    });
  </script>
</body>
</html>