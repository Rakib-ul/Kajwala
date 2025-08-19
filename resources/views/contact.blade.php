<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
      --shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      --transition: all 0.3s ease;
      --border-radius: 10px;
    }

    * { box-sizing: border-box; }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f9f9f9, #eeeeee);
      color: var(--secondary);
      line-height: 1.6;
      margin: 0;
    }

    .container {
      width: 100%;
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Header */
    header {
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: var(--white);
      padding: 50px 0;
      text-align: center;
    }
    .logo {
      height: 65px;
      margin-bottom: 15px;
      transition: transform .3s ease;
    }
    .logo:hover { transform: scale(1.05); }
    header h1 {
      font-size: 2.4rem;
      font-weight: 700;
      margin: 8px 0 6px;
    }
    header p { margin: 0; opacity: .95; }

    /* Contact Section */
    .contact-container {
      padding: 70px 0;
      background: url('https://www.transparenttextures.com/patterns/white-wall-3.png');
    }

    /* GRID wrapper (single column) */
    .contact-grid {
      display: block; /* single card → block is fine */
      width: 100%;
    }

    /* Contact Card */
    .contact-form {
      background: var(--white);
      border-radius: var(--border-radius);
      box-shadow: var(--shadow);
      padding: 40px 35px;
      max-width: 550px;   /* fixed cap for consistent look */
      width: 100%;        /* shrink on small screens */
      margin: 0 auto;     /* PERFECTLY EQUAL left/right margins */
      transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
      animation: slideUp .8s ease forwards;
      border: 2px solid transparent;
      background-clip: padding-box;
      position: relative;
      overflow: hidden;
    }

    /* Subtle animated gradient edge on hover */
    .contact-form::before {
      content: "";
      position: absolute;
      inset: -2px;
      background: conic-gradient(from 180deg, rgba(249,109,0,.15), transparent 30%, rgba(249,109,0,.15) 60%, transparent 90%);
      z-index: -1;
      filter: blur(8px);
      opacity: 0;
      transition: opacity .4s ease;
    }
    .contact-form:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 25px rgba(249, 109, 0, 0.25);
      border-color: var(--primary);
    }
    .contact-form:hover::before { opacity: 1; }

    @keyframes slideUp {
      from { opacity: 0; transform: translateY(30px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .contact-form h2 {
      color: var(--primary);
      font-size: 1.9rem;
      margin: 0 0 24px;
      text-align: center;
    }

    /* Inputs */
    .form-group {
      margin-bottom: 22px;
      position: relative;
    }
    .form-control {
      width: 100%;
      padding: 14px 14px 14px 18px;
      border: 1px solid #ddd;
      border-radius: var(--border-radius);
      font-family: 'Poppins', sans-serif;
      font-size: 1rem;
      background: #fff;
      transition: border .3s, box-shadow .3s, transform .05s;
    }
    .form-control:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(249, 109, 0, 0.15);
    }
    .form-control:active { transform: scale(0.999); }

    textarea.form-control { min-height: 160px; }

    /* Button with sheen */
    .btn {
      background: var(--primary);
      color: var(--white);
      border: none;
      padding: 14px 32px;
      border-radius: 30px;
      cursor: pointer;
      font-weight: 600;
      font-size: 1rem;
      width: 100%;
      position: relative;
      overflow: hidden;
      z-index: 0;
      transition: transform .15s ease;
    }
    .btn:active { transform: translateY(1px); }
    .btn::after {
      content: "";
      position: absolute;
      top: 0; left: -120%;
      width: 100%; height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.35), transparent);
      transition: left .5s ease;
      z-index: -1;
    }
    .btn:hover::after { left: 120%; }

    /* Alerts & errors */
    .alert {
      padding: 14px;
      border-radius: var(--border-radius);
      margin-bottom: 22px;
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

    /* Responsive */
    @media (max-width: 768px) {
      header { padding: 42px 0; }
      .contact-container { padding: 55px 0; }
      .contact-form { padding: 30px; }
      .contact-form h2 { font-size: 1.6rem; }
    }
    @media (max-width: 480px) {
      .contact-form { padding: 24px; }
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <a href="{{ url('/') }}">
        <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala Logo" class="logo">
      </a>
      <h1>Contact KaajWala</h1>
      <p>Professional home services at your doorstep</p>
    </div>
  </header>

  <section class="contact-container">
    <div class="container">
      <div class="contact-grid">
        <div class="contact-form" role="form" aria-labelledby="formTitle">
          <h2 id="formTitle">Get in Touch</h2>

          @if(session('success'))
            <div class="alert alert-success" role="status" aria-live="polite">
              <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
          @endif

          <form method="POST" action="{{ route('contact.store') }}">
            @csrf

            <div class="form-group">
              <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Full Name *" required>
              @error('name')
                <span class="error-message"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
              @enderror
            </div>

            <div class="form-group">
              <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email Address *" required>
              @error('email')
                <span class="error-message"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
              @enderror
            </div>

            <div class="form-group">
              <input type="tel" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="Phone Number (+880)">
              @error('phone')
                <span class="error-message"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
              @enderror
            </div>

            <div class="form-group">
              <input type="text" id="subject" name="subject" class="form-control" value="{{ old('subject') }}" placeholder="Subject">
              @error('subject')
                <span class="error-message"><i class="fas fa-exclamation-circle"></i> {{ $message }}</span>
              @enderror
            </div>

            <div class="form-group">
              <textarea id="message" name="message" class="form-control" placeholder="Your Message *" required>{{ old('message') }}</textarea>
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
      // Disable button + show spinner on submit
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
