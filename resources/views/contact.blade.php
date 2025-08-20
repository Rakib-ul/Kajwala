<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact KaajWala - Professional Home Services</title>
  <meta name="description" content="Get in touch with KaajWala for premium home services. Contact us via phone, email, or visit our office in Dhaka.">
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
      --border-radius: 8px;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background: var(--light);
      color: var(--secondary);
      line-height: 1.6;
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
      text-align: center;
    }
    
    .logo {
      height: 70px;
      margin-bottom: 15px;
      transition: var(--transition);
    }
    
    .logo:hover {
      transform: scale(1.05);
    }
    
    .header-content {
      text-align: center;
      position: relative;
      z-index: 2;
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
    
    .nav-links li {
      list-style: none;
    }
    
    .nav-links a {
      text-decoration: none;
    }
    
    /* Contact Section */
    .contact-container {
      padding: 60px 0;
    }
    
    .contact-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin-top: 30px;
    }
    
    /* Contact Form */
    .contact-form {
      background: var(--white);
      border-radius: var(--border-radius);
      box-shadow: var(--shadow);
      padding: 40px;
      transition: var(--transition);
    }
    
    .contact-form h2 {
      color: var(--primary);
      font-size: 1.8rem;
      margin-bottom: 25px;
      position: relative;
      padding-bottom: 15px;
    }
    
    .contact-form h2::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 60px;
      height: 3px;
      background: var(--primary);
    }
    
    .form-group {
      margin-bottom: 25px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 10px;
      font-weight: 500;
      color: var(--secondary);
    }
    
    .form-control {
      width: 100%;
      padding: 14px 18px;
      border: 1px solid #ddd;
      border-radius: var(--border-radius);
      font-family: 'Poppins', sans-serif;
      transition: var(--transition);
      font-size: 1rem;
    }
    
    .form-control:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(249, 109, 0, 0.1);
    }
    
    textarea.form-control {
      min-height: 180px;
    }
    
    .btn {
      display: inline-block;
      background: var(--primary);
      color: var(--white);
      border: none;
      padding: 14px 32px;
      border-radius: 30px;
      cursor: pointer;
      font-weight: 600;
      transition: var(--transition);
      font-size: 1rem;
      width: 100%;
    }
    
    .btn:hover {
      background: var(--primary-dark);
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(249, 109, 0, 0.3);
    }
    
    /* Alert Messages */
    .alert {
      padding: 15px;
      border-radius: var(--border-radius);
      margin-bottom: 25px;
      font-weight: 500;
    }
    
    .alert-success {
      background: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }
    
    .error-message {
      color: #dc3545;
      font-size: 0.85rem;
      margin-top: 5px;
      display: block;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
      header h1 {
        font-size: 2rem;
      }
      
      .contact-form {
        padding: 30px;
      }
      
      .contact-form h2 {
        font-size: 1.5rem;
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
      
      .contact-form {
        padding: 25px;
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
      <p>Professional home services at your doorstep</p>
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
        <div class="contact-form">
          <h2>Get in Touch</h2>
          
          @if(session('success'))
            <div class="alert alert-success">
              <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
          @endif
          
          <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            
            <div class="form-group">
              <label for="name">Full Name *</label>
              <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
              @error('name')
                <span class="error-message"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
              @enderror
            </div>
            
            <div class="form-group">
              <label for="email">Email Address *</label>
              <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
              @error('email')
                <span class="error-message"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
              @enderror
            </div>
            
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="+880">
              @error('phone')
                <span class="error-message"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
              @enderror
            </div>
            
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" class="form-control" value="{{ old('subject') }}" placeholder="What's this about?">
              @error('subject')
                <span class="error-message"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
              @enderror
            </div>
            
            <div class="form-group">
              <label for="message">Your Message *</label>
              <textarea id="message" name="message" class="form-control" required placeholder="How can we help you?">{{ old('message') }}</textarea>
              @error('message')
                <span class="error-message"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
              @enderror
            </div>
            
            <button type="submit" class="btn">
              <i class="fas fa-paper-plane"></i> Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
      // Form submission handler
      const contactForm = document.querySelector('form');
      if (contactForm) {
          contactForm.addEventListener('submit', function() {
              const btn = contactForm.querySelector('button[type="submit"]');
              if (btn) {
                  btn.disabled = true;
                  btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
              }
          });
      }
  });
  </script>
</body>
</html>