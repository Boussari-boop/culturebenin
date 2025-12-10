<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - CULTURE BENINOISE</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets backend/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets backend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets backend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets backend/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets backend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets backend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets backend/css/main.css') }}" rel="stylesheet">

</head>


<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center dark-background">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">

                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="assets backend/img/bg/logo2.png" alt="Logo Culture du Bénin"
                        style="max-height: 60px; margin-right: 40px;">
                    <h1 class="sitename">Culture du Bénin</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Acceuil</a></li>
                        <li><a href="#about">Patrimoine Historique & Royal</a></li>
                        <li><a href="#services">Traditionnels &Artisanat</a></li>
                        <li><a href="#portfolio">Musique & Danse</a></li>
                        <li><a href="#team">Culture Contemporaine & l'Éducation</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="{{ route('login') }}" class="cta-button btn-connecter">Se connecter</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>


            </div>

        </div>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="hero-content">
                <video autoplay muted loop id="beninHeroVideo" class="background-video">
                    <source src="{{ asset('assets backend/video/video3.mp4') }}" type="video/mp4">
                    Votre navigateur ne supporte pas l'élément vidéo.
                </video>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="content">
                                <h1 style="color:white;">Decouvrez La Richesse Culturelle Du Bénin a Travers Ses
                                    Traditions, Ses Arts
                                    Et Savoir-Faire Uniques</h1>
                                <p style="color:rgb(240, 235, 235);">Le Bénin possède une culture d’une richesse
                                    exceptionnelle,
                                    portée par ses
                                    traditions,
                                    ses arts et ses héritages ancestraux. À travers ce site, nous vous invitons à
                                    découvrir la diversité de ses pratiques,
                                    la créativité de ses artisans et la beauté de ses coutumes.</p>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="hero-image">

                                class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-features">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">

                            <div class="feature-item">
                                <div class="icon">
                                    <i class="bi bi-bank2"></i>
                                </div>

                                <h4>Les Royaumes Fondateurs</h4>

                                <p>
                                    Découvrez l'histoire fascinante du Royaume du Dahomey,
                                    fondé au XVIIe siècle, son organisation militaire unique (les Amazones)
                                    et son rôle dans l'histoire de l'Afrique de l'Ouest.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-item">
                                <div class="icon">
                                    <i class="bi bi-mask"></i>
                                </div>

                                <h4>Le Vodun</h4>

                                <p>
                                    Bien plus qu'une pratique mystique, le Vodun est la religion et la philosophie
                                    ancestrale du Bénin.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-item">
                                <div class="icon">
                                    <i class="bi bi-palette"></i>
                                </div>

                                <h4>L'Art Royal du Dahomey</h4>

                                <p>
                                    L'art des peuples Fon et du Royaume de Dahomey est un témoignage puissant
                                    de la royauté et des mythes.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-item">
                                <div class="icon">
                                    <i class="bi bi-tools"></i>
                                </div>

                                <h4>Artisanat Contemporain : Tissage, Poterie et Vannerie</h4>

                                <p>
                                    L'artisanat béninois est vivant et diversifié. Il inclut le tissage de pagnes et
                                    d'étoffes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">

                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-music-note-beamed"></i>
                            </div>

                            <h3>Danses Traditionnelles : Zangbeto et Egungun</h3>

                            <p>
                                Les danses traditionnelles béninoises sont des rituels et des spectacles qui incarnent
                                l'histoire et les croyances.
                            </p>

                            <a href="service-details.html" class="service-link">
                                <span>Explorer les Rythmes</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">

                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-speaker"></i>
                            </div>

                            <h3>Musique et Instrucment</h3>

                            <p>
                                La musique béninoise est dominée par les rythmes Vodun joués sur des tambours
                                et des gongs.
                            </p>

                            <a href="service-details.html" class="service-link">
                                <span>Écouter les Rythmes</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">

                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-egg-fried"></i>
                            </div>

                            <h3>Plats Emblématiques</h3>

                            <p>
                                La cuisine béninoise est célèbre pour ses plats à base de pâtes faites à partir
                                de maïs, d'igname ou de manioc.
                            </p>

                            <a href="service-details.html" class="service-link">
                                <span>Découvrir les Recettes</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">

                        <div class="service-item">
                            <div class="service-icon">
                                <i class="bi bi-cup-straw"></i>
                            </div>

                            <h3>Boissons et Douceurs</h3>

                            <p>
                                Les boissons traditionnelles incluent des jus de fruits tropicaux frais et le fameux
                                Sodabi.
                            </p>

                            <a href="service-details.html" class="service-link">
                                <span>Goûter les Douceurs</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Featured Services Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Patrimoine Historique & Royal</h2>
                <p>Decouvrez nos culture</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-card">
                            <div class="member-image-wrapper">
                                <img src="{{ asset('assets backend/img/person/porte non retour.jpeg') }}"
                                    class="img-fluid" alt="Team Membre">
                            </div>
                            <div class="member-content">
                                <h4 class="member-name">Porte du non Retour</h4>
                                <span class="member-role"></span>
                                <p class="member-bio"></p>

                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-card">
                            <div class="member-image-wrapper">
                                <img src="{{ asset('assets backend/img/person/RoiBehanzin.jpeg') }}"
                                    class="img-fluid" alt="Team Membre">
                            </div>
                            <div class="member-content">
                                <h4 class="member-name">ROI BEHANZIN</h4>
                                <span class="member-role"></span>
                                <p class="member-bio"></p>

                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-card">
                            <div class="member-image-wrapper">
                                <img src="{{ asset('assets backend/img/person/palais royal.jpeg') }}"
                                    class="img-fluid" alt="Team Membre">
                            </div>
                            <div class="member-content">
                                <h4 class="member-name">Palais Royal</h4>
                                <span class="member-role"></span>
                                <p class="member-bio"></p>

                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-card">
                            <div class="member-image-wrapper">
                                <img src="{{ asset('assets backend/img/person/Nos Ancetre.jpeg') }}"
                                    class="img-fluid" alt="Team Membre">
                            </div>
                            <div class="member-content">
                                <h4 class="member-name">L'Esclavage</h4>
                                <span class="member-role"></span>
                                <p class="member-bio"></p>

                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="testimonial-slider swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 4000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>

                    <div class="swiper-wrapper">

                        <!-- Testimonial Slide 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="200">


                            </div>
                        </div><!-- End Testimonial Slide -->

                        <!-- Testimonial Slide 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="300">


                            </div>
                        </div><!-- End Testimonial Slide -->

                        <!-- Testimonial Slide 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="400">


                            </div>
                        </div><!-- End Testimonial Slide -->

                        <!-- Testimonial Slide 4 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="500">


                            </div>
                        </div><!-- End Testimonial Slide -->

                        <!-- Testimonial Slide 5 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="600">

                            </div>
                        </div><!-- End Testimonial Slide -->

                    </div>



                </div>

            </div>

        </section><!-- /Testimonials Section -->



        <!-- Services Section -->
        <section id="services" class="services section">


            <!-- Portfolio Section -->
            <section id="portfolio" class="portfolio section">


                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Arts Traditionnels &Artisanat</h2>
                    <p>Check Our Services</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="isotope-layout" data-default-filter="*" data-layout="fitRows"
                        data-sort="original-order">

                        <div class="portfolio-filters-wrapper" data-aos="fade-up" data-aos-delay="100">
                            <ul class="portfolio-filters isotope-filters">
                                <li data-filter="*" class="filter-active">All Projects</li>
                                <li data-filter=".filter-branding">L'Art Vodoun</li>
                                <li data-filter=".filter-web">Masques et Danses Rituelles</li>
                                <li data-filter=".filter-print">L'Art Textile</li>
                                <li data-filter=".filter-motion">Sculptures et Bronzes</li>
                            </ul>
                        </div>

                        <div class="row gy-4 portfolio-grid isotope-container" data-aos="fade-up"
                            data-aos-delay="200">

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets backend/img/portfolio/vodoun.jpeg') }}"
                                            class="img-fluid" alt="Brand Identity" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets backend/img/portfolio/Egungun.webp') }}" class="glightbox zoom-link"
                                                    title="Brand Identity Projet">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>L'Art Vodoun</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets backend/img/portfolio/Benin.jpeg') }}"
                                            class="img-fluid" alt="E-commerce Platform" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets backend/img/portfolio/KALÉTA .jpeg') }}"
                                                    class="glightbox zoom-link" title="E-commerce Platform">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Masques et Danses Rituelles</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-print">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets backend/img/portfolio/KALÉTA .jpeg') }}"
                                            class="img-fluid" alt="Magazine Design" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets backend/img/portfolio/portfolio-portrait-5.webp') }}"
                                                    class="glightbox zoom-link" title="Magazine Design">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>L'Art Textile</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-motion">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets backend/img/portfolio/masque(1).jpeg') }}"
                                            class="img-fluid" alt="Motion Graphics" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets backend/img/portfolio/masque(1).jpeg') }}"
                                                    class="glightbox zoom-link" title="Motion Graphics">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Sculptures et Bronzes</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets backend/img/portfolio/vodoun1.jpeg') }}"
                                            class="img-fluid" alt="Logo Collection" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets backend/img/portfolio/vodoun1.jpeg') }}"
                                                    class="glightbox zoom-link" title="Vodoun">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Vodoun</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets backend/img/portfolio/masque(3).webp') }}"
                                            class="img-fluid" alt="" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets backend/img/portfolio/masque(3).webp') }}"
                                                    class="glightbox zoom-link" title="masque">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Masque et dance</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-print">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets backend/img/portfolio/art(1).webp') }}"
                                            class="img-fluid" alt="Packaging Design" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets backend/img/portfolio/art(1).webp') }}"
                                                    class="glightbox zoom-link" title="Packaging Design">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Les Arts</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-motion">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets frontend/image/portfolio/benin Monument.webp') }}"
                                            class="img-fluid" alt="Brand Animation" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets frontend/image/portfolio/benin Monument.webp') }}"
                                                    class="glightbox zoom-link" title="Brand Animation">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Culture</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                        </div><!-- End Portfolio Grid -->

                    </div>

                </div>



            </section><!-- /Services Section -->

            <!-- Testimonials Section -->
            <section id="testimonials" class="testimonials section light-background">

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="testimonial-slider swiper init-swiper">
                        <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 4000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>

                        <div class="swiper-wrapper">

                            <!-- Testimonial Slide 1 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="200">


                                </div>
                            </div><!-- End Testimonial Slide -->

                            <!-- Testimonial Slide 2 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="300">


                                </div>
                            </div><!-- End Testimonial Slide -->

                            <!-- Testimonial Slide 3 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="400">


                                </div>
                            </div><!-- End Testimonial Slide -->

                            <!-- Testimonial Slide 4 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="500">


                                </div>
                            </div><!-- End Testimonial Slide -->

                            <!-- Testimonial Slide 5 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="600">

                                </div>
                            </div><!-- End Testimonial Slide -->

                        </div>



                    </div>

                </div>

            </section><!-- /Testimonials Section -->

            <!-- Portfolio Section -->
            <section id="portfolio" class="portfolio section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Musique & Danse</h2>
                    <p>Check Our&nbsp; Portfolio</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="isotope-layout" data-default-filter="*" data-layout="fitRows"
                        data-sort="original-order">

                        <div class="portfolio-filters-wrapper" data-aos="fade-up" data-aos-delay="100">
                            <ul class="portfolio-filters isotope-filters">
                                <li data-filter="*" class="filter-active">All Projects</li>
                                <li data-filter=".filter-branding">Rythmes Béninois</li>
                                <li data-filter=".filter-web">Les Danses Traditionnelles</li>
                                <li data-filter=".filter-print">Fêtes et Cérémonies</li>
                                <li data-filter=".filter-motion">Autres</li>
                            </ul>
                        </div>

                        <div class="row gy-4 portfolio-grid isotope-container" data-aos="fade-up"
                            data-aos-delay="200">

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets backend/img/person/danse.jpeg') }}"
                                            class="img-fluid" alt="Brand Identity" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets backend/img/person/danse.webp') }}"
                                                    class="glightbox zoom-link" title="Brand Identity Projet">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Rythmes Béninois</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets backend/img/person/ryth.jpeg') }}"
                                            class="img-fluid" alt="E-commerce Platform" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets backend/img/person/ryth.jpeg') }}"
                                                    class="glightbox zoom-link" title="E-commerce Platform">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Danse Traditionnel</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-print">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets backend/img/portfolio/masque(1).webp') }}"
                                            class="img-fluid" alt="Magazine Design" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets backend/img/portfolio/masque(1).webp') }}"
                                                    class="glightbox zoom-link" title="Magazine Design">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Cérémonie</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-motion">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('public/image/artetculture.webp') }}"
                                            class="img-fluid" alt="Motion Graphics" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('public/image/artetculture.webp') }}"
                                                    class="glightbox zoom-link" title="Motion Graphics">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Arts&Culture</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets backend/img/person/Afri.jpeg') }}"
                                            class="img-fluid" alt="Logo Collection" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets backend/img/person/Afri.jpeg') }}"
                                                    class="glightbox zoom-link" title="Logo Collection">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Rythme</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets backend/img/portfolio/image(2).jpg') }}"
                                            class="img-fluid" alt="" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets backend/img/portfolio/image(2).jpg') }}"
                                                    class="glightbox zoom-link" title="">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Dance</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-print">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets backend/img/portfolio/Fete Vodoun.webp') }}"
                                            class="img-fluid" alt="Packaging Design" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets backend/img/portfolio/Fete Vodoun.webp') }}"
                                                    class="glightbox zoom-link" title="Packaging Design">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Fete</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-motion">
                                <div class="portfolio-card">
                                    <div class="image-container">
                                        <img src="{{ asset('assets backend/img/person/benin.jpeg') }}"
                                            class="img-fluid" alt="Brand Animation" loading="lazy">
                                        <div class="overlay">
                                            <div class="overlay-content">
                                                <a href="{{ asset('assets backend/img/person/benin.jpeg') }}"
                                                    class="glightbox zoom-link" title="Brand Animation">
                                                    <i class="bi bi-zoom-in"></i>
                                                </a>
                                                <a href="portfolio-details.html" class="details-link"
                                                    title="View Project Details">
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>musée</h3>
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                        </div><!-- End Portfolio Grid -->

                    </div>

                </div>

            </section><!-- /Portfolio Section -->

            <!-- Team Section -->
            <section id="team" class="team section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2> Culture Contemporaine & l'Éducation</h2>
                    <p></p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-card">
                                <div class="member-image-wrapper">
                                    <img src="{{ asset('assets backend/img/portfolio/vendeuse(2).jpeg') }}"
                                        class="img-fluid" alt="Brand Identity" loading="lazy">
                                </div>
                                <div class="member-content">
                                    <h4 class="member-name">Achat du marche </h4>
                                    <span class="member-role"></span>
                                    <p class="member-bio">Nos ingredient parfait</p>

                                </div>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-card">
                                <div class="member-image-wrapper">
                                    <img src="{{ asset('assets backend/img/portfolio/Mama Africa.jpeg') }}"
                                        class="img-fluid" alt="Team Membre">
                                </div>
                                <div class="member-content">
                                    <h4 class="member-name">Nos mama Africa</h4>
                                    <span class="member-role"></span>
                                    <p class="member-bio"></p>

                                </div>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-card">
                                <div class="member-image-wrapper">
                                    <img src="{{ asset('assets backend/img/portfolio/La tradition2.jpeg') }}"
                                        class="img-fluid" alt="Team Membre">
                                </div>
                                <div class="member-content">
                                    <h4 class="member-name">Nos tradition</h4>
                                    <span class="member-role"></span>
                                    <p class="member-bio"></p>

                                </div>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-card">
                                <div class="member-image-wrapper">
                                    <img src="{{ asset('assets backend/img/portfolio/masques1.webp') }}"
                                        class="img-fluid" alt="Team Membre">
                                </div>
                                <div class="member-content">
                                    <h4 class="member-name">Masque Ouidah</h4>
                                    <span class="member-role"></span>
                                    <p class="member-bio"></p>

                                </div>
                            </div><!-- End Team Member -->

                        </div>

                    </div>

            </section><!-- /Team Section -->





        </section><!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Need Help? Contact Us</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-stretch">
                    <div class="col-lg-7 order-lg-1 order-2" data-aos="fade-right" data-aos-delay="200">
                        <div class="contact-form-container">
                            <div class="form-intro">
                                <h2>Let's Start a Conversation</h2>

                            </div>

                            <form action="forms/contact.php" method="post" class="php-email-form contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <input type="text" name="name" class="form-input" id="userName"
                                                placeholder="Your Name" required="">
                                            <label for="userName" class="field-label">Name</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <input type="email" class="form-input" name="email" id="userEmail"
                                                placeholder="Your Email" required="">
                                            <label for="userEmail" class="field-label">Email</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <input type="tel" class="form-input" name="phone" id="userPhone"
                                                placeholder="Your Phone">
                                            <label for="userPhone" class="field-label">Phone</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <input type="text" class="form-input" name="subject"
                                                id="messageSubject" placeholder="Subject" required="">
                                            <label for="messageSubject" class="field-label">Subject</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-field message-field">
                                    <textarea class="form-input message-input" name="message" id="userMessage" rows="5"
                                        placeholder="Tell us about your project" required=""></textarea>
                                    <label for="userMessage" class="field-label">Message</label>
                                </div>

                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>

                                <button type="submit" class="send-button">
                                    Send Message
                                    <span class="button-arrow">→</span>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 order-lg-2 order-1" data-aos="fade-left" data-aos-delay="300">
                        <div class="contact-sidebar">
                            <div class="contact-header">
                                <h3>Get in Touch</h3>

                            </div>

                            <div class="contact-methods">
                                <div class="contact-method" data-aos="fade-in" data-aos-delay="350">
                                    <div class="contact-icon">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="contact-details">
                                        <span class="method-label">Address</span>
                                        <p>COTONOU, Degakon<br>Benin</p>
                                    </div>
                                </div>

                                <div class="contact-method" data-aos="fade-in" data-aos-delay="400">
                                    <div class="contact-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <div class="contact-details">
                                        <span class="method-label">Email</span>
                                        <p>hello@businessdemo.com</p>
                                    </div>
                                </div>

                                <div class="contact-method" data-aos="fade-in" data-aos-delay="450">
                                    <div class="contact-icon">
                                        <i class="bi bi-telephone"></i>
                                    </div>
                                    <div class="contact-details">
                                        <span class="method-label">Phone</span>
                                        <p>+229 0197771822</p>
                                    </div>
                                </div>

                                <div class="contact-method" data-aos="fade-in" data-aos-delay="500">
                                    <div class="contact-icon">
                                        <i class="bi bi-clock"></i>
                                    </div>
                                    <div class="contact-details">
                                        <span class="method-label">Hours</span>
                                        <p>Monday - Friday: 9AM - 6PM<br>Saturday: 10AM - 4PM</p>
                                    </div>
                                </div>
                            </div>

                            <div class="connect-section" data-aos="fade-up" data-aos-delay="550">
                                <span class="connect-label">Connect with us</span>
                                <div class="social-links">
                                    <a href="#" class="social-link">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                    <a href="#" class="social-link">
                                        <i class="bi bi-twitter-x"></i>
                                    </a>
                                    <a href="#" class="social-link">
                                        <i class="bi bi-instagram"></i>
                                    </a>
                                    <a href="#" class="social-link">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer light-background">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                    value="Subscribe"></div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">CoreBiz</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">CoreBiz</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets backend/vendor/php-email-form/validate.js"></script>
    <script src="assets backend/vendor/aos/aos.js"></script>
    <script src="assets backend/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets backend/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets backend/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets backend/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets backend/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets backend/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets backend/js/main.js"></script>

</body>
