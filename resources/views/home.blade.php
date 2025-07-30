<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>KaajWala | Bangladesh's Premier Service Marketplace</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Find trusted professionals for all your home and office needs in Bangladesh. Fast, reliable, and affordable services at your doorstep.">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #FF6B35;
      --primary-dark: #F94144;
      --primary-light: rgba(255, 107, 53, 0.1);
      --secondary: #25CED1;
      --accent: #FCE38A;
      --dark: #292F36;
      --light: #F7FFF7;
      --gray: #6C757D;
      --light-gray: #f8f9fa;
      --success: #4BB543;
      --warning: #FFC107;
      --danger: #DC3545;
      --gradient-primary: linear-gradient(135deg, var(--primary), var(--primary-dark));
      --gradient-secondary: linear-gradient(135deg, var(--secondary), #00A8B5);
      --shadow-sm: 0 2px 8px rgba(0,0,0,0.1);
      --shadow-md: 0 4px 12px rgba(0,0,0,0.15);
      --shadow-lg: 0 8px 24px rgba(0,0,0,0.2);
      --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
      --border-radius: 12px;
      --nav-height: 80px;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      color: var(--dark);
      background-color: var(--light-gray);
      line-height: 1.6;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
      padding-top: var(--nav-height);
    }
    
    .container {
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    /* Header & Navigation - Redesigned */
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      transition: var(--transition);
      background: rgba(255, 255, 255, 0.98);
      backdrop-filter: blur(10px);
      box-shadow: var(--shadow-sm);
      border-bottom: 1px solid rgba(0,0,0,0.05);
      height: var(--nav-height);
    }
    
    header.scrolled {
      box-shadow: var(--shadow-md);
      height: 70px;
    }
    
    header.scrolled .logo img {
      height: 35px;
    }
    
    .header-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 100%;
      padding: 0 20px;
    }
    
    .logo {
      display: flex;
      align-items: center;
      text-decoration: none;
      transition: var(--transition);
    }
    
    .logo img {
      height: 45px;
      transition: var(--transition);
    }
    
    .logo-text {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      font-size: 1.8rem;
      margin-left: 10px;
      background: var(--gradient-primary);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      letter-spacing: -0.5px;
    }
    
    /* Main Navigation */
    .main-nav {
      display: flex;
      align-items: center;
      height: 100%;
    }
    
    .nav-links {
      display: flex;
      list-style: none;
      height: 100%;
      margin-right: 20px;
    }
    
    .nav-links > li {
      position: relative;
      height: 100%;
      display: flex;
      align-items: center;
    }
    
    .nav-links > li > a {
      color: var(--dark);
      text-decoration: none;
      font-weight: 500;
      font-size: 0.95rem;
      padding: 0 15px;
      height: 100%;
      display: flex;
      align-items: center;
      transition: var(--transition);
      position: relative;
    }
    
    .nav-links > li > a:hover {
      color: var(--primary);
    }
    
    .nav-links > li > a:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 0;
      height: 3px;
      background: var(--gradient-primary);
      transition: var(--transition);
      border-radius: 3px 3px 0 0;
    }
    
    .nav-links > li > a:hover:after,
    .nav-links > li > a.active:after {
      width: 100%;
    }
    
    .nav-links a i {
      margin-right: 8px;
      font-size: 0.9rem;
    }
    
    /* Dropdown Menu - Redesigned */
    .dropdown {
      position: relative;
      height: 100%;
    }
    
    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      width: 220px;
      background: white;
      border-radius: 0 0 var(--border-radius) var(--border-radius);
      box-shadow: var(--shadow-lg);
      padding: 10px 0;
      opacity: 0;
      visibility: hidden;
      transform: translateY(10px);
      transition: var(--transition);
      z-index: 100;
    }
    
    .dropdown:hover .dropdown-menu {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }
    
    .dropdown-menu li {
      margin: 0;
    }
    
    .dropdown-menu a {
      padding: 12px 20px;
      color: var(--gray);
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      transition: var(--transition);
    }
    
    .dropdown-menu a:hover {
      color: var(--primary);
      background: var(--primary-light);
      padding-left: 25px;
    }
    
    .dropdown-menu a i {
      font-size: 0.8rem;
      width: 20px;
      text-align: center;
    }
    
    /* Navigation Buttons - Redesigned */
    .nav-buttons {
      display: flex;
      align-items: center;
      gap: 15px;
    }
    
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 12px 24px;
      border-radius: 50px;
      font-weight: 600;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      transition: var(--transition);
      border: none;
      font-size: 0.95rem;
      white-space: nowrap;
    }
    
    .btn-primary {
      background: var(--gradient-primary);
      color: white;
      box-shadow: 0 4px 15px rgba(249, 65, 68, 0.2);
    }
    
    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(249, 65, 68, 0.3);
    }
    
    .btn-outline {
      background: transparent;
      color: var(--primary);
      border: 1px solid var(--primary);
    }
    
    .btn-outline:hover {
      background: var(--primary-light);
      transform: translateY(-2px);
    }
    
    /* Mobile Menu Button - Redesigned */
    .mobile-menu-btn {
      display: none;
      background: none;
      border: none;
      font-size: 1.5rem;
      color: var(--dark);
      cursor: pointer;
      padding: 10px;
      border-radius: 50%;
      transition: var(--transition);
      position: relative;
      width: 40px;
      height: 40px;
      z-index: 1001;
    }
    
    .mobile-menu-btn:hover {
      background: var(--primary-light);
    }
    
    .mobile-menu-btn .hamburger {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 24px;
      height: 2px;
      background: var(--dark);
      transition: var(--transition);
    }
    
    .mobile-menu-btn .hamburger:before,
    .mobile-menu-btn .hamburger:after {
      content: '';
      position: absolute;
      width: 24px;
      height: 2px;
      background: var(--dark);
      transition: var(--transition);
    }
    
    .mobile-menu-btn .hamburger:before {
      transform: translateY(-8px);
    }
    
    .mobile-menu-btn .hamburger:after {
      transform: translateY(8px);
    }
    
    .mobile-menu-btn.active .hamburger {
      background: transparent;
    }
    
    .mobile-menu-btn.active .hamburger:before {
      transform: rotate(45deg);
    }
    
    .mobile-menu-btn.active .hamburger:after {
      transform: rotate(-45deg);
    }
    
    /* Mobile Navigation - Redesigned */
    @media (max-width: 992px) {
      .mobile-menu-btn {
        display: flex;
        align-items: center;
        justify-content: center;
      }
      
      .main-nav {
        position: fixed;
        top: 0;
        right: -100%;
        width: 320px;
        height: 100vh;
        background: white;
        box-shadow: var(--shadow-lg);
        flex-direction: column;
        align-items: flex-start;
        padding: 100px 30px 30px;
        transition: var(--transition);
        z-index: 1000;
      }
      
      .main-nav.active {
        right: 0;
      }
      
      .nav-links {
        flex-direction: column;
        width: 100%;
        margin-right: 0;
        height: auto;
      }
      
      .nav-links > li {
        height: auto;
        width: 100%;
        margin: 0;
        border-bottom: 1px solid rgba(0,0,0,0.05);
      }
      
      .nav-links > li > a {
        padding: 15px 0;
        height: auto;
        width: 100%;
      }
      
      .nav-links > li > a:after {
        display: none;
      }
      
      .dropdown {
        height: auto;
      }
      
      .dropdown-menu {
        position: static;
        width: 100%;
        box-shadow: none;
        padding: 0;
        max-height: 0;
        overflow: hidden;
        opacity: 1;
        visibility: visible;
        transform: none;
        transition: max-height 0.3s ease, padding 0.3s ease;
      }
      
      .dropdown.active .dropdown-menu {
        max-height: 500px;
        padding: 10px 0 10px 20px;
      }
      
      .dropdown-menu a {
        padding: 10px 0;
      }
      
      .dropdown-menu a:hover {
        padding-left: 10px;
      }
      
      .nav-buttons {
        width: 100%;
        margin-top: 30px;
        flex-direction: column;
        gap: 10px;
      }
      
      .nav-buttons .btn {
        width: 100%;
      }
      
      /* Overlay for mobile menu */
      .nav-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        backdrop-filter: blur(5px);
        z-index: 999;
        opacity: 0;
        visibility: hidden;
        transition: var(--transition);
      }
      
      .nav-overlay.active {
        opacity: 1;
        visibility: visible;
      }
    }
    
    /* Hero Section - Redesigned */
    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding: 80px 0;
      position: relative;
      overflow: hidden;
      background: linear-gradient(135deg, rgba(41,47,54,0.95) 0%, rgba(65,72,82,0.95) 100%), url('{{ asset('images/hero-bg.jpg') }}') no-repeat center center/cover;
      background-attachment: fixed;
    }
    
    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 600px;
      color: white;
    }
    
    .hero h1 {
      font-size: 3.5rem;
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 20px;
      font-family: 'Montserrat', sans-serif;
    }
    
    .hero p {
      font-size: 1.25rem;
      margin-bottom: 30px;
      opacity: 0.9;
      max-width: 90%;
    }
    
    .hero-btns {
      display: flex;
      gap: 15px;
      margin-bottom: 40px;
      flex-wrap: wrap;
    }
    
    .hero-btns .btn {
      padding: 14px 28px;
      font-size: 1rem;
      min-width: 180px;
    }
    
    .hero-stats {
      display: flex;
      gap: 30px;
      flex-wrap: wrap;
    }
    
    .stat-item {
      display: flex;
      align-items: center;
      background: rgba(255,255,255,0.1);
      backdrop-filter: blur(5px);
      padding: 15px 20px;
      border-radius: var(--border-radius);
      border: 1px solid rgba(255,255,255,0.1);
      transition: var(--transition);
    }
    
    .stat-item:hover {
      background: rgba(255,255,255,0.15);
      transform: translateY(-3px);
    }
    
    .stat-icon {
      font-size: 2rem;
      margin-right: 15px;
      color: var(--accent);
    }
    
    .stat-text h3 {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 5px;
      background: linear-gradient(to right, var(--primary), var(--accent));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    
    .stat-text p {
      font-size: 0.9rem;
      opacity: 0.8;
    }
    
    .hero-image {
      position: absolute;
      right: 5%;
      bottom: 0;
      width: 45%;
      max-width: 650px;
      z-index: 1;
      animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
      100% { transform: translateY(0px); }
    }
    
    /* Search Section - Redesigned */
    .search-section {
      background: white;
      padding: 60px 0;
      position: relative;
      z-index: 10;
      margin-top: -50px;
      box-shadow: var(--shadow-md);
      border-radius: var(--border-radius);
      width: calc(100% - 40px);
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
    }
    
    .search-container {
      padding: 0 30px;
      max-width: 1000px;
      margin: 0 auto;
    }
    
    .search-title {
      text-align: center;
      margin-bottom: 40px;
      color: var(--dark);
    }
    
    .search-title h2 {
      font-size: 2.2rem;
      margin-bottom: 10px;
      font-weight: 700;
      font-family: 'Montserrat', sans-serif;
    }
    
    .search-title p {
      color: var(--gray);
      font-size: 1.1rem;
      max-width: 600px;
      margin: 0 auto;
    }
    
    .search-form {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1fr auto;
      gap: 15px;
      align-items: center;
    }
    
    .search-input {
      position: relative;
    }
    
    .search-input input,
    .search-input select {
      width: 100%;
      padding: 16px 50px 16px 20px;
      border-radius: var(--border-radius);
      border: 1px solid rgba(0, 0, 0, 0.1);
      font-family: 'Poppins', sans-serif;
      font-size: 1rem;
      transition: var(--transition);
      background: white;
      box-shadow: var(--shadow-sm);
      appearance: none;
    }
    
    .search-input input:focus,
    .search-input select:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.2);
    }
    
    .search-input i {
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--gray);
      pointer-events: none;
    }
    
    .search-btn {
      background: var(--gradient-primary);
      color: white;
      border: none;
      padding: 16px 25px;
      border-radius: var(--border-radius);
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: var(--transition);
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: var(--shadow-sm);
    }
    
    .search-btn:hover {
      transform: translateY(-3px);
      box-shadow: var(--shadow-md);
    }
    
    .search-btn i {
      margin-left: 8px;
    }
    
    /* Search suggestions */
    .search-suggestions {
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      background: white;
      border-radius: 0 0 var(--border-radius) var(--border-radius);
      box-shadow: var(--shadow-lg);
      z-index: 100;
      display: none;
      max-height: 300px;
      overflow-y: auto;
    }
    
    .search-suggestions.show {
      display: block;
    }
    
    .search-suggestions div {
      padding: 12px 20px;
      cursor: pointer;
      transition: var(--transition);
    }
    
    .search-suggestions div:hover {
      background: rgba(255, 107, 53, 0.1);
      color: var(--primary);
    }
    
    /* Services Section - Redesigned */
    .services {
      padding: 100px 0;
      background: white;
      position: relative;
    }
    
    .section-title {
      text-align: center;
      margin-bottom: 60px;
    }
    
    .section-title h2 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 15px;
      font-family: 'Montserrat', sans-serif;
      position: relative;
      display: inline-block;
    }
    
    .section-title h2:after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background: var(--gradient-primary);
      border-radius: 2px;
    }
    
    .section-title p {
      color: var(--gray);
      max-width: 700px;
      margin: 0 auto;
      font-size: 1.1rem;
    }
    
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 30px;
    }
    
    .service-card {
      background: white;
      border-radius: var(--border-radius);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
      position: relative;
      border: 1px solid rgba(0,0,0,0.05);
    }
    
    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: var(--shadow-lg);
    }
    
    .service-img {
      height: 200px;
      overflow: hidden;
      position: relative;
    }
    
    .service-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: var(--transition);
    }
    
    .service-card:hover .service-img img {
      transform: scale(1.1);
    }
    
    .service-content {
      padding: 25px;
    }
    
    .service-category {
      display: inline-block;
      background: rgba(37, 206, 209, 0.1);
      color: var(--secondary);
      padding: 5px 12px;
      border-radius: 30px;
      font-size: 0.75rem;
      font-weight: 600;
      margin-bottom: 15px;
    }
    
    .service-title {
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 15px;
      color: var(--dark);
    }
    
    .service-description {
      color: var(--gray);
      margin-bottom: 20px;
      font-size: 0.95rem;
      line-height: 1.6;
    }
    
    .service-meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 15px;
      border-top: 1px solid rgba(0,0,0,0.05);
    }
    
    .service-price {
      font-weight: 700;
      font-size: 1.2rem;
      color: var(--primary);
    }
    
    .service-rating {
      display: flex;
      align-items: center;
      color: var(--warning);
    }
    
    .service-rating i {
      font-size: 0.9rem;
      margin-right: 5px;
    }
    
    .view-all-btn {
      text-align: center;
      margin-top: 50px;
    }
    
    .view-all-btn .btn {
      padding: 14px 30px;
      font-size: 1rem;
      min-width: 250px;
    }
    
    /* Features Section - Redesigned */
    .features {
      padding: 100px 0;
      background: var(--light-gray);
    }
    
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      margin-top: 50px;
    }
    
    .feature-card {
      background: white;
      border-radius: var(--border-radius);
      padding: 40px 30px;
      text-align: center;
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
      border: 1px solid rgba(0,0,0,0.05);
    }
    
    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: var(--shadow-md);
    }
    
    .feature-icon {
      width: 80px;
      height: 80px;
      background: var(--gradient-primary);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 25px;
      font-size: 2rem;
    }
    
    .feature-title {
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 15px;
      color: var(--dark);
    }
    
    .feature-description {
      color: var(--gray);
      font-size: 0.95rem;
      line-height: 1.6;
    }
    
    /* How It Works - Redesigned */
    .how-it-works {
      padding: 100px 0;
      background: white;
      position: relative;
      overflow: hidden;
    }
    
    .steps {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      margin-top: 50px;
      position: relative;
    }
    
    .step {
      flex: 0 0 calc(33.333% - 40px);
      text-align: center;
      position: relative;
      z-index: 1;
      padding: 0 20px;
    }
    
    .step-number {
      width: 70px;
      height: 70px;
      background: var(--gradient-primary);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      font-weight: 700;
      margin: 0 auto 25px;
      position: relative;
      z-index: 2;
      box-shadow: 0 5px 15px rgba(249, 65, 68, 0.3);
    }
    
    .step-content {
      background: white;
      padding: 40px 30px;
      border-radius: var(--border-radius);
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
      border: 1px solid rgba(0,0,0,0.05);
      height: 100%;
    }
    
    .step:hover .step-content {
      transform: translateY(-10px);
      box-shadow: var(--shadow-md);
    }
    
    .step-icon {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: var(--primary);
    }
    
    .step-title {
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 15px;
      color: var(--dark);
    }
    
    .step-description {
      color: var(--gray);
      font-size: 0.95rem;
      line-height: 1.6;
    }
    
    .steps-line {
      position: absolute;
      top: 35px;
      left: 0;
      width: 100%;
      height: 3px;
      background: #eee;
      z-index: 0;
    }
    
    /* Testimonials - Redesigned */
    .testimonials {
      padding: 100px 0;
      background: linear-gradient(135deg, rgba(41,47,54,0.95) 0%, rgba(65,72,82,0.95) 100%), url('{{ asset('images/testimonial-bg.jpg') }}') no-repeat center center/cover;
      background-attachment: fixed;
      color: white;
      position: relative;
    }
    
    .testimonials .section-title h2 {
      color: white;
    }
    
    .testimonials .section-title p {
      color: rgba(255,255,255,0.8);
    }
    
    .testimonial-slider {
      margin-top: 50px;
      position: relative;
    }
    
    .testimonial-card {
      background: rgba(255,255,255,0.1);
      backdrop-filter: blur(10px);
      border-radius: var(--border-radius);
      padding: 40px;
      margin: 0 15px;
      border: 1px solid rgba(255,255,255,0.1);
      transition: var(--transition);
      height: 100%;
    }
    
    .testimonial-card:hover {
      transform: translateY(-5px);
      background: rgba(255,255,255,0.15);
    }
    
    .testimonial-text {
      font-style: italic;
      margin-bottom: 25px;
      position: relative;
      font-size: 1.05rem;
      line-height: 1.8;
    }
    
    .testimonial-text:before {
      content: '"';
      font-size: 4rem;
      position: absolute;
      top: -20px;
      left: -15px;
      opacity: 0.1;
      font-family: serif;
    }
    
    .testimonial-author {
      display: flex;
      align-items: center;
    }
    
    .author-avatar {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      overflow: hidden;
      margin-right: 15px;
      border: 3px solid var(--accent);
      flex-shrink: 0;
    }
    
    .author-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .author-info h4 {
      font-size: 1.2rem;
      margin-bottom: 5px;
    }
    
    .author-info p {
      font-size: 0.9rem;
      opacity: 0.8;
    }
    
    .testimonial-rating {
      color: var(--accent);
      margin-top: 5px;
      font-size: 0.9rem;
    }
    
    /* Partners - Redesigned */
    .partners {
      padding: 80px 0;
      background: white;
    }
    
    .partner-logos {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 40px;
      margin-top: 50px;
    }
    
    .partner-logo {
      opacity: 0.6;
      transition: var(--transition);
      filter: grayscale(100%);
    }
    
    .partner-logo:hover {
      opacity: 1;
      filter: grayscale(0);
    }
    
    .partner-logo img {
      height: 40px;
      width: auto;
      max-width: 150px;
      object-fit: contain;
    }
    
    /* Worker CTA Section - Redesigned */
    .worker-cta-section {
      padding: 100px 0;
      background: linear-gradient(135deg, rgba(41,47,54,0.95) 0%, rgba(65,72,82,0.95) 100%), url('{{ asset('images/workers-bg.jpg') }}') no-repeat center center/cover;
      background-attachment: fixed;
      color: white;
      text-align: center;
      position: relative;
    }
    
    .worker-cta-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      margin: 0 auto;
    }
    
    .worker-cta-content h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      font-family: 'Montserrat', sans-serif;
      line-height: 1.3;
    }
    
    .worker-cta-content p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      opacity: 0.9;
    }
    
    .worker-cta-buttons {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
      margin-bottom: 50px;
    }
    
    .worker-cta-buttons .btn {
      padding: 15px 30px;
      font-size: 1rem;
      font-weight: 600;
      min-width: 220px;
    }
    
    .btn-worker-primary {
      background: var(--primary);
      color: white;
    }
    
    .btn-worker-primary:hover {
      background: var(--primary-dark);
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(249, 65, 68, 0.3);
    }
    
    .btn-worker-secondary {
      background: transparent;
      color: white;
      border: 2px solid white;
    }
    
    .btn-worker-secondary:hover {
      background: rgba(255,255,255,0.1);
      transform: translateY(-3px);
    }
    
    .worker-benefits {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin-top: 50px;
      text-align: left;
    }
    
    .benefit-item {
      background: rgba(255, 255, 255, 0.1);
      padding: 30px;
      border-radius: var(--border-radius);
      backdrop-filter: blur(5px);
      border: 1px solid rgba(255,255,255,0.1);
      transition: var(--transition);
    }
    
    .benefit-item:hover {
      transform: translateY(-5px);
      background: rgba(255, 255, 255, 0.15);
    }
    
    .benefit-icon {
      font-size: 2.5rem;
      color: var(--accent);
      margin-bottom: 20px;
    }
    
    .benefit-item h3 {
      margin-bottom: 15px;
      font-size: 1.2rem;
    }
    
    .benefit-item p {
      opacity: 0.9;
      font-size: 0.95rem;
      line-height: 1.6;
    }
    
    /* App Download - Redesigned */
    .app-download {
      padding: 100px 0;
      background: white;
    }
    
    .app-container {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 50px;
    }
    
    .app-content {
      flex: 1;
      min-width: 300px;
    }
    
    .app-content h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      font-family: 'Montserrat', sans-serif;
      color: var(--dark);
      line-height: 1.3;
    }
    
    .app-content p {
      color: var(--gray);
      margin-bottom: 30px;
      font-size: 1.1rem;
      line-height: 1.6;
      max-width: 500px;
    }
    
    .app-buttons {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
    }
    
    .app-btn {
      display: flex;
      align-items: center;
      background: var(--dark);
      color: white;
      padding: 12px 20px;
      border-radius: 8px;
      text-decoration: none;
      transition: var(--transition);
      min-width: 180px;
    }
    
    .app-btn:hover {
      transform: translateY(-3px);
      box-shadow: var(--shadow-md);
    }
    
    .app-btn i {
      font-size: 1.8rem;
      margin-right: 10px;
    }
    
    .app-btn-text small {
      display: block;
      font-size: 0.7rem;
      opacity: 0.8;
    }
    
    .app-btn-text span {
      font-size: 1rem;
      font-weight: 600;
    }
    
    .app-image {
      flex: 1;
      min-width: 300px;
      text-align: center;
    }
    
    .app-image img {
      max-width: 100%;
      height: auto;
      max-height: 500px;
      border-radius: var(--border-radius);
      box-shadow: var(--shadow-lg);
    }
    
    /* Newsletter - Redesigned */
    .newsletter {
      padding: 80px 0;
      background: var(--gradient-primary);
      color: white;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    
    .newsletter:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('{{ asset('images/pattern.png') }}') repeat;
      opacity: 0.1;
    }
    
    .newsletter-content {
      position: relative;
      z-index: 2;
      max-width: 700px;
      margin: 0 auto;
    }
    
    .newsletter h2 {
      font-size: 2.2rem;
      margin-bottom: 20px;
      font-family: 'Montserrat', sans-serif;
    }
    
    .newsletter p {
      font-size: 1.1rem;
      margin-bottom: 30px;
      opacity: 0.9;
    }
    
    .newsletter-form {
      display: flex;
      max-width: 500px;
      margin: 0 auto;
    }
    
    .newsletter-input {
      flex: 1;
      padding: 15px 20px;
      border: none;
      border-radius: 50px 0 0 50px;
      font-family: 'Poppins', sans-serif;
      font-size: 1rem;
      outline: none;
    }
    
    .newsletter-btn {
      background: var(--dark);
      color: white;
      border: none;
      padding: 0 25px;
      border-radius: 0 50px 50px 0;
      font-weight: 600;
      cursor: pointer;
      transition: var(--transition);
    }
    
    .newsletter-btn:hover {
      background: #1a1f24;
    }
    
    /* Footer - Redesigned */
    .footer {
      background: var(--dark);
      color: white;
      padding: 80px 0 30px;
      position: relative;
    }
    
    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 40px;
      margin-bottom: 60px;
    }
    
    .footer-logo {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .footer-logo img {
      height: 40px;
    }
    
    .footer-logo-text {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      font-size: 1.5rem;
      margin-left: 10px;
      background: var(--gradient-primary);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    
    .footer-about p {
      opacity: 0.7;
      font-size: 0.95rem;
      margin-bottom: 20px;
      line-height: 1.6;
    }
    
    .social-links {
      display: flex;
      gap: 15px;
    }
    
    .social-link {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255,255,255,0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      transition: var(--transition);
    }
    
    .social-link:hover {
      background: var(--primary);
      transform: translateY(-3px);
    }
    
    .footer-title {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 25px;
      position: relative;
      padding-bottom: 10px;
    }
    
    .footer-title:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 40px;
      height: 2px;
      background: var(--gradient-primary);
    }
    
    .footer-links {
      list-style: none;
    }
    
    .footer-links li {
      margin-bottom: 12px;
    }
    
    .footer-links a {
      color: rgba(255,255,255,0.7);
      text-decoration: none;
      transition: var(--transition);
      font-size: 0.95rem;
      display: inline-block;
    }
    
    .footer-links a:hover {
      color: white;
      transform: translateX(5px);
    }
    
    .footer-contact p {
      display: flex;
      align-items: flex-start;
      margin-bottom: 15px;
      opacity: 0.7;
      font-size: 0.95rem;
    }
    
    .footer-contact i {
      margin-right: 10px;
      color: var(--primary);
      font-size: 1rem;
      margin-top: 3px;
    }
    
    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.1);
      padding-top: 30px;
      text-align: center;
    }
    
    .footer-bottom p {
      opacity: 0.6;
      font-size: 0.9rem;
    }
    
    .footer-bottom a {
      color: rgba(255,255,255,0.8);
      text-decoration: none;
      transition: var(--transition);
    }
    
    .footer-bottom a:hover {
      color: var(--primary);
    }
    
    /* Responsive Styles - Enhanced */
    @media (max-width: 1200px) {
      .hero h1 {
        font-size: 3rem;
      }
      
      .search-form {
        grid-template-columns: 1fr 1fr;
      }
      
      .search-btn {
        grid-column: 1 / -1;
      }
    }
    
    @media (max-width: 992px) {
      .hero h1 {
        font-size: 2.5rem;
      }
      
      .hero-image {
        width: 45%;
      }
      
      .steps-line {
        display: none;
      }
      
      .step {
        flex: 0 0 100%;
        margin-bottom: 30px;
      }
      
      .step:last-child {
        margin-bottom: 0;
      }
      
      .app-container {
        flex-direction: column-reverse;
      }
      
      .app-content {
        text-align: center;
        margin-top: 30px;
      }
      
      .app-buttons {
        justify-content: center;
      }
      
      .app-content p {
        margin-left: auto;
        margin-right: auto;
      }
    }
    
    @media (max-width: 768px) {
      .hero {
        padding: 120px 0 60px;
        text-align: center;
      }
      
      .hero-content {
        max-width: 100%;
      }
      
      .hero-image {
        display: none;
      }
      
      .hero p {
        margin-left: auto;
        margin-right: auto;
      }
      
      .hero-btns {
        justify-content: center;
      }
      
      .hero-stats {
        justify-content: center;
      }
      
      .search-section {
        margin-top: 0;
        border-radius: 0;
        width: 100%;
      }
      
      .search-form {
        grid-template-columns: 1fr;
      }
      
      .newsletter-form {
        flex-direction: column;
      }
      
      .newsletter-input {
        border-radius: 50px;
        margin-bottom: 10px;
      }
      
      .newsletter-btn {
        border-radius: 50px;
        padding: 15px;
      }
    }
    
    @media (max-width: 576px) {
      :root {
        --nav-height: 70px;
      }
      
      .hero h1 {
        font-size: 2.2rem;
      }
      
      .hero p {
        font-size: 1.1rem;
      }
      
      .hero-btns {
        flex-direction: column;
        gap: 10px;
      }
      
      .hero-btns .btn {
        width: 100%;
      }
      
      .section-title h2 {
        font-size: 2rem;
      }
      
      .worker-cta-buttons {
        flex-direction: column;
        gap: 10px;
      }
      
      .worker-cta-buttons .btn {
        width: 100%;
      }
      
      .app-buttons {
        flex-direction: column;
      }
      
      .footer-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <!-- Header - Redesigned -->
  <header id="header">
    <div class="container header-container">
      <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala">
        <span class="logo-text">KaajWala</span>
      </a>
      
      <button class="mobile-menu-btn" id="mobileMenuBtn">
        <span class="hamburger"></span>
      </button>
      
      <div class="nav-overlay" id="navOverlay"></div>
      
      <nav class="main-nav" id="mainNav">
        <ul class="nav-links">
          <li><a href="{{ url('/') }}" class="active"><i class="fas fa-home"></i> Home</a></li>
          
          <li class="dropdown">
            <a href="{{ url('/services') }}"><i class="fas fa-tools"></i> Services <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/services/electrician') }}"><i class="fas fa-bolt"></i> Electrician</a></li>
              <li><a href="{{ url('/services/plumber') }}"><i class="fas fa-faucet"></i> Plumber</a></li>
              <li><a href="{{ url('/services/cleaner') }}"><i class="fas fa-broom"></i> Cleaner</a></li>
              <li><a href="{{ url('/services/mechanic') }}"><i class="fas fa-car"></i> Mechanic</a></li>
              <li><a href="{{ url('/services/movers') }}"><i class="fas fa-truck-moving"></i> Movers</a></li>
              <li><a href="{{ url('/services/painter') }}"><i class="fas fa-paint-roller"></i> Painter</a></li>
            </ul>
          </li>
          
          <li><a href="{{ url('/providers') }}"><i class="fas fa-user-tie"></i> Providers</a></li>
          
          <li class="dropdown">
            <a href="#"><i class="fas fa-info-circle"></i> About <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/about') }}"><i class="fas fa-building"></i> Our Company</a></li>
              <li><a href="{{ url('/team') }}"><i class="fas fa-users"></i> Our Team</a></li>
              <li><a href="{{ url('/mission') }}"><i class="fas fa-bullseye"></i> Mission & Vision</a></li>
            </ul>
          </li>
          
          <li><a href="{{ url('/contact') }}"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
        
        <div class="nav-buttons">
          <a href="{{ url('/login') }}" class="btn btn-outline">Login</a>
        </div>
      </nav>
    </div>
  </header>

  <!-- Hero Section - Redesigned -->
<section class="hero">
  <div class="container">
    <div class="hero-content">
      <h1>Professional Services At Your Doorstep</h1>
      <p>Find trusted professionals for all your home and office needs. Fast, reliable, and affordable services across Bangladesh.</p>
      
      <div class="hero-btns">
        <a href="{{ url('/booking') }}" class="btn btn-primary">
          <i class="fas fa-calendar-check"></i> Book a Service
        </a>
        <a href="{{ url('/providers') }}" class="btn btn-outline">
          <i class="fas fa-user-tie"></i> Become a Provider
        </a>
      </div>
      
      <div class="hero-stats">
        <div class="stat-item">
          <div class="stat-icon">
            <i class="fas fa-users"></i>
          </div>
          <div class="stat-text">
            <h3>5,000+</h3>
            <p>Happy Customers</p>
          </div>
        </div>
        
        <div class="stat-item">
          <div class="stat-icon">
            <i class="fas fa-user-cog"></i>
          </div>
          <div class="stat-text">
            <h3>1,200+</h3>
            <p>Verified Providers</p>
          </div>
        </div>
        
        <div class="stat-item">
          <div class="stat-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div class="stat-text">
            <h3>25+</h3>
            <p>Cities Covered</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="hero-image">
      <img src="{{ asset('images/hero-service.png') }}" alt="Service Professionals">
    </div>
  </div>
</section>

<style>
  .hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding: 80px 0;
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, rgba(41,47,54,0.85) 0%, rgba(65,72,82,0.85) 100%), 
                url('{{ asset('images/wall.jpg') }}') no-repeat center center/cover;
    background-attachment: fixed;
    color: white;
  }

  .hero-content {
    position: relative;
    z-index: 2;
    max-width: 600px;
    animation: fadeInUp 0.8s ease-out;
  }

  .hero h1 {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 20px;
    font-family: 'Montserrat', sans-serif;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
  }

  .hero p {
    font-size: 1.25rem;
    margin-bottom: 30px;
    opacity: 0.9;
    max-width: 90%;
    text-shadow: 0 1px 2px rgba(0,0,0,0.2);
  }

  .hero-btns {
    display: flex;
    gap: 15px;
    margin-bottom: 40px;
    flex-wrap: wrap;
  }

  .hero-btns .btn {
    padding: 14px 28px;
    font-size: 1rem;
    min-width: 180px;
  }

  .hero-stats {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
  }

  .stat-item {
    display: flex;
    align-items: center;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(5px);
    padding: 15px 20px;
    border-radius: var(--border-radius);
    border: 1px solid rgba(255,255,255,0.1);
    transition: var(--transition);
  }

  .stat-item:hover {
    background: rgba(255,255,255,0.15);
    transform: translateY(-3px);
  }

  .stat-icon {
    font-size: 2rem;
    margin-right: 15px;
    color: var(--accent);
  }

  .stat-text h3 {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 5px;
    background: linear-gradient(to right, var(--primary), var(--accent));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .stat-text p {
    font-size: 0.9rem;
    opacity: 0.8;
  }

  .hero-image {
    position: absolute;
    right: 5%;
    bottom: 0;
    width: 45%;
    max-width: 650px;
    z-index: 1;
    animation: float 6s ease-in-out infinite;
  }

  @keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @media (max-width: 992px) {
    .hero h1 {
      font-size: 2.5rem;
    }
    
    .hero-image {
      width: 45%;
    }
  }

  @media (max-width: 768px) {
    .hero {
      padding: 120px 0 60px;
      text-align: center;
    }
    
    .hero-content {
      max-width: 100%;
    }
    
    .hero-image {
      display: none;
    }
    
    .hero p {
      margin-left: auto;
      margin-right: auto;
    }
    
    .hero-btns {
      justify-content: center;
    }
    
    .hero-stats {
      justify-content: center;
    }
  }

  @media (max-width: 576px) {
    .hero h1 {
      font-size: 2.2rem;
    }
    
    .hero p {
      font-size: 1.1rem;
    }
    
    .hero-btns {
      flex-direction: column;
      gap: 10px;
    }
    
    .hero-btns .btn {
      width: 100%;
    }
  }
</style>

  <!-- Search Section - Redesigned -->
<section class="search-section">
  <div class="search-container">
    <div class="search-title">
      <h2>What Service Do You Need?</h2>
      <p>Find the right professional for your specific need</p>
    </div>
    
    <form class="search-form" id="searchForm">
      <div class="search-input">
        <input type="text" placeholder="Electrician, Plumber, Cleaner..." id="service-search" autocomplete="off">
        <i class="fas fa-search"></i>
        <div class="search-suggestions" id="service-suggestions"></div>
      </div>
      
      <div class="search-input">
        <select id="location-select">
          <option value="">Select Location</option>
          <option value="dhaka">Dhaka</option>
          <option value="chittagong">Chittagong</option>
          <option value="sylhet">Sylhet</option>
          <option value="khulna">Khulna</option>
          <option value="rajshahi">Rajshahi</option>
        </select>
        <i class="fas fa-map-marker-alt"></i>
      </div>
      
      <div class="search-input">
        <select id="service-type">
          <option value="">Service Category</option>
          <option value="home">Home Services</option>
          <option value="office">Office Services</option>
          <option value="emergency">Emergency Services</option>
        </select>
        <i class="fas fa-tags"></i>
      </div>
      
      <button type="button" class="search-btn" id="findProfessionalsBtn">
        Find Professionals <i class="fas fa-arrow-right"></i>
      </button>
    </form>
  </div>
</section>

<script>
  document.getElementById('findProfessionalsBtn').addEventListener('click', function() {
    // Check if user is authenticated (you'll need to implement this check)
    const isAuthenticated = {{ auth()->check() ? 'true' : 'false' }};
    
    if (isAuthenticated) {
      // User is logged in - redirect to dashboard
      window.location.href = "{{ route('dashboard') }}";
      
      // Optional: Pass search parameters to dashboard
      // const serviceType = document.getElementById('service-type').value;
      // window.location.href = `{{ route('dashboard') }}?service=${serviceType}`;
    } else {
      // User not logged in - redirect to login
      window.location.href = "{{ route('login') }}";
      
      // Optional: Pass search parameters to login page to remember the search
      // const serviceType = document.getElementById('service-type').value;
      // window.location.href = `{{ route('login') }}?redirect_to=dashboard&service=${serviceType}`;
    }
  });
</script>

  <!-- Services Section - Redesigned -->
  <section class="services">
    <div class="container">
      <div class="section-title">
        <h2>Our Popular Services</h2>
        <p>Quality services provided by verified professionals</p>
      </div>
      
      <div class="services-grid">
        <!-- Service 1 -->
        <div class="service-card">
          <div class="service-img">
            <img src="{{ asset('images/electrician.png') }}" alt="Electrician">
          </div>
          <div class="service-content">
            <span class="service-category">Electrical</span>
            <h3 class="service-title">Electrician Services</h3>
            <p class="service-description">Wiring, lighting, circuit repairs and all electrical installations by certified professionals.</p>
            <div class="service-meta">
              <span class="service-price">৳500-৳2000</span>
              <span class="service-rating">
                <i class="fas fa-star"></i> 4.9 (128)
              </span>
            </div>
          </div>
        </div>
        
        <!-- Service 2 -->
        <div class="service-card">
          <div class="service-img">
            <img src="{{ asset('images/plumber.png') }}" alt="Plumber">
          </div>
          <div class="service-content">
            <span class="service-category">Plumbing</span>
            <h3 class="service-title">Expert Plumber</h3>
            <p class="service-description">Fix leaks, install pipes, repair faucets and solve all plumbing issues efficiently.</p>
            <div class="service-meta">
              <span class="service-price">৳400-৳1500</span>
              <span class="service-rating">
                <i class="fas fa-star"></i> 4.8 (95)
              </span>
            </div>
          </div>
        </div>
        
        <!-- Service 3 -->
        <div class="service-card">
          <div class="service-img">
            <img src="{{ asset('images/cleaner.png') }}" alt="Cleaner">
          </div>
          <div class="service-content">
            <span class="service-category">Cleaning</span>
            <h3 class="service-title">Professional Cleaner</h3>
            <p class="service-description">Deep cleaning, regular housekeeping and office cleaning services.</p>
            <div class="service-meta">
              <span class="service-price">৳300-৳1200</span>
              <span class="service-rating">
                <i class="fas fa-star"></i> 4.7 (210)
              </span>
            </div>
          </div>
        </div>
        
        <!-- Service 4 -->
        <div class="service-card">
          <div class="service-img">
            <img src="{{ asset('images/ac.png') }}" alt="AC Technician">
          </div>
          <div class="service-content">
            <span class="service-category">Appliance</span>
            <h3 class="service-title">AC Repair Technician</h3>
            <p class="service-description">AC installation, gas refill, maintenance and all repair services.</p>
            <div class="service-meta">
              <span class="service-price">৳600-৳2500</span>
              <span class="service-rating">
                <i class="fas fa-star"></i> 4.9 (87)
              </span>
            </div>
          </div>
        </div>
        
        <!-- Service 5 -->
        <div class="service-card">
          <div class="service-img">
            <img src="{{ asset('images/painter.png') }}" alt="Painter">
          </div>
          <div class="service-content">
            <span class="service-category">Painting</span>
            <h3 class="service-title">House Painter</h3>
            <p class="service-description">Interior and exterior painting with high quality materials and professional finish.</p>
            <div class="service-meta">
              <span class="service-price">৳800-৳3000</span>
              <span class="service-rating">
                <i class="fas fa-star"></i> 4.6 (73)
              </span>
            </div>
          </div>
        </div>
        
        <!-- Service 6 -->
        <div class="service-card">
          <div class="service-img">
            <img src="{{ asset('images/movers.png') }}" alt="Movers">
          </div>
          <div class="service-content">
            <span class="service-category">Moving</span>
            <h3 class="service-title">Home & Office Movers</h3>
            <p class="service-description">Stress-free relocation with packing, loading and transportation services.</p>
            <div class="service-meta">
              <span class="service-price">৳2000-৳8000</span>
              <span class="service-rating">
                <i class="fas fa-star"></i> 4.7 (52)
              </span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="view-all-btn">
        <a href="{{ url('/services') }}" class="btn btn-primary">
          View All Services <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Features Section - Redesigned -->
  <section class="features">
    <div class="container">
      <div class="section-title">
        <h2>Why Choose KaajWala</h2>
        <p>We provide the best service experience for both customers and professionals</p>
      </div>
      
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 class="feature-title">Verified Professionals</h3>
          <p class="feature-description">All our service providers are thoroughly vetted, trained and background checked for your safety.</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-clock"></i>
          </div>
          <h3 class="feature-title">Quick Response</h3>
          <p class="feature-description">Get connected with available professionals in your area within minutes, not days.</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-tag"></i>
          </div>
          <h3 class="feature-title">Transparent Pricing</h3>
          <p class="feature-description">Know the cost upfront with no hidden charges. Pay only when the job is completed to your satisfaction.</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-headset"></i>
          </div>
          <h3 class="feature-title">24/7 Support</h3>
          <p class="feature-description">Our customer support team is available round the clock to assist you with any issues.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works - Redesigned -->
  <section class="how-it-works">
    <div class="container">
      <div class="section-title">
        <h2>How KaajWala Works</h2>
        <p>Get your problems solved in just 3 simple steps</p>
      </div>
      
      <div class="steps">
        <div class="steps-line"></div>
        
        <div class="step">
          <div class="step-number">1</div>
          <div class="step-content">
            <div class="step-icon">
              <i class="fas fa-search-location"></i>
            </div>
            <h3 class="step-title">Find a Service</h3>
            <p class="step-description">Search for the service you need and browse through verified professionals in your area with ratings and reviews.</p>
          </div>
        </div>
        
        <div class="step">
          <div class="step-number">2</div>
          <div class="step-content">
            <div class="step-icon">
              <i class="fas fa-calendar-check"></i>
            </div>
            <h3 class="step-title">Book an Appointment</h3>
            <p class="step-description">Select your preferred time slot and book instantly with our easy online system. Receive instant confirmation.</p>
          </div>
        </div>
        
        <div class="step">
          <div class="step-number">3</div>
          <div class="step-content">
            <div class="step-icon">
              <i class="fas fa-user-cog"></i>
            </div>
            <h3 class="step-title">Get It Done</h3>
            <p class="step-description">Our professional arrives on time with proper tools and completes the job to your satisfaction. Pay securely after service.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials - Redesigned -->
  <section class="testimonials">
    <div class="container">
      <div class="section-title">
        <h2>What Our Customers Say</h2>
        <p>Hear from people who have used our services</p>
      </div>
      
      <div class="testimonial-slider">
        <!-- Testimonial 1 -->
        <div class="testimonial-card">
          <div class="testimonial-text">
            KaajWala saved me when my AC broke down in the middle of summer. Their technician arrived within 2 hours and fixed the issue professionally. The pricing was transparent and the service was exceptional. Highly recommended!
          </div>
          <div class="testimonial-author">
            <div class="author-avatar">
              <img src="{{ asset('images/rahim.png') }}" alt="Rahim Ahmed">
            </div>
            <div class="author-info">
              <h4>Rahim Ahmed</h4>
              <p>Business Owner, Dhaka</p>
              <div class="testimonial-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="testimonial-card">
          <div class="testimonial-text">
            I've used their cleaning service three times now and each time they've exceeded my expectations. The cleaners are thorough and pay attention to details I wouldn't even think of. The app makes scheduling so convenient!
          </div>
          <div class="testimonial-author">
            <div class="author-avatar">
              <img src="{{ asset('images/tasnim.png') }}" alt="Tasnim Khan">
            </div>
            <div class="author-info">
              <h4>Tasnim Khan</h4>
              <p>Housewife, Chittagong</p>
              <div class="testimonial-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="testimonial-card">
          <div class="testimonial-text">
            As a busy professional, I don't have time to deal with home repairs. KaajWala has been a lifesaver - their electrician fixed my wiring issues in no time. The best part? I didn't have to negotiate prices or worry about quality.
          </div>
          <div class="testimonial-author">
            <div class="author-avatar">
              <img src="{{ asset('images/farhana.png') }}" alt="Farhana Islam">
            </div>
            <div class="author-info">
              <h4>Farhana Islam</h4>
              <p>Bank Manager, Sylhet</p>
              <div class="testimonial-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Partners - Redesigned -->
  <section class="partners">
    <div class="container">
      <div class="section-title">
        <h2>Our Trusted Partners</h2>
        <p>Collaborating with leading brands to serve you better</p>
      </div>
      
      <div class="partner-logos">
        <div class="partner-logo">
          <img src="{{ asset('images/robi.png') }}" alt="Robi">
        </div>
        <div class="partner-logo">
          <img src="{{ asset('images/grameenphone.png') }}" alt="Grameenphone">
        </div>
        <div class="partner-logo">
          <img src="{{ asset('images/bkash.png') }}" alt="bKash">
        </div>
        <div class="partner-logo">
          <img src="{{ asset('images/daraz.png') }}" alt="Daraz">
        </div>
        <div class="partner-logo">
          <img src="{{ asset('images/samsung.png') }}" alt="Samsung">
        </div>
      </div>
    </div>
  </section>

  <!-- Worker CTA Section - Redesigned -->
  <section class="worker-cta-section">
    <div class="container">
      <div class="worker-cta-content">
        <h2>Join Our Team of Professional Service Providers</h2>
        <p>Earn competitive wages, set your own schedule, and be part of Bangladesh's most trusted home services platform.</p>
        
        <div class="worker-cta-buttons">
          <a href="{{ url('/worker-register') }}" class="btn btn-worker-primary">
            <i class="fas fa-user-plus"></i> Register as Worker
          </a>
          <a href="{{ url('/worker-benefits') }}" class="btn btn-worker-secondary">
            <i class="fas fa-info-circle"></i> Learn More
          </a>
        </div>

        <div class="worker-benefits">
          <div class="benefit-item">
            <div class="benefit-icon">
              <i class="fas fa-wallet"></i>
            </div>
            <h3>Competitive Earnings</h3>
            <p>Keep up to 80% of your service fees with transparent pricing and regular bonuses for top-rated professionals.</p>
          </div>
          
          <div class="benefit-item">
            <div class="benefit-icon">
              <i class="fas fa-calendar-alt"></i>
            </div>
            <h3>Flexible Schedule</h3>
            <p>Choose when you work and how many jobs you take. Perfect for both full-time professionals and side hustlers.</p>
          </div>
          
          <div class="benefit-item">
            <div class="benefit-icon">
              <i class="fas fa-shield-alt"></i>
            </div>
            <h3>Job Security</h3>
            <p>Regular work opportunities in your area with our growing customer base. No more worrying about finding clients.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- App Download - Redesigned -->
  <section class="app-download">
    <div class="container">
      <div class="app-container">
        <div class="app-image">
          <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala App">
        </div>
        
        <div class="app-content">
          <h2>Download Our Mobile App</h2>
          <p>Get instant access to services, real-time tracking, exclusive offers and more with our user-friendly mobile application. Available for both iOS and Android devices.</p>
          
          <div class="app-buttons">
            <a href="#" class="app-btn">
              <i class="fab fa-google-play"></i>
              <div class="app-btn-text">
                <small>GET IT ON</small>
                <span>Google Play</span>
              </div>
            </a>
            
            <a href="#" class="app-btn">
              <i class="fab fa-apple"></i>
              <div class="app-btn-text">
                <small>Download on the</small>
                <span>App Store</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter - Redesigned -->
  <section class="newsletter">
    <div class="container">
      <div class="newsletter-content">
        <h2>Stay Updated</h2>
        <p>Subscribe to our newsletter for exclusive offers, service tips and updates.</p>
        
        <form class="newsletter-form">
          <input type="email" placeholder="Your email address" class="newsletter-input" required>
          <button type="submit" class="newsletter-btn">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer - Redesigned -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-about">
          <div class="footer-logo">
            <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala">
            <span class="footer-logo-text">KaajWala</span>
          </div>
          <p>KaajWala is Bangladesh's leading service marketplace, connecting customers with verified professionals for all home and office needs since 2023.</p>
          
          <div class="social-links">
            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        
        <div class="footer-links-container">
          <h3 class="footer-title">Quick Links</h3>
          <ul class="footer-links">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About Us</a></li>
            <li><a href="{{ url('/services') }}">Services</a></li>
            <li><a href="{{ url('/providers') }}">Service Providers</a></li>
            <li><a href="{{ url('/pricing') }}">Pricing</a></li>
            <li><a href="{{ url('/blog') }}">Blog</a></li>
          </ul>
        </div>
        
        <div class="footer-links-container">
          <h3 class="footer-title">Services</h3>
          <ul class="footer-links">
            <li><a href="{{ url('/services/electrician') }}">Electrician</a></li>
            <li><a href="{{ url('/services/plumber') }}">Plumber</a></li>
            <li><a href="{{ url('/services/cleaner') }}">Cleaner</a></li>
            <li><a href="{{ url('/services/ac') }}">AC Repair</a></li>
            <li><a href="{{ url('/services/painter') }}">Painter</a></li>
            <li><a href="{{ url('/services/movers') }}">Movers</a></li>
          </ul>
        </div>
        
        <div class="footer-contact">
          <h3 class="footer-title">Contact Us</h3>
          <p><i class="fas fa-map-marker-alt"></i> Road no-5, Block A, Mirpur 1, Dhaka, Bangladesh</p>
          <p><i class="fas fa-phone-alt"></i> +880 1518996430</p>
          <p><i class="fas fa-envelope"></i> kaajwala247@gmail.com</p>
          <p><i class="fas fa-clock"></i> Saturday–Saturday, 9 AM–9 PM</p>
        </div>
      </div>
      
      <div class="footer-bottom">
        <p>&copy; 2025 KaajWala. All Rights Reserved. | <a href="{{ url('/privacy') }}">Privacy Policy</a> | <a href="{{ url('/terms') }}">Terms of Service</a></p>
      </div>
    </div>
  </footer>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const header = document.getElementById('header');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mainNav = document.getElementById('mainNav');
    const navOverlay = document.getElementById('navOverlay');
    const dropdowns = document.querySelectorAll('.dropdown');

    // Header scroll effect
    window.addEventListener('scroll', function () {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });

    // Mobile menu toggle
    mobileMenuBtn.addEventListener('click', function () {
      this.classList.toggle('active');
      mainNav.classList.toggle('active');
      navOverlay.classList.toggle('active');
      document.body.classList.toggle('no-scroll');
    });

    // Close mobile nav when clicking overlay
    navOverlay.addEventListener('click', function () {
      mobileMenuBtn.classList.remove('active');
      mainNav.classList.remove('active');
      this.classList.remove('active');
      document.body.classList.remove('no-scroll');
    });

    // Mobile dropdown functionality
    dropdowns.forEach(dropdown => {
      const link = dropdown.querySelector('a');
      const menu = dropdown.querySelector('.dropdown-menu');

      link.addEventListener('click', function (e) {
        if (window.innerWidth <= 992) {
          e.preventDefault();
          dropdown.classList.toggle('active');

          // Close other dropdowns
          dropdowns.forEach(other => {
            if (other !== dropdown) {
              other.classList.remove('active');
            }
          });
        }
      });
    });

    // Close mobile menu when clicking a link
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        if (window.innerWidth <= 992) {
          mobileMenuBtn.classList.remove('active');
          mainNav.classList.remove('active');
          navOverlay.classList.remove('active');
          document.body.classList.remove('no-scroll');
        }
      });
    });

    // Responsive reset on resize
    window.addEventListener('resize', function () {
      if (window.innerWidth > 992) {
        mobileMenuBtn.classList.remove('active');
        mainNav.classList.remove('active');
        navOverlay.classList.remove('active');
        document.body.classList.remove('no-scroll');
        
        dropdowns.forEach(dropdown => {
          dropdown.classList.remove('active');
        });
      }
    });
  });
</script>

  @include('chatbot')
</body>
</html>