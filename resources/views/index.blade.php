<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CULTURE DU BENIN - Home</title>

  <!-- Favicons -->
  <link href="{{ asset('assets backend/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets backend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS -->
  <link href="{{ asset('assets backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets backend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets backend/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets backend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets backend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS -->
  <link href="{{ asset('assets backend/css/main.css') }}" rel="stylesheet">
</head>
<body class="index-page">

  <!-- Header -->
  <header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope me-2"><a href="mailto:contact@example.com">contact@example.com</a></i>
          <i class="bi bi-phone ms-4">+1 5589 55488 55</i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>

    <div class="branding d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
          <!-- <img src="{{ asset('assets backend/img/logo.png') }}" alt=""> -->
          <h1 class="sitename">Coris</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#team">Team</a></li>
            <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section id="hero" class="hero section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-up">
          <h1>Transforming Ideas Into Strategic Business Solutions</h1>
          <p>We partner with forward-thinking companies to accelerate growth, optimize operations, and unlock their full potential.</p>
          <a href="#about" class="btn-primary">Start Your Journey</a>
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn-secondary glightbox">
            <i class="bi bi-play-circle"></i> Watch Our Story
          </a>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('assets backend/img/about/about-8.webp') }}" alt="Corporate Business" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-item">
            <img src="{{ asset('assets backend/img/portfolio/portfolio-1.webp') }}" class="img-fluid" alt="Portfolio 1">
            <a href="{{ url('portfolio-details.html') }}" class="details-link" title="View Project Details"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-item">
            <img src="{{ asset('assets backend/img/portfolio/portfolio-2.webp') }}" class="img-fluid" alt="Portfolio 2">
            <a href="{{ url('portfolio-details.html') }}" class="details-link" title="View Project Details"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="footer" class="footer section">
    <div class="container text-center">
      <p>&copy; 2025 CoreBiz. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- Vendor JS -->
  <script src="{{ asset('assets backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets backend/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets backend/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets backend/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets backend/js/main.js') }}"></script>

</body>
</html>
