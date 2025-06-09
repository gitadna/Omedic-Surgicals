<div class="sidebar-toggle" onclick="toggleSidebar()">☰</div>

<div class="sidebar" id="sidebar">
    <h3>Admin Panel</h3>
    <ul>
        <li><a href="<?= site_url('dashboard') ?>">Dashboard</a></li>
        <li><a href="<?= site_url('products') ?>">Products</a></li>
        <li><a href="<?= site_url('leads') ?>">Leads</a></li>
        <li><a href="<?= site_url('logout') ?>">Logout</a></li>
    </ul>
</div>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    .sidebar {
        width: 250px;
        height: 100vh;
        background-color: #343a40;
        color: white;
        padding: 20px;
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease-in-out;
        z-index: 1000;
    }

    .sidebar h3 {
        text-align: center;
        margin-bottom: 20px;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
    }

    .sidebar ul li {
        margin: 15px 0;
    }

    .sidebar ul li a {
        color: white;
        text-decoration: none;
        display: block;
        padding: 10px;
        border-radius: 5px;
        transition: background 0.3s;
    }

    .sidebar ul li a:hover {
        background-color: #007BFF;
    }

    .sidebar-toggle {
        display: none;
        position: fixed;
        top: 15px;
        left: 15px;
        font-size: 24px;
        background: #007BFF;
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        z-index: 1100;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .sidebar {
            transform: translateX(-100%);
        }

        .sidebar.active {
            transform: translateX(0);
        }

        .sidebar-toggle {
            display: block;
        }
    }
</style>

<script>
    function toggleSidebar() {
        document.getElementById("sidebar").classList.toggle("active");
    }
</script>