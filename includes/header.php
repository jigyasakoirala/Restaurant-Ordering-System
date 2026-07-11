<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Ordering System</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php
$cart_count = 0;

if(isset($_SESSION['cart']))
{
    foreach($_SESSION['cart'] as $qty)
    {
        $cart_count += $qty;
    }
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">

<div class="container">

    <a class="navbar-brand fw-bold text-success fs-3" href="index.php">
        🌿 Veg Delight
    </a>

    <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

        <div class="navbar-nav ms-auto">
            <?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

            <a class="nav-link <?php if($current_page=='index.php') echo 'active'; ?>" href="index.php">
    🏠 Home
</a>

            <a class="nav-link <?php if($current_page=='menu.php') echo 'active'; ?>" href="menu.php">
    🍽️ Menu
</a>

            <a class="nav-link <?php if($current_page=='cart.php') echo 'active'; ?>" href="cart.php">
    🛒 Cart (<?php echo $cart_count; ?>)
</a>

        </div>

    </div>

</div>

</nav>