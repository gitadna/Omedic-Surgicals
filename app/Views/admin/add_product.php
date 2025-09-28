<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
    </style>
</head>

<body>

    <?php include('sidebar.php'); ?>

    <div class="content">
        <div class="card">
            <h2>Add New Product</h2>
            <form action="<?= site_url('products/save') ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category" name="category" required onchange="loadSubcategories()">
                        <option value="">Select Category</option>
                        <option value="Plastic">Plastic</option>
                        <option value="Neuro">Neuro</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="subcategory" class="form-label">Subcategory</label>
                    <select class="form-select" id="subcategory" name="subcategory" required>
                        <option value="">Select Subcategory</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>

                <!-- Attributes Section -->
                <div id="attributes-container" class="mb-3">
                    <div class="row attribute-set mb-2">
                        <div class="col"><input type="text" class="form-control" name="length[]" placeholder="Length">
                        </div>
                        <div class="col"><input type="text" class="form-control" name="diameter[]"
                                placeholder="Diameter"></div>
                        <div class="col"><input type="text" class="form-control" name="blade_length[]"
                                placeholder="Blade Length"></div>
                        <div class="col"><input type="text" class="form-control" name="tip_value[]"
                                placeholder="Tip Value"></div>
                        <div class="col-auto"><button type="button" class="btn btn-danger"
                                onclick="removeSet(this)">×</button></div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary mb-3" onclick="addAttributeSet()">Add Attribute
                    Set</button>

                <button type="submit" class="btn btn-primary">Save Product</button>
            </form>


        </div>
    </div>
    <script>

        const subcategoryOptions = {
            Plastic: ['Micro Scissors', 'Micro Needle Holder', 'Micro Forceps', 'Microvascular Clamps', 'Micro Instrument Sets', 'Hook & Elevator', 'Tray'],
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
            const set = container.querySelector('.attribute-set').cloneNode(true);
            set.querySelectorAll('input').forEach(input => input.value = '');
            container.appendChild(set);
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