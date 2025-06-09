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

        <div class="mt-auto">
            <?php include('footer.php'); ?>
        </div>

</body>

</html>