<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Payment Gateway</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .header {
            width: 100%;
            background-color: #e08a19;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            z-index: 1000;
        }
        
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        
        .logo {
            color: white;
            font-size: 24px;
            font-weight: 700;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 25px;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .nav-links a:hover {
            color: #ffd8a8;
        }
        
        .payment-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            overflow: hidden;
            margin-top: 80px;
        }
        
        .payment-header {
            background: #e08a19;
            color: white;
            padding: 25px;
            text-align: center;
        }
        
        .payment-header h2 {
            font-weight: 600;
            font-size: 24px;
        }
        
        .payment-body {
            padding: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #333;
        }
        
        .input-field {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s;
        }
        
        .input-field:focus {
            outline: none;
            border-color: #e08a19;
            box-shadow: 0 0 0 3px rgba(224, 138, 25, 0.1);
        }
        
        .payment-options {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .payment-option {
            text-align: center;
            padding: 15px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .payment-option.active {
            border-color: #e08a19;
            background-color: rgba(224, 138, 25, 0.05);
        }
        
        .payment-option i {
            font-size: 24px;
            margin-bottom: 10px;
            display: block;
            color: #e08a19;
        }
        
        .payment-details {
            background: #f8fafc;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            display: none;
        }
        
        .payment-details.active {
            display: block;
            animation: fadeIn 0.5s;
        }
        
        .card-type {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .card-type-icon {
            width: 40px;
            height: 24px;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f1f5f9;
            border-radius: 4px;
        }
        
        .card-type-text {
            font-weight: 500;
        }
        
        .card-input-row {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 15px;
        }
        
        .button-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 25px;
        }
        
        .submit-btn {
            padding: 16px;
            background: #e08a19;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .submit-btn i {
            margin-right: 8px;
        }
        
        .submit-btn:hover {
            background: #c57612;
        }
        
        .cancel-btn {
            padding: 16px;
            background: #f1f5f9;
            color: #64748b;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }
        
        .cancel-btn:hover {
            background: #e2e8f0;
        }
        
        .security-note {
            text-align: center;
            margin-top: 20px;
            color: #64748b;
            font-size: 14px;
        }
        
        .security-note i {
            color: #e08a19;
            margin-right: 5px;
        }
        
        footer {
            width: 100%;
            background-color: #e08a19;
            color: white;
            padding: 30px 0;
            margin-top: 40px;
            text-align: center;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            list-style: none;
            margin: 20px 0;
        }
        
        .footer-links li {
            margin: 0 15px;
        }
        
        .footer-links a {
            color: white;
            text-decoration: none;
        }
        
        .footer-links a:hover {
            text-decoration: underline;
        }
        
        .copyright {
            margin-top: 20px;
            font-size: 14px;
            opacity: 0.8;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @media (max-width: 768px) {
            .payment-options {
                grid-template-columns: 1fr;
            }
            
            .card-input-row {
                grid-template-columns: 1fr;
            }
            
            .button-group {
                grid-template-columns: 1fr;
            }
            
            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="nav-container">
            <div class="logo">
                <i class="fas fa-store"></i>Kaajwala
            </div>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
            </ul>
        </div>
    </header>
    
    <div class="payment-container">
        <div class="payment-header">
            <h2><i class="fas fa-lock"></i> Secure Payment Gateway</h2>
        </div>
        
        <div class="payment-body">
            <form id="checkout-form" action="{{ route('payment.confirm') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="cus_name">Full Name</label>
                    <input type="text" id="cus_name" name="cus_name" class="input-field" placeholder="Enter your full name" required>
                </div>
                
                <div class="form-group">
                    <label for="cus_email">Email Address</label>
                    <input type="email" id="cus_email" name="cus_email" class="input-field" placeholder="Enter your email" required>
                </div>
                
                <div class="form-group">
                    <label for="cus_phone">Phone Number</label>
                    <input type="text" id="cus_phone" name="cus_phone" class="input-field" placeholder="Enter your phone number" required>
                </div>
                
                <div class="form-group">
                    <label for="cus_add1">Delivery Address</label>
                    <input type="text" id="cus_add1" name="cus_add1" class="input-field" placeholder="Enter your delivery address" required>
                </div>
                
                <div class="form-group">
                    <label for="amount">Amount (BDT)</label>
                    <input type="number" id="amount" name="amount" class="input-field" placeholder="Enter amount" min="1" required>
                </div>
                
                <div class="form-group">
                    <label>Payment Method</label>
                    <div class="payment-options">
                        <div class="payment-option active" data-value="cod">
                            <i class="fas fa-money-bill-wave"></i>
                            <span>Cash on Delivery</span>
                        </div>
                        <div class="payment-option" data-value="online">
                            <i class="fas fa-credit-card"></i>
                            <span>Card Payment</span>
                        </div>
                        <div class="payment-option" data-value="mobile">
                            <i class="fas fa-mobile-alt"></i>
                            <span>Mobile Banking</span>
                        </div>
                    </div>
                    <input type="hidden" name="payment_option" value="cod" id="payment-option-input">
                </div>
                
                <!-- Online Payment Fields -->
                <div class="payment-details" id="online-payment-fields">
                    <div class="card-type" id="card-type-indicator">
                        <div class="card-type-icon" id="card-icon">
                            <i class="far fa-credit-card"></i>
                        </div>
                        <div class="card-type-text" id="card-type-text">Card Type</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="card_number">Card Number</label>
                        <input type="text" id="card_number" name="card_number" class="input-field" placeholder="Enter card number">
                    </div>
                    
                    <div class="card-input-row">
                        <div class="form-group">
                            <label for="exp_month">Expiration Month</label>
                            <input type="text" id="exp_month" name="exp_month" class="input-field" placeholder="MM">
                        </div>
                        
                        <div class="form-group">
                            <label for="exp_year">Expiration Year</label>
                            <input type="text" id="exp_year" name="exp_year" class="input-field" placeholder="YY">
                        </div>
                        
                        <div class="form-group">
                            <label for="cvc">CVC</label>
                            <input type="text" id="cvc" name="cvc" class="input-field" placeholder="CVC">
                        </div>
                    </div>
                </div>
                
                <!-- Mobile Banking Fields -->
                <div class="payment-details" id="mobile-payment-fields">
                    <div class="form-group">
                        <label for="mobile_provider">Select Provider</label>
                        <select name="mobile_provider" id="mobile_provider" class="input-field">
                            <option value="">--Select Provider--</option>
                            <option value="bkash">bKash</option>
                            <option value="nagad">Nagad</option>
                            <option value="upay">Upay</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="mobile_number">Mobile Number</label>
                        <input type="text" id="mobile_number" name="mobile_number" class="input-field" placeholder="Enter mobile number">
                    </div>
                    
                    <div class="form-group">
                        <label for="transaction_id">Transaction ID</label>
                        <input type="text" id="transaction_id" name="transaction_id" class="input-field" placeholder="Enter transaction ID">
                    </div>
                </div>
                
                <div class="button-group">
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-lock"></i> Place Order Securely
                    </button>
                    
                    <a href="/" class="cancel-btn">
                        <i class="fas fa-times"></i> Cancel & Go to Home
                    </a>
                </div>
                
                <div class="security-note">
                    <i class="fas fa-shield-alt"></i> Your payment information is encrypted and secure
                </div>
            </form>
        </div>
    </div>
    
    <footer>
        <div class="footer-content">
            <h3>Kaajwala</h3>
            <ul class="footer-links">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <div class="copyright">
                &copy; 2023 ShopName. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Payment option selection
            const paymentOptions = document.querySelectorAll('.payment-option');
            const paymentOptionInput = document.getElementById('payment-option-input');
            const onlinePaymentFields = document.getElementById('online-payment-fields');
            const mobilePaymentFields = document.getElementById('mobile-payment-fields');
            const onlineInputs = onlinePaymentFields.querySelectorAll('input');
            const mobileInputs = mobilePaymentFields.querySelectorAll('input, select');
            
            paymentOptions.forEach(option => {
                option.addEventListener('click', function() {
                    paymentOptions.forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');
                    
                    const value = this.getAttribute('data-value');
                    paymentOptionInput.value = value;
                    
                    // Hide all payment detail sections first
                    onlinePaymentFields.classList.remove('active');
                    mobilePaymentFields.classList.remove('active');
                    
                    // Remove required attributes from all inputs
                    onlineInputs.forEach(input => input.required = false);
                    mobileInputs.forEach(input => input.required = false);
                    
                    // Show the relevant section and set required attributes
                    if (value === 'online') {
                        onlinePaymentFields.classList.add('active');
                        onlineInputs.forEach(input => input.required = true);
                    } else if (value === 'mobile') {
                        mobilePaymentFields.classList.add('active');
                        mobileInputs.forEach(input => input.required = true);
                    }
                });
            });
            
            // Card type detection
            const cardNumberInput = document.getElementById('card_number');
            const cardIcon = document.getElementById('card-icon');
            const cardTypeText = document.getElementById('card-type-text');
            
            cardNumberInput.addEventListener('input', function() {
                const cardNumber = this.value.replace(/\s+/g, '');
                detectCardType(cardNumber);
            });
            
            function detectCardType(cardNumber) {
                let cardType = 'Unknown';
                let iconClass = 'far fa-credit-card';
                
                // Visa
                if (/^4/.test(cardNumber)) {
                    cardType = 'Visa';
                    iconClass = 'fab fa-cc-visa';
                } 
                // Mastercard
                else if (/^5[1-5]/.test(cardNumber)) {
                    cardType = 'Mastercard';
                    iconClass = 'fab fa-cc-mastercard';
                }
                // American Express
                else if (/^3[47]/.test(cardNumber)) {
                    cardType = 'American Express';
                    iconClass = 'fab fa-cc-amex';
                }
                // Discover
                else if (/^6(?:011|5)/.test(cardNumber)) {
                    cardType = 'Discover';
                    iconClass = 'fab fa-cc-discover';
                }
                // Diners Club
                else if (/^3(?:0[0-5]|[68])/.test(cardNumber)) {
                    cardType = 'Diners Club';
                    iconClass = 'fab fa-cc-diners-club';
                }
                // JCB
                else if (/^35/.test(cardNumber)) {
                    cardType = 'JCB';
                    iconClass = 'fab fa-cc-jcb';
                }
                
                cardIcon.innerHTML = `<i class="${iconClass}"></i>`;
                cardTypeText.textContent = cardType;
                
                // Format card number with spaces
                if (cardNumber.length > 0) {
                    const formatted = cardNumber.replace(/\s+/g, '').replace(/(\d{4})/g, '$1 ').trim();
                    if (cardNumberInput.value !== formatted) {
                        cardNumberInput.value = formatted;
                    }
                }
            }
            
            // Format expiration dates
            const expMonthInput = document.getElementById('exp_month');
            const expYearInput = document.getElementById('exp_year');
            const cvcInput = document.getElementById('cvc');
            
            expMonthInput.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
                if (this.value.length > 2) {
                    this.value = this.value.slice(0, 2);
                }
                if (this.value.length === 2) {
                    expYearInput.focus();
                }
            });
            
            expYearInput.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
                if (this.value.length > 2) {
                    this.value = this.value.slice(0, 2);
                }
                if (this.value.length === 2) {
                    cvcInput.focus();
                }
            });
            
            cvcInput.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
                if (this.value.length > 3) {
                    this.value = this.value.slice(0, 3);
                }
            });
            
            // Mobile number formatting
            const mobileNumberInput = document.getElementById('mobile_number');
            
            mobileNumberInput.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9+]/g, '');
            });
        });
    </script>
</body>
</html>