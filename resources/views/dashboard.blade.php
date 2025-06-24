<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KaajWala | Dashboard</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
</head>
<body>
  <header class="main-header">
    <div class="container">
      <h1>KaajWala Dashboard</h1>
      <p>Welcome back! Choose your services below.</p>
    </div>
    <style>
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

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

h3 {
  margin-bottom: 15px;
}

form {
  margin-bottom: 30px;
}

.form-control {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 6px;
  margin-bottom: 15px;
}

.btn {
  background: #f96d00;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-weight: 500;
  transition: background 0.3s;
}

.btn:hover {
  background: #d95600;
}

.services label {
  display: block;
  margin-bottom: 10px;
  font-weight: 500;
}

.profile-section {
  background: #fff;
  padding: 30px;
  margin-top: 20px;
  border-radius: 8px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.05);
}

.profile-section p {
  margin: 8px 0;
}

footer.footer {
  background: #222;
  color: white;
  text-align: center;
  padding: 20px;
  margin-top: 40px;
}

    </style>
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
      <form action="{{ url('/select-workers') }}" method="GET">
        <input type="text" id="service-search" class="form-control" placeholder="Search services..." style="margin-bottom: 20px;">
        <div class="services">
          <label><input type="checkbox" name="services[]" value="Electrician"> Electrician</label>
          <label><input type="checkbox" name="services[]" value="Plumber"> Plumber</label>
          <label><input type="checkbox" name="services[]" value="Cleaner"> Cleaner</label>
          <label><input type="checkbox" name="services[]" value="Painter"> Painter</label>
          <label><input type="checkbox" name="services[]" value="Carpenter"> Carpenter</label>
           <label><input type="checkbox" name="services[]" value="Electrician"> Electrician</label>
    <label><input type="checkbox" name="services[]" value="Fan Installation"> Fan Installation</label>
    <label><input type="checkbox" name="services[]" value="Light Fixture Installation"> Light Fixture Installation</label>
    <label><input type="checkbox" name="services[]" value="Switch/Socket Repair"> Switch/Socket Repair</label>
    <label><input type="checkbox" name="services[]" value="Inverter/UPS Setup"> Inverter/UPS Setup</label>
    <label><input type="checkbox" name="services[]" value="Circuit Board Repair"> Circuit Board Repair</label>
    <label><input type="checkbox" name="services[]" value="Wiring and Rewiring"> Wiring and Rewiring</label>
    
    <!-- Plumbing Services -->
    <label><input type="checkbox" name="services[]" value="Plumber"> Plumber</label>
    <label><input type="checkbox" name="services[]" value="Tap Leak Repair"> Tap Leak Repair</label>
    <label><input type="checkbox" name="services[]" value="Pipe Leak Repair"> Pipe Leak Repair</label>
    <label><input type="checkbox" name="services[]" value="Bathroom Fittings"> Bathroom Fittings</label>
    <label><input type="checkbox" name="services[]" value="Kitchen Fittings"> Kitchen Fittings</label>
    <label><input type="checkbox" name="services[]" value="Water Tank Cleaning"> Water Tank Cleaning</label>
    <label><input type="checkbox" name="services[]" value="Drain Unclogging"> Drain Unclogging</label>
    <label><input type="checkbox" name="services[]" value="Water Pump Repair"> Water Pump Repair</label>
    
    <!-- Cleaning Services -->
    <label><input type="checkbox" name="services[]" value="Cleaner"> Cleaner</label>
    <label><input type="checkbox" name="services[]" value="Home Deep Cleaning"> Home Deep Cleaning</label>
    <label><input type="checkbox" name="services[]" value="Sofa Cleaning"> Sofa Cleaning</label>
    <label><input type="checkbox" name="services[]" value="Carpet Cleaning"> Carpet Cleaning</label>
    <label><input type="checkbox" name="services[]" value="Mattress Cleaning"> Mattress Cleaning</label>
    <label><input type="checkbox" name="services[]" value="Kitchen Deep Cleaning"> Kitchen Deep Cleaning</label>
    <label><input type="checkbox" name="services[]" value="Bathroom Deep Cleaning"> Bathroom Deep Cleaning</label>
    
    <!-- Painting & Masonry -->
    <label><input type="checkbox" name="services[]" value="Painter"> Painter</label>
    <label><input type="checkbox" name="services[]" value="Wall Painting"> Wall Painting</label>
    <label><input type="checkbox" name="services[]" value="Wallpaper Installation"> Wallpaper Installation</label>
    <label><input type="checkbox" name="services[]" value="Wall Repair"> Wall Repair</label>
    <label><input type="checkbox" name="services[]" value="Masonry Work"> Masonry Work</label>
    <label><input type="checkbox" name="services[]" value="Tile Installation"> Tile Installation</label>
    <label><input type="checkbox" name="services[]" value="Grout Repair"> Grout Repair</label>
    
    <!-- Carpentry Services -->
    <label><input type="checkbox" name="services[]" value="Carpenter"> Carpenter</label>
    <label><input type="checkbox" name="services[]" value="Furniture Repair"> Furniture Repair</label>
    <label><input type="checkbox" name="services[]" value="Furniture Polishing"> Furniture Polishing</label>
    <label><input type="checkbox" name="services[]" value="Almirah Installation"> Almirah Installation</label>
    <label><input type="checkbox" name="services[]" value="Bed Installation"> Bed Installation</label>
    <label><input type="checkbox" name="services[]" value="Table Installation"> Table Installation</label>
    <label><input type="checkbox" name="services[]" value="Door/Window Repair"> Door/Window Repair</label>
    
    <!-- Appliance Services -->
    <label><input type="checkbox" name="services[]" value="AC Repair"> AC Repair</label>
    <label><input type="checkbox" name="services[]" value="Refrigerator Repair"> Refrigerator Repair</label>
    <label><input type="checkbox" name="services[]" value="Washing Machine Repair"> Washing Machine Repair</label>
    <label><input type="checkbox" name="services[]" value="Microwave Repair"> Microwave Repair</label>
    <label><input type="checkbox" name="services[]" value="Geyser Repair"> Geyser Repair</label>
    <label><input type="checkbox" name="services[]" value="Appliance Installation"> Appliance Installation</label>
    
    <!-- Other Services -->
    <label><input type="checkbox" name="services[]" value="Home Shifting"> Home Shifting</label>
    <label><input type="checkbox" name="services[]" value="Office Shifting"> Office Shifting</label>
    <label><input type="checkbox" name="services[]" value="Packing Services"> Packing Services</label>
    <label><input type="checkbox" name="services[]" value="CCTV Installation"> CCTV Installation</label>
    <label><input type="checkbox" name="services[]" value="WiFi Setup"> WiFi Setup</label>
    <label><input type="checkbox" name="services[]" value="Smart Home Setup"> Smart Home Setup</label>
    <label><input type="checkbox" name="services[]" value="Emergency Repairs"> Emergency Repairs</label>
        </div>
         <button type="submit" class="btn">Confirm Services</button>
