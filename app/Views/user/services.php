<!DOCTYPE html>
<html>

<head>
    <title>Services</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Your Custom Stylesheets -->
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .feature-card {
            border-radius: 12px;
            background: linear-gradient(90deg, rgb(199, 210, 232), #60a5fa);

            transition: all 0.3s ease-in-out;
            color: #000000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .feature-card:hover {
            background: #f8f9fa;
            color: #000000;
            transform: translateY(-6px);
        }

        .feature-card:hover i,
        .feature-card:hover h5,
        .feature-card:hover p {
            color: #000000 !important;
        }

        .timeline-horizontal {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 2rem;
            padding: 2rem 1rem;
        }

        .timeline-horizontal .timeline-step {
            flex: 1;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .timeline-horizontal .icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(90deg, #60a5fa, #2563eb);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            z-index: 2;
            position: relative;
        }

        /* Curved center line */
        .timeline-horizontal .timeline-line {
            position: absolute;
            top: 40px;
            /* aligns with icons */
            left: 0;
            right: 0;
            height: 120px;
            background: none;
            border-top: 4px solid #60a5fa;
            border-radius: 100px / 50px;
            /* ellipse curve */
            z-index: 0;
        }

        /* Step text */
        .timeline-horizontal h5 {
            font-weight: 600;
            color: #007bff;
        }

        .timeline-horizontal p {
            font-size: 0.9rem;
            color: #555;
            max-width: 180px;
            margin: 0 auto;
        }

        /* Mobile fallback */
        .timeline-vertical {
            padding: 20px;
        }

        .custom-card {
            border-radius: 15px;
            background: #f9fafb;
            border: 1px solid #e6e9ec;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .custom-card:hover {
            transform: translateY(-5px);
            background: #ffffff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .warning-box {
            background: #007bff
        }

        .importantnotice-box {
            background: #FE5757;
        }

        .repair-section h2 {
            color: #1e3a8a;
        }

        .icon-pointer {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: linear-gradient(135deg, #60a5fa, #2563eb);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            flex-shrink: 0;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
        }

        .repair-section ul li h6 {
            color: #0d6efd;
        }
    </style>


</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <?php include('navbar.php'); ?>

    <!-- Main content wrapper -->
    <main class="flex-grow-1">
        <div class="container-heading sp-page-wrapper mb-5">
            <section class="container py-5">
                <!-- Row 1: Heading + 2 Cards -->
                <div class="row align-items-start mb-4">
                    <!-- Left Heading -->
                    <div class="col-lg-4 mb-4 mb-lg-0 d-flex align-items-center">
                        <h2 class="fw-bold text-start text-black">Special Manufacturing Services</h2>
                    </div>

                    <!-- 2 Cards beside Heading -->
                    <div class="col-lg-8">
                        <div class="row g-4">
                            <div class="col-6 col-md-6">
                                <div class="feature-card h-100 text-start p-4">
                                    <i class="bi bi-phone-vibrate fs-2 mb-3"></i>
                                    <h6 class="fw-400">Design and manufacturer surgical instrument</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="feature-card h-100 text-start p-4">
                                    <i class="bi bi-heart-pulse fs-2 mb-3"></i>
                                    <h6 class="fw-400">Machining of raw parts</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 2: 3 Full-Width Cards -->
                <div class="row g-4">
                    <div class="col-6 col-md-4">
                        <div class="feature-card h-100 text-start p-4">
                            <i class="bi bi-people fs-2 mb-3"></i>
                            <h6 class="fw-">Assembly of surgical instruments</h6>

                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="feature-card h-100 text-start p-4">
                            <i class="bi bi-activity fs-2 mb-3"></i>
                            <h6 class="fw-">Finishing up surgical instrument</h6>

                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="feature-card h-100 text-start p-4">
                            <i class="bi bi-shield-check fs-2 mb-3"></i>
                            <h6 class="fw-">Polishing brushing coating and shining</h6>

                        </div>
                    </div>
                </div>
            </section>


            <!-- Repair Services Section -->
            <section class="repair-section py-5">
                <div class="container">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center">
                            <img src="assets/repair.png" alt="Instrument Repair"
                                class="img-fluid rounded-3 shadow-sm" />
                        </div>
                        <!-- Left Content -->
                        <div class="col-lg-6">
                            <h2 class="fw-bold text-black mb-3">We Repair Your Micro Instruments Like New</h2>
                            <p class="text-muted mb-4">
                                Why replace when you can restore? At <strong>Omedic Surgicals</strong>, we specialize in
                                repairing your delicate micro instruments with precision and care—bringing them back to
                                their original performance and look.
                            </p>

                            <ul class="list-unstyled">
                                <li class="d-flex mb-3">
                                    <span class="icon-pointer me-3"><i class="bi bi-check-circle-fill"></i></span>
                                    <div>
                                        <h6 class="fw-bold mb-1">High-Quality Repairs</h6>
                                        <p class="mb-0 small text-muted">Restoring instruments to “as good as new”
                                            condition.</p>
                                    </div>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="icon-pointer me-3"><i class="bi bi-currency-dollar"></i></span>
                                    <div>
                                        <h6 class="fw-bold mb-1">Cost-Effective Solution</h6>
                                        <p class="mb-0 small text-muted">Save more by repairing instead of replacing.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex mb-3">
                                    <span class="icon-pointer me-3"><i class="bi bi-bullseye"></i></span>
                                    <div>
                                        <h6 class="fw-bold mb-1">Precision & Reliability</h6>
                                        <p class="mb-0 small text-muted">Every instrument is tested for accuracy and
                                            durability.</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <span class="icon-pointer me-3"><i class="bi bi-recycle"></i></span>
                                    <div>
                                        <h6 class="fw-bold mb-1">Sustainability</h6>
                                        <p class="mb-0 small text-muted">Extending the life of your instruments reduces
                                            waste.</p>
                                    </div>
                                </li>
                            </ul>

                            <p class="mt-4 fw-semibold text-primary">
                                Where old instruments find new life.
                                Because every instrument deserves a second life.</p>
                        </div>

                        <!-- Right Illustration / Image -->

                    </div>
                </div>
            </section>


            <section class="timeline-section py-5">
                <h2 class="fw-bold text-center text-black mb-5">Instrument Cleaning Process</h2>

                <!-- Horizontal Timeline (Desktop) -->
                <div class="timeline-horizontal d-none d-md-flex">
                    <div class="timeline-line"></div>

                    <div class="timeline-step">
                        <div class="icon"><i class="fas fa-tint"></i></div>
                        <h5>Rinse</h5>
                        <p>Rinse off all blood, body fluids, and tissue immediately using plain water.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="icon"><i class="fas fa-vial"></i></div>
                        <h5>Mix</h5>
                        <p>Mix a product such as Akazon according to the manufacturer’s directions.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="icon"><i class="fas fa-brush"></i></div>
                        <h5>Clean</h5>
                        <p>Use appropriate brushes and cleaning product to clean surgical instruments.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="icon"><i class="fas fa-search"></i></div>
                        <h5>Inspect</h5>
                        <p>Visually inspect all instruments to ensure proper function and cleanliness.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="icon"><i class="fas fa-water"></i></div>
                        <h5>Rinse Again</h5>
                        <p>Rinse instruments under clean running water, paying attention to hinges and joints.</p>
                    </div>

                    <div class="timeline-step">
                        <div class="icon"><i class="fas fa-toilet-paper"></i></div>
                        <h5>Dry</h5>
                        <p>Dry instruments thoroughly with a lint-free towel to avoid corrosion or water spots.</p>
                    </div>
                </div>

                <!-- Vertical Timeline (Mobile) -->
                <div class="timeline-vertical d-block d-md-none">
                    <div class="timeline-item">
                        <div class="icon"><i class="fas fa-tint"></i></div>
                        <h5>Rinse</h5>
                        <p>Rinse off all blood, body fluids, and tissue immediately using plain water.</p>
                    </div>

                    <div class="timeline-item">
                        <div class="icon"><i class="fas fa-vial"></i></div>
                        <h5>Mix</h5>
                        <p>Mix a product such as Akazon according to the manufacturer’s directions.</p>
                    </div>

                    <div class="timeline-item">
                        <div class="icon"><i class="fas fa-brush"></i></div>
                        <h5>Clean</h5>
                        <p>Use appropriate brushes and cleaning product to clean surgical instruments.</p>
                    </div>

                    <div class="timeline-item">
                        <div class="icon"><i class="fas fa-search"></i></div>
                        <h5>Inspect</h5>
                        <p>Visually inspect all instruments to ensure proper function and cleanliness.</p>
                    </div>

                    <div class="timeline-item">
                        <div class="icon"><i class="fas fa-water"></i></div>
                        <h5>Rinse Again</h5>
                        <p>Rinse instruments under clean running water, paying attention to hinges and joints.</p>
                    </div>

                    <div class="timeline-item">
                        <div class="icon"><i class="fas fa-toilet-paper"></i></div>
                        <h5>Dry</h5>
                        <p>Dry instruments thoroughly with a lint-free towel to avoid corrosion or water spots.</p>
                    </div>
                </div>
            </section>


            <section id="warranty-warning" class="py-5">
                <div class="container">
                    <div class="row g-4">

                        <!-- Warranty Services -->
                        <div class="col-lg-6 col-md-12">
                            <div class="custom-card h-100 p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box warning-box text-white me-3">
                                        <i class="bi bi-shield-check fs-4"></i>
                                    </div>
                                    <h5 class="fw-bold mb-0 ">Warranty Services</h5>
                                </div>
                                <p class="small mb-2 text-start">
                                    We stand by the quality of our instruments. In the unlikely event of defective
                                    material or poor workmanship,
                                    we will repair or replace the product.
                                </p>
                                <p class="small text-muted mb-0 text-start">
                                    <strong>Note:</strong> Issues caused by misuse or not following our Instrument Care
                                    Guide are not covered under warranty.
                                </p>
                            </div>
                        </div>

                        <!-- Warning Notice -->
                        <div class="col-lg-6 col-md-12">
                            <div class="custom-card h-100 p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box importantnotice-box text-white me-3">
                                        <i class="bi bi-exclamation-triangle fs-4"></i>
                                    </div>
                                    <h5 class="fw-bold mb-0">Important Notice</h5>
                                </div>
                                <p class="small mb-2 text-start">
                                    Before sending instruments for repair, they must be thoroughly cleaned and
                                    sterilized, following the same
                                    process as if prepared for the operating theatre.
                                </p>

                                <p class="small mb-2 text-start">Damage due to misuse or ignoring the Instrument Care
                                    Guide is not covered under
                                    warranty.</p>
                                <p class="small mb-2 text-start">After repair, instruments must be treated as new and
                                    re-sterilized before use.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer sticks at the bottom -->
    <?php include('footer.php'); ?>

    <script>
        const items = document.querySelectorAll('.animate');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        items.forEach(item => {
            observer.observe(item);
        });
    </script>

</body>


</html>