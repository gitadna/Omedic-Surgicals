<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
        }

        .content {
            margin-left: 270px;
            padding: 20px;
            width: 100%;
        }

        .card {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            background: white;
        }

        h2 {
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-primary {
            width: 100%;
        }

        .preview-img {
            display: block;
            margin-top: 10px;
            max-width: 100px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <?php include('sidebar.php'); ?>

    <div class="content">
        <div class="card">
            <h2>Edit Product</h2>
            <form action="<?= site_url('products/update/' . $product['id']) ?>" method="post"
                enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="<?= htmlspecialchars($product['name']) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        required><?= htmlspecialchars($product['description']) ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category" name="category" required>
                        <option value="Plastic" <?= $product['category'] == 'Plastic' ? 'selected' : '' ?>>Plastic</option>
                        <option value="Neuro" <?= $product['category'] == 'Neuro' ? 'selected' : '' ?>>Neuro</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <img src="<?= base_url('uploads/' . $product['image']) ?>" class="preview-img">
                </div>
                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
    </div>

</body>

</html>