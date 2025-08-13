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
        .timeline-section {
            background: #f0f9ff;
            padding: 60px 20px;
            font-family: 'Segoe UI', sans-serif;
        }

        .timeline-title {
            text-align: center;
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 40px;
        }

        .timeline {
            position: relative;
            max-width: 1000px;
            margin: auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 4px;
            background-color: #00bcd4;
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .timeline-item {
            padding: 20px 40px;
            position: relative;
            width: 50%;
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.6s ease;
        }

        .timeline-item.animate.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .timeline-item.left {
            left: 0;
            text-align: right;
        }

        .timeline-item.right {
            left: 50%;
            text-align: left;
        }

        .timeline-item .content {
            background: white;
            padding: 20px;
            position: relative;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .timeline-item .icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #00bcd4, #007bff);
            color: white;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            position: absolute;
            top: 20px;
            left: -25px;
        }

        .timeline-item.right .icon {
            left: auto;
            right: -25px;
        }

        .timeline-item h3 {
            margin-top: 10px;
            color: #007bff;
            font-size: 1.2rem;
        }

        .timeline-item p {
            font-size: 0.95rem;
            color: #555;
            margin-top: 5px;
        }

        /* Mobile Responsive */
        @media screen and (max-width: 768px) {
            .timeline::after {
                left: 8px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 60px;
                padding-right: 25px;
            }

            .timeline-item.right {
                left: 0;
            }

            .timeline-item .icon {
                left: 0;
            }

            .timeline-item.right .icon {
                right: auto;
            }

            .timeline-item .content {
                text-align: left;
            }
        }
    </style>


</head>

<body class="bg-light text-center d-flex flex-column min-vh-100">

    <?php include('navbar.php'); ?>

    <div class="container-heading sp-page-wrapper mb-5">
        <div class=" text-center mb-5 intro-section">
            <h3 class="gradient-text fw-bold display-4 mb-3">
                Our Services
            </h3>
            <div class="underline"></div>
            <p class="intro-text mx-auto mt-4 px-3 px-md-5">
                We offer a range of services including surgical product supply, consultation, and technical support.
            </p>
        </div>

        <div class="container mt-5">
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="service-icon"><i class="bi bi-gear-fill"></i></div>
                        <div>Design and manufacture surgical instruments</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="service-icon"><i class="bi bi-tools"></i></div>
                        <div>Machining of raw parts</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="service-icon"><i class="bi bi-nut-fill"></i></div>
                        <div>Assembly of surgical instruments</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="service-icon"><i class="bi bi-shield-check"></i></div>
                        <div>Finishing of surgical instruments</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="service-icon"><i class="bi bi-brush-fill"></i></div>
                        <div>Polishing, brushing, shining and coating</div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" text-center mb-5 intro-section mt-5">
            <h3 class="gradient-text fw-bold display-4 mb-3">
                Warranty Service
            </h3>
            <div class="underline"></div>
            <p class="intro-text mx-auto mt-4 px-3 px-md-5">
                We will repair or replace the instrument in case of defective material or poor workmanship. Any other
                malfunction or defect as a result of misuse of the instrument or not respecting our instrument care
                guide, will not come under warranty.
            </p>
        </div>
        <div class=" text-center mb-5 intro-section mt-5">
            <h3 class="gradient-text fw-bold display-4 mb-3">
                Warning
            </h3>
            <div class="underline"></div>
            <p class="intro-text mx-auto mt-4 px-3 px-md-5">
                Before sending instruments for repair, it should be cleaned, and sterilized in the same way as if it
                goes to the operating theatre.misuse of the instrument or not respecting our instrument care
                guide, will not come under warranty.
            </p>
            <p class="intro-text mx-auto mt-4 px-3 px-md-5">
                Returned instruments after repair, should be treated as the a new instruments and should go to the same
                process of cleaning and sterilization before use.
            </p>
        </div>

        <section class="timeline-section">
            <h2 class="timeline-title">Instrument Cleaning Process</h2>
            <div class="timeline">
                <div class="timeline-item left animate">
                    <div class="content">
                        <div class="icon"><i class="fas fa-tint"></i></div>
                        <h3>Rinse</h3>
                        <p>Rinse off all blood, body fluids, and tissue immediately using plain water.</p>
                    </div>
                </div>
                <div class="timeline-item right animate">
                    <div class="content">
                        <div class="icon"><i class="fas fa-vial"></i></div>
                        <h3>Mix</h3>
                        <p>Mix a product such as Akazon according to the manufacturer’s directions.</p>
                    </div>
                </div>
                <div class="timeline-item left animate">
                    <div class="content">
                        <div class="icon"><i class="fas fa-brush"></i></div>
                        <h3>Clean</h3>
                        <p>Use appropriate brushes and cleaning product to clean surgical instruments.</p>
                    </div>
                </div>
                <div class="timeline-item right animate">
                    <div class="content">
                        <div class="icon"><i class="fas fa-search"></i></div>
                        <h3>Inspect</h3>
                        <p>Visually inspect all instruments to ensure proper function and cleanliness.</p>
                    </div>
                </div>
                <div class="timeline-item left animate">
                    <div class="content">
                        <div class="icon"><i class="fas fa-water"></i></div>
                        <h3>Rinse Again</h3>
                        <p>Rinse instruments under clean running water, paying attention to hinges and joints.</p>
                    </div>
                </div>
                <div class="timeline-item right animate">
                    <div class="content">
                        <div class="icon"><i class="fas fa-toilet-paper"></i></div>
                        <h3>Dry</h3>
                        <p>Dry instruments thoroughly with a lint-free towel to avoid corrosion or water spots.</p>
                    </div>
                </div>
            </div>
        </section>



        <div class="mt-auto">
            <?php include('footer.php'); ?>
        </div>

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