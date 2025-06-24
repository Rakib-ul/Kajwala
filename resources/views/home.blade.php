<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KaajWala | Home</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .main-header {
      background: #f96d00;
      color: white;
      padding: 40px 20px;
      text-align: center;
    }

    .auth-section {
      background: white;
      padding: 40px 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
    }

    .auth-box {
      width: 100%;
      max-width: 400px;
      background: #fafafa;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    .btn {
      background: #f96d00;
      color: white;
      border: none;
      padding: 10px 20px;
      width: 100%;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn:hover {
      background: #e06700;
    }

    .auth-links {
      text-align: center;
      margin-top: 10px;
    }

    .auth-links a {
      color: #f96d00;
      text-decoration: none;
    }

    .auth-links span {
      margin: 0 8px;
      color: #aaa;
    }

    .info-section {
      padding: 30px 20px;
      background: #fffbe6;
    }

    .info-section h3 {
      text-align: center;
    }

    .info-section ul {
      list-style: none;
      padding: 0;
      max-width: 600px;
      margin: 20px auto;
    }

    .info-section li {
      padding: 10px;
      background: #fff;
      margin-bottom: 10px;
      border-left: 5px solid #f96d00;
      border-radius: 4px;
    }

    .footer {
      background: #222;
      color: white;
      text-align: center;
      padding: 20px;
    }

    .footer p {
      line-height: 1.6;
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
    img{
      height: 200px;
      width: 70px;
    }
  </style>
</head>
<body>
  <header class="main-header">
    <div>
      <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala Logo" style="height: 60px;">
    </div>
    <div class="container">
      <h1>Welcome to KaajWala</h1>
      <p>Your trusted platform to find skilled workers across Bangladesh</p>
    </div>
    <nav>
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/about') }}">About</a> |
      <a href="{{ url('/services') }}">Services</a> |
      <a href="{{ url('/contact') }}">Contact</a> |
      <a href="{{ url('/portfolio') }}">Protfolio</a>
    </nav>
  </header>

  <section class="auth-section">
    <div class="auth-box">
      <h2>Sign In as a User</h2>
      <form action="{{ url('/dashboard') }}" method="GET">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
          <button type="submit" class="btn">Sign In</button>
        </div>

        <div class="auth-links">
          <a href="{{ url('/password-reset') }}">Forgot Password?</a>
          <span>|</span>
          <a href="{{ url('/register-user') }}">Create an Account</a>
        </div>
      </form>
    </div>

    <div class="auth-box">
      <h2>Sign In as a Worker</h2>
      <form action="{{ url('/worker-profile') }}" method="GET">
        <div class="form-group">
          <label for="worker_email">Email Address</label>
          <input type="email" id="worker_email" name="worker_email" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="worker_password">Password</label>
          <input type="password" id="worker_password" name="worker_password" class="form-control" required>
        </div>

        <div class="form-group">
          <button type="submit" class="btn">Sign In</button>
        </div>

        <div class="auth-links">
          <a href="{{ url('/worker-forgot-password') }}">Forgot Password?</a>
          <span>|</span>
          <a href="{{ url('/worker-register') }}">Create Worker Account</a>
        </div>
      </form>
    </div>
  </section>

  <section class="info-section">
    <div class="container">
      <h3>Why KaajWala?</h3>
      <ul>
        <li>🔧 Book trusted electricians, plumbers, and handymen instantly</li>
        <li>📞 24/7 customer support available</li>
        <li>📍 Location-based worker search</li>
        <li>📱 Easy-to-use mobile and web interface</li>
        <li>✅ Verified profiles and reviews</li>
      </ul>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
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
