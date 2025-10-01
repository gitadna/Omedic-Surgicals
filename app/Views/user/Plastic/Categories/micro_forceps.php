<!DOCTYPE html>
<html lang="en">

<head>
    <title>Micro Forceps - Plastic Surgery Instruments</title>
    <?php include(APPPATH . 'Views/user/head.php'); ?>
</head>

<body>
    <?php include __DIR__ . '/../navbar.php'; ?>

    <div class="container-heading sp-page-wrapper">
        <div class="text-center mb-5 intro-section">
            <h3 class="gradient-text fw-bold display-4 mb-3">
                Micro Forceps
            </h3>
            <div class="underline"></div>
            <p class="intro-text mx-auto mt-4 px-3 px-md-5">
                Explore our curated range of high-quality trays designed for precision, safety, and optimal outcomes in
                plastic and reconstructive procedures.
            </p>
        </div>

        <div class="container mb-5">
            <?php if (!empty($products)): ?>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 justify-content-center">
                    <?php foreach ($products as $product): ?>
                        <div class="col">
                            <div class="glass-card p-3 h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="glass-img-wrapper mb-3 text-center" onmousemove="zoomImage(event, this)">
                                        <img src="<?= base_url('uploads/' . $product['image']) ?>"
                                            class="img-fluid product-img mx-auto d-block" alt="<?= esc($product['name']) ?>"
                                            style="max-height: 300px; max-width: 100%; width: 100%; object-fit: cover;">
                                    </div>

                                    <h5 class="fw-bold text-dark mb-1"><?= esc($product['name']) ?></h5>
                                    <!-- <p class="text-muted small mb-1"><?= esc($product['description']) ?></p> -->

                                    <?php if (!empty($product['attributes'])): ?>
                                        <div class="table-responsive">
                                            <table class="table table-sm mb-0 custom-attribute-table">
                                                <thead>
                                                    <tr>
                                                        <th>Length</th>
                                                        <th>Type</th>
                                                        <!-- <th>Blade</th> -->
                                                        <th>Tip</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($product['attributes'] as $attr): ?>
                                                        <tr>
                                                            <td><?= esc($attr['length']) ?></td>
                                                            <td><?= esc($attr['diameter']) ?></td>
                                                            <!-- <td><?= esc($attr['blade_length']) ?></td> -->
                                                            <td><?= esc($attr['tip_value']) ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php else: ?>
                                        <p class="text-muted small">No attribute variants available.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-center text-muted">No Tray products found.</p>
            <?php endif; ?>
        </div>
    </div>

    <?php include __DIR__ . '/../footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function zoomImage(e, container) {
            const img = container.querySelector('.product-img');
            const rect = container.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;
            img.style.setProperty('--x', x + '%');
            img.style.setProperty('--y', y + '%');
        }
        function openModal(imgSrc) {
            document.getElementById('modalImage').src = imgSrc;
            new bootstrap.Modal(document.getElementById('imageModal')).show();
        }
    </script>
</body>

</html>