<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/navbar.css">

    <title>Responsive navigation bar - Bedimcode</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container_navbar">
            <div class="nav__data">
                <a href="<?= site_url('/') ?>" class="nav__logo">
                    <img src="assets/omedic_surgical_logo.png" alt="Company Logo" class="nav_logo"
                        style="object-fit: contain; max-width: 100px;max-height: 70px">
                </a>


                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__toggle-menu"></i>
                    <i class="ri-close-line nav__toggle-close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="<?= site_url('/') ?>" class="nav__link">Home</a>
                    </li>
                    <li>
                        <a href="<?= site_url('plastic_home') ?>" class="nav__link">Plastic Surgery</a>
                    </li>
                    <li>
                        <a href="<?= site_url('neuro_home') ?>" class="nav__link">Neuro Surgery</a>
                    </li>
                    <li>
                        <a href="<?= site_url('services') ?>" class="nav__link">Services</a>
                    </li>
                    <li>
                        <a href="<?= site_url('aboutus') ?>" class="nav__link">About Us</a>
                    </li>
                    <li>
                        <a href="<?= site_url('contactus') ?>" class="nav__link">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <a href="tel:+7574022543" class="floating-call-btn" title="Call Us">
        <i class="ri-phone-line"></i>
    </a>
    <a href="https://wa.me/7574022543" class="floating-call-btn-whatsapp" title="Call Us">
        <i class="ri-whatsapp-line"></i>
    </a>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/navbar.js"></script>
</body>

</html>