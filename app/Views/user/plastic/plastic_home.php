<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Omedic Surgicals — Plastic</title>

  <!-- Bootstrap + Icons + Animations -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Site styles (served from /public/assets) -->
  <link rel="stylesheet" href="/assets/css/main.css">
  <link rel="stylesheet" href="/assets/css/footer.css">
  <link rel="stylesheet" href="/assets/css/navbar.css">

  <style>
    body {
      margin-top: 80px;
      min-height: 100vh;
      background: #ffffff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Hero: split layout */
    .hero {
      padding-top: 1rem;
      padding-bottom: 2rem;
    }

    .hero .headline {
      font-weight: 700;
      line-height: 1.2;
    }

    .hero .subheadline {
      color: #5c6670;
      font-size: 1.05rem;
    }

    .hero .btn-primary {
      padding: 0.7rem 1.25rem;
      border-radius: 8px;
    }

    .hero-carousel .carousel-item img {
      width: 100%;
      height: 56vh;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
    }

    @media (min-width: 1200px) {
      .hero-carousel .carousel-item img {
        height: 60vh;
      }
    }

    .carousel-indicators.custom-indicators [data-bs-target] {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background-color: #bfc7cf;
      margin: 0 6px;
      opacity: 0.7;
      border: none;
      transition: all 0.3s ease;
    }

    .carousel-indicators.custom-indicators .active {
      background-color: #0d6efd;
      opacity: 1;
      transform: scale(1.15);
    }

    /* Soft banner */
    .soft-banner {
      background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
      border: 1px solid #eef2f6;
      border-radius: 16px;
      padding: 2.25rem 1.25rem;
    }

    .soft-banner .lead {
      color: #5c6670;
    }

    /* Instruments grid */
    .instrument-card {
      border: 1px solid #eef2f6;
      border-radius: 14px;
      overflow: hidden;
      transition: transform .2s ease, box-shadow .2s ease;
      background: #fff;
      height: 100%;
    }

    .instrument-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 16px 32px rgba(2, 8, 20, 0.06);
    }

    .instrument-card img {
      height: 180px;
      width: 100%;
      object-fit: cover;
    }

    /* Why choose us */
    .why-icon {
      width: 56px;
      height: 56px;
      border-radius: 12px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: #e7f1ff;
      color: #0d6efd;
      font-size: 1.25rem;
    }

    /* Trust strip */
    .trust-strip {
      background: #0d6efd;
      color: #fff;
      border-radius: 12px;
    }

    .logo-scroller {
      overflow: hidden;
      position: relative;
    }

    .logo-track {
      display: flex;
      gap: 36px;
      align-items: center;
      animation: scroll-logos 28s linear infinite;
      will-change: transform;
    }

    .logo-track img {
      height: 34px;
      width: auto;
      filter: brightness(0) invert(1) opacity(0.9);
    }

    @keyframes scroll-logos {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    /* Testimonials */
    .testimonial-quote {
      font-style: italic;
    }

    /* Helpers */
    .section-title {
      font-weight: 700;
    }

    .section-subtitle {
      color: #5c6670;
      max-width: 720px;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>

<body>

  <?php include(dirname(__DIR__) . '/navbar.php'); ?>

  <!-- Hero: left text + right carousel -->
  <section class="hero container">
    <div class="row align-items-center g-4">
      <div class="col-lg-6 order-2 order-lg-1">
        <h1 class="headline display-5 mb-3 animate__animated animate__fadeInUp">
          Precision Plastic Surgical Instruments
        </h1>
        <p class="subheadline mb-4">
          Lightweight builds, ultra‑fine working ends, and tailored customization for plastic, micro, and reconstructive procedures.
        </p>
        <a href="#instruments" class="btn btn-primary animate__animated animate__fadeInUp animate__delay-1s">
          Explore Instruments
        </a>
      </div>

      <div class="col-lg-6 order-1 order-lg-2">
        <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel" data-bs-interval="2800">
          <div class="carousel-indicators custom-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/assets/plastic_home_slider/slide1.png" alt="Microsurgical forceps" />
            </div>
            <div class="carousel-item">
              <img src="/assets/plastic_home_slider/slide2.png" alt="Delicate scissors for plastic surgery" />
            </div>
            <div class="carousel-item">
              <img src="/assets/plastic_home_slider/slide3.png" alt="Retractors and fine tips" />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Soft-toned banner: headline, subheadline, CTAs -->
  <section class="container my-4">
    <div class="soft-banner text-center">
      <h2 class="section-title mb-2">Engineered for Plastic & Reconstructive Precision</h2>
      <p class="lead mb-4">
        Meticulous balance, refined ergonomics, and ultra‑fine tips for exceptional control in delicate tissue handling.
      </p>
      <div class="d-flex gap-2 justify-content-center">
        <a href="#instruments" class="btn btn-primary">Browse Categories</a>
        <a href="/contact" class="btn btn-outline-primary">Request a Quote</a>
      </div>
    </div>
  </section>

  <!-- Instruments Preview: 5 key cards -->
  <section id="instruments" class="container py-5">
    <div class="text-center mb-4">
      <h2 class="section-title">Plastic Surgery Instrument Categories</h2>
      <p class="section-subtitle">
        Explore our curated selection designed for precision, control, and consistent performance.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="instrument-card">
          <img src="https://via.placeholder.com/800x500?text=Microsurgical+Forceps" alt="Microsurgical Forceps">
          <div class="p-3">
            <h5 class="mb-2">Microsurgical Forceps</h5>
            <p class="text-muted mb-3">Ultra‑fine tips for delicate tissue handling and micro suturing.</p>
            <a href="/category/microsurgical-forceps" class="btn btn-sm btn-outline-primary">Explore</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="instrument-card">
          <img src="https://via.placeholder.com/800x500?text=Delicate+Scissors" alt="Delicate Scissors">
          <div class="p-3">
            <h5 class="mb-2">Delicate Scissors</h5>
            <p class="text-muted mb-3">Precision cutting with minimal tissue trauma.</p>
            <a href="/category/delicate-scissors" class="btn btn-sm btn-outline-primary">Explore</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="instrument-card">
          <img src="https://via.placeholder.com/800x500?text=Retractors" alt="Retractors">
          <div class="p-3">
            <h5 class="mb-2">Retractors</h5>
            <p class="text-muted mb-3">Controlled exposure with lightweight, ergonomic designs.</p>
            <a href="/category/retractors" class="btn btn-sm btn-outline-primary">Explore</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="instrument-card">
          <img src="https://via.placeholder.com/800x500?text=Needle+Holders" alt="Needle Holders">
          <div class="p-3">
            <h5 class="mb-2">Needle Holders</h5>
            <p class="text-muted mb-3">Stable grip and control for micro and fine suturing.</p>
            <a href="/category/needle-holders" class="btn btn-sm btn-outline-primary">Explore</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="instrument-card">
          <img src="https://via.placeholder.com/800x500?text=Skin+Hooks" alt="Skin Hooks">
          <div class="p-3">
            <h5 class="mb-2">Skin Hooks</h5>
            <p class="text-muted mb-3">Fine hooks for precise skin elevation and handling.</p>
            <a href="/category/skin-hooks" class="btn btn-sm btn-outline-primary">Explore</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us: Plastic Focus -->
  <section class="container py-5">
    <div class="text-center mb-4">
      <h2 class="section-title">Why Choose Us for Plastic Surgery</h2>
      <p class="section-subtitle">Purpose‑built instruments for consistent, delicate results.</p>
    </div>

    <div class="row g-4">
      <div class="col-12 col-md-4 text-center">
        <div class="why-icon mb-3"><i class="fa-solid fa-feather"></i></div>
        <h5 class="mb-2">Lightweight Balance</h5>
        <p class="text-muted">Reduced hand fatigue with optimal balance for extended procedures.</p>
      </div>
      <div class="col-12 col-md-4 text-center">
        <div class="why-icon mb-3"><i class="fa-solid fa-ruler-combined"></i></div>
        <h5 class="mb-2">Ultra‑Fine Tips</h5>
        <p class="text-muted">High‑precision working ends for delicate tissue manipulation.</p>
      </div>
      <div class="col-12 col-md-4 text-center">
        <div class="why-icon mb-3"><i class="fa-solid fa-sliders"></i></div>
        <h5 class="mb-2">Customization</h5>
        <p class="text-muted">Tailored specifications for specialty techniques and preferences.</p>
      </div>
    </div>
  </section>

  <!-- Client Trust Strip / Highlight -->
  <section class="container my-5">
    <div class="trust-strip p-4 p-md-5">
      <div class="row g-3 align-items-center">
        <div class="col-12 col-lg-4 text-center text-lg-start">
          <h4 class="mb-1">Trusted by hospital units</h4>
          <p class="mb-0">Supplying plastic, micro, and reconstructive departments worldwide.</p>
        </div>
        <div class="col-12 col-lg-8">
          <div class="logo-scroller">
            <div class="logo-track">
              <img src="https://dummyimage.com/160x34/ffffff/000000&text=Client+1" alt="Client 1">
              <img src="https://dummyimage.com/120x34/ffffff/000000&text=Client+2" alt="Client 2">
              <img src="https://dummyimage.com/140x34/ffffff/000000&text=Client+3" alt="Client 3">
              <img src="https://dummyimage.com/130x34/ffffff/000000&text=Client+4" alt="Client 4">
              <img src="https://dummyimage.com/150x34/ffffff/000000&text=Client+5" alt="Client 5">
              <img src="https://dummyimage.com/160x34/ffffff/000000&text=Client+6" alt="Client 6">
              <!-- duplicate set for seamless loop -->
              <img src="https://dummyimage.com/160x34/ffffff/000000&text=Client+1" alt="Client 1">
              <img src="https://dummyimage.com/120x34/ffffff/000000&text=Client+2" alt="Client 2">
              <img src="https://dummyimage.com/140x34/ffffff/000000&text=Client+3" alt="Client 3">
              <img src="https://dummyimage.com/130x34/ffffff/000000&text=Client+4" alt="Client 4">
              <img src="https://dummyimage.com/150x34/ffffff/000000&text=Client+5" alt="Client 5">
              <img src="https://dummyimage.com/160x34/ffffff/000000&text=Client+6" alt="Client 6">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="container py-5">
    <div class="text-center mb-4">
      <h2 class="section-title">What Surgeons Say</h2>
      <p class="section-subtitle">Real feedback from departments and surgeons using our plastic surgery instruments.</p>
    </div>

    <div class="row g-4">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="https://dummyimage.com/64x64/ced4da/ffffff&text=DR" alt="Dr. A. Kapoor" class="rounded-circle me-3" width="48" height="48">
              <div>
                <h6 class="mb-0">Dr. A. Kapoor</h6>
                <small class="text-muted">Plastic Surgeon, CityCare Hospital</small>
              </div>
            </div>
            <div class="mb-2 text-warning" aria-label="Rated 5 out of 5">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p class="mb-0 testimonial-quote">The balance and ultra‑fine tips make a noticeable difference in delicate closures. Consistent performance across the set.</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="https://dummyimage.com/64x64/ced4da/ffffff&text=DR" alt="Dr. S. Mehta" class="rounded-circle me-3" width="48" height="48">
              <div>
                <h6 class="mb-0">Dr. S. Mehta</h6>
                <small class="text-muted">Head of Unit, Reconstructive Dept.</small>
              </div>
            </div>
            <div class="mb-2 text-warning" aria-label="Rated 5 out of 5">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p class="mb-0 testimonial-quote">Customization options allowed our team to standardize instruments to preference, improving control and reducing fatigue.</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="https://dummyimage.com/64x64/ced4da/ffffff&text=DR" alt="Dr. R. Iqbal" class="rounded-circle me-3" width="48" height="48">
              <div>
                <h6 class="mb-0">Dr. R. Iqbal</h6>
                <small class="text-muted">Microsurgery Specialist</small>
              </div>
            </div>
            <div class="mb-2 text-warning" aria-label="Rated 5 out of 5">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p class="mb-0 testimonial-quote">Excellent tactile feedback. The forceps and scissors maintain precision after repeated sterilization cycles.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include(dirname(__DIR__) . '/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>