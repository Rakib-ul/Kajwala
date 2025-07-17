<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>KaajWala | One‑Stop Service Platform</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <style>
    body { font-family:'Roboto',sans-serif; margin:0; background:#f4f4f4; }
    header { background:#f96d00; color:#fff; padding:20px; position:relative; }
    header .container { max-width:1200px; margin:auto; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; }
    header .logo img { height:60px; }
    nav a { color:#fff; margin:0 15px; text-decoration:none; font-weight:500; position:relative; }
    nav a:hover { color:#dcdcdc; }
    .hero { background:#fff; padding:60px 20px; text-align:center; }
    .hero h1 { font-size:2.5rem; margin-bottom:15px; color:#333; }
    .hero p { font-size:1.1rem; color:#666; margin-bottom:30px; }
    .search-box { max-width:600px; margin:auto; display:flex; flex-wrap:wrap; gap:10px; justify-content:center; }
    .search-box input, .search-box select { padding:12px; border:1px solid #ccc; border-radius:4px; width:calc(50% - 10px); }
    .search-box button { background:#f96d00; color:#fff; border:none; padding:12px 20px; border-radius:4px; cursor:pointer; }
    .hero-img { max-width:400px; margin:auto; margin-top:40px; }
    .features { max-width:1200px; margin:60px auto; display:grid; grid-template-columns:repeat(auto-fill, minmax(250px,1fr)); gap:20px; }
    .feature-card { background:#fff; padding:20px; border-radius:8px; text-align:center; box-shadow:0 2px 8px rgba(0,0,0,0.05); }
    .feature-card h3 { color:#f96d00; margin-bottom:10px; }
    .feature-card p { color:#555; }
    .cta { text-align:center; margin:50px 0; }
    .cta a { background:#333; color:#fff; padding:15px 30px; border-radius:5px; text-decoration:none; }
    .testimonial-section, .app-section, .partners-section { background:#fff; padding:60px 20px; text-align:center; }
    .testimonial { max-width:800px; margin:20px auto; font-style:italic; color:#444; }
    .partner-logos img { height:40px; margin:0 10px; opacity:0.8; }
    .app-buttons img { height:50px; margin:10px; }
    .footer { background:#222; color:#ccc; padding:40px 20px; text-align:center; }
    .footer p { margin:5px 0; }
  </style>
</head>
<body>

  <header>
    <div class="container">
      <div class="logo">
        <img src="{{ asset('images/kaajwala-logo.png') }}" alt="KaajWala">
      </div>
      <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/services') }}">Services</a>
        <a href="{{ url('/contact') }}">Contact</a>
        <a href="{{ url('/portfolio') }}">Portfolio</a>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <h1>Your Trusted Home & Office Service Platform</h1>
      <p>Book electricians, plumbers, cleaners & more — instantly and reliably across Bangladesh.</p>
      <div class="search-box">
        <input type="text" placeholder="What do you need? e.g. Electrician">
        <select>
          <option>Choose City/Area</option>
          <option>Dhaka</option>
          <option>Chittagong</option>
          <option>Sylhet</option>
        </select>
        <button>Search</button>
      </div>
      <img src="{{ asset('images/hero-servant.png') }}" alt="Service Illustration" class="hero-img">
    </div>
  </section>

  <section class="features">
    <div class="feature-card">
      <h3>🔌 Electrician</h3>
      <p>Fast & professional electrical services when you need them.</p>
    </div>
    <div class="feature-card">
      <h3>🚰 Plumber</h3>
      <p>Fix leaks, install pipes & maintain plumbing systems.</p>
    </div>
    <div class="feature-card">
      <h3>🧹 Cleaner</h3>
      <p>Deep cleaning or regular housekeeping delivered to your door.</p>
    </div>
    <div class="feature-card">
      <h3>🛠️ Mechanic</h3>
      <p>Repair home appliances and tools—anywhere, anytime.</p>
    </div>
    <div class="feature-card">
      <h3>📦 Moving Services</h3>
      <p>Hassle-free shifting for home and office.</p>
    </div>
    <div class="feature-card">
      <h3>🎨 Painter</h3>
      <p>Affordable painting services for interior and exterior walls.</p>
    </div>
  </section>

  <div class="cta">
    <a href="{{ url('/services') }}">Explore All Services →</a>
  </div>

  <section class="testimonial-section">
    <h2>What Our Customers Say</h2>
    <div class="testimonial">“KaajWala saved me hours of searching. Reliable and fast!” — Rezaul Karim, Dhaka</div>
    <div class="testimonial">“Their workers are very professional. Highly recommended.” — Nasima Akter, Chittagong</div>
  </section>

  <section class="app-section">
    <h2>Download Our Mobile App</h2>
    <p>Enjoy easier booking and real-time tracking on the go!</p>
    <div class="app-buttons">
      <img src="{{ asset('images/google-play.png') }}" alt="Google Play">
      <img src="{{ asset('images/app-store.png') }}" alt="App Store">
    </div>
  </section>

  <section class="partners-section">
    <h2>Our Trusted Partners</h2>
    <div class="partner-logos">
      <img src="{{ asset('images/partner1.png') }}" alt="Partner 1">
      <img src="{{ asset('images/partner2.png') }}" alt="Partner 2">
      <img src="{{ asset('images/partner3.png') }}" alt="Partner 3">
    </div>
  </section>

  <footer class="footer">
    <p>Emergency Contact: +880 1518996430 | Email: kaajwala247@gmail.com</p>
    <p>Address: Road no-5, Block A, Mirpur 1, Dhaka, Bangladesh</p>
    <p>Working Hours: Saturday–Saturday, 9 AM–9 PM</p>
    <p>© 2025 KaajWala. All Rights Reserved.</p>
  </footer>

</body>
</html>
