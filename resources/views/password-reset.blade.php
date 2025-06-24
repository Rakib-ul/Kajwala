<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password | KaajWala</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
      color: #333;
    }
    header {
      background: #f96d00;
      color: white;
      text-align: center;
      padding: 40px 20px;
    }
    .container {
      max-width: 500px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    h2 {
      color: #f96d00;
      text-align: center;
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: 500;
    }
    input[type="email"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    .btn {
      width: 100%;
      background: #f96d00;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }
    .btn:hover {
      background: #e06700;
    }
    footer {
      background: #222;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Forgot Password</h1>
    <p>Enter your email to reset your password</p>
  </header>

  <div class="container">
    <h2>Reset Password</h2>
    <form action="{{ url('/password-reset') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
      </div>
      <button type="submit" class="btn">Send Reset Link</button>
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
</body>
</html>
