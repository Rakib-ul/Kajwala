<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Providers | KaajWala</title>
    <meta name="description" content="Find professional service providers for all your needs">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #eb9525;
            --primary-dark: #d8811d;
            --primary-light: #93c5fd;
            --secondary: #f8fafc;
            --text: #1e293b;
            --text-light: #64748b;
            --border: #e2e8f0;
            --white: #ffffff;
            --success: #10b981;
            --warning: #f59e0b;
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
        }

        /* Header Styles */
        .site-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow-md);
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
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

        .main-nav {
            display: flex;
            align-items: center;
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
            padding: 0.5rem 0;
            position: relative;
            transition: all 0.2s ease;
        }

        .nav-links a:hover {
            opacity: 0.9;
        }

        .nav-links a.active {
            font-weight: 600;
        }

        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--white);
            border-radius: 3px;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            color: var(--white);
            padding: 5rem 1.5rem;
            text-align: center;
        }

        .hero-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }

        .search-container {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 1rem 1.5rem;
            border: none;
            border-radius: var(--radius-lg);
            font-family: inherit;
            font-size: 1rem;
        }

        .search-btn {
            position: absolute;
            right: 0.5rem;
            top: 50%;
            transform: translateY(-50%);
            background: var(--primary);
            color: var(--white);
            border: none;
            border-radius: var(--radius);
            padding: 0.75rem 1.25rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .search-btn:hover {
            background: var(--primary-dark);
        }

        /* Main Content */
        .main-container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 1.5rem;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--primary);
        }

        .view-all {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .providers-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        .provider-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
        }

        .provider-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .provider-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .provider-content {
            padding: 1.5rem;
        }

        .provider-header {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .provider-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary-light);
            margin-right: 1rem;
        }

        .provider-info h3 {
            font-size: 1.1rem;
            margin-bottom: 0.25rem;
        }

        .provider-info p {
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .rating {
            display: flex;
            align-items: center;
            margin-top: 0.5rem;
        }

        .stars {
            color: var(--warning);
            margin-right: 0.5rem;
        }

        .rating-count {
            font-size: 0.85rem;
            color: var(--text-light);
        }

        .provider-meta {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-light);
        }

        .provider-skills {
            margin-top: 1rem;
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .skill-tag {
            background: var(--secondary);
            color: var(--text);
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.8rem;
        }

        .view-profile {
            display: inline-block;
            width: 100%;
            text-align: center;
            background: var(--primary);
            color: var(--white);
            padding: 0.75rem;
            border-radius: var(--radius);
            text-decoration: none;
            font-weight: 500;
            margin-top: 1.5rem;
            transition: all 0.2s ease;
        }

        .view-profile:hover {
            background: var(--primary-dark);
        }

        /* Categories Section */
        .categories-section {
            margin: 4rem 0;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .category-card {
            background: var(--white);
            border-radius: var(--radius);
            padding: 1.5rem;
            text-align: center;
            box-shadow: var(--shadow-sm);
            transition: all 0.2s ease;
        }

        .category-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }

        .category-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .category-name {
            font-weight: 600;
        }

        /* Testimonials */
        .testimonials-section {
            margin: 4rem 0;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            padding: 3rem 1.5rem;
            border-radius: var(--radius-lg);
        }

        .testimonials-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .testimonials-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .testimonials-title {
            font-size: 1.75rem;
            margin-bottom: 1rem;
        }

        .testimonials-subtitle {
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: var(--radius-lg);
            padding: 2rem;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .testimonial-text::before {
            content: '"';
            font-size: 3rem;
            position: absolute;
            top: -1rem;
            left: -1rem;
            opacity: 0.2;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1rem;
        }

        .author-info h4 {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .author-info p {
            opacity: 0.8;
            font-size: 0.9rem;
        }

        /* Footer */
        .site-footer {
            background: var(--black);
            color: var(--white);
            padding: 4rem 1.5rem 2rem;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            font-size: 1.2rem;
            margin-bottom: 1.25rem;
            position: relative;
            padding-bottom: 0.75rem;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: var(--primary);
            border-radius: 3px;
        }

        .footer-section p {
            color: #94a3b8;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.2s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .footer-links a:hover {
            color: var(--white);
        }

        .contact-info {
            margin-top: 1rem;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 1rem;
            color: #94a3b8;
            font-size: 0.9rem;
        }

        .contact-icon {
            color: var(--primary);
            font-size: 1rem;
            margin-top: 0.15rem;
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            margin-top: 2rem;
            border-top: 1px solid #334155;
            color: #94a3b8;
            font-size: 0.85rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: var(--primary-dark);
                flex-direction: column;
                padding: 1rem;
                gap: 1rem;
            }

            .nav-links.active {
                display: flex;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero-title {
                font-size: 2rem;
            }

            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 1.75rem;
            }

            .hero-subtitle {
                font-size: 1rem;
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
            
            <nav class="main-nav">
                <ul class="nav-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/services') }}">Services</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="{{ url('/portfolio') }}" class="active">Portfolio</a></li>
                </ul>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>
    </header>

    <section class="hero-section">
        <div class="hero-container">
            <h1 class="hero-title">Find Trusted Service Providers</h1>
            <p class="hero-subtitle">Connect with skilled professionals for all your home and business needs</p>
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search for services or providers...">
                <button class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </section>

    <main class="main-container">
        <section class="providers-section">
            <div class="section-header">
                <h2 class="section-title">Top Rated Providers</h2>
                <a href="#" class="view-all">
                    View all providers
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="providers-grid">
                <!-- Provider Card 1 -->
                <div class="provider-card">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=761&q=80" alt="Plumbing Service" class="provider-image">
                    <div class="provider-content">
                        <div class="provider-header">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Shoriful Likhon" class="provider-avatar">
                            <div class="provider-info">
                                <h3>Shoriful Likhon</h3>
                                <p>Professional Plumber</p>
                                <div class="rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="rating-count">(28 reviews)</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="provider-meta">
                            <div class="meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Mirpur, Dhaka</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-briefcase"></i>
                                <span>35 jobs</span>
                            </div>
                        </div>
                        
                        <div class="provider-skills">
                            <span class="skill-tag">Pipe Installation</span>
                            <span class="skill-tag">Leak Repair</span>
                            <span class="skill-tag">Water Heater</span>
                        </div>
                        
                        <a href="#" class="view-profile">View Profile</a>
                    </div>
                </div>
                
                <!-- Provider Card 2 -->
                <div class="provider-card">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Electrical Service" class="provider-image">
                    <div class="provider-content">
                        <div class="provider-header">
                            <img src="https://randomuser.me/api/portraits/men/44.jpg" alt="Rahim Khan" class="provider-avatar">
                            <div class="provider-info">
                                <h3>Rahim Khan</h3>
                                <p>Licensed Electrician</p>
                                <div class="rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count">(42 reviews)</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="provider-meta">
                            <div class="meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Gulshan, Dhaka</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-briefcase"></i>
                                <span>68 jobs</span>
                            </div>
                        </div>
                        
                        <div class="provider-skills">
                            <span class="skill-tag">Wiring</span>
                            <span class="skill-tag">Panel Upgrade</span>
                            <span class="skill-tag">Lighting</span>
                        </div>
                        
                        <a href="#" class="view-profile">View Profile</a>
                    </div>
                </div>
                
                <!-- Provider Card 3 -->
                <div class="provider-card">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Cleaning Service" class="provider-image">
                    <div class="provider-content">
                        <div class="provider-header">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Fatema Akter" class="provider-avatar">
                            <div class="provider-info">
                                <h3>Fatema Akter</h3>
                                <p>Professional Cleaner</p>
                                <div class="rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-count">(19 reviews)</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="provider-meta">
                            <div class="meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Dhanmondi, Dhaka</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-briefcase"></i>
                                <span>27 jobs</span>
                            </div>
                        </div>
                        
                        <div class="provider-skills">
                            <span class="skill-tag">Deep Cleaning</span>
                            <span class="skill-tag">Office Cleaning</span>
                            <span class="skill-tag">Carpet Cleaning</span>
                        </div>
                        
                        <a href="#" class="view-profile">View Profile</a>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="categories-section">
            <div class="section-header">
                <h2 class="section-title">Service Categories</h2>
                <a href="#" class="view-all">
                    View all categories
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="categories-grid">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="category-name">Plumbing</h3>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="category-name">Electrical</h3>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-broom"></i>
                    </div>
                    <h3 class="category-name">Cleaning</h3>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-paint-roller"></i>
                    </div>
                    <h3 class="category-name">Painting</h3>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-hammer"></i>
                    </div>
                    <h3 class="category-name">Carpentry</h3>
                </div>
                
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <h3 class="category-name">AC Repair</h3>
                </div>
            </div>
        </section>
        
        <section class="testimonials-section">
            <div class="testimonials-container">
                <div class="testimonials-header">
                    <h2 class="testimonials-title">What Our Clients Say</h2>
                    <p class="testimonials-subtitle">Hear from people who have used our service providers</p>
                </div>
                
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            Shoriful did an excellent job fixing our plumbing issues. He was punctual, professional, and his work was top-notch. Highly recommend!
                        </div>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Ayesha Rahman" class="author-avatar">
                            <div class="author-info">
                                <h4>Ayesha Rahman</h4>
                                <p>Mirpur Resident</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            Rahim solved our electrical problems quickly and safely. His expertise was evident and he explained everything clearly. Will definitely call him again.
                        </div>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Kamal Hossain" class="author-avatar">
                            <div class="author-info">
                                <h4>Kamal Hossain</h4>
                                <p>Gulshan Resident</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            Fatema's cleaning service transformed our office. She paid attention to every detail and was very thorough. Our workspace has never looked better.
                        </div>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Nusrat Jahan" class="author-avatar">
                            <div class="author-info">
                                <h4>Nusrat Jahan</h4>
                                <p>Business Owner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>About KaajWala</h3>
                <p>Connecting skilled professionals with clients who need their services. Our platform ensures quality, reliability, and trust.</p>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="{{ url('/') }}"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="{{ url('/services') }}"><i class="fas fa-chevron-right"></i> Services</a></li>
                    <li><a href="{{ url('/providers') }}"><i class="fas fa-chevron-right"></i> Service Providers</a></li>
                    <li><a href="{{ url('/contact') }}"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Contact Us</h3>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone contact-icon"></i>
                        <span>+880 1518996430</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope contact-icon"></i>
                        <span>kaajwala247@gmail.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <span>Road no-5, Block A, Mirpur 1, Dhaka</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="copyright">
            &copy; 2023 KaajWala Professional Services. All rights reserved.
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const menuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');
        
        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.main-nav') && navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
            }
        });
    </script>
</body>
</html>