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

        <!-- Testimonials -->
        <section class="container py-5">
            <div class="text-center mb-4">
                <h2 class="section-title">What Surgeons Say</h2>
                <p class="section-subtitle">Real feedback from plastic, micro, and reconstructive units.</p>
            </div>

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8">
                                <div class="testimonial-card p-4 p-md-5">
                                    <div class="d-flex align-items-center mb-3">
                                        <img class="testimonial-avatar me-3" src="https://i.pravatar.cc/80?img=12" alt="Surgeon avatar">
                                        <div>
                                            <h6 class="mb-0">Dr. A. Hussain</h6>
                                            <small class="text-muted">Consultant Plastic Surgeon</small>
                                        </div>
                                    </div>
                                    <div class="star-rating mb-2 text-warning">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p class="mb-0 testimonial-quote">The balance and fine tips are exceptional. Suturing under magnification feels effortless, with consistent, repeatable control.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8">
                                <div class="testimonial-card p-4 p-md-5">
                                    <div class="d-flex align-items-center mb-3">
                                        <img class="testimonial-avatar me-3" src="https://i.pravatar.cc/80?img=21" alt="Surgeon avatar">
                                        <div>
                                            <h6 class="mb-0">Prof. R. Mehra</h6>
                                            <small class="text-muted">Head of Microvascular Unit</small>
                                        </div>
                                    </div>
                                    <div class="star-rating mb-2 text-warning">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </div>
                                    <p class="mb-0 testimonial-quote">Clamps hold consistently without trauma. The finish and feel match premium brands at far better value.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8">
                                <div class="testimonial-card p-4 p-md-5">
                                    <div class="d-flex align-items-center mb-3">
                                        <img class="testimonial-avatar me-3" src="https://i.pravatar.cc/80?img=36" alt="Surgeon avatar">
                                        <div>
                                            <h6 class="mb-0">Dr. S. Qureshi</h6>
                                            <small class="text-muted">Reconstructive Surgeon</small>
                                        </div>
                                    </div>
                                    <div class="star-rating mb-2 text-warning">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <p class="mb-0 testimonial-quote">Reliable, lightweight instruments that reduce fatigue in long cases. Customization options are a big plus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

    </div>
    <?php include('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>



</html>