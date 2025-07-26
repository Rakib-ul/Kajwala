<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>KaajWala | Professional Service Marketplace</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #FF6B35;
      --primary-dark: #F94144;
      --secondary: #25CED1;
      --accent: #FCE38A;
      --dark: #292F36;
      --light: #F7FFF7;
      --gray: #6C757D;
      --success: #4BB543;
      --warning: #FFC107;
      --danger: #DC3545;
      --gradient-primary: linear-gradient(135deg, var(--primary), var(--primary-dark));
      --gradient-secondary: linear-gradient(135deg, var(--secondary), #00A8B5);
      --shadow-sm: 0 2px 8px rgba(0,0,0,0.1);
      --shadow-md: 0 4px 12px rgba(0,0,0,0.15);
      --shadow-lg: 0 8px 24px rgba(0,0,0,0.2);
      --transition: all 0.3s ease;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      color: var(--dark);
      background-color: #f9f9f9;
      line-height: 1.6;
      overflow-x: hidden;
    }
    
    .container {
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    /* Header & Navigation */
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      transition: var(--transition);
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      box-shadow: var(--shadow-sm);
    }
    
    header.scrolled {
      background: rgba(255, 255, 255, 0.98);
      box-shadow: var(--shadow-md);
    }
    
    .header-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 0;
    }
    
    .logo {
      display: flex;
      align-items: center;
    }
    
    .logo img {
      height: 50px;
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
    }
    
    nav {
      display: flex;
      align-items: center;
    }
    
    .nav-links {
      display: flex;
      list-style: none;
    }
    
    .nav-links li {
      position: relative;
      margin: 0 8px;
    }
    
    .nav-links a {
      color: var(--dark);
      text-decoration: none;
      font-weight: 500;
      font-size: 0.95rem;
      padding: 10px 15px;
      border-radius: 6px;
      display: flex;
      align-items: center;
      transition: var(--transition);
    }
    
    .nav-links a:hover {
      color: var(--primary);
      background: rgba(255, 107, 53, 0.1);
    }
    
    .nav-links a i {
      margin-right: 8px;
      font-size: 0.9rem;
    }
    
    .dropdown {
      position: relative;
    }
    
    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      width: 220px;
      background: white;
      border-radius: 8px;
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
      padding: 10px 20px;
      color: var(--gray);
      font-size: 0.9rem;
    }
    
    .dropdown-menu a:hover {
      color: var(--primary);
      background: rgba(255, 107, 53, 0.05);
    }
    
    .nav-buttons {
      display: flex;
      align-items: center;
      margin-left: 20px;
    }
    
    .btn {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 30px;
      font-weight: 500;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      transition: var(--transition);
      border: none;
      font-size: 0.95rem;
    }
    
    .btn-primary {
      background: var(--gradient-primary);
      color: white;
    }
    
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(249, 65, 68, 0.3);
    }
    
    .btn-outline {
      background: transparent;
      color: var(--primary);
      border: 1px solid var(--primary);
      margin-right: 10px;
    }
    
    .btn-outline:hover {
      background: rgba(255, 107, 53, 0.1);
    }
    
    .mobile-menu-btn {
      display: none;
      background: none;
      border: none;
      font-size: 1.5rem;
      color: var(--dark);
      cursor: pointer;
    }
    
    /* Hero Section */
    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding: 150px 0 80px;
      position: relative;
      overflow: hidden;
      background: linear-gradient(135deg, rgba(41,47,54,0.9) 0%, rgba(65,72,82,0.9) 100%), url('{{ asset('images/hero-bg.jpg') }}') no-repeat center center/cover;
    }
    
    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 600px;
      color: white;
    }
    
    .hero h1 {
      font-size: 3.2rem;
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 20px;
      font-family: 'Montserrat', sans-serif;
    }
    
    .hero p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      opacity: 0.9;
    }
    
    .hero-btns {
      display: flex;
      gap: 15px;
      margin-bottom: 40px;
    }
    
    .hero-btns .btn {
      padding: 12px 25px;
      font-size: 1rem;
    }
    
    .hero-stats {
      display: flex;
      gap: 30px;
    }
    
    .stat-item {
      display: flex;
      align-items: center;
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
      right: 0;
      bottom: 0;
      width: 50%;
      max-width: 700px;
      z-index: 1;
    }
    
    /* Search Section */
.search-section {
  background: rgba(255, 255, 255, 0.9);
  backdrop-filter: blur(10px);
  padding: 50px 0;
  position: relative;
  z-index: 10;
  margin: -50px auto 0;
  width: 90%;
  max-width: 1200px;
  border-radius: 20px;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.2);
  transform: translateY(0);
  transition: all 0.3s ease;
}

