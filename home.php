<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Azure Cove – Ultra Luxury Resort</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

  <style>
    body{
      font-family: 'Poppins', sans-serif;
      background:#0b1d26;
      color:#eaeaea;
      scroll-behavior:smooth;
    }
    h1,h2,h3{font-family:'Playfair Display',serif;}

    /* Navbar */
    .navbar{background:#08151c;}
    .navbar-brand img{height:40px;}
    .nav-link{color:#eaeaea !important;text-align:center;font-size:13px;}
    .nav-link i{display:block;font-size:18px;margin-bottom:2px;color:#c9a96a;}
    .nav-link:hover{color:#c9a96a !important;}

    /* Hero */
    #home{
      height:100vh;
      background:linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.7)),url('https://images.unsplash.com/photo-1500375592092-40eb2168fd21');
      background-size:cover;
      background-position:center;
    }

    section{padding:90px 0;}

    .btn-gold{background:#c9a96a;color:#000;border:none;}

    .card{background:#10242f;color:#fff;border:none;}
    .card img{height:220px;object-fit:cover;}

    .amenity i{font-size:42px;color:#c9a96a;}

    .gallery img{width:100%;border-radius:12px;transition:.4s;}
    .gallery img:hover{transform:scale(1.08);}

    .form-control{background:#08151c;border:1px solid #333;color:#fff;}

    footer{background:#08151c;padding:20px;text-align:center;}
  </style>
</head>
<body>
<?php
    echo "<p>This is coming from PHP!</p>";
?>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#home">
      <img src="https://cdn-icons-png.flaticon.com/512/2331/2331945.png" alt="logo" class="me-2">
      <span class="fw-bold text-light">Azure Cove</span>
    </a>
    <button class="navbar-toggler bg-light" data-bs-toggle="collapse" data-bs-target="#nav"></button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto">
  <form method="POST" action="login.php">
        <li class="nav-item"><a class="nav-link" href="#home"><i class="bi bi-house"></i>Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#rooms"><i class="bi bi-door-open"></i>Rooms</a></li>
        <li class="nav-item"><a class="nav-link" href="#amenities"><i class="bi bi-stars"></i>Amenities</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact"><i class="bi bi-telephone"></i>Contact</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="modal"  href="#loginModal"><i class="bi bi-person-circle"></i>Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section id="home" class="d-flex align-items-center text-center">
  <div class="container" data-aos="fade-up">
    <h1 class="display-3">Ultra‑Luxury Redefined</h1>
    <p class="lead">Private villas · Ocean views · Elite experiences</p>
    <button class="btn btn-gold btn-lg" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now</button>
  </div>
</section>

<!-- ROOMS -->
<section id="rooms">
  <div class="container">
    <h2 class="text-center mb-5" data-aos="fade-up">Rooms & Suites</h2>
    <div class="row g-4">
      <div class="col-md-4" data-aos="zoom-in">
        <div class="card">
          <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32">
          <div class="card-body">
            <h5>Ocean Suite</h5>
            <p>₹18,000 / night</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in">
        <div class="card">
          <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85">
          <div class="card-body">
            <h5>Royal Villa</h5>
            <p>₹30,000 / night</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in">
        <div class="card">
          <img src="https://images.unsplash.com/photo-1560067174-8944dca03a94">
          <div class="card-body">
            <h5>Presidential Suite</h5>
            <p>₹45,000 / night</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- AMENITIES -->
<section id="amenities" class="bg-dark">
  <div class="container">
    <h2 class="text-center mb-5">Amenities</h2>
    <div class="row text-center">
      <div class="col-md-3 amenity"><i class="bi bi-water"></i><p>Infinity Pool</p></div>
      <div class="col-md-3 amenity"><i class="bi bi-heart-pulse"></i><p>Spa</p></div>
      <div class="col-md-3 amenity"><i class="bi bi-cup-hot"></i><p>Fine Dining</p></div>
      <div class="col-md-3 amenity"><i class="bi bi-bicycle"></i><p>Gym</p></div>
    </div>
  </div>
</section>

<!-- GALLERY -->
<section id="gallery">
  <div class="container">
    <h2 class="text-center mb-5">Gallery</h2>
    <div class="row g-4 gallery">
      <div class="col-md-4"><img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4"></div>
      <div class="col-md-4"><img src="https://images.unsplash.com/photo-1501117716987-c8e1ecb210c8"></div>
      <div class="col-md-4"><img src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21"></div>
    </div>
  </div>
</section>


<!-- ULTRA LUXURY NEARBY ATTRACTIONS -->
<section id="nearby" style="background:#0e222c; padding:100px 0;">
  <div class="container">
    
    <!-- Section Heading -->
    <div class="text-center mb-5">
      <h2 class="display-5" style="color:#c9a96a; font-family:'Playfair Display',serif;">
        🌍 Explore Nearby Attractions
      </h2>
      <p class="text-light">Discover the beauty around Azure Cove</p>
    </div>

    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card shadow-lg border-0 h-100" 
             style="background:rgba(16,36,47,0.85); backdrop-filter:blur(12px); border-radius:20px; overflow:hidden;">

          <div style="position:relative;">
            <img src="https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86" 
                 class="card-img-top" style="height:250px; object-fit:cover;">

            <!-- Distance Badge -->
            <span class="badge bg-dark position-absolute top-0 start-0 m-3 px-3 py-2"
                  style="background:#c9a96a !important; color:#000; border-radius:30px;">
              📍 5 km Away
            </span>

            <!-- Shuttle Tag -->
            <span class="badge position-absolute top-0 end-0 m-3 px-3 py-2"
                  style="background:#1b3a45; border-radius:30px;">
              🚌 Resort Shuttle Available
            </span>
          </div>

          <div class="card-body text-light">
            <h5 class="fw-bold">Baga Beach</h5>

            <!-- Rating -->
            <p class="mb-2" style="color:#c9a96a;">
              ⭐ 4.8 / 5
            </p>

            <p>Golden sands, luxury beach clubs and sunset yacht experiences.</p>

            <!-- Google Maps Button -->
            <a href="https://www.google.com/maps/search/Baga+Beach+Goa"
               target="_blank"
               class="btn btn-sm mt-2"
               style="background:#c9a96a; color:#000; border-radius:30px;">
               🗺 Get Directions
            </a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card shadow-lg border-0 h-100" 
             style="background:rgba(16,36,47,0.85); backdrop-filter:blur(12px); border-radius:20px; overflow:hidden;">

          <div style="position:relative;">
            <img src="https://images.unsplash.com/photo-1587474260584-136574528ed5" 
                 class="card-img-top" style="height:250px; object-fit:cover;">

            <span class="badge bg-dark position-absolute top-0 start-0 m-3 px-3 py-2"
                  style="background:#c9a96a !important; color:#000; border-radius:30px;">
              📍 7 km Away
            </span>

            <span class="badge position-absolute top-0 end-0 m-3 px-3 py-2"
                  style="background:#1b3a45; border-radius:30px;">
              🚌 Resort Shuttle Available
            </span>
          </div>

          <div class="card-body text-light">
            <h5 class="fw-bold">Fort Aguada</h5>
            <p class="mb-2" style="color:#c9a96a;">
              ⭐ 4.7 / 5
            </p>
            <p>Historic Portuguese fort with panoramic Arabian Sea views.</p>

            <a href="https://www.google.com/maps/search/Fort+Aguada+Goa"
               target="_blank"
               class="btn btn-sm mt-2"
               style="background:#c9a96a; color:#000; border-radius:30px;">
               🗺 Get Directions
            </a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card shadow-lg border-0 h-100" 
             style="background:rgba(16,36,47,0.85); backdrop-filter:blur(12px); border-radius:20px; overflow:hidden;">

          <div style="position:relative;">
            <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee" 
                 class="card-img-top" style="height:250px; object-fit:cover;">

            <span class="badge bg-dark position-absolute top-0 start-0 m-3 px-3 py-2"
                  style="background:#c9a96a !important; color:#000; border-radius:30px;">
              📍 4 km Away
            </span>

            <span class="badge position-absolute top-0 end-0 m-3 px-3 py-2"
                  style="background:#1b3a45; border-radius:30px;">
              🚌 Resort Shuttle Available
            </span>
          </div>

          <div class="card-body text-light">
            <h5 class="fw-bold">Goa Night Market</h5>
            <p class="mb-2" style="color:#c9a96a;">
              ⭐ 4.6 / 5
            </p>
            <p>Luxury shopping, gourmet street food & vibrant nightlife.</p>

            <a href="https://www.google.com/maps/search/Goa+Night+Market"
               target="_blank"
               class="btn btn-sm mt-2"
               style="background:#c9a96a; color:#000; border-radius:30px;">
               🗺 Get Directions
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact" class="bg-dark">
  <div class="container">
    <h2 class="text-center mb-4">Contact</h2>
    <div class="row">
      <div class="col-md-6">
        <p><i class="bi bi-geo-alt"></i> Goa, India</p>
        <p><i class="bi bi-telephone"></i> +91 98765 43210</p>
        <p><i class="bi bi-envelope"></i> luxury@azurecove.com</p>
      </div>
      <div class="col-md-6">
        <iframe src="https://maps.google.com/maps?q=Goa&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="250" style="border:0;"></iframe>
      </div>
    </div>
  </div>
</section>

<!-- BOOKING MODAL (Room Selection) -->
<div class="modal fade" id="bookingModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-light">
      <div class="modal-header"><h5>Select Your Room</h5></div>
      <div class="modal-body">
        <select class="form-control mb-3" id="selectedRoom" required>
          <option value="">Choose Room Type</option>
          <option>Ocean Suite – ₹18,000</option>
          <option>Royal Villa – ₹30,000</option>
          <option>Presidential Suite – ₹45,000</option>
        </select>
        <input type="date" class="form-control mb-2" required>
        <input type="date" class="form-control mb-3" required>
        <button class="btn btn-gold w-100" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">Continue</button>
      </div>
    </div>
  </div>
</div>



<!-- LOGIN MODAL -->
<div class="modal fade" id="loginModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-light p-4">
      <div class="modal-header border-0">
        <h5 class="modal-title">Secure Login</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form method="POST" action="login.php" onsubmit="alert('Form submitting');">

        <input type="email" name="email"  placeholder="Registered Email" required>

       <input type="password" name="password" placeholder="Registered Email" required>

        <button type="submit">Login</button>
      </form>

      <div class="text-center mt-3">
        <a href="#" data-bs-toggle="modal" data-bs-target="#forgotModal" class="text-warning">Forgot Password?</a><br>
        <a href="#" data-bs-toggle="modal" data-bs-target="#signupModal" class="text-info">New User? Sign Up</a>
      </div>

    </div>
  </div>
</div>


<!-- SIGNUP MODAL -->
<div class="modal fade" id="signupModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-light p-4">

      <div class="modal-header border-0">
        <h5>Create Account</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form method="POST" action="signup.php">
        <input type="text" name="fullname" class="form-control mb-3" placeholder="Full Name" required>
        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
        <input type="tel" name="phone" class="form-control mb-3" placeholder="Phone Number" required>

        <input type="password" name="password" class="form-control mb-3"
          placeholder="Strong Password"
          pattern="^(?=.*[A-Z])(?=.*[0-9])(?=.*[@$!%*?&]).{8,}$"
          title="Minimum 8 characters, 1 capital letter, 1 number, 1 special character"
          required>

        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" required>
          <label class="form-check-label">
            I agree to Terms & Conditions
          </label>
        </div>

        <button class="btn btn-gold w-100">Sign Up</button>
      </form>

    </div>
  </div>
</div>


<!-- FORGOT PASSWORD -->
<div class="modal fade" id="forgotModal">
  <div class="modal-dialog">
    <div class="modal-content bg-dark text-light">
      <div class="modal-header"><h5>Password Recovery</h5></div>
      <div class="modal-body">
        <input type="email" class="form-control mb-3" placeholder="Registered Email">
        <button class="btn btn-gold w-100">Send Reset Link</button>
      </div>
    </div>
  </div>
</div>

<script>
  function goToPayment(){
    window.location.href = '#payment';
  }
</script>

<footer>© 2026 Azure Cove Resort</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init();</script>

</body>
</html>