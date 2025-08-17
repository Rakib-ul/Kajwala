{{-- File: resources/views/user/profile.blade.php --}}

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
    body { font-family: 'Poppins', sans-serif; background-color: var(--light-gray); color: var(--dark); margin: 0; padding: 0; line-height: 1.6; }
    .main-header { background: linear-gradient(135deg, var(--primary), var(--primary-dark)); color: white; padding: 60px 20px 40px; text-align: center; position: relative; overflow: hidden; }
    .container { max-width: 900px; margin: 0 auto; padding: 0 20px; }
    .profile-header-content { position: relative; z-index: 2; }
    .profile-pic-container { position: relative; display: inline-block; margin-bottom: 20px; }
    .profile-pic { width: 120px; height: 120px; border-radius: 50%; object-fit: cover; border: 4px solid rgba(255,255,255,0.3); box-shadow: var(--shadow-lg); transition: var(--transition); }
    .edit-profile-pic { position: absolute; bottom: 10px; right: 10px; background: var(--secondary); width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; box-shadow: var(--shadow-sm); cursor: pointer; transition: var(--transition); }
    .profile-section, .form-container { background: white; padding: 30px; margin: -40px auto 30px; border-radius: var(--border-radius); box-shadow: var(--shadow-md); position: relative; z-index: 3; }
    .section-title { display: flex; align-items: center; margin-bottom: 25px; padding-bottom: 10px; border-bottom: 2px solid var(--light-gray); }
    .section-title i { margin-right: 12px; color: var(--primary); font-size: 1.5rem; }
    .profile-info { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
    .info-label { font-weight: 500; color: var(--gray); margin-bottom: 5px; font-size: 0.9rem; }
    .info-value { font-weight: 600; font-size: 1.1rem; }
    .form-group { margin-bottom: 20px; }
    .form-group label { display: block; margin-bottom: 8px; font-weight: 500; color: var(--dark); }
    .form-control { width: 100%; padding: 12px 15px; border: 1px solid #e0e0e0; border-radius: var(--border-radius); background-color: var(--light-gray); }
    .form-control:focus { outline: none; border-color: var(--primary); box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.2); }
    .btn { display: inline-flex; align-items: center; justify-content: center; padding: 12px 24px; border-radius: 50px; font-weight: 600; cursor: pointer; transition: var(--transition); border: none; font-size: 1rem; }
    .btn-primary { background: var(--primary); color: white; box-shadow: 0 4px 15px rgba(249, 65, 68, 0.2); }
    .btn-primary:hover { background: var(--primary-dark); transform: translateY(-2px); }
    .alert { padding: 12px; border-radius: 6px; margin-bottom: 20px; }
    .alert-success { background: #d4edda; color: #155724; }
    .alert-danger { background: #f8d7da; color: #721c24; }
  </style>
</head>
<body>
  <header class="main-header">
    <div class="container">
      <div class="profile-header-content">
        <div class="profile-pic-container">
          <img src="{{ asset($user->profile_picture ?? 'images/default.png') }}" alt="Profile Picture" class="profile-pic" id="profilePreview">
          <div class="edit-profile-pic" title="Change Photo" onclick="document.getElementById('profile_picture').click();">
            <i class="fas fa-camera"></i>
          </div>
        </div>
        <h1>{{ $user->name }}</h1>
        <p>Welcome back to your KaajWala profile</p>
      </div>
    </div>
  </header>

  <div class="container">

    {{-- Flash Messages --}}
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {{-- Profile Info --}}
    <section class="profile-section">
      <div class="section-title"><i class="fas fa-user-circle"></i><h2>Profile Information</h2></div>
      <div class="profile-info">
        <div><div class="info-label">Full Name</div><div class="info-value">{{ $user->name }}</div></div>
        <div><div class="info-label">Email Address</div><div class="info-value">{{ $user->email }}</div></div>
        <div><div class="info-label">Phone Number</div><div class="info-value">{{ $user->phone ?? 'Not set' }}</div></div>
        <div><div class="info-label">Member Since</div><div class="info-value">{{ $user->created_at->format('F Y') }}</div></div>
      </div>
    </section>

    {{-- Update Form --}}
    <section class="form-container">
      <div class="section-title"><i class="fas fa-edit"></i><h2>Update Profile</h2></div>
      <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" class="form-control" value="{{ $user->phone }}">
        </div>

        <div class="form-group">
          <label for="password">New Password (leave blank to keep current)</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="••••••••">
        </div>

        <div class="form-group">
          <label for="profile_picture">Profile Picture</label>
          <input type="file" id="profile_picture" name="profile_picture" class="form-control" accept="image/*" onchange="previewImage(event)">
        </div>

        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Changes</button>
      </form>
    </section>

  </div>

  <script>
    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function(){
        document.getElementById('profilePreview').src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
</body>
</html>
