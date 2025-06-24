<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact KaajWala</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background: #f9f9f9;
      color: #333;
    }
    header {
      background: #f96d00;
      color: #fff;
      padding: 40px 20px;
      text-align: center;
    }
    .container {
      max-width: 700px;
      margin: 30px auto;
      padding: 20px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      font-weight: 500;
      display: block;
      margin-bottom: 5px;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    .btn {
      background: #f96d00;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 6px;
      cursor: pointer;
    }
    .btn:hover {
      background: #e06700;
    }
    footer {
      background: #222;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }
        nav a {
      color: white;
      font-weight: bold;
      text-decoration: none;
      margin: 0 10px;
      padding: 5px 10px;
      position: relative;
      transition: all 0.3s ease;
      font-size: 18px;
    }

    nav a:hover {
      color: #4CAF50;
      transform: translateY(-2px);
      text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    nav a::before {
      content: "";
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: #4CAF50;
      visibility: hidden;
      transition: all 0.3s ease-in-out;
    }

    nav a:hover::before {
      visibility: visible;
      width: 100%;
    }
  </style>
</head>
<body>
  <header>
        <div>
      <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala Logo" style="height: 60px;">
    </div>
    <h1>Contact KaajWala</h1>
    <p>We'd love to hear from you</p>
    <nav>
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/about') }}">About</a> |
      <a href="{{ url('/services') }}">Services</a> |
      <a href="{{ url('/contact') }}">Contact</a> |
      <a href="{{ url('/portfolio') }}">Protfolio</a>
    </nav>
  </header>

  <div class="container">
    <form id="contact-form">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn">Send Message</button>
    </form>
  </div>

  <footer>
    <div>
      <p>
        <strong>Emergency Contact:</strong> +880 1518996430<br>
        <strong>Email:</strong> kaajwala247@gmail.com<br>
        <strong>Address:</strong> Road no-5, Block A, Mirpur 1, Dhaka, Bangladesh<br>
        <strong>Working Days:</strong> Saturday to Saturday, 9:00 AM - 9:00 PM
      </p>
    </div>
  </footer>

  <script>
    document.getElementById('contact-form').addEventListener('submit', function (e) {
      e.preventDefault();
      alert('Thank you for contacting KaajWala! We will get back to you soon.');
    });
  </script>
</body>
</html>