.search-section:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.search-container {
  padding: 0 30px;
  max-width: 900px;
  margin: 0 auto;
}

.search-title {
  text-align: center;
  margin-bottom: 30px;
  color: var(--dark);
}

.search-title h2 {
  font-size: 2rem;
  margin-bottom: 10px;
  font-weight: 700;
}

.search-title p {
  color: var(--gray);
  font-size: 1.1rem;
}

.search-form {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  align-items: center;
}

.search-input {
  position: relative;
}

.search-input input,
.search-input select {
  width: 100%;
  padding: 16px 50px 16px 20px;
  border-radius: 12px;
  border: 1px solid rgba(0, 0, 0, 0.1);
  font-family: 'Poppins', sans-serif;
  font-size: 1rem;
  transition: all 0.3s ease;
  background: rgba(255, 255, 255, 0.8);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.search-input input:focus,
.search-input select:focus {
  outline: none;
  border-color: var(--primary);
  box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.2);
  background: white;
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
  grid-column: 1 / -1;
  background: var(--gradient-primary);
  color: white;
  border: none;
  padding: 18px;
  border-radius: 12px;
  font-weight: 600;
  font-size: 1.1rem;
  cursor: pointer;
  transition: all 0.3s ease;
  margin-top: 10px;
}

.search-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(249, 65, 68, 0.4);
}

/* Search suggestions */
.search-suggestions {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  background: white;
  border-radius: 0 0 12px 12px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
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
  transition: all 0.2s ease;
}

