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
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .form-label {
            font-weight: 500;
        }

        .preview-img {
            margin-top: 10px;
            max-width: 100px;
            border-radius: 5px;
        }

        .attribute-set {
            margin-bottom: 15px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .attribute-set input {
            flex: 1;
            min-width: 100px;
        }

        .remove-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .remove-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>

    <?php include('sidebar.php'); ?>

    <div class="content">
        <div class="card">
            <h2 class="text-center mb-4">Edit Product</h2>

            <form action="<?= site_url('products/update/' . $product['id']) ?>" method="post"
                enctype="multipart/form-data">
                <input type="hidden" name="old_image" value="<?= $product['image'] ?>">

                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $product['name'] ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"
                        rows="3"><?= $product['description'] ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category" name="category" required onchange="loadSubcategories()">

                        <option value="Plastic" <?= $product['category'] == 'Plastic' ? 'selected' : '' ?>>Plastic</option>
                        <option value="Neuro" <?= $product['category'] == 'Neuro' ? 'selected' : '' ?>>Neuro</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="subcategory" class="form-label">Subcategory</label>
                    <select class="form-select" id="subcategory" name="subcategory" required>
                        <!-- Subcategories will be populated dynamically -->
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <img src="<?= UPLOAD_URL . $product['image'] ?>" alt="Product Image" class="preview-img mt-2">
                </div>

                <!-- Dynamic Attribute Fields -->
                <label class="form-label">Attributes</label>
                <div id="attributes-container">
                    <?php foreach ($attributes as $attr): ?>
                        <div class="attribute-set">
                            <input type="text" class="form-control" name="length[]" value="<?= $attr['length'] ?>"
                                placeholder="Length">
                            <input type="text" class="form-control" name="diameter[]" value="<?= $attr['diameter'] ?>"
                                placeholder="Diameter">
                            <input type="text" class="form-control" name="blade_length[]"
                                value="<?= $attr['blade_length'] ?>" placeholder="Blade Length">
                            <input type="text" class="form-control" name="tip_value[]" value="<?= $attr['tip_value'] ?>"
                                placeholder="Tip Value">
                            <button type="button" class="remove-btn" onclick="removeSet(this)">×</button>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="mb-3">
                    <button type="button" class="btn btn-secondary" onclick="addAttributeSet()">Add Attribute
                        Set</button>
                </div>

                <button type="submit" class="btn btn-primary w-100">Update Product</button>
            </form>
        </div>
    </div>

    <script>

        const subcategoryOptions = {
            Plastic: ['Micro Scissors Micro Needle Holder', 'Micro Forceps', 'Microvascular Clamps', 'Tray', 'Instrument Sets'],
            Neuro: ['Micro Scissors', 'Cranial', 'Dural Hooks']
        };

        function loadSubcategories() {
            const category = document.getElementById('category').value;
            const subcategorySelect = document.getElementById('subcategory');
            subcategorySelect.innerHTML = '<option value="">Select Subcategory</option>';

            if (subcategoryOptions[category]) {
                subcategoryOptions[category].forEach(sub => {
                    const opt = document.createElement('option');
                    opt.value = sub;
                    opt.textContent = sub;
                    subcategorySelect.appendChild(opt);
                });
            }
        }
        function addAttributeSet() {
            const container = document.getElementById('attributes-container');
            const firstSet = container.querySelector('.attribute-set');
            const clone = firstSet.cloneNode(true);
            clone.querySelectorAll('input').forEach(input => input.value = '');
            container.appendChild(clone);
        }

        function removeSet(button) {
            const container = document.getElementById('attributes-container');
            if (container.children.length > 1) {
                button.closest('.attribute-set').remove();
            }
        }
    </script>
</body>

</html>