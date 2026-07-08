<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">

        <span class="navbar-brand">
            🍽️ Restaurant Admin Panel
        </span>

        <a href="logout.php" class="btn btn-danger">
            Logout
        </a>

    </div>
</nav>

<div class="container mt-5">

    <h2 class="mb-4">
        Welcome,
        <?php echo $_SESSION['admin']; ?> 👋
    </h2>

    <div class="row">

        <div class="col-md-4">

            <div class="card text-center shadow">

                <div class="card-body">

                    <h5>Total Categories</h5>

                    <h1>0</h1>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card text-center shadow">

                <div class="card-body">

                    <h5>Total Foods</h5>

                    <h1>0</h1>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card text-center shadow">

                <div class="card-body">

                    <h5>Total Orders</h5>

                    <h1>0</h1>

                </div>

            </div>

        </div>

    </div>

    <div class="mt-5">

        <a href="add_category.php" class="btn btn-primary me-2">
            Add Category
        </a>

        <a href="manage_categories.php" class="btn btn-success me-2">
            Manage Categories
        </a>

        <a href="add_food.php" class="btn btn-warning me-2">
            Add Food
        </a>

        <a href="manage_foods.php" class="btn btn-info">
            Manage Foods
        </a>

        <a href="#" class="btn btn-warning">
            Manage Orders
        </a>

    </div>

</div>

</body>
</html>