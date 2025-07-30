<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile | KaajWala</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #FF6B35;
      --primary-dark: #F94144;
      --secondary: #25CED1;
      --dark: #292F36;
      --light: #F7FFF7;
      --gray: #6C757D;
      --light-gray: #f8f9fa;
      --shadow-sm: 0 2px 8px rgba(0,0,0,0.1);
      --shadow-md: 0 4px 12px rgba(0,0,0,0.15);
      --shadow-lg: 0 8px 24px rgba(0,0,0,0.2);
      --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
      --border-radius: 12px;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light-gray);
      color: var(--dark);
      margin: 0;
      padding: 0;
      line-height: 1.6;
    }

    .main-header {
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: white;
      padding: 60px 20px 40px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .main-header::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('{{ asset('images/pattern.png') }}') repeat;
      opacity: 0.1;
    }

    .container {
      max-width: 900px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .profile-header-content {
      position: relative;
      z-index: 2;
    }

    .profile-pic-container {
      position: relative;
      display: inline-block;
      margin-bottom: 20px;
    }

    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid rgba(255,255,255,0.3);
      box-shadow: var(--shadow-lg);
      transition: var(--transition);
    }

    .profile-pic:hover {
      transform: scale(1.05);
    }

    .edit-profile-pic {
      position: absolute;
      bottom: 10px;
      right: 10px;
      background: var(--secondary);
      width: 36px;
      height: 36px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      box-shadow: var(--shadow-sm);
      cursor: pointer;
      transition: var(--transition);
    }

    .edit-profile-pic:hover {
      transform: scale(1.1);
    }

    .profile-section {
      background: white;
      padding: 30px;
      margin: -40px auto 30px;
      border-radius: var(--border-radius);
      box-shadow: var(--shadow-md);
      position: relative;
      z-index: 3;
    }

    .section-title {
      display: flex;
      align-items: center;
      margin-bottom: 25px;
      padding-bottom: 10px;
      border-bottom: 2px solid var(--light-gray);
    }

    .section-title i {
      margin-right: 12px;
      color: var(--primary);
      font-size: 1.5rem;
    }

    .profile-info {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .info-item {
      margin-bottom: 15px;
    }

    .info-label {
      font-weight: 500;
      color: var(--gray);
      margin-bottom: 5px;
      font-size: 0.9rem;
    }

    .info-value {
      font-weight: 600;
      font-size: 1.1rem;
    }

    .form-container {
      background: white;
      padding: 30px;
      border-radius: var(--border-radius);
      box-shadow: var(--shadow-md);
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
      color: var(--dark);
    }

    .form-control {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #e0e0e0;
      border-radius: var(--border-radius);
      font-family: 'Poppins', sans-serif;
      font-size: 1rem;
      transition: var(--transition);
      background-color: var(--light-gray);
    }

    .form-control:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.2);
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 12px 24px;
      border-radius: 50px;
      font-weight: 600;
      text-decoration: none;
      cursor: pointer;
      transition: var(--transition);
      border: none;
      font-size: 1rem;
    }

    .btn-primary {
      background: var(--primary);
      color: white;
      box-shadow: 0 4px 15px rgba(249, 65, 68, 0.2);
    }

    .btn-primary:hover {
      background: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(249, 65, 68, 0.3);
    }

    .btn-outline {
      background: transparent;
      color: var(--primary);
      border: 1px solid var(--primary);
    }

    .btn-outline:hover {
      background: rgba(255, 107, 53, 0.1);
    }

    .service-history {
      background: white;
      padding: 30px;
      border-radius: var(--border-radius);
      box-shadow: var(--shadow-md);
    }

    .service-item {
      display: flex;
      align-items: center;
      padding: 15px 0;
      border-bottom: 1px solid var(--light-gray);
      transition: var(--transition);
    }

    .service-item:last-child {
      border-bottom: none;
    }

    .service-item:hover {
      transform: translateX(5px);
    }

    .service-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(37, 206, 209, 0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      color: var(--secondary);
      font-size: 1.1rem;
    }

    .service-details {
      flex: 1;
    }

    .service-name {
      font-weight: 600;
      margin-bottom: 5px;
    }

    .service-meta {
      display: flex;
      justify-content: space-between;
      color: var(--gray);
      font-size: 0.9rem;
    }

    .service-date {
      color: var(--primary);
    }

    .footer {
      background: var(--dark);
      color: white;
      padding: 40px 0;
      margin-top: 60px;
    }

    .footer-content {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 30px;
      max-width: 900px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .footer-item {
      margin-bottom: 20px;
    }

    .footer-title {
      font-weight: 600;
      margin-bottom: 15px;
      font-size: 1.1rem;
      position: relative;
      padding-bottom: 10px;
    }

    .footer-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 40px;
      height: 2px;
      background: var(--primary);
    }

    .footer-contact p {
      display: flex;
      align-items: flex-start;
      margin-bottom: 12px;
      font-size: 0.95rem;
    }

    .footer-contact i {
      margin-right: 10px;
      color: var(--primary);
      font-size: 1rem;
      margin-top: 3px;
    }

    .footer-bottom {
      text-align: center;
      padding-top: 20px;
      margin-top: 20px;
      border-top: 1px solid rgba(255,255,255,0.1);
      font-size: 0.9rem;
      opacity: 0.8;
    }

    @media (max-width: 768px) {
      .profile-section {
        margin-top: -20px;
      }
      
      .profile-info {
        grid-template-columns: 1fr;
      }
      
      .service-meta {
        flex-direction: column;
      }
      
      .service-date {
        margin-top: 5px;
      }
    }

    @media (max-width: 576px) {
      .main-header {
        padding: 50px 20px 30px;
      }
      
      .profile-pic {
        width: 100px;
        height: 100px;
      }
      
      .form-container, .service-history {
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <header class="main-header">
    <div class="container">
      <div class="profile-header-content">
        <div class="profile-pic-container">
          <img src="{{ asset('images/azam.jpg') }}" alt="Profile Picture" class="profile-pic">
          <div class="edit-profile-pic" title="Change Photo">
            <i class="fas fa-camera"></i>
          </div>
        </div>
        <h1>SM Golam Azam</h1>
        <p>Welcome back to your KaajWala profile</p>
      </div>
    </div>
  </header>

  <div class="container">
    <section class="profile-section">
      <div class="section-title">
        <i class="fas fa-user-circle"></i>
        <h2>Profile Information</h2>
      </div>
      
      <div class="profile-info">
        <div class="info-item">
          <div class="info-label">Full Name</div>
          <div class="info-value">SM Golam Azam</div>
        </div>
        
        <div class="info-item">
          <div class="info-label">Email Address</div>
          <div class="info-value">smazam999@gmail.com</div>
        </div>
        
        <div class="info-item">
          <div class="info-label">Phone Number</div>
          <div class="info-value">+880 1518996430</div>
        </div>
        
        <div class="info-item">
          <div class="info-label">Member Since</div>
          <div class="info-value">January 2023</div>
        </div>
      </div>
    </section>

    <section class="form-container">
      <div class="section-title">
        <i class="fas fa-edit"></i>
        <h2>Update Profile</h2>
      </div>
      
      <form method="POST" action="#" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" class="form-control" value="SM Golam Azam" required>
        </div>

        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" class="form-control" value="smazam999@gmail.com" required>
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" class="form-control" value="+880 1518996430">
        </div>

        <div class="form-group">
          <label for="password">New Password (leave blank to keep current)</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="••••••••">
        </div>

        <div class="form-group">
          <label for="profile_picture">Profile Picture</label>
          <input type="file" id="profile_picture" name="profile_picture" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">
          <i class="fas fa-save"></i> Save Changes
        </button>
      </form>
    </section>

    <section class="service-history">
      <div class="section-title">
        <i class="fas fa-history"></i>
        <h2>Service History</h2>
      </div>
      
      <div class="service-list">
        <div class="service-item">
          <div class="service-icon">
            <i class="fas fa-faucet"></i>
          </div>
          <div class="service-details">
            <div class="service-name">Plumbing Service</div>
            <div class="service-meta">
              <span>Completed</span>
              <span class="service-date">June 15, 2025</span>
            </div>
          </div>
        </div>
        
        <div class="service-item">
          <div class="service-icon">
            <i class="fas fa-bolt"></i>
          </div>
          <div class="service-details">
            <div class="service-name">Electrical Repair</div>
            <div class="service-meta">
              <span>Completed</span>
              <span class="service-date">May 22, 2025</span>
            </div>
          </div>
        </div>
        
        <div class="service-item">
          <div class="service-icon">
            <i class="fas fa-broom"></i>
          </div>
          <div class="service-details">
            <div class="service-name">Deep Cleaning</div>
            <div class="service-meta">
              <span>Completed</span>
              <span class="service-date">April 10, 2025</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-item">
        <div class="footer-title">Contact Us</div>
        <div class="footer-contact">
          <p><i class="fas fa-phone-alt"></i> +880 1518996430</p>
          <p><i class="fas fa-envelope"></i> kaajwala247@gmail.com</p>
          <p><i class="fas fa-map-marker-alt"></i> Road no-5, Block A, Mirpur 1, Dhaka</p>
        </div>
      </div>
      
      <div class="footer-item">
        <div class="footer-title">Working Hours</div>
        <p>Saturday - Saturday</p>
        <p>9:00 AM - 9:00 PM</p>
      </div>
    </div>
    
    <div class="footer-bottom">
      &copy; 2025 KaajWala. All rights reserved.
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Profile picture edit functionality
      const editProfilePic = document.querySelector('.edit-profile-pic');
      const profilePicInput = document.getElementById('profile_picture');
      
      editProfilePic.addEventListener('click', function() {
        profilePicInput.click();
      });
      
      profilePicInput.addEventListener('change', function(e) {
        if (e.target.files && e.target.files[0]) {
          const reader = new FileReader();
          reader.onload = function(event) {
            document.querySelector('.profile-pic').src = event.target.result;
          };
          reader.readAsDataURL(e.target.files[0]);
        }
      });
      
      // Form validation
      document.querySelector('form').addEventListener('submit', function(e) {
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        
        if (!name || !email) {
          e.preventDefault();
          alert('Please fill in all required fields.');
          return;
        }
        
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
          e.preventDefault();
          alert('Please enter a valid email address.');
          return;
        }
      });
    });
  </script>
</body>
</html>