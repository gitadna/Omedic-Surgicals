<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Plastic Surgeon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include('navbar.php'); ?>

    <div class="container-heading sp-page-wrapper d-flex flex-column min-vh-100">


        <div class="container">
            <?php if (!empty($products)): ?>
                <div class="text-center mb-5 intro-section">
                    <h3 class="gradient-text fw-bold display-4 mb-3">
                        Plastic Surgery Instruments
                    </h3>
                    <div class="underline"></div>
                    <p class="intro-text mx-auto mt-4 px-3 px-md-5">
                        Explore our curated range of high-quality surgical tools designed for precision, safety, and optimal
                        outcomes in plastic and reconstructive procedures.
                    </p>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 justify-content-center">
                    <?php foreach ($products as $product): ?>
                        <div class="col">
                            <div class="blue-glass-card h-100 p-3 d-flex flex-column align-items-center text-center">
                                <img src="<?= base_url('uploads/' . $product['image']) ?>" class="blue-glass-img mb-3"
                                    alt="<?= esc($product['name']) ?>">
                                <h5 class="fw-bold mb-1"><?= esc($product['name']) ?></h5>
                                <p class="small mb-0"><?= esc($product['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <main class="flex-grow-1">
                    <p class="coming_soon_message">We’ll be introducing this category shortly. Stay connected!</p>
                </main>


            <?php endif; ?>
        </div>





    </div>





    <?php include('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>