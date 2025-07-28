<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payment Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #FFA500;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .button-container {
      text-align: center;
    }

    .payment-button {
      background-color: #FF8C00;
      color: white;
      border: none;
      padding: 15px 30px;
      font-size: 18px;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .payment-button:hover {
      background-color: #e67600;
    }
  </style>
</head>
<body>
  <div class="button-container">
    <form id="paymentForm" action="process_payment.php" method="post">
      <input type="hidden" name="amount" value="500">
      <input type="hidden" name="customer_name" value="John Doe">
      <input type="hidden" name="customer_phone" value="01711111111">
      <input type="hidden" name="customer_address" value="Dhaka">
      <input type="hidden" name="customer_email" value="john@example.com">
      <button class="payment-button" type="submit">Proceed to Payment</button>
    </form>
  </div>

  <script>
    document.getElementById('paymentForm').addEventListener('submit', function () {
      document.querySelector('.payment-button').innerText = 'Redirecting...';
    });
  </script>
</body>
</html>
