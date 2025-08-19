<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professional Registration | KaajWala</title>
  <meta name="description" content="Register as a skilled professional with KaajWala to access premium job opportunities in Bangladesh">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Global styles */
    body {
      font-family: 'Inter', sans-serif;
      background: #f4f7fc;
      color: #333;
      line-height: 1.5;
    }

    /* Header */
    .site-header {
      background: linear-gradient(135deg, #2563eb, #1d4ed8);
      padding: 2rem;
      text-align: center;
      color: white;
    }

    .site-header .logo {
      font-size: 2rem;
      font-weight: 600;
      color: white;
    }

    .site-header .logo-icon {
      margin-right: 10px;
      font-size: 2rem;
    }

    /* Main section */
    .main-container {
      max-width: 1200px;
      margin: 3rem auto;
      padding: 2rem;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .header-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: #1d4ed8;
    }

    .header-subtitle {
      font-size: 1.2rem;
      color: #4b5563;
      margin-bottom: 1.5rem;
    }

    .registration-card {
      background: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .card-title {
      font-size: 1.5rem;
      font-weight: bold;
      color: #1d4ed8;
    }

    .form-group {
      margin-bottom: 1.5rem;
      position: relative;
    }

    .form-label {
      font-size: 1rem;
      font-weight: 500;
      margin-bottom: 0.5rem;
      color: #4b5563;
    }

    .form-input {
      width: 100%;
      padding: 12px;
      font-size: 1rem;
      border-radius: 8px;
      border: 1px solid #d1d5db;
      transition: all 0.3s ease;
    }

    .form-input:focus {
      border-color: #2563eb;
      outline: none;
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
    }

    .input-icon {
      position: absolute;
      top: 50%;
      left: 16px;
      transform: translateY(-50%);
      color: #6b7280;
    }

    .form-group select {
      padding-left: 2.5rem;
    }

    .submit-btn {
      width: 100%;
      padding: 14px;
      background-color: #2563eb;
      color: white;
      font-size: 1.1rem;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .submit-btn:hover {
      background-color: #1d4ed8;
    }

    .text-error {
      color: #ef4444;
      font-size: 0.875rem;
      margin-top: 0.5rem;
    }

    .auth-link {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.9rem;
    }

    .auth-link a {
      color: #2563eb;
      text-decoration: none;
      font-weight: 500;
    }

    .auth-link a:hover {
      text-decoration: underline;
    }

    footer {
      text-align: center;
      margin-top: 2rem;
      color: #6b7280;
      font-size: 0.875rem;
    }

  </style>
</head>
<body>

  <header class="site-header">
    <a href="{{ url('/') }}" class="logo">
      <i class="fas fa-hands-helping logo-icon"></i>
      <span>KaajWala</span>
    </a>
  </header>

  <main class="main-container">
    <div class="registration-card">
      <div class="card-header">
        <h2 class="card-title">Professional Registration</h2>
      </div>

      <div class="card-body">
        <form action="{{ route('worker.register') }}" method="POST" enctype="multipart/form-data" class="registration-form">
          @csrf

          <div class="form-group">
            <label for="name" class="form-label">Full Name</label>
            <div class="input-container">
              <i class="fas fa-user input-icon"></i>
              <input type="text" id="name" name="name" class="form-input" required placeholder="John Doe" value="{{ old('name') }}">
            </div>
            @error('name')
              <span class="text-error">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <div class="input-container">
              <i class="fas fa-envelope input-icon"></i>
              <input type="email" id="email" name="email" class="form-input" required placeholder="john.doe@example.com" value="{{ old('email') }}">
            </div>
            @error('email')
              <span class="text-error">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="phone" class="form-label">Phone Number</label>
            <div class="input-container">
              <i class="fas fa-phone input-icon"></i>
              <input type="tel" id="phone" name="phone" class="form-input" required placeholder="+880 1XXXXXXXXX" value="{{ old('phone') }}">
            </div>
            @error('phone')
              <span class="text-error">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="address" class="form-label">Address</label>
            <div class="input-container">
              <i class="fas fa-map-marker-alt input-icon"></i>
              <textarea id="address" name="address" class="form-input" required placeholder="Your address here">{{ old('address') }}</textarea>
            </div>
            @error('address')
              <span class="text-error">{{ $message }}</span>
            @enderror
          </div>

 <div class="form-group">
    <label for="service">Select Your Service</label>
    <select name="service" class="form-control" required>
        <option value="">-- Select Service --</option>
        <option value="plumber">Plumber</option>
        <option value="electrician">Electrician</option>
        <option value="cleaner">Cleaner</option>
        <option value="painter">Painter</option>
        <option value="mover">Mover</option>
    </select>
</div>



          <div class="form-group">
            <label for="hourly_rate" class="form-label">Hourly Rate</label>
            <div class="input-container">
              <i class="fas fa-dollar-sign input-icon"></i>
              <input type="number" id="hourly_rate" name="hourly_rate" class="form-input" step="0.01" required value="{{ old('hourly_rate') }}">
            </div>
            @error('hourly_rate')
              <span class="text-error">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="experience" class="form-label">Experience (Years)</label>
            <div class="input-container">
              <i class="fas fa-briefcase input-icon"></i>
              <input type="number" id="experience" name="experience" class="form-input" required value="{{ old('experience') }}">
            </div>
            @error('experience')
              <span class="text-error">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="profile_image" class="form-label">Profile Image</label>
            <input type="file" id="profile_image" name="profile_image" class="form-input">
            @error('profile_image')
              <span class="text-error">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="documents" class="form-label">Documents</label>
            <input type="file" id="documents" name="documents" class="form-input">
            @error('documents')
              <span class="text-error">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <div class="input-container">
              <i class="fas fa-lock input-icon"></i>
              <input type="password" id="password" name="password" class="form-input" required placeholder="At least 8 characters">
            </div>
            @error('password')
              <span class="text-error">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <div class="input-container">
              <i class="fas fa-lock input-icon"></i>
              <input type="password" id="password_confirmation" name="password_confirmation" class="form-input" required placeholder="Confirm password">
            </div>
            @error('password_confirmation')
              <span class="text-error">{{ $message }}</span>
            @enderror
          </div>

          <button type="submit" class="submit-btn">
            <i class="fas fa-user-plus"></i> Register Now
          </button>

          <p class="auth-link">
            Already have an account? <a href="{{ url('/worker-login') }}">Sign in here</a>
          </p>
        </form>
      </div>
    </div>
  </main>

  <footer class="site-footer">
    &copy; 2023 KaajWala. All rights reserved.
  </footer>

  <script>
    // Profession tags click handler
    document.querySelectorAll('.profession-tag').forEach(tag => {
      tag.addEventListener('click', () => {
        document.getElementById('profession').value = tag.textContent;
      });
    });
  </script>

</body>
</html>
