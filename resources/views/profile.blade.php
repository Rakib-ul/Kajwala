<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .main-header {
      background: #f96d00;
      color: white;
      padding: 40px 20px;
      text-align: center;
    }

    .container {
      max-width: 700px;
      margin: 0 auto;
      padding: 20px;
    }

    .profile-section {
      background: #fff;
      padding: 30px;
      margin: 20px auto;
      border-radius: 8px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    }

    .profile-section h3 {
      margin-bottom: 20px;
    }

    .profile-section p {
      margin: 8px 0;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: 500;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .btn {
      background: #f96d00;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 500;
      display: inline-block;
    }

    .btn:hover {
      background: #e06700;
    }

    .service-history {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.05);
      list-style: none;
    }

    .service-history li {
      padding: 10px;
      border-bottom: 1px solid #eee;
    }

    footer.footer {
      background: #222;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }
    .profile-pic {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 15px;
  border: 3px solid #fff;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

  </style>
</head>
<body>
<header class="main-header">
  <div class="container" style="text-align: center;">
    <img src="{{ asset('images/azam.jpg') }}" alt="Profile Picture" class="profile-pic">
    <h1>User Profile</h1>
    <p>Manage your account and service history</p>
  </div>
</header>


  <section class="profile-section">
    <div class="container">
      <h3>👤 My Profile</h3>
      <p><strong>Name:</strong> SM Golam Azam</p>
      <p><strong>Email:</strong> smazam999@gmail.com</p>
      <p><strong>Phone:</strong> +880 1518996430</p>
    </div>
  </section>

  <section class="container">
    <h2>📝 Update Profile</h2>
    <form method="POST" action="#" enctype="multipart/form-data">
      <!-- Laravel directives (if using Laravel Blade) -->
      @csrf
      @method('POST')

      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" class="form-control" value="SM Golam Azam" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" value="smazam999@gmail.com" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" class="form-control" value="+880 1518996430">
      </div>

      <div class="form-group">
        <label for="password">New Password</label>
        <input type="password" id="password" name="password" class="form-control">
      </div>

      <div class="form-group">
        <label for="profile_picture">Profile Picture</label>
        <input type="file" id="profile_picture" name="profile_picture" class="form-control">
      </div>

      <button type="submit" class="btn">Update Profile</button>
    </form>
  </section>

  <section class="container" style="margin-top: 40px;">
    <h2>📜 Service History</h2>
    <ul class="service-history">
      <li>🛠️ Plumber - Completed on 2025-06-15</li>
      <li>🔌 Electrician - Completed on 2025-05-22</li>
      <li>🧹 Cleaner - Completed on 2025-04-10</li>
    </ul>
  </section>

  <footer class="footer">
    <div >
      <p>
        <strong>Emergency Contact:</strong> +880 1518996430<br>
        <strong>Email:</strong> kaajwala247@gmail.com<br>
        <strong>Address:</strong> Road no-5, Block A, Mirpur 1, Dhaka, Bangladesh<br>
        <strong>Working Days:</strong> Saturday to Saturday, 9:00 AM - 9:00 PM
      </p>
    </div>
  </footer>

  <script>
    document.querySelector('form').addEventListener('submit', function (e) {
      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      if (!name || !email) {
        e.preventDefault();
        alert('Please fill in your name and email.');
      }
    });
  </script>
</body>
</html>
