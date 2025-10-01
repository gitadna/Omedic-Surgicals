<!DOCTYPE html>
<html lang="en">

<head>

    <title>Instrument Sets - Plastic Surgery Instruments</title>
    <?php include(APPPATH . 'Views/user/head.php'); ?>

    <style>
        .ux-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 16px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .ux-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.15);
        }

        .ux-card-img {
            width: 100%;
            max-height: 250px;
            object-fit: cover;
            border-radius: 12px;
        }

        .ux-card-title {
            font-weight: 600;
            margin-top: 14px;
            color: #222;
        }

        /* Buttons */
        .ux-btn {
            background: #0066cc;
            color: #fff;
            border: none;
            border-radius: 25px;
            padding: 8px 22px;
            font-weight: 500;
            transition: background 0.3s ease;
        }

        .ux-btn:hover {
            background: #004c99;
        }

        .ux-btn-secondary {
            background: #e5e5e5;
            color: #333;
            border-radius: 25px;
            padding: 8px 20px;
            border: none;
        }

        .ux-btn-secondary:hover {
            background: #ccc;
        }

        /* Modal */
        .ux-modal {
            border-radius: 16px;
            overflow: hidden;
        }

        .ux-modal-header {
            background: #0066cc;
            color: #fff;
            padding: 14px 20px;
        }

        .ux-modal-title {
            font-weight: 600;
            margin: 0;
        }

        .ux-modal-body {
            padding: 20px;
        }

        .ux-modal-footer {
            padding: 12px 20px;
            text-align: right;
            border-top: 1px solid #eee;
        }

        /* Table */
        .ux-table thead {
            background: #f5f7fa;
        }

        .ux-table th,
        .ux-table td {
            padding: 10px 12px;
        }

        .ux-table tbody tr:hover {
            background: #f0f8ff;
        }

        /* Expanded image */
        .modal-img {
            max-width: 90%;
            max-height: 80vh;
            border-radius: 12px;
        }

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
</head>

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
                        data-bs-target="#customizeModal">
                        Customize Instrument Sets
                    </a>
                </div>
            </div>
        </div>


        <div class="container mb-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 justify-content-center">

                <!-- Card One -->
                <div class="col">
                    <div class="ux-card text-center">
                        <img src="<?= MICRO_ASSET_URL . 'micro_instrument_set_2.jpg' ?>" class="ux-card-img"
                            alt="Micro Box" onclick="openModal(this.src)">

                        <h5 class="ux-card-title">Micro Instrument Set 2</h5>

                        <button type="button" class="ux-btn" data-bs-toggle="modal" data-bs-target="#cardOneModal">
                            View Details
                        </button>
                    </div>
                </div>
                <!-- Card Two -->

                <div class="col">
                    <div class="ux-card text-center">
                        <img src="<?= MICRO_ASSET_URL . 'super_micro_instrument_set.jpg' ?>" class="ux-card-img"
                            alt="Micro Box" onclick="openModal(this.src)">

                        <h5 class="ux-card-title">Super Micro Instrument Set</h5>

                        <button type="button" class="ux-btn" data-bs-toggle="modal" data-bs-target="#cardTwoModal">
                            View Details
                        </button>
                    </div>
                </div>

                <!-- Card three -->


                <div class="col">
                    <div class="ux-card text-center">
                        <img src="<?= MICRO_ASSET_URL . 'micro_instrument_set_3.jpg' ?>" class="ux-card-img"
                            alt="Micro Box" onclick="openModal(this.src)">

                        <h5 class="ux-card-title">Micro Instrument Set 3</h5>

                        <button type="button" class="ux-btn" data-bs-toggle="modal" data-bs-target="#cardThreeModal">
                            View Details
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered text-center">
            <div class="modal-content bg-transparent border-0 shadow-none">
                <div class="modal-body p-0">
                    <img id="modalImage" class="modal-img" src="" alt="Expanded Product">
                </div>
            </div>
        </div>
    </div>

    <!-- Table Modal -->
    <div class="modal fade" id="cardTwoModal" tabindex="-1" aria-labelledby="cardTwoModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content ux-modal">
                <div class="ux-modal-header">
                    <h5 class="ux-modal-title" id="uxDetailsLabel">Instrument Set Details</h5>
                </div>
                <div class="ux-modal-header h-400">
                    <img src="assets/micro_instruments_sets/micro_instrument_set_3.jpg" class="ux-card-img"
                        alt="Micro Box" onclick="openModal(this.src)">
                </div>

                <div class="ux-modal-body">
                    <div class="table-responsive">
                        <table class="table ux-table">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Instrument Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Super Micro Scissor Straight</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Super Micro Scissor Curved</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Super Micro Needle Holder Curved</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Vessel Dilator</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Jweller Forceps Straight</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Jweller Forceps Straight</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Fine Tooth Forceps</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Clamp Applicator</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Microvascular Clamp 1A</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Microvascular Clamp 1V</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Micro Instrument Box</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Silicon Matt × 2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ux-modal-footer">
                    <button type="button" class="ux-btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Card two modal -->
    <div class="modal fade" id="cardOneModal" tabindex="-1" aria-labelledby="cardOneModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content ux-modal">
                <div class="ux-modal-header">
                    <h5 class="ux-modal-title" id="uxDetailsLabel">Instrument Set Details</h5>

                </div>
                <div class="ux-modal-body">
                    <div class="table-responsive">
                        <table class="table ux-table">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Instrument Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Micro Scissor Straight</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Micro Scissor Curved</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Micro Needle Holder Curved</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Vessel Dilator</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Jeweller Forcep Straight</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Grip Jeweller Forcep with Platform</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Round Body Suture Tying Forcep</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Clamp Applicator</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Microvascular Clamp Set 3V</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Microvascular Clamp Set 4V</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Micro Instrument Tray</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Silicon Matt × 2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ux-modal-footer">
                    <button type="button" class="ux-btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Three Modal -->
    <div class="modal fade" id="cardThreeModal" tabindex="-1" aria-labelledby="cardThreeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content ux-modal">
                <div class="ux-modal-header">
                    <h5 class="ux-modal-title" id="uxDetailsLabel">Instrument Set Details</h5>
                </div>
                <div class="ux-modal-body">
                    <div class="table-responsive">
                        <table class="table ux-table">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Instrument Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Micro Scissor Straight</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Micro Scissor Curved</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Micro Needle Holder Curved</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Micro Needle Holder Curved/Straight</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Vessel Dilator</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Jweller Forceps Straight</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Round Body Forceps Straight with Platform</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Round Body Suture Tying Forceps Curved</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Grip Forceps Straight with Platform</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Grip Forceps Curved with Platform</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Tooth Forceps</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Clamp Applicator</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Microvascular Clamp Set 3V</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Microvascular Clamp Set 4V</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Micro Instrument Tray</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Silicon Matt × 2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ux-modal-footer">
                    <button type="button" class="ux-btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="customizeModal" tabindex="-1" aria-labelledby="customizeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content glass-card">

                <!-- Header -->
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold text-gradient" id="customizeModalLabel">
                        <i class="bi bi-tools me-2"></i> Customised Micro Instruments – Tailored to Your Needs
                    </h5>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <!-- Body -->
                <div class="modal-body px-4">
                    <p class="lead">
                        At <strong>Omedic Surgicals</strong>, we understand that every surgeon, researcher, and medical
                        professional has unique requirements. That’s why we specialise in <span
                            class="highlight">customising micro instruments</span> to match your specific needs and
                        preferences.
                    </p>

                    <p>
                        Whether it’s <span class="highlight">adjusting dimensions</span>, <span
                            class="highlight">modifying design</span>, or <span class="highlight">developing a
                            completely new concept</span>, our team works closely with you to create instruments that
                        enhance <strong>precision, comfort, and performance</strong>.
                    </p>

                    <!-- Blue shaded bullet points -->
                    <ul class="list-unstyled mt-3">
                        <li class="custom-bullet mb-2"><span></span> Made as per your requirement</li>
                        <li class="custom-bullet mb-2"><span></span> High-quality materials & craftsmanship</li>
                        <li class="custom-bullet mb-2"><span></span> Tailored designs for specialised procedures</li>
                        <li class="custom-bullet"><span></span> Reliable, durable, and ergonomic</li>
                    </ul>

                    <p class="mt-3">
                        With years of expertise and a commitment to innovation, we ensure that your customised
                        instruments are not just tools, but trusted partners in your work.
                    </p>

                    <div class="cta-box mt-4">
                        📩 <strong>Get in touch today</strong> to discuss your requirements and let us design the
                        perfect solution for you.
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
        function openModal(imgSrc) {
            document.getElementById('modalImage').src = imgSrc;
            new bootstrap.Modal(document.getElementById('imageModal')).show();
        }
    </script>
</body>

</html>