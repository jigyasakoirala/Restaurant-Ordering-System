<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
include("../includes/db.php");
// Total Categories
$category_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM categories");
$category = mysqli_fetch_assoc($category_query);

// Total Foods
$food_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM foods");
$food = mysqli_fetch_assoc($food_query);

// Total Orders
$order_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM orders");
$order = mysqli_fetch_assoc($order_query);

// Pending Orders
$pending_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM orders WHERE status='Pending'");
$pending = mysqli_fetch_assoc($pending_query);
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
       👋 Welcome, <?php echo ucfirst($_SESSION['admin']); ?>
    </h2>

    <div class="row">

        <div class="col-md-4">

            <div class="card text-center shadow">

                <div class="card-body">
                    <h2>📂</h2>

                    <h5>Total Categories</h5>

                    <h1><?php echo $category['total']; ?></h1>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card text-center shadow">

                <div class="card-body">
                    <h2>🍽️</h2>

                    <h5>Total Foods</h5>

                    <h1><?php echo $food['total']; ?></h1>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card text-center shadow">

                <div class="card-body">
                    <h2>🛒</h2>

                    <h5>Total Orders</h5>

                    <h1><?php echo $order['total']; ?></h1>

                </div>

            </div>

        </div>

        
    </div>

    <div class="mt-5 d-flex flex-wrap gap-2">

    <a href="add_category.php" class="btn btn-primary btn-lg">
        Add Category
    </a>

    <a href="manage_categories.php" class="btn btn-success btn-lg">
        Manage Categories
    </a>

    <a href="add_food.php" class="btn btn-warning btn-lg">
        Add Food
    </a>

    <a href="manage_foods.php" class="btn btn-info btn-lg">
        Manage Foods
    </a>

    <a href="orders.php" class="btn btn-danger btn-lg">
        Manage Orders
    </a>

</div>

</div>

</body>
</html>