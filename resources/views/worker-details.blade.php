<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Worker Profile | KaajWala</title>
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
      color: #fff;
      padding: 40px 20px;
      text-align: center;
    }
    .container {
      max-width: 800px;
      margin: 30px auto;
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }
    .profile-header {
      display: flex;
      align-items: center;
      gap: 20px;
    }
    .profile-header img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #f96d00;
    }
    .profile-info h2 {
      margin: 0;
      color: #f96d00;
    }
    .profile-info p {
      margin: 5px 0;
    }
    .service-history {
      margin-top: 30px;
    }
    .service-history h3 {
      color: #f96d00;
    }
    .service-history ul {
      list-style: none;
      padding: 0;
    }
    .service-history li {
      padding: 10px;
      border-bottom: 1px solid #eee;
    }
    footer {
      background: #222;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Worker Profile</h1>
    <p>Meet our trusted professional</p>
  </header>

  <div class="container">
    <div class="profile-header">
      <img src="{{ asset('images/rohim.png') }}" alt="Worker Photo">
      <div class="profile-info">
        <h2>Rahim Uddin</h2>
        <p><strong>Profession:</strong> Electrician</p>
        <p><strong>Experience:</strong> 7 years</p>
        <p><strong>Completed Jobs:</strong> 42</p>
        <p><strong>Rating:</strong> 4.8/5</p>
        <p><strong>Location:</strong> Mirpur, Dhaka</p>
      </div>
    </div>

    <div class="service-history">
      <h3>Recent Work History</h3>
      <ul>
        <li>Ceiling fan installation – June 2025</li>
        <li>Wiring upgrade – May 2025</li>
        <li>Switchboard replacement – April 2025</li>
      </ul>
    </div>
  </div>

  <footer >
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
