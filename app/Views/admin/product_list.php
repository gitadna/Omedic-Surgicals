<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }

        h2 {
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }

        .table th {
            background-color: #007BFF;
            color: white;
            text-align: center;
        }

        .table td {
            text-align: center;
            vertical-align: middle;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        @media (max-width: 768px) {
            .content {
                margin-left: 0;
                padding: 15px;
            }

            .btn-container {
                flex-direction: column;
                align-items: center;
            }

            .table th,
            .table td {
                font-size: 14px;
            }

            img.img-thumbnail {
                width: 50px;
            }
        }

        @media (max-width: 480px) {
            h2 {
                font-size: 20px;
            }

            .btn {
                font-size: 14px;
                padding: 6px 10px;
            }
        }
    </style>
</head>

<body>

    <?php include('sidebar.php'); ?>

    <div class="content">
        <h2 class="mb-4">Product List</h2>

        <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
            <a href="<?= site_url('products/add') ?>" class="btn btn-success">+ Add Product</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Image</th>
                        <th>Attributes</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <?php $rowspan = max(1, count($product['attributes'])); ?>
                        <tr>
                            <td rowspan="<?= $rowspan ?>"><?= htmlspecialchars($product['name']) ?></td>
                            <td rowspan="<?= $rowspan ?>"><?= htmlspecialchars($product['description']) ?></td>
                            <td rowspan="<?= $rowspan ?>"><?= htmlspecialchars($product['category']) ?></td>
                            <td rowspan="<?= $rowspan ?>"><?= htmlspecialchars($product['subcategory']) ?></td>
                            <td rowspan="<?= $rowspan ?>">
                                <img src="<?= UPLOAD_URL . $product['image'] ?>" class="img-thumbnail" width="70">
                            </td>

                            <?php if (!empty($product['attributes'])): ?>
                                <?php $first = true;
                                foreach ($product['attributes'] as $attr): ?>
                                    <?php if (!$first): ?>
                                    <tr><?php endif; ?>
                                    <td>
                                        <strong>Length:</strong> <?= $attr['length'] ?> |
                                        <strong>Diameter:</strong> <?= $attr['diameter'] ?> |
                                        <strong>Blade:</strong> <?= $attr['blade_length'] ?> |
                                        <strong>Tip:</strong> <?= $attr['tip_value'] ?>
                                    </td>
                                    <?php if ($first): ?>
                                        <td rowspan="<?= $rowspan ?>">
                                            <div class="btn-container">
                                                <a href="<?= site_url('products/edit/' . $product['id']) ?>"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <a href="<?= site_url('products/delete/' . $product['id']) ?>"
                                                    class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                            </div>
                                        </td>
                                    <?php endif; ?>
                                </tr>
                                <?php $first = false; ?>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <td>No attributes</td>
                            <td>
                                <div class="btn-container">
                                    <a href="<?= site_url('products/edit/' . $product['id']) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= site_url('products/delete/' . $product['id']) ?>" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">Delete</a>
                                </div>
                            </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>