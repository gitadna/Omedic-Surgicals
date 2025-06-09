<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Leads Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .main-content {
            margin-left: 270px;
            padding: 40px 20px;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <?php include('sidebar.php'); ?>

    <div class="main-content">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="text-primary">Leads Table</h2>
                <form class="d-flex align-items-center" action="<?= site_url('leads') ?>" method="get">
                    <input type="date" name="from" class="form-control me-2" value="<?= esc($_GET['from'] ?? '') ?>">
                    <input type="date" name="to" class="form-control me-2" value="<?= esc($_GET['to'] ?? '') ?>">
                    <button type="submit" class="btn btn-primary me-2">Filter</button>
                    <a href="<?= site_url('leads') ?>" class="btn btn-secondary me-2">Reset</a>
                    <a href="<?= site_url('leads/export_excel?from=' . ($_GET['from'] ?? '') . '&to=' . ($_GET['to'] ?? '')) ?>"
                        class="btn btn-success">Download Excel</a>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Note</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($leads)): ?>
                            <?php foreach ($leads as $lead): ?>
                                <tr>
                                    <td><?= esc($lead['id']) ?></td>
                                    <td><?= esc($lead['name']) ?></td>
                                    <td><?= esc($lead['mobile']) ?></td>
                                    <td><?= esc($lead['email']) ?></td>
                                    <td><?= esc($lead['note']) ?></td>
                                    <td><?= esc($lead['created_at']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center">No leads found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>