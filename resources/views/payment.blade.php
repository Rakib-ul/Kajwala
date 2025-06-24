<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment | KaajWala</title>
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
      padding: 40px 20px;
      text-align: center;
    }
    .container {
      max-width: 600px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    h2 {
      margin-bottom: 20px;
      color: #f96d00;
    }
    .payment-option {
      margin-bottom: 15px;
    }
    .payment-option label {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 16px;
    }
    .btn {
      display: inline-block;
      background: #f96d00;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 500;
      margin-top: 20px;
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
    <h1>Payment Page</h1>
    <p>Choose your preferred payment method to complete your booking</p>
  </header>

  <div class="container">
    <h2>Select Payment Method</h2>
    <form id="payment-form">
      <div class="payment-option">
        <label><input type="radio" name="payment" value="Visa/Master Card"> VISA / Master Card</label>
      </div>
      <div class="payment-option">
        <label><input type="radio" name="payment" value="Bkash"> Bkash</label>
      </div>
      <div class="payment-option">
        <label><input type="radio" name="payment" value="Rocket"> Rocket</label>
      </div>
      <div class="payment-option">
        <label><input type="radio" name="payment" value="Nagad"> Nagad</label>
      </div>
      <button type="submit" class="btn">Confirm Payment</button>
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
    document.getElementById('payment-form').addEventListener('submit', function (e) {
      e.preventDefault();
      const selected = document.querySelector('input[name="payment"]:checked');
      if (selected) {
        alert('Payment method selected: ' + selected.value + '\nRedirecting to payment gateway...');
        // Simulate redirect (you can replace with actual logic)
        window.location.href = '/confirmation';
      } else {
        alert('Please select a payment method.');
      }
    });
  </script>
</body>
</html>
