<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EarthTab</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap 5.3.5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    /* Top sub-header */
    .sub-header {
      background-color: #343a40;
      color: white;
      padding: 10px 0;
    }

    .sub-header .info,
    .social-links {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
    }

    .sub-header .info li {
      margin-right: 20px;
      font-size: 0.9rem;
    }

    .sub-header .info i,
    .social-links i {
      margin-right: 5px;
    }

    .social-links {
      justify-content: flex-end;
    }

    .social-links li {
      margin-left: 15px;
    }

    .social-links i {
      font-size: 1.3rem;
      color: white;
      transition: color 0.3s ease;
    }

    .social-links i:hover {
      color: red;
    }

    /* Sticky header */
    header.header-area {
      background-color: #fff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      animation: fadeDown 0.8s ease-in-out;
      z-index: 1000;
    }

    @keyframes fadeDown {
      0% {
        opacity: 0;
        transform: translateY(-30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .navbar-nav .nav-link {
      color: red;
      font-weight: 500;
    }

    .navbar-nav .nav-link.active,
    .navbar-nav .nav-link:hover {
      color: #c90000;
    }

    .dropdown-menu {
      background-color: #dee9f3;
      border-radius: 5px;
    }

    .logo img {
      max-width: 120px;
    }

    @media (max-width: 767px) {
      .sub-header .info,
      .social-links {
        justify-content: center;
      }
    }
  </style>
</head>
<body>

  <!-- Top Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 d-flex align-items-center">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@earthtab.services</li>
            <li><i class="fa fa-map"></i> 2nd East Circular, Benin city</li>
            <li><i class="fa fa-clock"></i>
              <?php
                date_default_timezone_set("Africa/Lagos");
                echo "Today is: " . date("l, F j, Y - h:i A");
              ?>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="social-links d-flex justify-content-end">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Header -->
  <header class="header-area sticky-top">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a href="index.php" class="logo">
          <img src="img/logo.png" alt="EarthTab Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="mainNav">
          <ul class="navbar-nav mb-2 mb-lg-0 fs-6 d-flex justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Who we are</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                What we do
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">CAC Registration</a></li>
                <li><a class="dropdown-item" href="#">Real Estate Services</a></li>
                <li><a class="dropdown-item" href="#">Flight & Hotel Booking</a></li>
                <li><a class="dropdown-item" href="#">Birth Certificate Registration</a></li>
                <li><a class="dropdown-item" href="#">View More</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Reach Us</a>
            </li>
          </ul>
          <form class="d-flex ms-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-danger" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
