<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact KaajWala - Your Trusted Home Service Provider</title>
  <meta name="description" content="Get in touch with KaajWala for all your home service needs. Contact us via phone, email, or visit our office in Dhaka.">
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
    
    /* Contact Content */
    .contact-container {
      padding: 60px 0;
    }
    
    .contact-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin-top: 30px;
    }
    
    .contact-info {
      background: var(--white);
      border-radius: 10px;
      box-shadow: var(--shadow);
      padding: 30px;
      transition: var(--transition);
    }
    
    .contact-info:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .contact-info h2 {
      color: var(--primary);
      font-size: 1.5rem;
      margin-bottom: 20px;
      position: relative;
      padding-bottom: 10px;
    }
    
    .contact-info h2::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 50px;
      height: 3px;
      background: var(--primary);
    }
    
    .info-item {
      display: flex;
      align-items: flex-start;
      margin-bottom: 20px;
    }
    
    .info-icon {
      width: 40px;
      height: 40px;
      background: rgba(249, 109, 0, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--primary);
      margin-right: 15px;
      flex-shrink: 0;
    }
    
    .info-content h3 {
      font-size: 1rem;
      margin-bottom: 5px;
    }
    
    .info-content p, .info-content a {
      color: var(--secondary);
      opacity: 0.9;
      font-size: 0.95rem;
      line-height: 1.6;
    }
    
    .info-content a:hover {
      color: var(--primary);
    }
    
    /* Contact Form */
    .contact-form {
      background: var(--white);
      border-radius: 10px;
      box-shadow: var(--shadow);
      padding: 30px;
      transition: var(--transition);
    }
    
    .contact-form:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .contact-form h2 {
      color: var(--primary);
      font-size: 1.5rem;
      margin-bottom: 20px;
      position: relative;
      padding-bottom: 10px;
    }
    
    .contact-form h2::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 50px;
      height: 3px;
      background: var(--primary);
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
      color: var(--secondary);
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
    
    textarea.form-control {
      min-height: 150px;
      resize: vertical;
    }
    
    .btn {
      display: inline-block;
      background: var(--primary);
      color: var(--white);
      border: none;
      padding: 12px 30px;
      border-radius: 30px;
      cursor: pointer;
      font-weight: 500;
      transition: var(--transition);
      text-transform: uppercase;
      letter-spacing: 1px;
      font-size: 0.9rem;
    }
    
    .btn:hover {
      background: var(--primary-dark);
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(249, 109, 0, 0.3);
    }
    
    /* Map Section */
    .map-section {
      margin: 50px 0;
    }
    
    .map-container {
      height: 400px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: var(--shadow);
    }
    
    .map-container iframe {
      width: 100%;
      height: 100%;
      border: none;
    }
    
    /* FAQ Section */
    .faq-section {
      margin: 50px 0;
    }
    
    .faq-item {
      background: var(--white);
      border-radius: 8px;
      box-shadow: var(--shadow);
      margin-bottom: 15px;
      overflow: hidden;
    }
    
    .faq-question {
      padding: 20px;
      background: rgba(249, 109, 0, 0.05);
      color: var(--primary);
      font-weight: 500;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: var(--transition);
    }
    
    .faq-question:hover {
      background: rgba(249, 109, 0, 0.1);
    }
    
    .faq-question::after {
      content: '\f078';
      font-family: 'Font Awesome 6 Free';
      font-weight: 900;
      transition: var(--transition);
    }
    
    .faq-question.active::after {
      transform: rotate(180deg);
    }
    
    .faq-answer {
      padding: 0 20px;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease;
    }
    
    .faq-answer.show {
      padding: 20px;
      max-height: 500px;
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
      
      .contact-info, .contact-form {
        padding: 25px;
      }
      
      .map-container {
        height: 300px;
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
      
      .map-container {
        height: 250px;
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
      <h1>Contact KaajWala</h1>
      <p>We're here to help with all your home service as your needs</p>
      <nav>
        <ul class="nav-links">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/about') }}">About</a></li>
          <li><a href="{{ url('/services') }}">Services</a></li>
          <li><a href="{{ url('/contact') }}" class="active">Contact</a></li>
          <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="contact-container">
    <div class="container">
      <div class="contact-grid">
        <div class="contact-info">
          <h2>Contact Information</h2>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="info-content">
              <h3>Our Office</h3>
              <p>Road no-5, Block A, Mirpur 1<br>Dhaka, Bangladesh</p>
            </div>
          </div>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div class="info-content">
              <h3>Phone Numbers</h3>
              <p>
                <a href="tel:+8801518996430">+880 1518996430</a> (General)<br>
                <a href="tel:+8801712345678">+880 1712345678</a> (Support)<br>
                <a href="tel:+8801912345678">+880 1912345678</a> (Emergency)
              </p>
            </div>
          </div>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="info-content">
              <h3>Email Addresses</h3>
              <p>
                <a href="mailto:kaajwala247@gmail.com">kaajwala247@gmail.com</a> (General)<br>
                <a href="mailto:support@kaajwala.com">support@kaajwala.com</a> (Support)<br>
                <a href="mailto:careers@kaajwala.com">careers@kaajwala.com</a> (Careers)
              </p>
            </div>
          </div>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="fas fa-clock"></i>
            </div>
            <div class="info-content">
              <h3>Working Hours</h3>
              <p>
                <strong>Saturday to Saturday</strong><br>
                9:00 AM - 9:00 PM<br>
                <em>Emergency services available 24/7</em>
              </p>
            </div>
          </div>
        </div>
        
        <div class="contact-form">
          <h2>Send Us a Message</h2>
          <form id="contact-form">
            <div class="form-group">
              <label for="name">Your Name</label>
              <input type="text" id="name" name="name" class="form-control" required>
            </div>
            
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" class="form-control" required>
            </div>
            
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" class="form-control" required>
            </div>
            
            <div class="form-group">
              <label for="service">Service Needed (Optional)</label>
              <select id="service" name="service" class="form-control">
                <option value="">Select a service</option>
                <option value="electrician">Electrician</option>
                <option value="plumber">Plumber</option>
                <option value="cleaner">Cleaner</option>
                <option value="mechanic">Mechanic</option>
                <option value="other">Other Service</option>
              </select>
            </div>
            
            <div class="form-group">
              <label for="message">Your Message</label>
              <textarea id="message" name="message" class="form-control" required></textarea>
            </div>
            
            <button type="submit" class="btn">
              <i class="fas fa-paper-plane"></i> Send Message
            </button>
          </form>
        </div>
      </div>
      
      <div class="map-section">
        <h2 style="text-align: center; margin-bottom: 30px; color: var(--primary);">Our Location</h2>
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.793847190185!2d90.36546931543158!3d23.79388739290049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0b9a7c5d9a1%3A0x9f9b9c9d9e9f9e9f!2sMirpur%201%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1620000000000!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
      
      <div class="faq-section">
        <h2 style="text-align: center; margin-bottom: 30px; color: var(--primary);">Frequently Asked Questions</h2>
        
        <div class="faq-item">
          <div class="faq-question">How quickly can I get service?</div>
          <div class="faq-answer">
            <p>For standard services, we typically schedule within 24 hours. Emergency services are available 24/7 with response times as quick as 1 hour depending on your location in Dhaka.</p>
          </div>
        </div>
        
        <div class="faq-item">
          <div class="faq-question">What payment methods do you accept?</div>
          <div class="faq-answer">
            <p>We accept cash on service completion, mobile payments (bKash, Nagad), credit/debit cards, and bank transfers. All digital payments are secure and encrypted.</p>
          </div>
        </div>
        
        <div class="faq-item">
          <div class="faq-question">Are your service providers verified?</div>
          <div class="faq-answer">
            <p>Yes, all KaajWala professionals undergo thorough background checks, verification of credentials, and training before joining our platform. We maintain strict quality standards.</p>
          </div>
        </div>
        
        <div class="faq-item">
          <div class="faq-question">What if I'm not satisfied with the service?</div>
          <div class="faq-answer">
            <p>Customer satisfaction is guaranteed. If you're not completely happy with the service, contact us within 24 hours and we'll arrange for the issue to be resolved at no additional cost.</p>
          </div>
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
    document.addEventListener('DOMContentLoaded', function() {
      // Form submission
      const contactForm = document.getElementById('contact-form');
      if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
          e.preventDefault();
          // Here you would typically send the form data to your server
          // For demo purposes, we'll just show a success message
          alert('Thank you for contacting KaajWala! We will get back to you within 24 hours.');
          contactForm.reset();
        });
      }
      
      // FAQ functionality
      const faqQuestions = document.querySelectorAll('.faq-question');
      faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
          question.classList.toggle('active');
          const answer = question.nextElementSibling;
          answer.classList.toggle('show');
          
          // Close other open FAQs
          faqQuestions.forEach(q => {
            if (q !== question) {
              q.classList.remove('active');
              q.nextElementSibling.classList.remove('show');
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
    });
  </script>
</body>
</html>