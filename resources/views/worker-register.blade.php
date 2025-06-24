<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Worker Registration | KaajWala</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      background: #f4f4f4;
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
    input, select {
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
    <h1>Worker Registration</h1>
    <p>Join KaajWala and start getting job opportunities</p>
  </header>

  <div class="container">
    <h2>Create Worker Account</h2>
    <form action="{{ url('/register-worker') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" required>
      </div>

      <div class="form-group">
        <label for="profession">Profession</label>
        <input list="professions" name="profession" id="profession" required>
        <datalist id="professions">
          <option value="Electrician">
          <option value="Plumber">
          <option value="Cleaner">
          <option value="Mechanic">
          <option value="Painter">
          <option value="Carpenter">
          <option value="Mason">
          <option value="Welder">
          <option value="AC Technician">
          <option value="Refrigerator Technician">
          <option value="Washing Machine Technician">
          <option value="Cook">
          <option value="Housemaid">
          <option value="Security Guard">
          <option value="Tailor">
          <option value="Driver">
          <option value="Gardener">
          <option value="CCTV Installer">
          <option value="Pest Control Specialist">
          <option value="Glass Fitter">
          <option value="Tiles Worker">
          <option value="Roofing Specialist">
          <option value="Aluminum Worker">
          <option value="Interior Designer">
          <option value="Furniture Maker">
          <option value="Mobile Technician">
          <option value="Computer Technician">
          <option value="Printer Repairer">
          <option value="Network Installer">
          <option value="Internet Technician">
          <option value="Photographer">
          <option value="Event Organizer">
          <option value="Makeup Artist">
          <option value="Hair Stylist">
          <option value="Beautician">
          <option value="Laundry Service">
          <option value="Vehicle Mechanic">
          <option value="Delivery Rider">
          <option value="Cable Technician">
          <option value="Gas Line Fitter">
          <option value="Water Pump Technician">
          <option value="Bricklayer">
          <option value="Plaster Worker">
          <option value="Electric Pole Technician">
          <option value="Solar Panel Installer">
          <option value="Fabricator">
          <option value="Home Tutor">
          <option value="Babysitter">
          <option value="Decorator">
          <option value="Mover & Packer">
        </datalist>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>

      <button type="submit" class="btn">Register</button>
    </form>
  </div>

  <footer class="footer">
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