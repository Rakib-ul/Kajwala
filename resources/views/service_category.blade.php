<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category }} - KaajWala Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #f96d00;
            --primary-dark: #e05e00;
            --secondary: #393e46;
            --light: #f9f9f9;
            --dark: #222831;
            --white: #ffffff;
            --gray: #eeeeee;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
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
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            padding: 30px 0;
            position: relative;
            overflow: hidden;
        }
        
        .header-content {
            text-align: center;
            position: relative;
            z-index: 2;
        }
        
        .logo {
            height: 70px;
            margin-bottom: 15px;
            transition: var(--transition);
        }
        
        .logo:hover {
            transform: scale(1.05);
        }
        
        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 700;
        }
        
        header p {
            font-size: 1.1rem;
            margin-bottom: 25px;
            opacity: 0.9;
        }
        
        /* Navigation */
        nav {
            margin-top: 20px;
        }
        
        .nav-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .nav-links a {
            color: var(--white);
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 30px;
            transition: var(--transition);
            font-size: 1rem;
            position: relative;
        }
        
        .nav-links a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }
        
        .nav-links a.active {
            background: var(--white);
            color: var(--primary);
        }
        
        /* Category Header */
        .category-header {
            background: var(--white);
            padding: 40px 0;
            text-align: center;
            box-shadow: var(--shadow);
        }
        
        .category-header h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        .category-header p {
            font-size: 1.1rem;
            color: var(--secondary);
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Worker Profiles Grid */
        .profiles-container {
            padding: 60px 0;
        }
        
        .profiles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .profile-card {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: var(--transition);
            border: 2px solid transparent;
        }
        
        .profile-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            border-color: var(--primary);
        }
        
        .profile-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            padding: 25px;
            text-align: center;
        }
        
        .profile-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--white);
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--primary);
            border: 4px solid var(--white);
        }
        
        .profile-name {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .profile-service {
            font-size: 1rem;
            opacity: 0.9;
        }
        
        .profile-body {
            padding: 25px;
        }
        
        .profile-info {
            margin-bottom: 20px;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            color: var(--secondary);
        }
        
        .info-item i {
            width: 20px;
            margin-right: 10px;
            color: var(--primary);
        }
        
        .profile-rating {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .stars {
            color: #ffd700;
            margin-right: 10px;
        }
        
        .rating-text {
            color: var(--secondary);
            font-weight: 500;
        }
        
        .profile-actions {
            display: flex;
            gap: 10px;
        }
        
        .btn {
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            transition: var(--transition);
            cursor: pointer;
            font-size: 0.9rem;
        }
        
        .btn-primary {
            background: var(--primary);
            color: var(--white);
            flex: 2;
        }
        
        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        .btn-outline {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
            flex: 1;
        }
        
        .btn-outline:hover {
            background: var(--primary);
            color: var(--white);
        }
        
        /* No Profiles Message */
        .no-profiles {
            text-align: center;
            padding: 80px 20px;
            background: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow);
        }
        
        .no-profiles i {
            font-size: 4rem;
            color: var(--gray);
            margin-bottom: 20px;
        }
        
        .no-profiles h3 {
            font-size: 1.5rem;
            color: var(--secondary);
            margin-bottom: 15px;
        }
        
        .no-profiles p {
            color: var(--secondary);
            opacity: 0.7;
            margin-bottom: 25px;
        }
        
        .btn-back {
            background: var(--primary);
            color: var(--white);
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .btn-back:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            color: var(--white);
            padding: 50px 0 20px;
            margin-top: 60px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: var(--primary);
        }
        
        .footer-column p, .footer-column a {
            opacity: 0.8;
            margin-bottom: 10px;
            display: block;
            transition: var(--transition);
        }
        
        .footer-column a:hover {
            opacity: 1;
            color: var(--primary);
            padding-left: 5px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: var(--transition);
        }
        
        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            opacity: 0.7;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .profiles-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .profile-card {
                margin: 0 10px;
            }
            
            header h1 {
                font-size: 2rem;
            }
            
            .category-header h2 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }
            
            .profile-actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-content">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala Logo" class="logo">
            </a>
            <h1>{{ $category }} Services</h1>
            <p>Find the best {{ strtolower($category) }} professionals in your area</p>
            <nav>
                <ul class="nav-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/services') }}">Services</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="category-header">
        <div class="container">
            <h2>{{ $category }} Professionals</h2>
            <p>Browse through our verified {{ strtolower($category) }} professionals. Each profile includes ratings, experience, and contact information to help you make the right choice.</p>
        </div>
    </section>

    <section class="profiles-container">
        <div class="container">
            @if($profiles->count() > 0)
                <div class="profiles-grid">
                    @foreach($profiles as $profile)
                        <div class="profile-card">
                            <div class="profile-header">
                                <div class="profile-avatar">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="profile-name">{{ $profile->name ?? 'Professional' }}</div>
                                <div class="profile-service">{{ $category }}</div>
                            </div>
                            
                            <div class="profile-body">
                                <div class="profile-info">
                                    @if($profile->phone)
                                        <div class="info-item">
                                            <i class="fas fa-phone"></i>
                                            <span>{{ $profile->phone }}</span>
                                        </div>
                                    @endif
                                    
                                    @if($profile->email)
                                        <div class="info-item">
                                            <i class="fas fa-envelope"></i>
                                            <span>{{ $profile->email }}</span>
                                        </div>
                                    @endif
                                    
                                    @if($profile->address)
                                        <div class="info-item">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>{{ $profile->address }}</span>
                                        </div>
                                    @endif
                                    
                                    @if($profile->experience_years)
                                        <div class="info-item">
                                            <i class="fas fa-briefcase"></i>
                                            <span>{{ $profile->experience_years }} years experience</span>
                                        </div>
                                    @endif
                                    
                                    @if($profile->hourly_rate)
                                        <div class="info-item">
                                            <i class="fas fa-dollar-sign"></i>
                                            <span>${{ $profile->hourly_rate }}/hour</span>
                                        </div>
                                    @endif
                                </div>
                                
                                <div class="profile-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-text">5.0 (Excellent)</span>
                                </div>
                                
                                <div class="profile-actions">
                                    <a href="{{ url('/workers/' . $profile->id) }}" class="btn btn-primary">View Profile</a>
                                    <a href="tel:{{ $profile->phone ?? '' }}" class="btn btn-outline">Call Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="no-profiles">
                    <i class="fas fa-users"></i>
                    <h3>No {{ $category }} Professionals Found</h3>
                    <p>We don't have any {{ strtolower($category) }} professionals registered in your area yet. Please check back later or contact us for assistance.</p>
                    <a href="{{ url('/services') }}" class="btn-back">Back to Services</a>
                </div>
            @endif
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>KaajWala</h3>
                    <p>Your trusted partner for all home and office service needs. We connect you with skilled professionals for any task.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/about') }}">About Us</a>
                    <a href="{{ url('/services') }}">Services</a>
                    <a href="{{ url('/portfolio') }}">Portfolio</a>
                    <a href="{{ url('/contact') }}">Contact</a>
                </div>
                
                <div class="footer-column">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-phone-alt"></i> +880 1518996430</p>
                    <p><i class="fas fa-envelope"></i> kaajwala247@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> Road no-5, Block A, Mirpur 1, Dhaka, Bangladesh</p>
                </div>
                
                <div class="footer-column">
                    <h3>Working Hours</h3>
                    <p>Saturday to Saturday</p>
                    <p>9:00 AM - 9:00 PM</p>
                    <p>Emergency services available 24/7</p>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 KaajWala. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
