<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Worker Login | KaajWala</title>
    <meta name="description" content="Login to your KaajWala professional account to access job opportunities and manage your profile">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --primary-light: #93c5fd;
            --secondary: #f8fafc;
            --text: #1e293b;
            --text-light: #64748b;
            --border: #e2e8f0;
            --white: #ffffff;
            --black: #0f172a;
            --success: #10b981;
            --error: #ef4444;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --radius-sm: 0.25rem;
            --radius: 0.5rem;
            --radius-lg: 0.75rem;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.5;
            color: var(--text);
            background-color: var(--secondary);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header Styles */
        .site-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            padding: 1.5rem;
            position: relative;
            overflow: hidden;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--white);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-icon {
            font-size: 1.75rem;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 1.5rem;
        }

        .nav-links a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: opacity 0.2s ease;
        }

        .nav-links a:hover {
            opacity: 0.9;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1.5rem;
        }

        .login-container {
            max-width: 500px;
            width: 100%;
            margin: 0 auto;
        }

        .login-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            padding: 1.5rem;
            text-align: center;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .card-subtitle {
            font-size: 0.9rem;
            opacity: 0.9;
            margin-top: 0.5rem;
        }

        .card-body {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .input-container {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
        }

        .form-input {
            width: 100%;
            padding: 0.875rem 1rem 0.875rem 2.5rem;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            font-family: inherit;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px var(--primary-light);
        }

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            cursor: pointer;
        }

        .forgot-password {
            display: block;
            text-align: right;
            margin-top: 0.5rem;
            font-size: 0.85rem;
        }

        .forgot-password a {
            color: var(--primary);
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .submit-btn {
            width: 100%;
            background: var(--primary);
            color: var(--white);
            padding: 1rem;
            border: none;
            border-radius: var(--radius);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-top: 1rem;
        }

        .submit-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 1.5rem 0;
            color: var(--text-light);
            font-size: 0.85rem;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid var(--border);
        }

        .divider::before {
            margin-right: 1rem;
        }

        .divider::after {
            margin-left: 1rem;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1rem;
            transition: all 0.2s ease;
        }

        .social-btn.google {
            background: #db4437;
        }

        .social-btn.facebook {
            background: #4267b2;
        }

        .social-btn.linkedin {
            background: #0077b5;
        }

        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        .register-link {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.9rem;
            color: var(--text-light);
        }

        .register-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        /* Footer */
        .site-footer {
            background: var(--black);
            color: var(--white);
            padding: 2rem 1.5rem;
            text-align: center;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            list-style: none;
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.2s ease;
        }

        .footer-links a:hover {
            color: var(--white);
        }

        .copyright {
            color: #94a3b8;
            font-size: 0.85rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .card-body {
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 0;
            }
            
            .login-card {
                border-radius: 0;
            }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="header-container">
            <a href="{{ url('/') }}" class="logo">
                <i class="fas fa-hands-helping logo-icon"></i>
                <span>KaajWala</span>
            </a>
            
            <ul class="nav-links">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            </ul>
        </div>
    </header>

    <main class="main-content">
        <div class="login-container">
            <div class="login-card">
                <div class="card-header">
                    <h2 class="card-title">Worker Login</h2>
                    <p class="card-subtitle">Access your professional dashboard</p>
                </div>
                
                <div class="card-body">
                    <form action="{{ url('/worker-login') }}" method="POST" class="login-form">
                        @csrf
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email or Phone</label>
                            <div class="input-container">
                                <i class="fas fa-user input-icon"></i>
                                <input type="text" id="email" name="email" class="form-input" required placeholder="Enter your email or phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-container">
                                <i class="fas fa-lock input-icon"></i>
                                <input type="password" id="password" name="password" class="form-input" required placeholder="Enter your password">
                                <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                            </div>
                            <a href="{{ url('/forgot-password') }}" class="forgot-password">
                                Forgot password?
                            </a>
                        </div>

                        <button type="submit" class="submit-btn">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>

                        <div class="divider">
                            Or continue with
                        </div>

                        <div class="social-login">
                            <a href="{{ url('/auth/google') }}" class="social-btn google" title="Login with Google">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="{{ url('/auth/facebook') }}" class="social-btn facebook" title="Login with Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="{{ url('/auth/linkedin') }}" class="social-btn linkedin" title="Login with LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>

                        <p class="register-link">
                            Don't have an account? <a href="{{ url('/register') }}">Register here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="site-footer">
        <div class="footer-container">
            <ul class="footer-links">
                <li><a href="{{ url('/terms') }}">Terms of Service</a></li>
                <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                <li><a href="{{ url('/help') }}">Help Center</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
            </ul>
            <p class="copyright">
                &copy; 2023 KaajWala Professional Services. All rights reserved.
            </p>
        </div>
    </footer>

    <script>
        // Toggle password visibility
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });

        // Form submission handling
        const loginForm = document.querySelector('.login-form');
        loginForm.addEventListener('submit', function(e) {
            // Add form validation here if needed
            // e.preventDefault();
            // Submit form via AJAX or proceed with normal submission
        });
    </script>
</body>
</html>