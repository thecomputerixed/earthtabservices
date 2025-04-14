<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Custom Footer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        margin: 0;
        padding: 0;
      }
      .footer {
        background-color: #b30000; /* deep red */
        color: white;
        padding: 3rem 1rem;
      }
      .footer a {
        color: white;
        text-decoration: none;
        display: block;
        margin-bottom: 0.5rem;
      }
      .footer a:hover {
        text-decoration: underline;
      }
      .footer h6 {
        text-transform: uppercase;
        font-weight: bold;
        margin-bottom: 1rem;
      }
      .divider {
        height: 1px;
        background-color: #cccccc; /* you can change this to desired shade */
        margin: 2rem 0;
      }
      .social-icons a {
        margin-right: 0.5rem;
        color: white;
        font-size: 1.2rem;
      }
    </style>
    <script src="https://kit.fontawesome.com/a2e0cf3a1b.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <footer class="footer">
      <div class="container">
        <div class="row justify-content-between align-items-center mb-4">
          <div class="col-md-4 d-flex align-items-center">
            <img class="shadow" src="img/logo.png" alt="Logo" height="100">
            
          </div>
          <div class="col-lg-4 col-md-4">
        <ul class="social-links">
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
        </div>

        <div class="divider"></div>

        <div class="row">
          <div class="col-md-3">
            <h6>Our Services</h6>
            <a href="#">Human Resource Services</a>
            <a href="#">Real Estate Services</a>
            <a href="#">CAC Registration Services</a>
            <a href="#">Website Creation Services</a>
            <a href="#">Visa Application Services</a>
            <a href="#">Hotel Reservation Services</a>
            <a href="#">Flight Booking Services</a>
            <a href="#">Birth Certificate Issuance Services</a>
            <a href="#">Media Services</a>
          </div>
          <div class="col-md-3">
            <h6>FAQFrequently Asked Questions
            </h6>
            <a href="#">Q: Is this certificate valid for passport and school registration?<br>
 A: Yes. The certificate issued through our platform is recognized and valid for official use nationwide.
</a>
            <a href="#">Q: How long does it take to get the certificate?<br>
 A: Processing time is typically 5–10 working days. You’ll be notified once it’s ready for pickup or delivery or it will be scanned and sent to you online.
</a>
            <a href="#">Q: Can I use this for an adult birth certificate?<br>
 A: Yes. Both child and adult birth certificate applications are supported.
</a>
            
          </div>
          <div class="col-md-3">
            <h6>Contact Us</h6>
            <a href="#">Feedback and Complaints</a>
            <a href="#">Visit Our Office</a>
            <a href="#"><strong>Find a Branch</strong></a>
            <a href="#">Contact Form</a>
            <a href="#">Find an Agent</a>
            <a href="#">Agent Network</a>
          </div>
          <div class="col-md-3">
            <h6>Legal</h6>
            <a href="#">Sitemap</a>
            <a href="#">Terms of Use</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Cookies Policy</a>
            <a href="#">Communications Policy</a>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
