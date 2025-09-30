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
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <style>
        .hero .carousel-caption {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            z-index: 2;
            max-width: 600px;
        }

        .carousel-caption h1,
        .carousel-caption p {
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.6);
        }

        .btn-outline-light {
            border-color: #fff;
            color: #fff;
        }

        .btn-outline-light:hover {
            background-color: #fff;
            color: #000;
        }

        .explore-button {
            background-color: #75ade8ff;
            border: none
        }
    </style>

</head>

<body>
    <?php include('navbar.php'); ?>

    <section class="hero container-fluid position-relative p-0">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2800">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/plastic_home_slider/slide1.png" class="d-block w-100"
                        alt="Microsurgical forceps" />
                </div>
                <div class="carousel-item">
                    <img src="assets/plastic_home_slider/slide2.png" class="d-block w-100"
                        alt="Delicate scissors for plastic surgery" />
                </div>
                <div class="carousel-item">
                    <img src="assets/plastic_home_slider/slide3.png" class="d-block w-100"
                        alt="Retractors and fine tips" />
                </div>
            </div>
            <div
                class="carousel-caption start-0 top-50 translate-middle-y text-start text-white ps-5 d-none d-md-block">
                <h1 class="display-5 animate__animated animate__fadeInLeft">
                    Precision Instruments for Transformative Plastic Surgery
                </h1>
                <p class="mb-4 animate__animated animate__fadeInLeft animate__delay-1s">
                    Delivering the accuracy, comfort, and durability surgeons demand in the operating room.
                </p>
                <div class="d-flex gap-3">
                    <a href="#instruments"
                        class="btn btn-primary animate__animated animate__fadeInLeft animate__delay-2s explore-button">
                        Customize Instrument
                    </a>
                    <a href="<?= site_url('contactus') ?>"
                        class="btn btn-primary animate__animated animate__fadeInLeft animate__delay-2s explore-button">
                        Request a Quote
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile Column Layout -->
        <div class="d-block d-md-none text-center p-4 bg-light text-white">
            <h1 class="h4 mb-3 text-dark">
                Precision Instruments for Transformative Plastic Surgery
            </h1>
            <p class="mb-3 text-dark">
                Delivering the accuracy, comfort, and durability surgeons demand in the operating room.
            </p>
            <div class="d-flex flex-column gap-2">
                <a class="btn btn-primary explore-button" data-bs-toggle="modal" data-bs-target="#customizeModal">
                    Customize Instrument
                </a>
                <a href="<?= site_url('contactus') ?>" class="btn btn-primary explore-button">Request a Quote</a>
            </div>
        </div>
    </section>


    <!-- Soft-toned banner: headline, subheadline, CTAs -->
    <section class="container py-5">
        <div class="text-center mb-4">
            <h2 class="section-title">Why Choose us</h2>
            <p class="section-subtitle">
                At Omedic Surgicals, we turn precision into perfection. Our micro instruments are
                designed for professionals who demand accuracy, reliability, and performance—every single time.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-4 col-sm-6 col-lg-4 text-center">
                <div class="why-icon mb-3"><i class="fa-solid fa-crosshairs"></i></div>
                <h6 class="mb-2">Precision Perfected</h6>
                <p class="text-muted">Instruments crafted for flawless performance.</p>
            </div>
            <div class="col-4 col-sm-6 col-lg-4 text-center">
                <div class="why-icon mb-3"><i class="fa-solid fa-user-gear"></i></div>
                <h6 class="mb-2">Tailored to You</h6>
                <p class="text-muted">Custom solutions for every unique requirement.</p>
            </div>
            <div class="col-4 col-sm-6 col-lg-4 text-center">
                <div class="why-icon mb-3"><i class="fa-solid fa-shield-heart"></i></div>
                <h6 class="mb-2">Durable & Reliable</h6>
                <p class="text-muted">Built to last, tested for excellence.</p>
            </div>
        </div>
        <br>
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-sm-6 col-lg-4 text-center">
                <div class="why-icon mb-3"><i class="fa-solid fa-lightbulb"></i></div>
                <h6 class="mb-2">Innovation at Work</h6>
                <p class="text-muted">Modern technology meets expert craftsmanship.</p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4 text-center">
                <div class="why-icon mb-3"><i class="fa-solid fa-handshake-angle"></i></div>
                <h6 class="mb-2">Support You Can Count On</h6>
                <p class="text-muted">From design to delivery, we’ve got your back.</p>
            </div>
        </div>
    </section>



    <!-- Instruments Preview: 5 key cards -->
    <section id="instruments" class="container">
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
                        <h5 class="mb-2">Micro Scissors</h5>
                        <p class="text-muted mb-3">Ultra‑fine tips for delicate tissue handling and micro suturing.</p>
                        <a href="<?= site_url('microscissors') ?>" class="btn btn-sm btn-outline-primary">Explore</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-4">
                <div class="instrument-card">
                    <img src="assets/home_background.jpg" alt="Delicate Scissors">
                    <div class="p-3">
                        <h5 class="mb-2">Micro Needle Holder</h5>
                        <p class="text-muted mb-3">Precision cutting with minimal tissue trauma.</p>
                        <a href="<a href=" <?= site_url('microneedleholder') ?>"
                            class="btn btn-sm btn-outline-primary">Explore</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-4">
                <div class="instrument-card">
                    <img src="assets/home_background.jpg" alt="Retractors">
                    <div class="p-3">
                        <h5 class="mb-2">Micro Forceps</h5>
                        <p class="text-muted mb-3">Controlled exposure with lightweight, ergonomic designs.</p>
                        <a href="<?= site_url('microforceps') ?>" class="btn btn-sm btn-outline-primary">Explore</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-4">
                <div class="instrument-card">
                    <img src="assets/home_background.jpg" alt="Retractors">
                    <div class="p-3">
                        <h5 class="mb-2">Micro Vascular Clamps</h5>
                        <p class="text-muted mb-3">Controlled exposure with lightweight, ergonomic designs.</p>
                        <a href="<?= site_url('microvascularclamps') ?>"
                            class="btn btn-sm btn-outline-primary">Explore</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-4">
                <div class="instrument-card">
                    <img src="assets/home_background.jpg" alt="Needle Holders">
                    <div class="p-3">
                        <h5 class="mb-2">Micro Instrument sets</h5>
                        <p class="text-muted mb-3">Stable grip and control for micro and fine suturing.</p>
                        <a href="<?= site_url('instrumentssets') ?>" class="btn btn-sm btn-outline-primary">Explore</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-4">
                <div class="instrument-card">
                    <img src="assets/home_background.jpg" alt="Skin Hooks">
                    <div class="p-3">
                        <h5 class="mb-2">Tray</h5>
                        <p class="text-muted mb-3">Fine hooks for precise skin elevation and handling.</p>
                        <a href="<?= site_url('tray') ?>" class="btn btn-sm btn-outline-primary">Explore</a>
                    </div>
                </div>
            </div>


        </div>
    </section>



    <!-- Testimonials Section -->
    <section class="testimonials container">
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


    <div class="modal fade" id="customizeModal" tabindex="-1" aria-labelledby="customizeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="customizeModalLabel">Customize Instrument Sets</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    Don’t settle for pre-made—create a micro instrument set that’s truly yours.
                    Pick your own scissors, forceps, and other instruments exactly as you need.
                    Customized, precise, and designed for <b>your workflow</b>.
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#instruments" class="btn btn-primary">Start Customizing</a>
                </div>

            </div>
        </div>
    </div>



    <?php include('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>