<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(APPPATH . 'Views/user/head.php'); ?>
</head>

<style>
    body {
        /* background-image: url('../assets/home_background.jpg'); */
        margin: 0;
        padding: 20px;
        min-height: 100vh;
        background: linear-gradient(90deg, rgb(199, 210, 232), #60a5fa);
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
            <a href="<?= site_url('plastic_home') ?>" class="btn homepage_btn_secondary homepage_btn">
                Plastic Surgery
            </a>
            <a href="<?= site_url('neuro_home') ?>" class="btn homepage_btn_secondary homepage_btn">
                Neuro Surgery
            </a>
        </div><br>
        <i class="animate__animated animate__fadeIn animate__delay-3s homepage_italic">Select your Super-Speciality.</i>
    </div>
</body>

</html>