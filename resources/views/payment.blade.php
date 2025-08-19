<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaajWala | Payment</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #5a67d8;
            --primary-dark: #4c51bf;
            --secondary: #4a5568;
            --light: #f7fafc;
            --dark: #2d3748;
            --white: #ffffff;
            --gray: #e2e8f0;
            --success: #48bb78;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--light);
            color: var(--secondary);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        .main-header {
            background: var(--white);
            box-shadow: var(--shadow);
            padding: 15px 0;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            height: 40px;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--gray);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            overflow: hidden;
        }

        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Payment Content */
        .payment-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .payment-card {
            background: var(--white);
            border-radius: 16px;
            box-shadow: var(--shadow);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        .payment-header {
            margin-bottom: 30px;
        }

        .payment-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: rgba(90, 103, 216, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: var(--primary);
            font-size: 2.5rem;
        }

        .payment-title {
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 10px;
            font-weight: 600;
        }

        .payment-description {
            color: var(--secondary);
            margin-bottom: 10px;
        }

        .payment-amount {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--dark);
            margin: 20px 0;
        }

        .payment-details {
            background: var(--light);
            border-radius: 12px;
            padding: 20px;
            margin: 25px 0;
            text-align: left;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--gray);
        }

        .detail-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .detail-item .label {
            color: var(--secondary);
            font-weight: 500;
        }

        .detail-item .value {
            font-weight: 600;
        }

        /* Payment Button */
        .payment-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--success);
            color: var(--white);
            border: none;
            padding: 18px 30px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            width: 100%;
            box-shadow: 0 4px 14px 0 rgba(72, 187, 120, 0.4);
            margin-top: 20px;
        }

        .payment-btn:hover {
            background: #38a169;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px 0 rgba(72, 187, 120, 0.5);
        }

        .payment-btn:active {
            transform: translateY(0);
        }

        .payment-btn i {
            margin-right: 12px;
            font-size: 1.3rem;
        }

        /* Payment Methods */
        .payment-methods {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        .payment-method {
            width: 60px;
            height: 40px;
            border: 1px solid var(--gray);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--secondary);
            background: var(--white);
        }

        /* Footer */
        .footer {
            background: var(--dark);
            color: var(--white);
            padding: 30px 0;
            margin-top: auto;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .copyright {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .payment-card {
                padding: 30px 20px;
            }
            
            .payment-title {
                font-size: 1.5rem;
            }
            
            .payment-amount {
                font-size: 1.8rem;
            }
            
            .footer-content {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header with Navigation -->
    <header class="main-header">
        <div class="container header-content">
            <a href="#">
                <div class="logo">KaajWala</div>
            </a>

            <div class="user-menu">
                <a href="#" class="user-avatar">
                    <img src="https://ui-avatars.com/api/?name=User+Name&background=5a67d8&color=fff" alt="User Avatar">
                </a>
            </div>
        </div>
    </header>

    <!-- Payment Content -->
    <main class="payment-container">
        <div class="payment-card">
            <div class="payment-header">
                <div class="payment-icon">
                    <i class="fas fa-credit-card"></i>
                </div>
                <h1 class="payment-title">Complete Your Payment</h1>
                <p class="payment-description">Service: AC Repair & Maintenance</p>
                <div class="payment-amount">৳ 2,500.00</div>
            </div>

            <div class="payment-details">
                <div class="detail-item">
                    <span class="label">Service Cost</span>
                    <span class="value">৳ 2,200.00</span>
                </div>
                <div class="detail-item">
                    <span class="label">Service Fee</span>
                    <span class="value">৳ 300.00</span>
                </div>
                <div class="detail-item">
                    <span class="label">Discount</span>
                    <span class="value" style="color: var(--success);">-৳ 200.00</span>
                </div>
                <div class="detail-item">
                    <span class="label">Tax</span>
                    <span class="value">৳ 200.00</span>
                </div>
            </div>

            <button class="payment-btn">
                <i class="fas fa-lock"></i> Pay Now
            </button>

            <div class="payment-methods">
                <div class="payment-method">
                    <i class="fab fa-cc-visa"></i>
                </div>
                <div class="payment-method">
                    <i class="fab fa-cc-mastercard"></i>
                </div>
                <div class="payment-method">
                    <i class="fab fa-cc-amex"></i>
                </div>
                <div class="payment-method">
                    <i class="fab fa-cc-paypal"></i>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-content">
            <div class="copyright">
                <p>&copy; 2023 KaajWala. All Rights Reserved.</p>
            </div>
            <div class="footer-links">
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const paymentBtn = document.querySelector('.payment-btn');
            
            paymentBtn.addEventListener('click', function() {
                // Simulate payment processing
                paymentBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
                paymentBtn.disabled = true;
                
                // Simulate API call
                setTimeout(function() {
                    alert('Payment successful! Thank you for your payment.');
                    paymentBtn.innerHTML = '<i class="fas fa-check"></i> Payment Successful';
                    paymentBtn.style.background = '#2f855a';
                }, 2000);
            });
        });
    </script>
</body>
</html>