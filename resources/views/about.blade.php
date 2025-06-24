<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About KaajWala</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background-color: #f96d00;
      color: #fff;
      padding: 40px 20px;
      text-align: center;
    }

    .container {
      max-width: 900px;
      margin: 30px auto;
      padding: 0 20px;
    }

    h2 {
      color: #f96d00;
      margin-top: 20px;
    }

    .section {
      background: #fff;
      border-radius: 10px;
      padding: 25px;
      margin-bottom: 30px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    }

    footer {
      background: #222;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
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
    <h1>About KaajWala</h1>
    <p>Your trusted partner for home services in Bangladesh</p>
        <nav>
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/about') }}">About</a> |
      <a href="{{ url('/services') }}">Services</a> |
      <a href="{{ url('/contact') }}">Contact</a> |
      <a href="{{ url('/portfolio') }}">Protfolio</a>
    </nav>
  </header>

  <div class="container">
    <div class="section">
      <h2>Our Mission</h2>
      <p>KaajWala was created to bridge the gap between skilled workers and households. Our mission is to empower both service providers and customers by making professional help just a few clicks away.</p>
    </div>

    <div class="section">
      <h2>What We Offer</h2>
      <ul>
        <li>Electricians, plumbers, and home maintenance professionals</li>
        <li>Reliable booking and transparent pricing</li>
        <li>Verified profiles and customer reviews</li>
        <li>Support for urban and suburban households</li>
      </ul>
    </div>

    <div class="section">
      <h2>Why Trust Us?</h2>
      <p>We verify every service provider, ensure your satisfaction, and provide full support during and after service. With a user-friendly interface and strong privacy policies, we prioritize your safety and experience.</p>
    </div>
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
    // Optional interactive feature
    document.addEventListener('DOMContentLoaded', () => {
      console.log("About Page Loaded Successfully.");
    });
  </script>
</body>
</html>