.search-suggestions div:hover {
  background: rgba(255, 107, 53, 0.1);
  color: var(--primary);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .search-section {
    width: 95%;
    padding: 30px 0;
    margin-top: -30px;
  }
  
  .search-title h2 {
    font-size: 1.6rem;
  }
  
  .search-form {
    grid-template-columns: 1fr;
  }
  
  .search-btn {
    margin-top: 0;
  }
}
    
    /* Services Section */
    .services {
      padding: 100px 0;
      background: linear-gradient(to bottom, #f9f9f9 0%, white 100%);
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
    }
    
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 30px;
    }
    
    .service-card {
      background: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
      position: relative;
    }
    
    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: var(--shadow-lg);
    }
    
    .service-img {
      height: 180px;
      overflow: hidden;
    }
    
    .service-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: var(--transition);
    }
    
    .service-card:hover .service-img img {
      transform: scale(1.05);
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
    }
    
    .service-meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 15px;
      border-top: 1px solid #eee;
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
    
    /* How It Works */
    .how-it-works {
      padding: 100px 0;
      background: white;
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
      width: 60px;
      height: 60px;
      background: var(--gradient-primary);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      font-weight: 700;
      margin: 0 auto 25px;
      position: relative;
      z-index: 2;
    }
    
    .step-content {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
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
    }
    
    .steps-line {
      position: absolute;
      top: 30px;
      left: 0;
      width: 100%;
      height: 3px;
      background: #eee;
      z-index: 0;
    }
    
    /* Testimonials */
    .testimonials {
      padding: 100px 0;
      background: linear-gradient(135deg, rgba(41,47,54,0.95) 0%, rgba(65,72,82,0.95) 100%), url('{{ asset('images/testimonial-bg.jpg') }}') no-repeat center center/cover;
      color: white;
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
      border-radius: 12px;
      padding: 30px;
      margin: 0 15px;
      border: 1px solid rgba(255,255,255,0.1);
      transition: var(--transition);
    }
    
    .testimonial-card:hover {
      transform: translateY(-5px);
      background: rgba(255,255,255,0.15);
    }
    
    .testimonial-text {
      font-style: italic;
      margin-bottom: 25px;
      position: relative;
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
      width: 60px;
      height: 60px;
      border-radius: 50%;
      overflow: hidden;
      margin-right: 15px;
      border: 3px solid var(--accent);
    }
    
    .author-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .author-info h4 {
      font-size: 1.1rem;
      margin-bottom: 5px;
    }
    
    .author-info p {
      font-size: 0.9rem;
      opacity: 0.8;
    }
    
    .testimonial-rating {
      color: var(--accent);
      margin-top: 5px;
    }
    
    /* Partners */
    .partners {
      padding: 80px 0;
      background: white;
    }
    
    .partner-logos {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 30px;
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
    
    /* CTA Section */
    .cta-section {
      padding: 100px 0;
      background: var(--gradient-primary);
      color: white;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    
    .cta-section:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('{{ asset('images/pattern.png') }}') repeat;
      opacity: 0.1;
    }
    
    .cta-content {
      position: relative;
      z-index: 2;
      max-width: 700px;
      margin: 0 auto;
    }
    
    .cta-content h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      font-family: 'Montserrat', sans-serif;
    }
    
    .cta-content p {
      font-size: 1.1rem;
      margin-bottom: 30px;
      opacity: 0.9;
    }
    
    .cta-buttons {
      display: flex;
      justify-content: center;
      gap: 20px;
    }
    
    .cta-buttons .btn {
      padding: 15px 30px;
      font-size: 1rem;
      font-weight: 600;
    }
    
    .btn-white {
      background: white;
      color: var(--primary);
    }
    
    .btn-white:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    }
    
    .btn-transparent {
      background: transparent;
      color: white;
      border: 2px solid white;
    }
    
    .btn-transparent:hover {
      background: rgba(255,255,255,0.1);
    }
    
    /* App Download */
    .app-download {
      padding: 80px 0;
      background: linear-gradient(to right, #f9f9f9 0%, white 100%);
    }
    
    .app-container {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
    }
    
    .app-content {
      flex: 1;
      min-width: 300px;
      padding-right: 40px;
    }
    
    .app-content h2 {
      font-size: 2.2rem;
      margin-bottom: 20px;
      font-family: 'Montserrat', sans-serif;
      color: var(--dark);
    }
    
    .app-content p {
      color: var(--gray);
      margin-bottom: 30px;
    }
    
    .app-buttons {
      display: flex;
      gap: 15px;
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
    }
    
    /* Footer */
    .footer {
      background: var(--dark);
      color: white;
      padding: 80px 0 30px;
    }
    
    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
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
    }
    
    .footer-links a:hover {
      color: white;
      padding-left: 5px;
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
    
    /* Responsive Styles */
    @media (max-width: 1200px) {
      .hero h1 {
        font-size: 2.8rem;
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
    }
    
    @media (max-width: 768px) {
      .mobile-menu-btn {
        display: block;
      }
      
      .nav-links, .nav-buttons {
        display: none;
      }
      
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
      
      .hero-btns {
        justify-content: center;
      }
      
      .hero-stats {
        justify-content: center;
        flex-wrap: wrap;
      }
      
      .search-section {
        margin-top: 0;
        border-radius: 0;
      }
      
      .app-container {
        flex-direction: column-reverse;
      }
      
      .app-content {
        padding-right: 0;
        text-align: center;
        margin-top: 30px;
      }
      
      .app-buttons {
        justify-content: center;
      }
    }
    
    @media (max-width: 576px) {
      .hero h1 {
        font-size: 2rem;
      }
      
      .hero p {
        font-size: 1rem;
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
      
      .cta-buttons {
        flex-direction: column;
        gap: 10px;
      }
      
      .cta-buttons .btn {
        width: 100%;
      }
      
      .app-buttons {
        flex-direction: column;
      }
      /* Add to your existing CSS */
.text-center {
  text-align: center;
}

.mt-5 {
  margin-top: 3rem;
}

.btn-lg {
  padding: 12px 30px;
  font-size: 1.1rem;
  border-radius: 8px;
}

.ml-2 {
  margin-left: 0.5rem;
}

/* If you want to match the existing button style */
.btn-primary {
  background: var(--gradient-primary);
  color: white;
  border: none;
  cursor: pointer;
  transition: var(--transition);
  text-decoration: none;
  display: inline-block;
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 15px rgba(249, 65, 68, 0.3);
}
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header id="header">
    <div class="container header-container">
      <div class="logo">
        <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala">
        <span class="logo-text">KaajWala</span>
      </div>
      
      <button class="mobile-menu-btn" id="mobileMenuBtn">
        <i class="fas fa-bars"></i>
      </button>
      
      <nav>
        <ul class="nav-links">
          <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
          
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
          
          <li><a href="{{ url('/providers') }}"><i class="fas fa-user-tie"></i> Service Providers</a></li>
          
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

  <!-- Hero Section -->
 <section class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/wall.jpg') }}') no-repeat center center/cover;">
    <div class="container">
      <div class="hero-content">
        <h1>Professional Services At Your Doorstep</h1>
        <p>Find trusted professionals for all your home and office needs. Fast, reliable, and affordable services across Bangladesh.</p>
        
        <div class="hero-btns">
          <a href="{{ url('/booking') }}" class="btn btn-primary">Book a Service Now</a>
          <a href="{{ url('/providers') }}" class="btn btn-transparent">Become a Provider</a>
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
  <!-- Search Section -->
<section class="search-section">
    <div class="search-container">
      <div class="search-title">
        <h2>What Service Do You Need?</h2>
        <p>Find the right professional for your specific need</p>
      </div>
      
      <form class="search-form">
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
            <option value="">Select Service Type</option>
            <option value="home">Home Services</option>
            <option value="office">Office Services</option>
            <option value="emergency">Emergency Services</option>
          </select>
          <i class="fas fa-tags"></i>
        </div>
        
        <button type="submit" class="search-btn">Find Professionals <i class="fas fa-arrow-right"></i></button>
      </form>
    </div>
</section>
      
<div class="services-grid">
  <!-- Service 1 -->
  <div class="service-card">
    <div class="service-img">
      <img src="{{ asset('images/electrician.png') }}" alt="Electrician">
    </div>
    <div class="service-content">
      <span class="service-category">Electrical</span>
      <h3 class="service-title">Electrician</h3>
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
      
      <div class="button-container">
        <style>
          /* Button Container */
.button-container {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 3rem 0;
  width: 100%;
}

/* Button Style */
.button1 {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 1rem 2rem;
  background: linear-gradient(135deg, #FF6B35, #F94144);
  color: white;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
  font-size: 1.1rem;
  font-weight: 600;
  border-radius: 50px;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(249, 65, 68, 0.3);
  min-width: 250px;
  text-align: center;
}

/* Button Hover Effects */
.button1:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(249, 65, 68, 0.4);
  background: linear-gradient(135deg, #F94144, #FF6B35);
}

/* Button Active State */
.button1:active {
  transform: translateY(1px);
}

/* Icon Style */
.button1 i {
  margin-left: 0.8rem;
  font-size: 1rem;
  transition: transform 0.3s ease;
}

.button1:hover i {
  transform: translateX(3px);
}

/* Responsive Design */
@media (max-width: 768px) {
  .button1 {
    padding: 0.8rem 1.5rem;
    font-size: 1rem;
    min-width: 200px;
  }
}
        </style>
  <a href="{{ url('/services') }}" class="button1">
    Explore All Services <i class="fas fa-arrow-right"></i>
  </a>
</div>

</section>
  <!-- How It Works -->
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
            <p class="step-description">Search for the service you need and browse through verified professionals in your area.</p>
          </div>
        </div>
        
        <div class="step">
          <div class="step-number">2</div>
          <div class="step-content">
            <div class="step-icon">
              <i class="fas fa-calendar-check"></i>
            </div>
            <h3 class="step-title">Book an Appointment</h3>
            <p class="step-description">Select your preferred time slot and book instantly with our easy online system.</p>
          </div>
        </div>
        
        <div class="step">
          <div class="step-number">3</div>
          <div class="step-content">
            <div class="step-icon">
              <i class="fas fa-user-cog"></i>
            </div>
            <h3 class="step-title">Get It Done</h3>
            <p class="step-description">Our professional arrives on time and completes the job to your satisfaction.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
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
            KaajWala saved me when my AC broke down in the middle of summer. Their technician arrived within 2 hours and fixed the issue professionally. Highly recommended!
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
            I've used their cleaning service three times now and each time they've exceeded my expectations. The cleaners are thorough and pay attention to details.
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
            As a busy professional, I don't have time to deal with home repairs. KaajWala has been a lifesaver - their electrician fixed my wiring issues in no time.
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

  <!-- Partners -->
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

  <!-- CTA Section -->
<section class="worker-cta-section" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center; padding: 80px 0; text-align: center; color: white;">
  <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
    <div class="worker-cta-content" style="max-width: 800px; margin: 0 auto;">
      <h2 style="font-size: 2.5rem; margin-bottom: 20px; font-weight: 700;">Join Our Team of Professional Service Providers</h2>
      <p style="font-size: 1.2rem; margin-bottom: 30px; opacity: 0.9;">Earn competitive wages, set your own schedule, and be part of Bangladesh's most trusted home services platform.</p>
      
      <div class="worker-cta-buttons" style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
        <a href="{{ url('/worker-register') }}" class="btn-worker-primary" style="background: #f96d00; color: white; padding: 15px 30px; border-radius: 50px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; display: inline-block; border: 2px solid #f96d00;">
          <i class="fas fa-user-plus" style="margin-right: 10px;"></i> Register as Worker
        </a>
        <a href="{{ url('/worker-benefits') }}" class="btn-worker-secondary" style="background: transparent; color: white; padding: 15px 30px; border-radius: 50px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; display: inline-block; border: 2px solid white;">
          <i class="fas fa-info-circle" style="margin-right: 10px;"></i> Learn More
        </a>
      </div>

      <div class="worker-benefits" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; margin-top: 50px; text-align: left;">
        <div class="benefit-item" style="background: rgba(255, 255, 255, 0.1); padding: 20px; border-radius: 10px; backdrop-filter: blur(5px);">
          <div class="benefit-icon" style="font-size: 2rem; color: #f96d00; margin-bottom: 15px;">
            <i class="fas fa-wallet"></i>
          </div>
          <h3 style="margin-bottom: 10px;">Competitive Earnings</h3>
          <p style="opacity: 0.9; font-size: 0.95rem;">Keep up to 80% of your service fees with transparent pricing.</p>
        </div>
        
        <div class="benefit-item" style="background: rgba(255, 255, 255, 0.1); padding: 20px; border-radius: 10px; backdrop-filter: blur(5px);">
          <div class="benefit-icon" style="font-size: 2rem; color: #f96d00; margin-bottom: 15px;">
            <i class="fas fa-calendar-alt"></i>
          </div>
          <h3 style="margin-bottom: 10px;">Flexible Schedule</h3>
          <p style="opacity: 0.9; font-size: 0.95rem;">Choose when you work and how many jobs you take.</p>
        </div>
        
        <div class="benefit-item" style="background: rgba(255, 255, 255, 0.1); padding: 20px; border-radius: 10px; backdrop-filter: blur(5px);">
          <div class="benefit-icon" style="font-size: 2rem; color: #f96d00; margin-bottom: 15px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="margin-bottom: 10px;">Job Security</h3>
          <p style="opacity: 0.9; font-size: 0.95rem;">Regular work opportunities in your area.</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- App Download -->
  <section class="app-download">
    <div class="container">
      <div class="app-container">
        <div class="app-image">
          <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala App">
        </div>
        
        <div class="app-content">
          <h2>Download Our Mobile App</h2>
          <p>Get instant access to services, real-time tracking, exclusive offers and more with our user-friendly mobile application.</p>
          
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
  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-about">
          <div class="footer-logo">
            <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala">
            <span class="footer-logo-text">KaajWala</span>
          </div>
          <p>KaajWala is Bangladesh's leading service marketplace, connecting customers with verified professionals for all home and office needs.</p>
          
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
        <p>&copy; 2025 KaajWala. All Rights Reserved. | <a href="{{ url('/privacy') }}" style="color: rgba(255,255,255,0.6);">Privacy Policy</a> | <a href="{{ url('/terms') }}" style="color: rgba(255,255,255,0.6);">Terms of Service</a></p>
      </div>
    </div>
  </footer>

  <script>
    // Header scroll effect
    window.addEventListener('scroll', function() {
      const header = document.getElementById('header');
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
    
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const nav = document.querySelector('nav');
    
    mobileMenuBtn.addEventListener('click', function() {
      nav.style.display = nav.style.display === 'block' ? 'none' : 'block';
    });
    
    // Responsive adjustments
    function handleResize() {
      if (window.innerWidth > 768) {
        nav.style.display = '';
      }
    }
    
    window.addEventListener('resize', handleResize);
    // Add this script for dynamic functionality
document.addEventListener('DOMContentLoaded', function() {
  const serviceSearch = document.getElementById('service-search');
  const serviceSuggestions = document.getElementById('service-suggestions');
  
  // Sample services data - replace with your actual data
  const services = [
    "Electrician", "Plumber", "Cleaner", "AC Repair", 
    "Painter", "Movers", "Carpenter", "Mechanic",
    "Gardener", "Pest Control", "Appliance Repair", "Tailor"
  ];
  
  // Dynamic search suggestions
  serviceSearch.addEventListener('input', function() {
    const input = this.value.toLowerCase();
    if (input.length > 1) {
      const matches = services.filter(service => 
        service.toLowerCase().includes(input)
      );
      
      if (matches.length > 0) {
        serviceSuggestions.innerHTML = matches.map(service => 
          `<div onclick="selectService('${service}')">${service}</div>`
        ).join('');
        serviceSuggestions.classList.add('show');
      } else {
        serviceSuggestions.innerHTML = '<div>No matching services found</div>';
        serviceSuggestions.classList.add('show');
      }
    } else {
      serviceSuggestions.classList.remove('show');
    }
  });
  
  // Close suggestions when clicking outside
  document.addEventListener('click', function(e) {
    if (!serviceSearch.contains(e.target) && !serviceSuggestions.contains(e.target)) {
      serviceSuggestions.classList.remove('show');
    }
  });
});

function selectService(service) {
  document.getElementById('service-search').value = service;
  document.getElementById('service-suggestions').classList.remove('show');
}
  </script>
  @include('chatbot')
</body>
</html>