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
            padding: 15px 0;
            position: relative;
            overflow: hidden;
        }
        
        .header-content {
            text-align: center;
            position: relative;
            z-index: 2;
        }
        
        .logo {
            height: 50px;
            margin-bottom: 10px;
            transition: var(--transition);
        }
        
        .logo:hover {
            transform: scale(1.05);
        }
        
        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 900;
        }
        
        header p {
            font-size: 1rem;
            margin-bottom: 15px;
            opacity: 0.9;
        }
        

        


        /* Filters Section - Enhanced Design */
        .filters-section {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            padding: 30px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .filters-container {
            background: var(--white);
            border-radius: 28px;
            padding: 30px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(249, 109, 0, 0.15);
            position: relative;
            overflow: hidden;
            margin: 15px 0;
            backdrop-filter: blur(10px);
            text-align: center;
        }

        .filters-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(90deg, #f96d00, #e05e00, #d45400, #f96d00);
            background-size: 200% 100%;
            animation: gradient-shift 4s ease-in-out infinite;
        }

        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .filters-header {
            text-align: center;
            margin-bottom: 35px;
            position: relative;
        }

        .filters-header h3 {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 12px;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(249, 109, 0, 0.1);
        }

        .filters-header p {
            color: var(--secondary);
            font-size: 1.1rem;
            opacity: 0.8;
            max-width: 500px;
            margin: 0 auto;
        }

        .filters-form {
            margin-bottom: 25px;
        }

        /* New Filter UI Design - Based on Example */
        .filters-row {
            display: flex;
            flex-wrap: nowrap;
            gap: 15px;
            margin-bottom: 25px;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .filter-group {
            display: inline-block;
            position: relative;
            overflow: hidden;
            height: 28px;
            width: 150px;
            background: #f2f2f2;
            border: 1px solid;
            border-color: white #f7f7f7 whitesmoke;
            border-radius: 3px;
            margin: 0;
            flex: 1;
            min-width: 0;
        }

        .filter-group label {
            display: none;
        }

        .filter-group::before, .filter-group::after {
            content: '';
            position: absolute;
            z-index: 2;
            top: 9px;
            right: 10px;
            width: 0;
            height: 0;
            border: 4px dashed;
            border-color: #888888 transparent;
            pointer-events: none;
        }

        .filter-group::before {
            border-bottom-style: solid;
            border-top: none;
        }

        .filter-group::after {
            margin-top: 7px;
            border-top-style: solid;
            border-bottom: none;
        }

        .filter-select, .filter-input {
            position: relative;
            width: 130%;
            margin: 0;
            padding: 6px 8px 6px 10px;
            height: 28px;
            line-height: 14px;
            font-size: 12px;
            color: #62717a;
            text-shadow: 0 1px white;
            background: #f2f2f2;
            background: rgba(0, 0, 0, 0) !important;
            border: 0;
            border-radius: 0;
            -webkit-appearance: none;
            appearance: none;
            cursor: pointer;
        }

        /* Focus states for new filter design */
        .filter-select:focus, .filter-input:focus {
            z-index: 3;
            width: 100%;
            color: #394349;
            outline: 2px solid #49aff2;
            outline: 2px solid -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        /* Dropdown options styling */
        .filter-select > option {
            margin: 3px;
            padding: 6px 8px;
            text-shadow: none;
            background: #f2f2f2;
            border-radius: 3px;
            cursor: pointer;
        }

        /* Filter actions container */
        .filter-actions {
            display: flex;
            gap: 10px;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .btn-filter {
            text-align: center;
            cursor: pointer;
            font-size: 14px;
            margin: 0;
            color: white;
            border-radius: 2px;
            background-color: #d35400;
            border: none;
            padding: 8px 16px;
            transition: all 0.5s;
            white-space: nowrap;
        }

        .btn-filter span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .btn-filter span:after {
            content: '»';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .btn-filter:hover span {
            padding-right: 25px;
        }

        .btn-filter:hover span:after {
            opacity: 1;
            right: 0;
        }

        .btn-clear {
            text-align: center;
            cursor: pointer;
            font-size: 14px;
            margin: 0;
            color: #62717a;
            border-radius: 2px;
            background-color: #f2f2f2;
            border: 1px solid #d0d0d0;
            padding: 8px 16px;
            transition: all 0.5s;
            text-decoration: none;
            white-space: nowrap;
        }

        .btn-clear:hover {
            background-color: #e0e0e0;
            border-color: #b0b0b0;
        }

        .results-summary {
            padding: 30px;
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-radius: 24px;
            border: 1px solid rgba(249, 109, 0.12);
            position: relative;
            margin-top: 30px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
        }

        .results-summary::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 8px;
            height: 100%;
            background: linear-gradient(180deg, #f96d00, #e05e00, #d45400);
            border-radius: 4px;
        }

        .results-summary p {
            margin: 0 0 18px 0;
            color: var(--secondary);
            font-weight: 500;
            padding-left: 25px;
        }

        .results-summary p:last-child {
            margin-bottom: 0;
        }

        .results-summary p:first-child {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            text-shadow: 0 1px 2px rgba(249, 109, 0.1);
        }

        .active-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
            padding-left: 20px;
        }

        .filter-tag {
            background: linear-gradient(135deg, #f96d00, #e05e00);
            color: var(--white);
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 700;
            box-shadow: 0 4px 15px rgba(249, 109, 0.3);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .filter-tag::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s;
        }

        .filter-tag:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(249, 109, 0.4);
        }

        .filter-tag:hover::before {
            left: 100%;
        }

        /* Filter group icons */
        .filter-group {
            position: relative;
        }

        .filter-group::before {
            content: '';
            position: absolute;
            top: 45px;
            right: 20px;
            width: 20px;
            height: 20px;
            opacity: 0.3;
            transition: opacity 0.3s ease;
        }

        /* Remove hover effects from filter group icons */
        .filter-group:hover::before {
            opacity: 0.3;
        }

        /* Navigation Section */
        .nav-section {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            padding: 15px 0;
            margin-bottom: 0;
        }

        .nav-section nav {
            text-align: center;
        }

        .nav-section .nav-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-section .nav-links li {
            margin: 0;
        }

        .nav-section .nav-links a {
            color: var(--white);
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 30px;
            transition: all 0.3s ease;
            font-size: 1rem;
            position: relative;
            text-decoration: none;
        }

        .nav-section .nav-links a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        .nav-section .nav-links a.active {
            background: var(--white);
            color: var(--primary);
        }



        /* Responsive adjustments for new filter design */
        @media (max-width: 768px) {
            .filters-container {
                padding: 25px 15px;
                margin: 15px 10px;
            }

            .filters-row {
                flex-direction: column;
                gap: 15px;
                justify-content: center;
                align-items: center;
            }

            .filter-group {
                width: 200px;
                margin-bottom: 15px;
            }

            .filter-actions {
                width: 200px;
                margin: 15px auto;
            }

            .btn-filter, .btn-clear {
                width: 100%;
                margin: 5px 0;
            }

            .filters-header h3 {
                font-size: 1.5rem;
            }


        }
        
        /* Category Header */

        
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
        
        .footer-column a {
            color: var(--white);
            text-decoration: none;
        }
        
        .footer-column a:hover {
            opacity: 1;
            color: var(--primary);
            padding-left: 5px;
        }
        
        .footer-column a:visited {
            color: var(--white);
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
        </div>
    </header>



    <!-- Navigation Section -->
    <section class="nav-section">
        <div class="container">
            <nav>
                <ul class="nav-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/services') }}" class="active">Services</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                </ul>
            </nav>
        </div>
    </section>



    <!-- Filter and Sort Section -->
    <section class="filters-section">
        <div class="container">
            <div class="filters-container">
                <div class="filters-header">
                    <h3>Filter & Sort</h3>
                    <p>Refine your search to find the perfect {{ strtolower($category) }} professional.</p>
                </div>
                <form method="GET" action="{{ url('/services/' . $categorySlug) }}" class="filters-form">
                    <div class="filters-row">
                        <!-- Experience Filter -->
                        <div class="filter-group">
                            <label for="experience">Experience</label>
                            <select name="experience" id="experience" class="filter-select">
                                <option value="">Any Experience</option>
                                @foreach($experienceLevels as $exp)
                                    <option value="{{ $exp }}" {{ request('experience') == $exp ? 'selected' : '' }}>
                                        {{ $exp }}+ years
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Location Filter -->
                        <div class="filter-group">
                            <label for="location">Location</label>
                            <select name="location" id="location" class="filter-select">
                                <option value="">All Locations</option>
                                @foreach($locations as $loc)
                                    <option value="{{ $loc }}" {{ request('location') == $loc ? 'selected' : '' }}>
                                        {{ $loc }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Rating Filter -->
                        <div class="filter-group">
                            <label for="rating">Rating</label>
                            <select name="rating" id="rating" class="filter-select">
                                <option value="">Any Rating</option>
                                <option value="4.5" {{ request('rating') == '4.5' ? 'selected' : '' }}>4.5+ Stars</option>
                                <option value="4.0" {{ request('rating') == '4.0' ? 'selected' : '' }}>4.0+ Stars</option>
                                <option value="3.5" {{ request('rating') == '3.5' ? 'selected' : '' }}>3.5+ Stars</option>
                                <option value="3.0" {{ request('rating') == '3.0' ? 'selected' : '' }}>3.0+ Stars</option>
                            </select>
                        </div>

                        <!-- Rate Range -->
                        <div class="filter-group">
                            <label for="rate_range">Rate Range</label>
                            <select name="rate_range" id="rate_range" class="filter-select">
                                <option value="">Any Rate</option>
                                <option value="asc" {{ request('rate_range') == 'asc' ? 'selected' : '' }}>Low to High</option>
                                <option value="desc" {{ request('rate_range') == 'desc' ? 'selected' : '' }}>High to Low</option>
                            </select>
                        </div>

                        <!-- Sort By -->
                        <div class="filter-group">
                            <label for="sort_by">Sort By</label>
                            <select name="sort_by" id="sort_by" class="filter-select">
                                <option value="rating" {{ request('sort_by') == 'rating' ? 'selected' : '' }}>Rating</option>
                                <option value="hourly_rate" {{ request('sort_by') == 'hourly_rate' ? 'selected' : '' }}>Rate</option>
                                <option value="experience" {{ request('sort_by') == 'experience' ? 'selected' : '' }}>Experience</option>
                                <option value="name" {{ request('sort_by') == 'name' ? 'selected' : '' }}>Name</option>
                            </select>
                        </div>

                        <!-- Sort Order -->
                        <div class="filter-group">
                            <label for="sort_order">Order</label>
                            <select name="sort_order" id="sort_order" class="filter-select">
                                <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Desc</option>
                                <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Asc</option>
                            </select>
                        </div>

                        <!-- Action Buttons -->
                        <div class="filter-actions">
                            <button type="submit" class="btn-filter"><span>Filtrer</span></button>
                            <a href="{{ url('/services/' . $categorySlug) }}" class="btn-clear">Clear</a>
                        </div>
                    </div>
                </form>

                <!-- Active Filters Summary -->
                @if(request()->hasAny(['experience', 'location', 'rating', 'rate_range']))
                    <div class="results-summary">
                        <p class="active-filters">
                            Active filters: 
                            @if(request('experience'))
                                <span class="filter-tag">Experience: {{ request('experience') }}+ years</span>
                            @endif
                            @if(request('location'))
                                <span class="filter-tag">Location: {{ request('location') }}</span>
                            @endif
                            @if(request('rating'))
                                <span class="filter-tag">Rating: {{ request('rating') }}+</span>
                            @endif
                            @if(request('rate_range'))
                                <span class="filter-tag">
                                    Rate: {{ request('rate_range') == 'asc' ? 'Low to High' : 'High to Low' }}
                                </span>
                            @endif
                        </p>
                    </div>
                @endif
            </div>
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
                                             <i class="fas fa-coins"></i>
                                             <span>৳{{ $profile->hourly_rate }}/hour</span>
                                         </div>
                                     @endif
                                </div>
                                
                                <div class="profile-rating">
                                    <div class="stars">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= floor($profile->rating))
                                                <i class="fas fa-star"></i>
                                            @elseif($i - $profile->rating < 1 && $i - $profile->rating > 0)
                                                <i class="fas fa-star-half-alt"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div>
                                    <span class="rating-text">{{ number_format($profile->rating, 1) }} ({{ $profile->rating >= 4.5 ? 'Excellent' : ($profile->rating >= 4.0 ? 'Very Good' : ($profile->rating >= 3.5 ? 'Good' : 'Fair')) }})</span>
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
                <p>&copy; 2025 KaajWala. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
