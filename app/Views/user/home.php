<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Omedic Surgicals</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<style>
    body {
        margin: 0;
        padding: 20px;
        min-height: 100vh;
        background: linear-gradient(90deg, #2563eb, #60a5fa);
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>

<body>
    <div class="content-wrapper animate__animated animate__fadeIn">
        <h1 class="animate__animated animate__fadeInDown homepage_heading">Omedic Surgicals</h1>
        <p class="animate__animated animate__fadeIn animate__delay-1s homepage_para">Your Trusted Partner in
            Microsurgical Excellence.
        </p>
        <div class="homepage_button_group animate__animated animate__fadeInUp animate__delay-2s">
            <a href="<?= site_url('plastic_surgeon') ?>" class="btn homepage_btn_secondary homepage_btn">
                Plastic Surgeon
            </a>
            <a href="<?= site_url('neuro_surgeon') ?>" class="btn homepage_btn_secondary homepage_btn">
                Neuro Surgeon
            </a>
        </div><br>
        <i class="animate__animated animate__fadeIn animate__delay-3s homepage_italic">Select your Super-speciality.</i>
    </div>
</body>

</html>