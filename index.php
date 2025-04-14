<?php include('header.php'); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EarthTab Services</title>

  <!-- Bootstrap & Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0-beta3/css/all.min.css" rel="stylesheet">
<!-- AOS Library -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .icon-circle {
      font-size: 2rem;
      margin-bottom: 10px;
    }
    .hero-text h1 span, .hero-text h3 span {
      color: red;
    }
    .card {
      padding: 20px;
      border: none;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .feature-card {
    background-color: #5c6370; /* Ashe tone */
    color: white;
    transition: 0.3s ease;
    border-radius: 20px;
    }

    .feature-card i {
    color: white;
    }

    .feature-card.active-card {
    background-color: #c1121f; /* Red (major) */
    color: white;
    }

    .feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 15px rgba(0,0,0,0.15);
    }
    .feature-card {
    background-color: #5c6370; /* ashe */
    color: white;
    transition: all 0.3s ease-in-out;
    border-radius: 20px;
    min-height: 220px; /* default height */
  }
  .feature-card {
  background-color: #5c6370; /* ashe */
  color: white;
  transition: all 0.3s ease-in-out;
  border-radius: 20px;
  min-height: 220px; /* default height */
}

.feature-card i {
  color: white;
}

.feature-card:hover {
  background-color: #c1121f; /* red */
  transform: scale(1.05);
  min-height: 250px; /* grows in height */
  cursor: pointer;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}


  .service-card {
  background-color: #5c6370; /* ashe */
  color: white;
  transition: all 0.3s ease-in-out;
  border-radius: 20px;
  padding: 25px 20px;
  min-height: 220px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
.service-card:hover {
  background-color: #c1121f; /* red */
  transform: scale(1.05);
  min-height: 250px;
  box-shadow: 0 10px 20px rgba(0,0,0,0.2);
  color: white;
}
.icon-circle {
  font-size: 2rem;
  margin-bottom: 15px;
}
.icon-box {
  background-color: #c1121f; /* Red */
  color: white;
  padding: 12px;
  border-radius: 50%;
  font-size: 1.2rem;
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 45px;
  min-height: 45px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
  </style>


</head>

<body>

<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/prop1.png" class="d-block w-100" style="height: 90vh; object-fit: cover;" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="img/earthtab_homes4.jpg" class="d-block w-100" style="height: 90vh; object-fit: cover;" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="img/realestatet.jpg" class="d-block w-100" style="height: 90vh; object-fit: cover;" alt="Slide 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Welcome Marquee -->
<div class="bg-light py-2 text-center">
  <marquee><strong>Welcome to a world of possibilities.<span style="color: red;"> - Welcome to EARTHTAB SERVICES.</span> We Care Because You Are Worth It!</strong></marquee>
</div>

<!-- Hero Section -->
<div class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-6">
      <h1>At <span style="color:red;">EARTHTAB SERVICES</span></h1>
      <p class="fs-5">We are committed to making life easier for individuals, startups, and growing businesses. Whether you're seeking your dream job, a home, or a partner to guide your business registration, we’re here for you.</p>
      <p class="fs-5">With a passion for excellence and customer satisfaction, we simplify the complex and deliver value in every service we offer.</p>
    </div>
    <div class="col-md-6 text-center">
      <img src="img/cac3.png" class="img-fluid" alt="EarthTab Image" style="height: 400px; object-fit: cover;">
    </div>
  </div>
</div>

<!-- Services -->
<section class="py-5" style="background-color: #f8f9fa;">
  <div class="container">
    <h3 class="text-center mb-4">Our <span style="color:red;">Services</span></h3>
    <div class="row g-4">
      <?php
        $services = [
          ["👥", "Human Resource Services", "Empowering People. Strengthening Businesses. We connect talent with opportunities."],
          ["🏠", "Real Estate Services", "We help you find the perfect spaces to live, invest, or grow."],
          ["📄", "CAC Registration Services", "Starting a business is exciting — registering it shouldn't stress you out."],
          ["💻", "Website Creation Services", "We design websites that don’t just look good, but work for your business."],
          ["✈️", "Visa Application Services", "We assist with visa applications so you can travel with peace of mind."],
          ["📶", "Birth Certificate Services", "We help with fast & reliable birth certificate processing."]
        ];
          $i = 2;
        foreach ($services as $s) {
          echo "
            <div class='col-md-4' data-aos='zoom-in' data-aos-delay='" . ($i * 100) . "' data-aos-duration='800'>
              <div class='card h-100 text-center service-card'>
                <div class='icon-circle'>{$s[0]}</div>
                <h5>{$s[1]}</h5>
                <p>{$s[2]}</p>
                <a href='#' class='text-decoration-none text-white'>Learn More →</a>
              </div>
            </div>

          ";
        }
      ?>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<div class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-6 mb-4 mb-md-0">
      <img src="img/Whyuseus.png" class="img-fluid" alt="Why Choose Us" style="height: 500px; object-fit: cover;">
    </div>

    <div class="col-md-6">
        <h3 class="mb-4 text-center">Why <span style="color:red;">Choose Us</span></h3>
        <p class="mb-4">We combine passion, experience, and professionalism to bring you exceptional services.</p>
        
        <div class="d-flex align-items-start mb-3">
          <div class="icon-box">
            <i class="fas fa-thumbs-up"></i>
          </div>
          <div class="ms-3">
            <h6 class="fw-bold mb-1">10 Years Experience</h6>
            <p class="mb-0 text-muted">We’ve built a legacy of trust through decades of proven excellence.</p>
          </div>
        </div>

        <div class="d-flex align-items-start mb-3">
          <div class="icon-box">
            <i class="fas fa-headset"></i>
          </div>
          <div class="ms-3">
            <h6 class="fw-bold mb-1">24/7 Support</h6>
            <p class="mb-0 text-muted">Always available when you need us the most.</p>
          </div>
        </div>

        <div class="d-flex align-items-start">
          <div class="icon-box">
            <i class="fas fa-certificate"></i>
          </div>
          <div class="ms-3">
            <h6 class="fw-bold mb-1">Industry Certified</h6>
            <p class="mb-0 text-muted">Our team is certified and trained for top-tier service delivery.</p>
          </div>
        </div>
      </div>

  </div>
</div>

<!-- How We Work (Placeholder) -->
<div class="container py-5 text-center">
  <h2>How We <span style="color:red;">Work</span></h2>
  <p class="text-muted">We are process-driven and people-focused. From the first step to the last, we ensure your experience is smooth and transparent.</p>
  <!-- Add more step-by-step content if needed -->
</div>
<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4 text-center">
      <div class="col-md-3">
        <div class="p-4 rounded shadow-sm feature-card">
          <i class="fas fa-tools fa-2x mb-3"></i>
          <h5>Need a Service</h5>
          <p class="mb-0">Find the right solution for your needs.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-4 rounded shadow-sm feature-card">
          <i class="fas fa-phone-alt fa-2x mb-3"></i>
          <h5>Contact Us</h5>
          <p class="mb-0">Reach out through any of our channels.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-4 rounded shadow-sm feature-card">
          <i class="fas fa-clipboard-list fa-2x mb-3"></i>
          <h5>Register</h5>
          <p class="mb-0">Fill in your details and we’ll get started.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-4 rounded shadow-sm feature-card">
          <i class="fas fa-truck fa-2x mb-3"></i>
          <h5>We Deliver</h5>
          <p class="mb-0">Enjoy prompt delivery and satisfaction.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="py-5 text-center">
  <div class="container">
    <h2 class="mb-4" data-aos="fade-up">Trusted By</h2>
    <div class="row justify-content-center align-items-center g-3">
      <div class="col-4 col-md-2" data-aos="zoom-in">
        <img src="img/logo1.png" class="img-fluid" alt="Client 1">
      </div>
      <div class="col-4 col-md-2" data-aos="zoom-in" data-aos-delay="100">
        <img src="img/logo2.png" class="img-fluid" alt="Client 2">
      </div>
      <div class="col-4 col-md-2" data-aos="zoom-in" data-aos-delay="200">
        <img src="img/logo3.png" class="img-fluid" alt="Client 3">
      </div>
      <!-- Add more logos as needed -->
    </div>
  </div>
</section>


<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4" data-aos="fade-up">What Our Clients Say</h2>
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-right">
        <div class="card p-3">
          <p>"EarthTab helped me register my business in just a few days. Friendly support and clear guidance!"</p>
          <small class="text-muted">— Sarah O., Lagos</small>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up">
        <div class="card p-3">
          <p>"Their real estate service helped me find my dream home without stress. Highly recommend!"</p>
          <small class="text-muted">— Mr. John A., Abuja</small>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-left">
        <div class="card p-3">
          <p>"Professional and efficient. The CAC registration process was seamless with EarthTab."</p>
          <small class="text-muted">— Nkechi M., Enugu</small>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-5 bg-dark text-white text-center">
  <div class="container" data-aos="fade-up">
    <h2>Stay Updated</h2>
    <p class="mb-4">Subscribe to our Newsletter for business tips, updates, and more.</p>
    <a href="https://youtube.com/YOUR_CHANNEL" target="_blank" class="btn btn-danger btn-lg">Subscribe Now</a>
  </div>
</section>

<!-- Footer -->
<?php include('footer.php'); ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
