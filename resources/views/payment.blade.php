<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment | KaajWala</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #fff5f0 0%, #ffffff 50%, #fff5f0 100%);
            color: #333;
            overflow-x: hidden;
            position: relative;
        }

        /* Animated Background Elements */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .shape-1 {
            width: 80px;
            height: 80px;
            background: linear-gradient(45deg, #f96d00, #ff8533);
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 120px;
            height: 120px;
            background: linear-gradient(45deg, #ff8533, #ffb366);
            top: 20%;
            right: 15%;
            animation-delay: 2s;
        }

        .shape-3 {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #ffb366, #f96d00);
            bottom: 30%;
            left: 20%;
            animation-delay: 4s;
        }

        .shape-4 {
            width: 100px;
            height: 100px;
            background: linear-gradient(45deg, #f96d00, #e06700);
            bottom: 20%;
            right: 10%;
            animation-delay: 1s;
        }

        /* Mouse Follower */
        .mouse-follower {
            position: fixed;
            width: 20px;
            height: 20px;
            background: radial-gradient(circle, #f96d00, #ff8533);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.6;
            transition: transform 0.3s ease;
            transform: translate(-50%, -50%);
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #f96d00 0%, #e06700 50%, #d45a00 100%);
            color: white;
            padding: 60px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
            z-index: 2;
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            animation: shimmer 3s infinite;
        }

        header h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: slideInDown 1s ease-out;
        }

        header p {
            font-size: 1.3rem;
            opacity: 0.95;
            max-width: 600px;
            margin: 0 auto;
            animation: slideInUp 1s ease-out 0.3s both;
        }

        .header-icon {
            display: inline-block;
            font-size: 4rem;
            margin-bottom: 20px;
            animation: bounce 2s infinite;
        }

        /* Stats Section */
        .stats-section {
            padding: 60px 20px;
            background: rgba(255,255,255,0.8);
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 2;
        }

        .stats-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .stat-card {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(249, 109, 0, 0.1);
            border: 2px solid transparent;
            transition: all 0.4s ease;
            transform: translateY(50px);
            opacity: 0;
            animation: slideInUp 0.8s ease-out forwards;
        }

        .stat-card:nth-child(1) { animation-delay: 0.1s; }
        .stat-card:nth-child(2) { animation-delay: 0.2s; }
        .stat-card:nth-child(3) { animation-delay: 0.3s; }
        .stat-card:nth-child(4) { animation-delay: 0.4s; }

        .stat-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 20px 40px rgba(249, 109, 0, 0.2);
            border-color: #f96d00;
        }

        .stat-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #f96d00, #ff8533);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: white;
            box-shadow: 0 10px 20px rgba(249, 109, 0, 0.3);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #f96d00;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #666;
            font-weight: 500;
        }

        /* Main Container */
        .container {
            max-width: 800px;
            margin: 60px auto;
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(20px);
            padding: 50px;
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            border: 1px solid rgba(249, 109, 0, 0.1);
            position: relative;
            z-index: 2;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #f96d00, #ff8533, #f96d00);
            border-radius: 30px 30px 0 0;
            animation: gradientShift 3s ease-in-out infinite;
        }

        h2 {
            margin-bottom: 40px;
            color: #f96d00;
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            position: relative;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #f96d00, #ff8533);
            border-radius: 2px;
        }

        /* Payment Options */
        .payment-option {
            margin-bottom: 20px;
            opacity: 0;
            transform: translateX(-50px);
            animation: slideInLeft 0.6s ease-out forwards;
        }

        .payment-option:nth-child(1) { animation-delay: 0.7s; }
        .payment-option:nth-child(2) { animation-delay: 0.8s; }
        .payment-option:nth-child(3) { animation-delay: 0.9s; }
        .payment-option:nth-child(4) { animation-delay: 1.0s; }

        .payment-card {
            background: white;
            border: 3px solid #e0e0e0;
            border-radius: 20px;
            padding: 25px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .payment-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(249, 109, 0, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .payment-card:hover::before {
            left: 100%;
        }

        .payment-card:hover {
            transform: translateY(-8px) scale(1.02);
            border-color: #f96d00;
            box-shadow: 0 15px 40px rgba(249, 109, 0, 0.2);
        }

        .payment-card.selected {
            border-color: #f96d00;
            background: linear-gradient(135deg, #fff5f0, #ffffff);
            transform: scale(1.03);
            box-shadow: 0 20px 50px rgba(249, 109, 0, 0.25);
        }

        .payment-card.selected::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #f96d00, #ff8533);
            animation: pulse 2s infinite;
        }

        .payment-content {
            display: flex;
            align-items: center;
            gap: 20px;
            position: relative;
            z-index: 1;
        }

        .payment-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #f96d00, #ff8533);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: white;
            box-shadow: 0 8px 20px rgba(249, 109, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .payment-card:hover .payment-icon {
            transform: rotate(10deg) scale(1.1);
        }

        .payment-info {
            flex: 1;
        }

        .payment-name {
            font-size: 1.4rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .payment-desc {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 12px;
        }

        .payment-features {
            display: flex;
            gap: 15px;
            font-size: 0.85rem;
            color: #888;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .feature i {
            color: #f96d00;
        }

        .radio-container {
            position: relative;
        }

        .radio-input {
            appearance: none;
            width: 24px;
            height: 24px;
            border: 3px solid #ddd;
            border-radius: 50%;
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .radio-input:checked {
            border-color: #f96d00;
            background: #f96d00;
        }

        .radio-input:checked::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 8px;
            height: 8px;
            background: white;
            border-radius: 50%;
        }

        /* Progress Bar */
        .progress-container {
            margin-top: 15px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .payment-card.selected .progress-container {
            opacity: 1;
        }

        .progress-label {
            display: flex;
            justify-content: between;
            font-size: 0.8rem;
            color: #666;
            margin-bottom: 5px;
        }

        .progress-bar {
            width: 100%;
            height: 6px;
            background: #e0e0e0;
            border-radius: 3px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #f96d00, #ff8533);
            border-radius: 3px;
            transition: width 1s ease;
            width: 0;
        }

        .payment-card.selected .progress-fill {
            width: var(--progress-width);
        }

        /* Submit Button */
        .btn {
            width: 100%;
            background: linear-gradient(135deg, #f96d00, #e06700);
            color: white;
            padding: 18px 30px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.2rem;
            margin-top: 40px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(249, 109, 0, 0.3);
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.6s ease;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(249, 109, 0, 0.4);
        }

        .btn:active {
            transform: translateY(-1px);
        }

        .btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .btn-loading {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .spinner {
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255,255,255,0.3);
            border-top: 2px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        /* Success Modal */
        .success-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .success-modal.show {
            opacity: 1;
            visibility: visible;
        }

        .success-content {
            background: white;
            padding: 50px;
            border-radius: 30px;
            text-align: center;
            max-width: 500px;
            width: 90%;
            transform: scale(0.8);
            transition: transform 0.3s ease;
        }

        .success-modal.show .success-content {
            transform: scale(1);
        }

        .success-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            font-size: 3rem;
            color: white;
            animation: bounceIn 0.8s ease-out;
        }

        .success-title {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }

        .success-message {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 30px;
        }

        .transaction-id {
            background: #f5f5f5;
            padding: 15px;
            border-radius: 10px;
            font-family: monospace;
            font-size: 1rem;
            color: #333;
            border-left: 4px solid #f96d00;
        }

        /* Testimonials */
        .testimonials {
            padding: 60px 20px;
            background: rgba(255,255,255,0.9);
            position: relative;
            z-index: 2;
        }

        .testimonials-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .testimonials h3 {
            font-size: 2.5rem;
            color: #f96d00;
            margin-bottom: 50px;
            font-weight: 700;
        }

        .testimonial-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .testimonial-card.active {
            opacity: 1;
            transform: translateY(0);
        }

        .stars {
            color: #ffc107;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .testimonial-text {
            font-size: 1.2rem;
            color: #333;
            font-style: italic;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .testimonial-author {
            font-weight: 600;
            color: #f96d00;
            font-size: 1.1rem;
        }

        .testimonial-role {
            color: #666;
            font-size: 0.95rem;
        }

        .testimonial-dots {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 30px;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ddd;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dot.active {
            background: #f96d00;
            transform: scale(1.2);
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #222, #333);
            color: white;
            padding: 60px 20px 30px;
            position: relative;
            z-index: 2;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section {
            transition: transform 0.3s ease;
        }

        .footer-section:hover {
            transform: translateY(-5px);
        }

        .footer-title {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #f96d00;
        }

        .footer-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #f96d00, #ff8533);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .footer-text {
            color: #ccc;
            line-height: 1.6;
            transition: color 0.3s ease;
        }

        .footer-section:hover .footer-text {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 30px;
            text-align: center;
            color: #999;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #f96d00, #ff8533);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .logo-text {
            font-size: 2rem;
            font-weight: 800;
            color: white;
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        @keyframes slideInDown {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        @keyframes bounceIn {
            0% { opacity: 0; transform: scale(0.3); }
            50% { opacity: 1; transform: scale(1.05); }
            70% { transform: scale(0.9); }
            100% { opacity: 1; transform: scale(1); }
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 { font-size: 2.5rem; }
            header p { font-size: 1.1rem; }
            .container { margin: 30px 20px; padding: 30px 25px; }
            h2 { font-size: 2rem; }
            .payment-content { flex-direction: column; text-align: center; }
            .payment-features { justify-content: center; }
            .stats-container { grid-template-columns: repeat(2, 1fr); gap: 20px; }
            .footer-content { grid-template-columns: 1fr; text-align: center; }
        }

        @media (max-width: 480px) {
            header { padding: 40px 15px; }
            header h1 { font-size: 2rem; }
            .container { padding: 25px 20px; }
            .payment-card { padding: 20px; }
            .stats-container { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="bg-animation">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
        <div class="floating-shape shape-4"></div>
    </div>

    <!-- Mouse Follower -->
    <div class="mouse-follower" id="mouseFollower"></div>

    <!-- Header -->
    <header>
        <div class="header-icon">
            <i class="fas fa-credit-card"></i>
        </div>
        <h1>Secure Payment Gateway</h1>
        <p>Experience lightning-fast, secure payments with Bangladesh's most trusted payment platform</p>
    </header>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-number" data-target="50000">0</div>
                <div class="stat-label">Happy Customers</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="stat-number" data-target="99.9">0</div>
                <div class="stat-label">Success Rate (%)</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <div class="stat-number" data-target="30">0</div>
                <div class="stat-label">Avg Processing (sec)</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="stat-number" data-target="4.9">0</div>
                <div class="stat-label">Customer Rating</div>
            </div>
        </div>
    </section>

    <!-- Main Payment Container -->
    <div class="container">
        <h2>Choose Your Payment Method</h2>
        <form id="payment-form">
            <div class="payment-option">
                <div class="payment-card" data-payment="visa-master" data-progress="95">
                    <div class="payment-content">
                        <div class="payment-icon">
                            <i class="fab fa-cc-visa"></i>
                        </div>
                        <div class="payment-info">
                            <div class="payment-name">VISA / Master Card</div>
                            <div class="payment-desc">Secure international payment with instant processing</div>
                            <div class="payment-features">
                                <div class="feature">
                                    <i class="fas fa-clock"></i>
                                    <span>Instant</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-percentage"></i>
                                    <span>2.5% fee</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-users"></i>
                                    <span>95% users</span>
                                </div>
                            </div>
                        </div>
                        <div class="radio-container">
                            <input type="radio" name="payment" value="Visa/Master Card" class="radio-input">
                        </div>
                    </div>
                    <div class="progress-container">
                        <div class="progress-label">
                            <span>Popularity</span>
                            <span>95%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="--progress-width: 95%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="payment-option">
                <div class="payment-card" data-payment="bkash" data-progress="98">
                    <div class="payment-content">
                        <div class="payment-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="payment-info">
                            <div class="payment-name">bKash</div>
                            <div class="payment-desc">Bangladesh's most popular mobile financial service</div>
                            <div class="payment-features">
                                <div class="feature">
                                    <i class="fas fa-clock"></i>
                                    <span>&lt; 1 min</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-percentage"></i>
                                    <span>1.8% fee</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-users"></i>
                                    <span>98% users</span>
                                </div>
                            </div>
                        </div>
                        <div class="radio-container">
                            <input type="radio" name="payment" value="Bkash" class="radio-input">
                        </div>
                    </div>
                    <div class="progress-container">
                        <div class="progress-label">
                            <span>Popularity</span>
                            <span>98%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="--progress-width: 98%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="payment-option">
                <div class="payment-card" data-payment="rocket" data-progress="85">
                    <div class="payment-content">
                        <div class="payment-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="payment-info">
                            <div class="payment-name">Rocket</div>
                            <div class="payment-desc">Dutch-Bangla Bank mobile banking solution</div>
                            <div class="payment-features">
                                <div class="feature">
                                    <i class="fas fa-clock"></i>
                                    <span>&lt; 2 min</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-percentage"></i>
                                    <span>1.5% fee</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-users"></i>
                                    <span>85% users</span>
                                </div>
                            </div>
                        </div>
                        <div class="radio-container">
                            <input type="radio" name="payment" value="Rocket" class="radio-input">
                        </div>
                    </div>
                    <div class="progress-container">
                        <div class="progress-label">
                            <span>Popularity</span>
                            <span>85%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="--progress-width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="payment-option">
                <div class="payment-card" data-payment="nagad" data-progress="92">
                    <div class="payment-content">
                        <div class="payment-icon">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div class="payment-info">
                            <div class="payment-name">Nagad</div>
                            <div class="payment-desc">Government-backed digital financial service</div>
                            <div class="payment-features">
                                <div class="feature">
                                    <i class="fas fa-clock"></i>
                                    <span>&lt; 1 min</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-percentage"></i>
                                    <span>1.2% fee</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-users"></i>
                                    <span>92% users</span>
                                </div>
                            </div>
                        </div>
                        <div class="radio-container">
                            <input type="radio" name="payment" value="Nagad" class="radio-input">
                        </div>
                    </div>
                    <div class="progress-container">
                        <div class="progress-label">
                            <span>Popularity</span>
                            <span>92%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="--progress-width: 92%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn" id="submitBtn">
                <span id="btnText">Proceed to Payment Gateway</span>
            </button>
        </form>
    </div>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="testimonials-container">
            <h3>What Our Customers Say</h3>
            <div class="testimonial-card active" data-testimonial="0">
                <div class="stars">★★★★★</div>
                <div class="testimonial-text">"KaajWala made my payment process so smooth and secure. Highly recommended!"</div>
                <div class="testimonial-author">Ahmed Rahman</div>
                <div class="testimonial-role">Business Owner</div>
            </div>
            <div class="testimonial-card" data-testimonial="1">
                <div class="stars">★★★★★</div>
                <div class="testimonial-text">"Fast, reliable, and user-friendly. The best payment solution in Bangladesh."</div>
                <div class="testimonial-author">Fatima Khan</div>
                <div class="testimonial-role">Freelancer</div>
            </div>
            <div class="testimonial-card" data-testimonial="2">
                <div class="stars">★★★★★</div>
                <div class="testimonial-text">"Simple interface and quick processing. Perfect for all my transactions."</div>
                <div class="testimonial-author">Mohammad Ali</div>
                <div class="testimonial-role">Student</div>
            </div>
            <div class="testimonial-dots">
                <div class="dot active" data-slide="0"></div>
                <div class="dot" data-slide="1"></div>
                <div class="dot" data-slide="2"></div>
            </div>
        </div>
    </section>

    <!-- Success Modal -->
    <div class="success-modal" id="successModal">
        <div class="success-content">
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>
            <div class="success-title">Payment Confirmed!</div>
            <div class="success-message">Processing your transaction securely...</div>
            <div class="transaction-id" id="transactionId">
                Transaction ID: #KW123456789
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <div class="footer-title">
                    <div class="footer-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    Emergency Contact
                </div>
                <div class="footer-text">+880 1518996430</div>
            </div>
            <div class="footer-section">
                <div class="footer-title">
                    <div class="footer-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    Email Support
                </div>
                <div class="footer-text">kaajwala247@gmail.com</div>
            </div>
            <div class="footer-section">
                <div class="footer-title">
                    <div class="footer-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    Office Address
                </div>
                <div class="footer-text">
                    Road no-5, Block A<br>
                    Mirpur 1, Dhaka<br>
                    Bangladesh
                </div>
            </div>
            <div class="footer-section">
                <div class="footer-title">
                    <div class="footer-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    Working Hours
                </div>
                <div class="footer-text">
                    Saturday to Saturday<br>
                    9:00 AM - 9:00 PM
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-logo">
                <div class="logo-icon">K</div>
                <div class="logo-text">KaajWala</div>
            </div>
            <p>&copy; 2025 KaajWala. All rights reserved. | Your Trusted Payment Partner</p>
        </div>
    </footer>

    <script>
        // Mouse Follower
        const mouseFollower = document.getElementById('mouseFollower');
        let mouseX = 0, mouseY = 0;
        let followerX = 0, followerY = 0;

        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        function animateFollower() {
            followerX += (mouseX - followerX) * 0.1;
            followerY += (mouseY - followerY) * 0.1;
            
            mouseFollower.style.left = followerX + 'px';
            mouseFollower.style.top = followerY + 'px';
            
            requestAnimationFrame(animateFollower);
        }
        animateFollower();

        // Animated Counter
        function animateCounter(element, target, duration = 2000) {
            const start = 0;
            const increment = target / (duration / 16);
            let current = start;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                
                if (target === 99.9 || target === 4.9) {
                    element.textContent = current.toFixed(1);
                } else if (target >= 1000) {
                    element.textContent = Math.floor(current).toLocaleString() + '+';
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 16);
        }

        // Start counters when stats section is visible
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = entry.target.querySelectorAll('.stat-number');
                    statNumbers.forEach(stat => {
                        const target = parseFloat(stat.dataset.target);
                        animateCounter(stat, target);
                    });
                    statsObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }

        // Payment Selection
        const paymentCards = document.querySelectorAll('.payment-card');
        const radioInputs = document.querySelectorAll('.radio-input');
        let selectedPayment = '';

        paymentCards.forEach((card, index) => {
            card.addEventListener('click', () => {
                // Remove selected class from all cards
                paymentCards.forEach(c => c.classList.remove('selected'));
                radioInputs.forEach(r => r.checked = false);
                
                // Add selected class to clicked card
                card.classList.add('selected');
                radioInputs[index].checked = true;
                selectedPayment = radioInputs[index].value;
                
                // Update button text
                updateButtonText();
                
                // Add ripple effect
                createRipple(card, event);
            });
        });

        function createRipple(element, event) {
            const ripple = document.createElement('div');
            const rect = element.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = event.clientX - rect.left - size / 2;
            const y = event.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: radial-gradient(circle, rgba(249, 109, 0, 0.3) 0%, transparent 70%);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s ease-out;
                pointer-events: none;
                z-index: 1;
            `;
            
            element.style.position = 'relative';
            element.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        }

        // Add ripple animation to CSS
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(2);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        function updateButtonText() {
            const btnText = document.getElementById('btnText');
            if (selectedPayment) {
                btnText.textContent = 'Proceed to Payment Gateway';
            } else {
                btnText.textContent = 'Select Payment Method';
            }
        }

        // Form Submission
        const form = document.getElementById('payment-form');
        const submitBtn = document.getElementById('submitBtn');
        const successModal = document.getElementById('successModal');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!selectedPayment) {
                showNotification('Please select a payment method.', 'error');
                return;
            }

            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <div class="btn-loading">
                    <div class="spinner"></div>
                    <span>Processing Payment...</span>
                </div>
            `;

            // Simulate processing time
            setTimeout(() => {
                showSuccessModal();
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span id="btnText">Proceed to Payment Gateway</span>';
            }, 3000);
        });

        function showSuccessModal() {
            const transactionId = 'KW' + Math.random().toString(36).substr(2, 9).toUpperCase();
            document.getElementById('transactionId').textContent = `Transaction ID: #${transactionId}`;
            successModal.classList.add('show');
            
            setTimeout(() => {
                successModal.classList.remove('show');
                setTimeout(() => {
                    showNotification(`Payment method selected: ${selectedPayment}\nRedirecting to payment gateway...`, 'success');
                }, 500);
            }, 3000);
        }

        // Notification System
        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: ${type === 'error' ? '#f44336' : type === 'success' ? '#4CAF50' : '#f96d00'};
                color: white;
                padding: 15px 25px;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
                z-index: 10000;
                font-weight: 500;
                max-width: 400px;
                transform: translateX(100%);
                transition: transform 0.3s ease;
            `;
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
            }, 100);
            
            setTimeout(() => {
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }, 4000);
        }

        // Testimonials Carousel
        const testimonialCards = document.querySelectorAll('.testimonial-card');
        const dots = document.querySelectorAll('.dot');
        let currentTestimonial = 0;

        function showTestimonial(index) {
            testimonialCards.forEach((card, i) => {
                card.classList.toggle('active', i === index);
            });
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
        }

        function nextTestimonial() {
            currentTestimonial = (currentTestimonial + 1) % testimonialCards.length;
            showTestimonial(currentTestimonial);
        }

        // Auto-rotate testimonials
        setInterval(nextTestimonial, 4000);

        // Dot click handlers
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentTestimonial = index;
                showTestimonial(currentTestimonial);
            });
        });

        // Parallax Effect for Background Shapes
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const shapes = document.querySelectorAll('.floating-shape');
            
            shapes.forEach((shape, index) => {
                const speed = 0.5 + (index * 0.1);
                shape.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.1}deg)`;
            });
        });

        // Smooth Scroll for Internal Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Enhanced Hover Effects
        paymentCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                mouseFollower.style.transform = 'translate(-50%, -50%) scale(1.5)';
                mouseFollower.style.opacity = '0.8';
            });
            
            card.addEventListener('mouseleave', () => {
                mouseFollower.style.transform = 'translate(-50%, -50%) scale(1)';
                mouseFollower.style.opacity = '0.6';
            });
        });

        // Loading Screen (Optional)
        window.addEventListener('load', () => {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Intersection Observer for Animations
        const animationObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, { threshold: 0.1 });

        // Observe all animated elements
        document.querySelectorAll('[class*="animate"], .payment-option, .stat-card').forEach(el => {
            animationObserver.observe(el);
        });

        // Close modal on outside click
        successModal.addEventListener('click', (e) => {
            if (e.target === successModal) {
                successModal.classList.remove('show');
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && successModal.classList.contains('show')) {
                successModal.classList.remove('show');
            }
        });

        // Performance optimization: Debounce scroll events
        let scrollTimeout;
        window.addEventListener('scroll', () => {
            if (scrollTimeout) {
                clearTimeout(scrollTimeout);
            }
            scrollTimeout = setTimeout(() => {
                // Scroll-based animations here
            }, 16);
        });
    </script>
</body>
</html>