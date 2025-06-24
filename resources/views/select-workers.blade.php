<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select Workers | KaajWala</title>
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
      background: #f96d00;
      color: #fff;
      padding: 40px 20px;
      text-align: center;
    }
    .container {
      max-width: 1000px;
      margin: 30px auto;
      padding: 20px;
    }
    .worker-card {
      background: #fff;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }
    .worker-info {
      max-width: 75%;
    }
    .worker-info h3 {
      color: #f96d00;
      margin: 0 0 10px;
    }
    .worker-info p {
      margin: 5px 0;
    }
    .worker-actions {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      gap: 10px;
    }
    .worker-actions button, .worker-actions input[type="checkbox"] {
      cursor: pointer;
    }
    .details-btn {
      background: #f96d00;
      color: white;
      padding: 8px 16px;
      border: none;
      border-radius: 5px;
      text-decoration: none;
    }
    .details-btn:hover {
      background: #e06700;
    }
    footer {
      background: #222;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }
    .worker-photo {
     width: 70px;
     height: 70px;
     border-radius: 50%;
     object-fit: cover;
     border: 2px solid #f96d00;
    }


  </style>
</head>
<body>
  <header>
    <h1>Select Workers</h1>
    <p>Browse and choose the workers you need</p>
  </header>
<div class="container">

  <!-- Worker Cards (Same as before)... -->

  <!-- Confirm and Proceed Button -->
  <form action="{{ url('/payment') }}" method="GET" style="text-align: center; margin-top: 30px;">
    <button type="submit" class="details-btn">Confirm and Proceed</button>
  </form>
</div>
<div class="container">
  <div class="worker-card">
    <div class="worker-info" style="display: flex; align-items: center; gap: 20px;">
      <img src="{{ asset('images/rohim.png') }}" alt="Rahim Uddin" class="worker-photo">
      <div>
        <h3>Rahim Uddin</h3>
        <p>Profession: Electrician</p>
        <p>Completed Jobs: 42</p>
        <p>Rating: 4.8/5</p>
      </div>
    </div>
    <div class="worker-actions">
      <input type="checkbox" name="select_worker"> Select
      <a href="{{ url('/worker-details') }}" class="details-btn">Worker Details</a>
    </div>
  </div>

  <div class="worker-card">
    <div class="worker-info" style="display: flex; align-items: center; gap: 20px;">
      <img src="{{ asset('images/Shamim.png') }}" alt="Shamim Hossain" class="worker-photo">
      <div>
        <h3>Shoriful Islam</h3>
        <p>Profession: Plumber</p>
        <p>Completed Jobs: 32</p>
        <p>Rating: 4.6/5</p>
      </div>
    </div>
    <div class="worker-actions">
      <input type="checkbox" name="select_worker"> Select
      <a href="{{ url('/worker-details') }}" class="details-btn">Worker Details</a>
    </div>
  </div>

  <div class="worker-card">
    <div class="worker-info" style="display: flex; align-items: center; gap: 20px;">
      <img src="{{ asset('images/nasima.png') }}" alt="Nasima Akter" class="worker-photo">
      <div>
        <h3>Nasima Akter</h3>
        <p>Profession: Cleaner</p>
        <p>Completed Jobs: 28</p>
        <p>Rating: 4.9/5</p>
      </div>
    </div>
    <div class="worker-actions">
      <input type="checkbox" name="select_worker"> Select
      <a href="{{ url('/worker-details') }}" class="details-btn">Worker Details</a>
    </div>
  </div>
</div>
  <footer >
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