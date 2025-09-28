<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tray - Plastic Surgery Instruments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<style>
    /* Customize Instrument Sets Button */
    .customize-button {
        background: #0066cc;
        /* Button background color */
        color: #fff;
        /* Text color */
        border-radius: 25px;
        /* Rounded corners */
        padding: 10px 25px;
        /* Padding */
        font-weight: 600;
        transition: all 0.3s ease;
        /* Smooth transition for hover */
        border: none;
        /* Remove default border */
    }

    /* Hover effect */
    .customize-button:hover {
        background: #004c99;
        /* Darker blue on hover */
        color: #ffffff;
        /* Ensure text stays white */
        transform: translateY(-2px);
        /* Slight lift effect */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        /* Shadow on hover */
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(15px);
        border-radius: 20px;
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    /* Gradient Title */
    .text-gradient {
        background: #000000;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Highlighted keywords */
    .highlight {
        color: #000000;
        font-weight: 600;
    }

    /* CTA Box */
    .cta-box {
        background: linear-gradient(90deg, #2563eb, #60a5fa);
        border-radius: 12px;
        padding: 15px;
        font-size: 1rem;
        font-weight: 500;
        color: #004d61;
        box-shadow: 0 4px 12px rgba(0, 123, 255, 0.1);
    }

    /* Button improvements */
    .customized-button {
        background: linear-gradient(90deg, #2563eb, #60a5fa);
        border: none;
        transition: all 0.3s ease-in-out;
    }

    .customized-button:hover {
        background: linear-gradient(90deg, #0096c7, #48cae4);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 150, 199, 0.3);
    }

    /* Custom blue shaded bullets */
    .custom-bullet {
        position: relative;
        padding-left: 28px;
        font-size: 1rem;
        line-height: 1.6;
        color: #333;
    }

    .custom-bullet span {
        position: absolute;
        left: 0;
        top: 5px;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: linear-gradient(90deg, #2563eb, #60a5fa);
        box-shadow: 0 2px 6px rgba(0, 119, 182, 0.3);
    }
</style>

<body>
    <?php include __DIR__ . '/../navbar.php'; ?>

    <div class="container-heading sp-page-wrapper">
        <div class="intro-section m-5 justify-content-center">
            <div class="row align-items-center">
                <!-- Left Side: Text -->
                <div class="col-md-8 text-start">
                    <h3 class="gradient-text fw-bold display-4 mb-3">Micro Instrument Sets</h3>
                    <div class="underline"></div>
                    <p class="intro-text mt-3">
                        Explore our curated range of high-quality trays designed for precision, safety,
                        and optimal outcomes in plastic and reconstructive procedures.
                    </p>
                </div>

                <!-- Right Side: Button -->
                <div class="col-md-4 text-md-end text-center mt-4 mt-md-0">
                    <a href="#" class="btn btn-primary btn-lg customize-button" data-bs-toggle="modal"
                        data-bs-target="#sterilizationModal">
                        Customize Tray
                    </a>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 justify-content-center">

                <!-- Card 1 -->
                <div class="col">
                    <div class="glass-card p-3 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="glass-img-wrapper mb-3 text-center">
                                <img src="assets/micro_instruments_sets/micro_instrument_box.jpg"
                                    class="img-fluid product-img mx-auto d-block" alt="Micro Scissor"
                                    style="max-height: 300px; width: 100%; object-fit: cover;">
                            </div>
                            <h5 class="fw-bold text-dark mb-2">Micro Instrument Box</h5>
                            <p class="text-muted small">
                                27 X 185 X 35
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col">
                    <div class="glass-card p-3 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="glass-img-wrapper mb-3 text-center">
                                <img src="assets/micro_instruments_sets/skin_grafting_box.jpg"
                                    class="img-fluid product-img mx-auto d-block" alt="Needle Holder"
                                    style="max-height: 300px; width: 100%; object-fit: cover;">
                            </div>
                            <h5 class="fw-bold text-dark mb-2">Skin Grafting Box</h5>
                            <p class="text-muted small">
                                335 X 90 X 40
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col">
                    <div class="glass-card p-3 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="glass-img-wrapper mb-3 text-center">
                                <img src="assets/micro_instruments_sets/double_layer_box.jpg"
                                    class="img-fluid product-img mx-auto d-block" alt="Tissue Forceps"
                                    style="max-height: 350px; width: 100%; object-fit: cover;">
                            </div>
                            <h5 class="fw-bold text-dark mb-2">Double Layer Box</h5>
                            <p class="text-muted small">
                                305 X 205 X 75

                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal for expanded image -->
        <div class="modal fade" id="imageModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered text-center">
                <div class="modal-content bg-transparent border-0 shadow-none">
                    <div class="modal-body p-0">
                        <img id="modalImage" class="modal-img" src="" alt="Expanded Product">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="sterilizationModal" tabindex="-1" aria-labelledby="sterilizationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content glass-card">

                    <!-- Header -->
                    <div class="modal-header border-0 pb-0">
                        <h5 class="modal-title fw-bold text-gradient" id="sterilizationModalLabel">
                            <i class="bi bi-box-seam me-2"></i> Customize Your Sterilization Trays & Boxes – Tailored to
                            Your Needs
                        </h5>
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <!-- Body -->
                    <div class="modal-body px-4">
                        <p class="lead">
                            At <strong>Omedic Surgicals</strong> we understand that every surgical setup is unique.
                            That’s why we offer fully <span class="highlight">customizable sterilization trays and
                                boxes</span> designed to meet your exact requirements.
                        </p>

                        <p>
                            Whether you need <span class="highlight">specific dimensions</span>, <span
                                class="highlight">unique compartment layouts</span>, <span class="highlight">laser
                                marking</span>, <span class="highlight">silicone inserts</span>, or <span
                                class="highlight">special finishes</span> – we build it the way you want.
                            Our trays and boxes are manufactured with <strong>high-quality, durable materials</strong>
                            to ensure maximum protection, sterilization safety, and longevity.
                        </p>

                        <!-- Blue shaded bullet points -->
                        <ul class="list-unstyled mt-3">
                            <li class="custom-bullet mb-2"><span></span> Tailor-made sizes and designs</li>
                            <li class="custom-bullet mb-2"><span></span> Flexible layout options for instruments</li>
                            <li class="custom-bullet mb-2"><span></span> Premium materials for durability &
                                sterilization safety</li>
                            <li class="custom-bullet mb-2"><span></span> Engraving & branding available</li>
                            <li class="custom-bullet"><span></span> Engineered for easy handling and long life</li>
                        </ul>

                        <p class="mt-3">
                            Your instruments deserve the best care – and so do you. With our customization service, you
                            don’t have to adjust to standard trays; instead, we design trays and boxes that adjust to
                            you.
                        </p>

                        <p class="fw-semibold text-center text-gradient fs-5 mt-3">
                            Your requirement. Your design. Our expertise.
                        </p>

                        <div class="cta-box mt-4">
                            📩 <strong>Get in touch today</strong> to discuss your sterilization tray requirements and
                            let us build the perfect solution for you.
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="modal-footer border-0">

                        <a href="contact.html" class="btn btn-primary rounded-pill px-4 w-100">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>


        <?php include __DIR__ . '/../footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function zoomImage(e, container) {
                const img = container.querySelector('.product-img');
                const rect = container.getBoundingClientRect();
                const x = ((e.clientX - rect.left) / rect.width) * 100;
                const y = ((e.clientY - rect.top) / rect.height) * 100;
                img.style.setProperty('--x', x + '%');
                img.style.setProperty('--y', y + '%');
            }
            function openModal(imgSrc) {
                document.getElementById('modalImage').src = imgSrc;
                new bootstrap.Modal(document.getElementById('imageModal')).show();
            }
        </script>
</body>

</html>