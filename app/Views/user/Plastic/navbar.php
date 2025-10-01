<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(APPPATH . 'Views/user/head.php'); ?>

    <title>Responsive navigation bar - Bedimcode</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container_navbar">
            <div class="nav__data">
                <!-- For small screens: Logo + Call Us -->
                <div class="nav__mobile-group">
                    <a href="<?= site_url('/') ?>" class="nav__logo">
                        <img src="assets/omedic_surgical_logo.png" alt="Company Logo" class="nav_logo"
                            style="object-fit: contain; max-width: 100px;max-height: 70px">
                    </a>

                </div>
                <!-- Hamburger Toggle -->
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

                    <!--=============== DROPDOWN 1 ===============-->



                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Products <i class="fa fa-caret-down"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <ul class="dropdown__menu">
                                    <li><a href="<?= site_url('microscissors') ?>" class="dropdown__link">Micro
                                            Scissors</a></li>
                                    <li><a href="<?= site_url('microneedleholder') ?>" class="dropdown__link">Micro
                                            Needle
                                            Holder</a></li>
                                    <li><a href="<?= site_url('microforceps') ?>" class="dropdown__link">Micro
                                            Forceps</a></li>
                                    <li><a href="<?= site_url('microvascularclamps') ?>"
                                            class="dropdown__link">Microvascular Clamps</a></li>
                                    <li><a href="<?= site_url('instrumentssets') ?>" class="dropdown__link">Micro
                                            Instrument
                                            Sets</a></li>
                                    <li><a href="<?= site_url('hookandelevator') ?>" class="dropdown__link">Hook &
                                            Elevator</a></li>
                                    <li><a href="<?= site_url('tray') ?>" class="dropdown__link">Tray</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </li>

                    <!--=============== DROPDOWN 2 ===============-->

                    <li>
                        <a href="<?= site_url('services') ?>" class="nav__link">Services</a>
                    </li>
                    <li>
                        <a href="<?= site_url('aboutus') ?>" class="nav__link">About Us</a>
                    </li>
                    <li>
                        <a href="<?= site_url('contactus') ?>" class="nav__link">Contact Us</a>
                    </li>
                    <li>
                        <a href="<?= site_url('neuro_home') ?>" class="nav__link"><button type="button"
                                class="btn btn-primary category_button">Neuro Surgery</button></a>
                    </li>



                </ul>
            </div>
        </nav>

    </header>

    <a href="tel:+7574022543" class="floating-call-btn" title="Call Us">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://wa.me/7574022543" class="floating-call-btn-whatsapp" title="Call Us">
        <i class="fab fa-whatsapp"></i>
    </a>


    <!--=============== MAIN JS ===============-->
    <script src="assets/js/navbar.js"></script>
</body>

</html>