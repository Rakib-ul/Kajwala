<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account | KaajWala</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f96d00, #f9b233);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-wrapper {
            background: #fff;
            width: 100%;
            max-width: 450px;
            padding: 35px 30px;
            border-radius: 14px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            animation: fadeIn 0.5s ease-in-out;
            text-align: center;
        }

        .register-wrapper img.logo {
            height: 70px;
            margin-bottom: 10px;
        }

        .register-wrapper h2 {
            color: #f96d00;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .register-wrapper p {
            color: #777;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            color: #555;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 14px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            transition: border 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #f96d00;
            box-shadow: 0 0 0 2px rgba(249, 109, 0, 0.2);
        }

        .btn {
            width: 100%;
            background: #f96d00;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            margin-top: 10px;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #e06700;
        }

        .or-divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 15px 0;
            color: #aaa;
            font-size: 14px;
        }

        .or-divider::before,
        .or-divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #ddd;
            margin: 0 10px;
        }

        .social-login {
            display: flex;
            justify-content: space-between;
            gap: 15px;
        }

        .social-btn {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 14px;
            text-decoration: none;
            cursor: pointer;
            transition: 0.3s ease;
            border: 1px solid #ddd;
            background: #fff;
        }

        .social-btn:hover {
            background: #f7f7f7;
        }

        .social-btn img {
            height: 20px;
            width: 20px;
            object-fit: contain;
            display: block;
        }

        .auth-links {
            margin-top: 15px;
            font-size: 14px;
        }

        .auth-links a {
            color: #f96d00;
            text-decoration: none;
            font-weight: 500;
        }

        .auth-links a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="register-wrapper">
        <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala Logo" class="logo">
        <h2>Create Your Account</h2>
        <p>Sign up to book trusted workers in Bangladesh</p>

        @if (session('success'))
            <div
                style="background: #d4edda; color: #155724; padding: 10px; border-radius: 6px; border: 1px solid #c3e6cb; margin-bottom: 15px; text-align: center;">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div
                style="background: #f8d7da; color: #721c24; padding: 10px; border-radius: 6px; border: 1px solid #f5c6cb; margin-bottom: 15px;">
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/register-user') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                    required>
            </div>


            <button type="submit" class="btn">Create Account</button>
            <div class="or-divider">or sign up with</div>

            <div class="social-login">
                <a href="{{ url('auth/google') }}" class="social-btn">
                    <img src="{{ asset('images/google.png') }}" alt="Google">
                    <span>Google</span>
                </a>
                <a href="{{ url('auth/facebook') }}" class="social-btn">
                    <img src="{{ asset('images/facebook.png') }}" alt="Facebook">
                    <span>Facebook</span>
                </a>
            </div>
        </form>

        <div class="auth-links">
            Already have an account? <a href="{{ url('/login') }}">Login here</a>
        </div>
    </div>
</body>

</html>
