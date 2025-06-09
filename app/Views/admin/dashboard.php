<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }

        .content.shifted {
            margin-left: 0;
        }

        @media (max-width: 768px) {
            .content {
                margin-left: 0;
            }

            .content.shifted {
                margin-left: 250px;
            }
        }
    </style>
</head>

<body>

    <?php include('sidebar.php'); ?>

    <!-- Page Content -->
    <div class="content" id="content">
        <h1>Welcome to the Dashboard</h1>
        <p>This is your admin panel where you can manage products.</p>
    </div>

    <script>
        // Optional: handle sidebar toggle if you have a toggle button
        function toggleSidebar() {
            document.getElementById('content').classList.toggle('shifted');
        }
    </script>

</body>

</html>