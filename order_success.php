<?php
include("includes/header.php");
?>

<div class="container mt-5">

    <div class="card shadow text-center p-5">

        <h1 class="text-success">✅ Order Placed Successfully!</h1>

        <p class="lead mt-3">
            Thank you for ordering from <strong>Veg Delight</strong>.
        </p>

        <hr>

        <h4>🍽️ Your order is being prepared.</h4>
        <div class="alert alert-success mt-4">
    ⏳ Estimated Preparation Time:
    <strong>15 - 20 Minutes</strong>
</div>

<p class="text-muted">
    Thank you for choosing healthy vegetarian food. 🌿
</p>

        <p>
            Please wait a few minutes.
        </p>

        <a href="index.php" class="btn btn-success btn-lg mt-3">
            🏠 Back to Home
        </a>

        <a href="menu.php" class="btn btn-outline-success btn-lg mt-3">
            🍽️ Order Again
        </a>

    </div>

</div>

<?php
include("includes/footer.php");
?>