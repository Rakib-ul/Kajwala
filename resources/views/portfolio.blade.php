<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KaajWala Portfolio</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f4f4;
      color: #333;
    }
    header {
      background-color: #f96d00;
      color: #fff;
      padding: 40px 20px;
      text-align: center;
    }
    .container {
      max-width: 1000px;
      margin: 30px auto;
      padding: 20px;
    }
    .portfolio-item {
      background: #fff;
      border-radius: 8px;
      margin-bottom: 20px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }
    .portfolio-item h3 {
      margin-top: 0;
      color: #f96d00;
    }
    .portfolio-item p {
      margin: 10px 0;
    }
    footer {
      background: #222;
      color: white;
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
    <h1>Our Portfolio</h1>
    <p>Real jobs by real professionals</p>
      <nav>
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/about') }}">About</a> |
      <a href="{{ url('/services') }}">Services</a> |
      <a href="{{ url('/contact') }}">Contact</a> |
      <a href="{{ url('/portfolio') }}">Protfolio</a>
    </nav>
  </header>

  <div class="container">
    <div class="portfolio-item">
      <h3>Mirpur Electric Overhaul</h3>
      <p>Installation of ceiling lights, new switchboards, and full wiring in a 3-bedroom apartment.</p>
    </div>
    <div class="portfolio-item">
      <h3>Dhanmondi Plumbing Rescue</h3>
      <p>Emergency pipe burst repair with total washroom refit and tile sealing.</p>
    </div>
    <div class="portfolio-item">
      <h3>Uttara Deep Clean Project</h3>
      <p>Pre-festival house deep cleaning for a 2000 sqft residence with 5-person team.</p>
    </div>
  </div>

  <footer>
    <div >
      <p>
        <strong>Emergency Contact:</strong> +880 1518996430<br>
        <strong>Email:</strong> kaajwala247@gmail.com<br>
        <strong>Address:</strong> Road no-5, Block A, Mirpur 1, Dhaka, Bangladesh<br>
        <strong>Working Days:</strong> Saturday to Saturday, 9:00 AM - 9:00 PM
      </p>
    </div>
  </footer>
</body>
</html>
