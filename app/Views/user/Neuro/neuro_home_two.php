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

    <!-- Your site styles (optional) -->
    <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/footer.css">



</head>

<body>
    <?php include('navbar.php'); ?>

    <!-- Hero: left text + right carousel -->
    <section class="hero container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6 order-2 order-lg-1">
                <h1 class="headline display-5 mb-3 animate__animated animate__fadeInUp">
                    Precision Neuro Surgical Instruments
                </h1>
                <p class="subheadline mb-4">
                    Lightweight builds, ultra‑fine working ends, and tailored customization for neuro, micro, and
                    reconstructive procedures.
                </p>
                <a href="#instruments" class="btn btn-primary animate__animated animate__fadeInUp animate__delay-1s">
                    Explore Instruments
                </a>
            </div>

            <div class="col-lg-6 order-1 order-lg-2">
                <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel"
                    data-bs-interval="2800">
                    <div class="carousel-indicators custom-indicators">
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                            aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/plastic_home_slider/slide1.png" alt="Microsurgical forceps" />
                        </div>
                        <div class="carousel-item">
                            <img src="assets/plastic_home_slider/slide2.png"
                                alt="Delicate scissors for plastic surgery" />
                        </div>
                        <div class="carousel-item">
                            <img src="assets/plastic_home_slider/slide3.png" alt="Retractors and fine tips" />
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span><span
                            class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span><span
                            class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Soft-toned banner: headline, subheadline, CTAs -->


    <!-- Instruments Preview: 5 key cards -->
    <section id="instruments" class="container py-5">
        <div class="text-center mb-4">
            <h2 class="section-title">Plastic Surgery Instrument Categories</h2>
            <p class="section-subtitle">
                Explore our curated selection designed for precision, control, and consistent performance.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-6 col-sm-6 col-lg-4 ">
                <div class="instrument-card">
                    <img src="assets/home_background.jpg" alt="Microsurgical Forceps">
                    <div class="p-3">
                        <h5 class="mb-2">Micro Forceps</h5>
                        <p class="text-muted mb-3">Ultra‑fine tips for delicate tissue handling and micro suturing.</p>
                        <a href="category.php?c=microsurgical-forceps"
                            class="btn btn-sm btn-outline-primary">Explore</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-4">
                <div class="instrument-card">
                    <img src="assets/home_background.jpg" alt="Delicate Scissors">
                    <div class="p-3">
                        <h5 class="mb-2">Microvascular Clamps</h5>
                        <p class="text-muted mb-3">Precision cutting with minimal tissue trauma.</p>
                        <a href="category.php?c=delicate-scissors" class="btn btn-sm btn-outline-primary">Explore</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-4">
                <div class="instrument-card">
                    <img src="assets/home_background.jpg" alt="Retractors">
                    <div class="p-3">
                        <h5 class="mb-2">Trays</h5>
                        <p class="text-muted mb-3">Controlled exposure with lightweight, ergonomic designs.</p>
                        <a href="category.php?c=retractors" class="btn btn-sm btn-outline-primary">Explore</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-4">
                <div class="instrument-card">
                    <img src="assets/home_background.jpg" alt="Needle Holders">
                    <div class="p-3">
                        <h5 class="mb-2">Instrument sets</h5>
                        <p class="text-muted mb-3">Stable grip and control for micro and fine suturing.</p>
                        <a href="category.php?c=needle-holders" class="btn btn-sm btn-outline-primary">Explore</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-4">
                <div class="instrument-card">
                    <img src="assets/home_background.jpg" alt="Skin Hooks">
                    <div class="p-3">
                        <h5 class="mb-2">Micro Needle Holders</h5>
                        <p class="text-muted mb-3">Fine hooks for precise skin elevation and handling.</p>
                        <a href="category.php?c=skin-hooks" class="btn btn-sm btn-outline-primary">Explore</a>
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
            <div class="col-4 col-sm-6 col-lg-4 text-center">
                <div class="why-icon mb-3"><i class="fa-solid fa-feather"></i></div>
                <h6 class="mb-2">Lightweight Balance</h6>
                <p class="text-muted">Reduced hand fatigue with optimal balance for extended procedures.</p>
            </div>
            <div class="col-4 col-sm-6 col-lg-4 text-center">
                <div class="why-icon mb-3"><i class="fa-solid fa-ruler-combined"></i></div>
                <h6 class="mb-2">Ultra‑Fine Tips</h6>
                <p class="text-muted">High‑precision working ends for delicate tissue manipulation.</p>
            </div>
            <div class="col-4 col-sm-6 col-lg-4 text-center">
                <div class="why-icon mb-3"><i class="fa-solid fa-sliders"></i></div>
                <h6 class="mb-2">Customization</h6>
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

    <!-- Testimonials Section -->
    <section class="testimonials container my-5">
        <div class="text-center mb-5">
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-subtitle">Trusted by surgeons worldwide for unmatched precision and quality.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="testimonial-card">
                    <p class="testimonial-quote">"The micro forceps are unbelievably precise. They’ve improved my
                        surgical accuracy immensely."</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Dr. James Carter">
                        <div>
                            <h6>Dr. James Carter</h6>
                            <small>Plastic Surgeon, USA</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <p class="testimonial-quote">"Lightweight and perfectly balanced instruments that reduce fatigue in
                        long procedures."</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Dr. Amelia Wong">
                        <div>
                            <h6>Dr. Amelia Wong</h6>
                            <small>Reconstructive Specialist, Singapore</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <p class="testimonial-quote">"Omedic’s customization options mean I can have instruments exactly to
                        my preference."</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="Dr. Luis Fernandez">
                        <div>
                            <h6>Dr. Luis Fernandez</h6>
                            <small>Microsurgery Expert, Spain</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>