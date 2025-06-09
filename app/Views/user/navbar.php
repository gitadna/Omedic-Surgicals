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
                    <i class="ri-hospital-line"></i> Omedic Surgical
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

                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Products <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-flashlight-line"></i>
                                    </div>

                                    <span class="dropdown__title"><a href="<?= site_url('plastic_surgeon') ?>" class="
                                            nav__link">Plastic Surgeon</a></span>


                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-heart-3-line"></i>
                                    </div>

                                    <span class="dropdown__title"><a href="<?= site_url('neuro_surgeon') ?>" class="
                                            nav__link">Neuro Surgeon</a></span>


                                </div>
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



                </ul>
            </div>
        </nav>
    </header>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/navbar.js"></script>
</body>

</html>