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

    <div class="container-heading sp-page-wrapper">
        <div class="text-center mb-5 intro-section">
            <h3 class="gradient-text fw-bold display-4 mb-3">
                Plastic Surgery Instruments
            </h3>
            <div class="underline">
            </div>
            <p class="intro-text mx-auto mt-4 px-3 px-md-5">
                Explore our curated range of high-quality surgical tools designed for precision, safety, and optimal
                outcomes in plastic and reconstructive procedures.
            </p>
        </div>

        <div class="container mb-5">
            <?php if (!empty($products)): ?>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 justify-content-center">
                    <?php foreach ($products as $product): ?>
                        <div class="col">
                            <div class="blue-glass-card h-100 p-3 d-flex flex-column align-items-left text-left">
                                <img src="<?= base_url('uploads/' . $product['image']) ?>" class="blue-glass-img mb-3"
                                    alt="<?= esc($product['name']) ?>">
                                <h5 class="fw-bold mb-1"><?= esc($product['name']) ?></h5>
                                <p class="small mb-0"><?= esc($product['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-center text-muted">No Plastic Surgeon products found.</p>
            <?php endif; ?>
        </div>

        
        <!-- Testimonials Section -->
        <section class="container py-5">
            <div class="text-center mb-4">
                <h2 class="fw-bold">What Surgeons Say</h2>
                <p class="text-muted mb-0">Real feedback from departments and surgeons using our plastic surgery instruments.</p>
            </div>

            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://dummyimage.com/64x64/ced4da/ffffff&text=DR" alt="Dr. A. Kapoor" class="rounded-circle me-3" width="48" height="48">
                                <div>
                                    <h6 class="mb-0">Dr. A. Kapoor</h6>
                                    <small class="text-muted">Plastic Surgeon, CityCare Hospital</small>
                                </div>
                            </div>
                            <div class="mb-2 text-warning" aria-label="Rated 5 out of 5">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="mb-0">The balance and ultra‑fine tips make a noticeable difference in delicate closures. Consistent performance across the set.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://dummyimage.com/64x64/ced4da/ffffff&text=DR" alt="Dr. S. Mehta" class="rounded-circle me-3" width="48" height="48">
                                <div>
                                    <h6 class="mb-0">Dr. S. Mehta</h6>
                                    <small class="text-muted">Head of Unit, Reconstructive Dept.</small>
                                </div>
                            </div>
                            <div class="mb-2 text-warning" aria-label="Rated 5 out of 5">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="mb-0">Customization options allowed our team to standardize instruments to preference, improving control and reducing fatigue.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://dummyimage.com/64x64/ced4da/ffffff&text=DR" alt="Dr. R. Iqbal" class="rounded-circle me-3" width="48" height="48">
                                <div>
                                    <h6 class="mb-0">Dr. R. Iqbal</h6>
                                    <small class="text-muted">Microsurgery Specialist</small>
                                </div>
                            </div>
                            <div class="mb-2 text-warning" aria-label="Rated 5 out of 5">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="mb-0">Excellent tactile feedback. The forceps and scissors maintain precision after repeated sterilization cycles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>





    </div>
    <?php include('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>



</html>