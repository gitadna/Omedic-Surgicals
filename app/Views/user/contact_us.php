<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - Omedic Surgicals</title>

    <!-- Bootstrap & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>
    <?php include('navbar.php'); ?>

    <div class="container sp-contact-wrapper animate__animated animate__fadeIn">
        <h1 class="text-center sp-contact-heading mb-3" style="color:#0056b3">Get in Touch</h1>
        <p class="text-center sp-contact-info" style="color: #0056b3">
            Feel free to check out the various kinds of micro-surgical equipment that we have in our portfolio.
            <br>You can contact us through the following channels:
        </p>
        <div class="d-flex justify-content-center flex-wrap gap-3 my-4">
            <div class="sp-contact-pill d-flex align-items-center">
                <i class="fas fa-envelope me-2"></i>
                omedicsurgicals@gmail.com
            </div>
            <div class="sp-contact-pill d-flex align-items-center">
                <i class="fas fa-phone-alt me-2"></i>
                +91-7574022543
            </div>
            <div class="sp-contact-pill d-flex align-items-center">
                <i class="fas fa-phone-alt me-2"></i>
                +91-6354248072
            </div>
        </div>

        <div class="row mb-1">
            <div class="col-12 col-md-6 mb-4 d-flex">
                <div
                    class="sp-contact-card d-flex flex-column flex-md-row align-items-center w-100 justify-content-between">
                    <div class="text-center text-md-start">
                        <h6 class="fw-bold mb-1">Our Office</h6>
                        <p class="mb-0">
                            281, 2nd Floor, Sainath Apartment Lahoti Compound, Kalyan - Bhiwandi Rd, Bhiwandi,
                            Maharashtra 421302
                        </p>
                    </div>

                    <a href="https://www.google.com/maps/place/281+2nd+Floor+Sainath+Apartment+Lahoti+Compound,+Kalyan+-+Bhiwandi+Rd,+Bhiwandi,+Maharashtra+421302"
                        target="_blank"
                        class="d-flex flex-column align-items-center text-decoration-none text-primary fw-semibold mt-3 mt-md-0 ms-md-3">
                        <img src="../assets/google-map-icon.png" alt="Google Maps" style="width: 32px; height: 32px;" />
                        <span style="font-size: 12px; margin-top: 4px;text-align: center;">Click Here!</span>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-4 d-flex">
                <div class="sp-contact-card d-flex align-items-center w-100">
                    <i class="fas fa-clock sp-contact-icon"></i>
                    <div>
                        <h6 class="fw-bold mb-1">Office Timing</h6>
                        <p class="mb-0">Mon - Sat: 9:00 AM – 6:00 PM</p>
                    </div>
                </div>
            </div>
        </div>



        <!-- <div class="container contact-wrapper">
            <div class="contact-box">

                <div class="contact-left">
                    <h3>Contact Us</h3>
                    <div class="info-item"><i class="fas fa-map-marker-alt"></i> 23 Avenue de Paris, 75012 Paris</div>
                    <div class="info-item"><i class="fas fa-envelope"></i> hello@omedic.com</div>
                    <div class="info-item"><i class="fas fa-phone"></i> +91-7574022543</div>
                    <div class="info-item"><i class="fas fa-user"></i> Omedic Surgicals</div>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>


                <div class="contact-right">
                    <h3>Get in Touch</h3>
                    <p>Feel free to drop us a line below!</p>
                    <form action="<?= site_url('contactus/save_lead') ?>" method="post">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                        <input type="text" name="mobile" class="form-control" placeholder="Mobile Number" required>
                        <textarea name="note" class="form-control" placeholder="Your message..."></textarea>
                        <button type="submit" class="btn btn-send mt-3"><i
                                class="fas fa-paper-plane me-2"></i>Send</button>
                    </form>

                </div>
            </div>
        </div>
    </div> -->




        <div class="container">
            <div class="row align-items-center min-vh-100">

                <div class="col-md-6 d-none d-md-block text-center">
                    <img src="assets/omedic_surgical_logo.png" alt="Company Logo" class="img-fluid"
                        style="width: 350px;">
                </div>



                <div class="col-md-6">
                    <div class="contact-right sp-glass-box p-4 shadow">
                        <h3 class="sp-form-title mb-3">Get in Touch</h3>
                        <p class="sp-form-subtitle mb-4">We'd love to hear from you. Drop us a message below.</p>
                        <form action="<?= site_url('home/save_lead') ?>" method="post" class="sp-form">
                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control sp-input" id="floatingName"
                                    placeholder="Your Name" required>
                                <label for="floatingName">Your Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control sp-input" id="floatingEmail"
                                    placeholder="Email Address" required>
                                <label for="floatingEmail">Email Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="mobile" class="form-control sp-input" id="floatingMobile"
                                    placeholder="Mobile Number" required>
                                <label for="floatingMobile">Mobile Number</label>
                            </div>
                            <div class="form-floating mb-4">
                                <textarea name="note" class="form-control sp-input" placeholder="Your message..."
                                    id="floatingNote" style="height: 120px;"></textarea>
                                <label for="floatingNote">Your Message</label>
                            </div>
                            <button type="submit" class="btn sp-btn-submit w-100">
                                <i class="fas fa-paper-plane me-2"></i> Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <div class="responsive-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.4453448908316!2d73.06159744327141!3d19.294791656994594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bd4cad68a147%3A0x4cefff2b20b36ca1!2sOmedic%20Surgicals!5e0!3m2!1sen!2sin!4v1749065951717!5m2!1sen!2sin"
            width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php include('footer.php'); ?>






    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>