</form>
    </div>
  </section>

 <section class="profile-section">
  <div class="container">
    <h3>👤 My Profile</h3>
    <p><strong>Name:</strong> SM Golam Azam</p>
    <p><strong>Email:</strong> smazam999@gmail.com</p>
    <p><strong>Phone:</strong> +880 1518996430</p>
    
    <a href="{{ url('/profile') }}" class="btn" style="
      display: inline-block;
      margin-top: 15px;
      padding: 10px 20px;
      background: #f96d00;
      color: white;
      border: none;
      border-radius: 5px;
      text-decoration: none;
    ">Detailed Information</a>
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

  // Show services after location is entered
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

  // Handle service selection
  servicesForm.addEventListener('submit', function (e) {
    e.preventDefault();
    const selectedServices = [...document.querySelectorAll('input[name="services[]"]:checked')].map(el => el.value);
    if (selectedServices.length > 0) {
      alert("You have selected: " + selectedServices.join(", "));
    } else {
      alert("Please select at least one service.");
    }
  });
});
// Service search functionality
const searchInput = document.getElementById('service-search');
const serviceLabels = document.querySelectorAll('.services label');

searchInput.addEventListener('input', function () {
  const query = this.value.toLowerCase();
  serviceLabels.forEach(label => {
    const text = label.textContent.toLowerCase();
    label.style.display = text.includes(query) ? 'block' : 'none';
  });
});


  </script>
</body>
</html>
