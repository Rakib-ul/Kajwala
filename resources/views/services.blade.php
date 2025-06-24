<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KaajWala Services</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: #f9f9f9;
      margin: 0;
      padding: 0;
      color: #333;
    }
    header {
      background: #f96d00;
      color: white;
      padding: 40px 20px;
      text-align: center;
    }
    .container {
      max-width: 900px;
      margin: 30px auto;
      padding: 20px;
    }
    .service {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
      margin-bottom: 20px;
      padding: 20px;
    }
    h2 {
      color: #f96d00;
    }
    footer {
      background: #222;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }
        nav a {
      color: white;
      font-weight: bold;
      text-decoration: none;
      margin: 0 10px;
      padding: 5px 10px;
      position: relative;
      transition: all 0.3s ease;
      font-size: 18px;
    }

    nav a:hover {
      color: #4CAF50;
      transform: translateY(-2px);
      text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    nav a::before {
      content: "";
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: #4CAF50;
      visibility: hidden;
      transition: all 0.3s ease-in-out;
    }

    nav a:hover::before {
      visibility: visible;
      width: 100%;
    }
  </style>
</head>
<body>
  <header>
        <div>
      <img src="{{ asset('images/kaajwala.png') }}" alt="KaajWala Logo" style="height: 60px;">
    </div>
    <h1>Our Services</h1>
    <p>Professional help right at your doorstep</p>
    <nav>
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/about') }}">About</a> |
      <a href="{{ url('/services') }}">Services</a> |
      <a href="{{ url('/contact') }}">Contact</a> |
      <a href="{{ url('/portfolio') }}">Protfolio</a>
    </nav>
  </header>

<div class="container">
  <div class="service"><h2>🔌 Electrician</h2><p>Expert electrical repair and installation services for your home or office.</p></div>
  <div class="service"><h2>🚰 Plumber</h2><p>From leaky faucets to full pipe installations, our plumbers are here to help.</p></div>
  <div class="service"><h2>🭹 Cleaner</h2><p>Deep cleaning, regular house cleaning, and move-in/move-out services.</p></div>
  <div class="service"><h2>🛠️ Mechanic</h2><p>On-demand mechanical service and repair for household and light industrial tools.</p></div>
  <div class="service"><h2>🎨 Painter</h2><p>Interior and exterior wall painting with premium materials and expert finish.</p></div>
  <div class="service"><h2>🏛️ Mason</h2><p>Brickwork, plastering, and concrete repair for new and old structures.</p></div>
  <div class="service"><h2>🔧 Carpenter</h2><p>Custom furniture, repairs, and woodwork done professionally.</p></div>
  <div class="service"><h2>🚒 AC Technician</h2><p>AC installation, servicing, and gas refilling at your doorstep.</p></div>
  <div class="service"><h2>🚬 Refrigerator Repair</h2><p>Professional diagnosis and repair for fridges and freezers.</p></div>
  <div class="service"><h2>🍳 Cook</h2><p>Hire experienced cooks for daily meals or special occasions.</p></div>
  <div class="service"><h2>🚪 Housemaid</h2><p>Full-time and part-time domestic help for all your cleaning and maintenance needs.</p></div>
  <div class="service"><h2>🛌 Security Guard</h2><p>Licensed and trained security personnel for home and business premises.</p></div>
  <div class="service"><h2>🧵 Tailor</h2><p>Custom tailoring and alterations for men, women, and kids.</p></div>
  <div class="service"><h2>🚗 Driver</h2><p>Hire experienced drivers for personal or corporate use.</p></div>
  <div class="service"><h2>🌿 Gardener</h2><p>Landscape maintenance and gardening for homes and institutions.</p></div>
  <div class="service"><h2>📶 Internet Technician</h2><p>Router installation, troubleshooting, and broadband setup.</p></div>
  <div class="service"><h2>💊 Pest Control</h2><p>Safe and effective pest removal for homes, offices, and restaurants.</p></div>
  <div class="service"><h2>💼 Computer Repair</h2><p>Fix slow PCs, replace parts, and install software with ease.</p></div>
  <div class="service"><h2>📷 Photographer</h2><p>Book professional photographers for weddings, events, or portraits.</p></div>
  <div class="service"><h2>🌺 Makeup Artist</h2><p>Skilled makeup professionals for parties, bridal events, and more.</p></div>
  <div class="service"><h2>🧼 Laundry Service</h2><p>Doorstep laundry and ironing services with pickup and delivery.</p></div>
  <div class="service"><h2>🛋️ Mover & Packer</h2><p>Professional packing, moving, and relocation services.</p></div>
  <div class="service"><h2>🏢 Roofer</h2><p>Roof repairs, waterproofing, and full installations.</p></div>
  <div class="service"><h2>🔌 Electric Pole Repair</h2><p>Maintenance and installation of electric poles and wiring.</p></div>
  <div class="service"><h2>🔬 Solar Installer</h2><p>Solar panel setup and maintenance for energy efficiency.</p></div>
  <div class="service"><h2>🧳 Beautician</h2><p>Beauty services including facials, waxing, and threading at home.</p></div>
  <div class="service"><h2>🚀 Decorator</h2><p>Wedding, party, and corporate event decoration services.</p></div>
  <div class="service"><h2>🚪 Locksmith</h2><p>Emergency lock repair, key duplication, and door unlocking.</p></div>
  <div class="service"><h2>📅 Event Organizer</h2><p>Plan and execute weddings, parties, and corporate events.</p></div>
  <div class="service"><h2>🚬 Gas Line Fitter</h2><p>Installation and repair of residential gas pipelines.</p></div>
  <div class="service"><h2>🪑 Home Nurse</h2><p>Trained medical staff for elderly or patient care at home.</p></div>
  <div class="service"><h2>💳 ATM Technician</h2><p>Technical support for ATM and banking machines.</p></div>
  <div class="service"><h2>🛠️ Printer Repair</h2><p>Maintenance and repair for all brands of printers and copiers.</p></div>
  <div class="service"><h2>🪯 Upholsterer</h2><p>Repair and restoration of sofas, chairs, and other furniture.</p></div>
  <div class="service"><h2>🪜 Window Cleaner</h2><p>High and low-rise window cleaning professionals.</p></div>
  <div class="service"><h2>🚼 Plaster Worker</h2><p>Wall smoothing, ceiling repair, and crack filling.</p></div>
  <div class="service"><h2>🛏️️ Aluminum Worker</h2><p>Fabrication and fitting of aluminum windows and doors.</p></div>
  <div class="service"><h2>🚁 Delivery Rider</h2><p>Express delivery of packages and goods across the city.</p></div>
  <div class="service"><h2>🏪 Tutor</h2><p>Home tutoring in math, science, and language subjects.</p></div>
  <div class="service"><h2>🚓 Cable Installer</h2><p>TV, broadband, and network cable setup services.</p></div>
  <div class="service"><h2>🌈 Interior Designer</h2><p>Creative residential and commercial space design solutions.</p></div>
  <div class="service"><h2>🛫 CCTV Technician</h2><p>Installation and repair of security camera systems.</p></div>
  <div class="service"><h2>👧 Babysitter</h2><p>Trusted child care services for working parents.</p></div>
  <div class="service"><h2>💼 Office Assistant</h2><p>Part-time or full-time help for small office tasks.</p></div>
  <div class="service"><h2>🛡️ Emergency Repairs</h2><p>Urgent home or utility repair services on call.</p></div>
  <div class="service"><h2>🔧 Welding Specialist</h2><p>Welding and fabrication jobs for metal structures.</p></div>
</div>

  <footer >
    <div >
      <p>
        <strong>Emergency Contact:</strong> +880 1518996430<br>
        <strong>Email:</strong> kaajwala247@gmail.com<br>
        <strong>Address:</strong> Road no-5, Block A, Mirpur 1, Dhaka, Bangladesh<br>
        <strong>Working Days:</strong> Saturday to Saturday, 9:00 AM - 9:00 PM
      </p>
    </div>
  </footer>
</body>
</html>