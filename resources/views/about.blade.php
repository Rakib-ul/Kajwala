<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About KaajWala - Your Trusted Home Service Provider</title>
  <meta name="description" content="Learn about KaajWala's mission, values, and commitment to providing reliable home services in Bangladesh.">
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
      scroll-behavior: smooth;
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
    
    /* About Sections */
    .about-container {
      padding: 60px 0;
    }
    
    .about-section {
      background: var(--white);
      border-radius: 10px;
      box-shadow: var(--shadow);
      padding: 40px;
      margin-bottom: 30px;
      transition: var(--transition);
      scroll-margin-top: 100px;
    }
    
    .about-section:target {
      border-left: 4px solid var(--primary);
      background: #fff9f5;
      animation: highlightSection 0.5s ease-in-out;
    }
    
    @keyframes highlightSection {
      0% { background: var(--white); }
      50% { background: #fff9f5; }
      100% { background: #fff9f5; }
    }
    
    .about-section:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .about-section h2 {
      color: var(--primary);
      font-size: 1.8rem;
      margin-bottom: 20px;
      position: relative;
      padding-bottom: 10px;
    }
    
    .about-section h2::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 60px;
      height: 3px;
      background: var(--primary);
    }
    
    .about-section p {
      margin-bottom: 15px;
      line-height: 1.8;
    }
    
    .about-section ul {
      margin: 20px 0;
      padding-left: 20px;
    }
    
    .about-section li {
      margin-bottom: 10px;
      position: relative;
      padding-left: 25px;
    }
    
    .about-section li::before {
      content: '\f00c';
      font-family: 'Font Awesome 6 Free';
      font-weight: 900;
      color: var(--primary);
      position: absolute;
      left: 0;
    }
    
    /* Stats Section */
    .stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin: 40px 0;
    }
    
    .stat-item {
      text-align: center;
      padding: 30px 20px;
      background: var(--white);
      border-radius: 10px;
      box-shadow: var(--shadow);
      transition: var(--transition);
    }
    
    .stat-item:hover {
      transform: translateY(-5px);
    }
    
    .stat-number {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--primary);
      margin-bottom: 10px;
    }
    
    .stat-label {
      font-size: 1rem;
      color: var(--secondary);
      opacity: 0.9;
    }
    
    /* Team Section */
    .team {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin: 40px 0;
    }
    
    .team-member {
      background: var(--white);
      border-radius: 10px;
      box-shadow: var(--shadow);
      overflow: hidden;
      transition: var(--transition);
      text-align: center;
    }
    
    .team-member:hover {
      transform: translateY(-10px);
    }
    
    .member-image {
      height: 200px;
      overflow: hidden;
    }
    
    .member-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: var(--transition);
    }
    
    .team-member:hover .member-image img {
      transform: scale(1.05);
    }
    
    .member-info {
      padding: 20px;
    }
    
    .member-name {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 5px;
      color: var(--primary);
    }
    
    .member-position {
      color: var(--secondary);
      opacity: 0.8;
      font-size: 0.9rem;
      margin-bottom: 15px;
    }
    
    .member-bio {
      font-size: 0.9rem;
      line-height: 1.6;
      margin-bottom: 15px;
    }
    
    .social-links {
      display: flex;
      justify-content: center;
      gap: 10px;
    }
    
    .social-links a {
      width: 35px;
      height: 35px;
      border-radius: 50%;
      background: var(--gray);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--secondary);
      transition: var(--transition);
    }
    
    .social-links a:hover {
      background: var(--primary);
      color: var(--white);
    }
    
    /* Testimonials */
    .testimonials {
      margin: 50px 0;
    }
    
    .testimonial {
      background: var(--white);
      padding: 30px;
      border-radius: 10px;
      box-shadow: var(--shadow);
      margin-bottom: 30px;
      position: relative;
    }
    
    .testimonial::before {
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
    
    .author-image {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      overflow: hidden;
      margin-right: 15px;
    }
    
    .author-image img {
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
      
      .about-section {
        padding: 25px;
      }
      
      .stats {
        grid-template-columns: repeat(2, 1fr);
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
      
      .stats {
        grid-template-columns: 1fr;
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
      <h1>About KaajWala</h1>
      <p>Your trusted partner for home services in Bangladesh</p>
      <nav>
        <ul class="nav-links">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/about') }}" class="active">About</a></li>
          <li><a href="{{ url('/services') }}">Services</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
          <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="about-container">
    <div class="container">
      <div class="about-section" id="company">
        <h2>Our Story</h2>
        <p>Founded in 2020, KaajWala began as a small initiative to connect skilled workers with homeowners in Dhaka. Today, we've grown into Bangladesh's most trusted home services platform, serving thousands of satisfied customers across major cities.</p>
        <p>Our journey started with recognizing the challenges homeowners face in finding reliable service providers, while talented workers struggled to find consistent work. KaajWala bridges this gap with technology, trust, and transparency.</p>
      </div>

      <div class="about-section" id="mission">
        <h2>Our Mission</h2>
        <p>We're committed to transforming Bangladesh's home services industry by:</p>
        <ul>
          <li>Empowering skilled workers with fair opportunities and training</li>
          <li>Providing homeowners with reliable, vetted service professionals</li>
          <li>Standardizing service quality and pricing across the industry</li>
          <li>Creating a seamless digital experience for service booking</li>
          <li>Supporting the growth of Bangladesh's gig economy</li>
        </ul>
      </div>

      <div class="stats">
        <div class="stat-item">
          <div class="stat-number">5,000+</div>
          <div class="stat-label">Skilled Professionals</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">50,000+</div>
          <div class="stat-label">Happy Customers</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">100+</div>
          <div class="stat-label">Services Offered</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">10+</div>
          <div class="stat-label">Cities Served</div>
        </div>
      </div>

      <div class="about-section">
        <h2>Our Values</h2>
        <div class="values-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 20px;">
          <div style="background: #fff9f5; padding: 20px; border-radius: 8px; border-left: 4px solid var(--primary);">
            <h3 style="color: var(--primary); margin-bottom: 10px;"><i class="fas fa-shield-alt" style="margin-right: 10px;"></i> Trust</h3>
            <p>We verify every professional and maintain complete transparency in pricing and service quality.</p>
          </div>
          <div style="background: #fff9f5; padding: 20px; border-radius: 8px; border-left: 4px solid var(--primary);">
            <h3 style="color: var(--primary); margin-bottom: 10px;"><i class="fas fa-star" style="margin-right: 10px;"></i> Quality</h3>
            <p>We maintain strict quality standards and continuously train our service professionals.</p>
          </div>
          <div style="background: #fff9f5; padding: 20px; border-radius: 8px; border-left: 4px solid var(--primary);">
            <h3 style="color: var(--primary); margin-bottom: 10px;"><i class="fas fa-heart" style="margin-right: 10px;"></i> Care</h3>
            <p>We treat every home we serve as if it were our own, with respect and attention to detail.</p>
          </div>
          <div style="background: #fff9f5; padding: 20px; border-radius: 8px; border-left: 4px solid var(--primary);">
            <h3 style="color: var(--primary); margin-bottom: 10px;"><i class="fas fa-lightbulb" style="margin-right: 10px;"></i> Innovation</h3>
            <p>We constantly improve our platform to make home services simpler and more accessible.</p>
          </div>
        </div>
      </div>

      <div class="about-section">
        <h2>How We Work</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; margin-top: 30px;">
          <div style="text-align: center;">
            <div style="background: var(--primary); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 1.5rem;">1</div>
            <h3 style="margin-bottom: 10px;">Book a Service</h3>
            <p>Select your service and schedule through our app, website, or phone</p>
          </div>
          <div style="text-align: center;">
            <div style="background: var(--primary); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 1.5rem;">2</div>
            <h3 style="margin-bottom: 10px;">Get Matched</h3>
            <p>We assign the best available professional for your specific need</p>
          </div>
          <div style="text-align: center;">
            <div style="background: var(--primary); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 1.5rem;">3</div>
            <h3 style="margin-bottom: 10px;">Service Delivery</h3>
            <p>Our professional arrives on time and completes the job to your satisfaction</p>
          </div>
          <div style="text-align: center;">
            <div style="background: var(--primary); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 1.5rem;">4</div>
            <h3 style="margin-bottom: 10px;">Happy Ending</h3>
            <p>You review the service, and we ensure complete satisfaction</p>
          </div>
        </div>
      </div>

<div class="about-section" id="team">
  <h2>Our Team</h2>
  <p>Behind KaajWala is a dedicated team of professionals committed to revolutionizing home services in Bangladesh:</p>
  
  <div class="team">
    <div class="team-member">
      <div class="member-image">
        <img src="images/azam.jpg" alt="azam">
      </div>
      <div class="member-info">
        <h3 class="member-name">SM Golam Azam</h3>
        <p class="member-position">frontend developer</p>
        <p class="member-bio">Creative Frontend Developer skilled in HTML, CSS, JavaScript, and modern frameworks. Focused on building responsive, user-friendly interfaces with clean, efficient code.</p>
        <div class="social-links">
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>
    
    <div class="team-member">
      <div class="member-image">
        <img src="images/rakib.jpg" alt="rakib">
      </div>
      <div class="member-info">
        <h3 class="member-name">Rakibul Islam</h3>
        <p class="member-position">Database and Backend expert</p>
        <p class="member-bio">Backend and Database expert skilled in PHP, Laravel, MySQL, and API development. Passionate about building secure, scalable, and efficient server-side systems.</p>
        <div class="social-links">
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>
    
    <div class="team-member">
      <div class="member-image">
        <img src="images/likhon.jpg" alt="likhon">
      </div>
      <div class="member-info">
        <h3 class="member-name">Shekh Shoriful Islam</h3>
        <p class="member-position">Chatbot specialist</p>
        <p class="member-bio">Chatbot specialist with expertise in building interactive, AI-driven chat systems using JavaScript, Dialogflow, and NLP tools to enhance user engagement and support automation.</p>
        <div class="social-links">
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>

    <div class="team-member">
      <div class="member-image">
        <img src="images/tonmoy.jpg" alt="tonmoy">
      </div>
      <div class="member-info">
        <h3 class="member-name">Tonmoy Shariar</h3>
        <p class="member-position">Payment Gateway Specialist</p>
        <p class="member-bio">Payment Gateway Specialist skilled in integrating secure and seamless online payment systems, including SSLCommerz, Stripe, and PayPal, to ensure smooth financial transactions across platforms.</p>
        <div class="social-links">
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>

    <div class="team-member">
      <div class="member-image">
        <img src="images/sumiya.jpg" alt="sumiya">
      </div>
      <div class="member-info">
        <h3 class="member-name">Sumiya Binte Mizan</h3>
        <p class="member-position">Schema Specialist</p>
        <p class="member-bio">Schema Specialist with expertise in designing efficient and scalable database schemas, ensuring data integrity, normalization, and optimal query performance for complex applications.</p>
        <div class="social-links">
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="testimonials">
  <h2 style="text-align: center; margin-bottom: 30px; color: var(--primary);">What Our Customers Say</h2>
  
  <div class="testimonial">
    <div class="testimonial-content">
      "KaajWala saved me during an emergency plumbing situation. Their professional arrived within 45 minutes and fixed the issue perfectly. I've been using their services ever since for all my home maintenance needs."
    </div>
    <div class="testimonial-author">
      <div class="author-image">
        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Customer">
      </div>
      <div class="author-info">
        <h4>Nusrat Jahan</h4>
        <p>Dhaka Resident</p>
      </div>
    </div>
  </div>
  
  <div class="testimonial">
    <div class="testimonial-content">
      "As a working professional, I don't have time to manage household repairs. KaajWala has been a lifesaver with their reliable and professional services. Their app makes booking so convenient, and I always get quality work."
    </div>
    <div class="testimonial-author">
      <div class="author-image">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Customer">
      </div>
      <div class="author-info">
        <h4>Arif Mahmud</h4>
        <p>Corporate Executive</p>
      </div>
    </div>
  </div>
</div>

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

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Animation for stats counting
      const statNumbers = document.querySelectorAll('.stat-number');
      const statsSection = document.querySelector('.stats');
      
      const animateStats = (entries) => {
        entries.forEach(entry => {
          if(entry.isIntersecting) {
            statNumbers.forEach(stat => {
              const target = +stat.textContent.replace('+', '');
              const increment = target / 50;
              let current = 0;
              
              const timer = setInterval(() => {
                current += increment;
                if(current >= target) {
                  clearInterval(timer);
                  stat.textContent = target + '+';
                } else {
                  stat.textContent = Math.floor(current) + '+';
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