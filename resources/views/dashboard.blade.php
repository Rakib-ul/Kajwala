<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KaajWala | Dashboard</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <style>
      /* ✅ Existing CSS unchanged */
      body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        background: #f9f9f9;
        color: #333;
      }
      header.main-header {
        background: #f96d00;
        color: white;
        text-align: center;
        padding: 40px 20px;
      }
      .container { max-width: 800px; margin: 0 auto; padding: 20px; }
      .btn { background: #f96d00; color: white; padding: 12px 20px; border: none; border-radius: 6px; cursor: pointer; font-weight: 500; transition: background 0.3s; }
      .btn:hover { background: #d95600; }
      .profile-section { background: #fff; padding: 30px; margin-top: 20px; border-radius: 8px; box-shadow: 0 3px 10px rgba(0,0,0,0.05); }
      footer.footer { background: #222; color: white; text-align: center; padding: 20px; margin-top: 40px; }
  </style>
</head>
<body>
  <header class="main-header">
    <div class="container">
      <h1>KaajWala Dashboard</h1>
      <p>Welcome back, {{ auth()->user()->name }}!</p> {{-- ✅ Personalized --}}
    </div>
  </header>

  <section class="location-section">
    <div class="container">
      <h3>📍 Enter Your Location</h3>
      <form id="location-form">
        <input type="text" id="location" class="form-control" placeholder="Enter your area (e.g., Mirpur 1)">
        <button type="submit" class="btn">Find Services</button>
      </form>
    </div>
  </section>

  <section class="service-list-section" style="display: none;">
    <div class="container">
      <h3>Available Services in <span id="user-location"></span></h3>
      {{-- ✅ Added id="services-form" --}}
      <form id="services-form" action="{{ url('/select-workers') }}" method="GET">
        <input type="text" id="service-search" class="form-control" placeholder="Search services..." style="margin-bottom: 20px;">
        <div class="services">
          {{-- ✅ Your service list remains unchanged --}}
          <label><input type="checkbox" name="services[]" value="Electrician"> Electrician</label>
          <label><input type="checkbox" name="services[]" value="Plumber"> Plumber</label>
          <label><input type="checkbox" name="services[]" value="Cleaner"> Cleaner</label>
          <label><input type="checkbox" name="services[]" value="Painter"> Painter</label>
          <label><input type="checkbox" name="services[]" value="Carpenter"> Carpenter</label>
          {{-- .... (all other services you listed remain unchanged) --}}
        </div>
        <button type="submit" class="btn">Confirm Services</button>
      </form>
    </div>
  </section>

  <section class="profile-section">
    <div class="container">
      <h3>👤 My Profile</h3>
      <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
      <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
      <p><strong>Phone:</strong> {{ auth()->user()->phone }}</p>

      <a href="{{ url('/profile') }}" class="btn" style="display: inline-block; margin-top: 15px;">Detailed Information</a>

      {{-- ✅ Logout --}}
      <form action="{{ route('logout') }}" method="POST" style="margin-top: 15px;">
          @csrf
          <button type="submit" class="btn" style="background:#d9534f;">Logout</button>
      </form>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <p>
        <strong>Emergency Contact:</strong> +880 1518996430<br>
        <strong>Email:</strong> kaajwala247@gmail.com<br>
        <strong>Address:</strong> Road no-5, Block A, Mirpur 1, Dhaka, Bangladesh<br>
        <strong>Working Days:</strong> Saturday to Saturday, 9:00 AM - 9:00 PM
      </p>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const locationForm = document.getElementById('location-form');
      const locationInput = document.getElementById('location');
      const serviceSection = document.querySelector('.service-list-section');
      const locationText = document.getElementById('user-location');
      const servicesForm = document.getElementById('services-form');

      locationForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const location = locationInput.value.trim();
        if (location !== '') {
          locationText.textContent = location;
          serviceSection.style.display = 'block';
        } else {
          alert('Please enter your location.');
        }
      });

      servicesForm.addEventListener('submit', function (e) {
        const selectedServices = [...document.querySelectorAll('input[name="services[]"]:checked')].map(el => el.value);
        if (selectedServices.length === 0) {
          e.preventDefault();
          alert("Please select at least one service.");
        }
      });

      // ✅ Service search functionality
      const searchInput = document.getElementById('service-search');
      const serviceLabels = document.querySelectorAll('.services label');
      searchInput.addEventListener('input', function () {
        const query = this.value.toLowerCase();
        serviceLabels.forEach(label => {
          const text = label.textContent.toLowerCase();
          label.style.display = text.includes(query) ? 'block' : 'none';
        });
      });
    });
  </script>
</body>
</html>
