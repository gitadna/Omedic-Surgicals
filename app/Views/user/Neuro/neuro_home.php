<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Omedic Surgicals — Plastic</title>
    <!-- Bootstrap + Icons + Animations -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .center-screen {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        .back-button {
            background-color: #75ade8ff;
            border: none
        }

        .gradient-text {
            color: #0056b3;
            animation: fadeInDown 1s ease forwards;
            opacity: 0;
        }
    </style>
</head>

<body>
    <div class="center-screen">
        <h3 class="gradient-text fw-bold">
            Neurosurgery tools – in progress, launching shortly.
        </h3>
        <br>
        <a href="<?= site_url('plastic_home') ?>" class="btn btn-primary btn-lg back-button">
            <i class="fas fa-arrow-left me-2"></i> Back to Home
        </a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>