<?php
session_start();

include("includes/db.php");
include("includes/header.php");
?>

<div class="container mt-5">

    <section class="hero-section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <span class="badge bg-success mb-3 fs-6">
                    🌿 100% Pure Vegetarian
                </span>

                <h1 class="display-3 fw-bold">
                    Welcome to
                    <span class="text-success">Veg Delight</span>
                </h1>

                <p class="lead mt-4">
                    Fresh • Healthy • Delicious
                    <br><br>
                    Enjoy delicious vegetarian food prepared with fresh ingredients and served with love.
                </p>

                <a href="menu.php" class="btn btn-success btn-lg mt-3 px-4">
                    🍽️ Explore Menu
                </a>

            </div>

            <div class="col-lg-6 text-center">

                <img src="images/pizza.jpg"
                     class="img-fluid rounded shadow-lg hero-img">

            </div>

        </div>

    </div>

</section>

<section class="container my-5">
<h2 class="text-center fw-bold mb-5">
    🍽️ Browse by Category
</h2>

<div class="row g-4">

    <!-- Pizza -->
    <div class="col-md-4">
        <a href="menu.php?category=2" class="text-decoration-none text-dark">
            <div class="category-card text-center">
                <h3>🍕</h3>
                <h5>Pizza</h5>
                <p>Cheesy & Delicious</p>
            </div>
        </a>
    </div>

    <!-- Burgers -->
    <div class="col-md-4">
        <a href="menu.php?category=3" class="text-decoration-none text-dark">
            <div class="category-card text-center">
                <h3>🍔</h3>
                <h5>Burgers</h5>
                <p>Crispy & Tasty</p>
            </div>
        </a>
    </div>

    <!-- Momos -->
    <div class="col-md-4">
        <a href="menu.php?category=4" class="text-decoration-none text-dark">
            <div class="category-card text-center">
                <h3>🥟</h3>
                <h5>Veg Momos</h5>
                <p>Fresh & Healthy</p>
            </div>
        </a>
    </div>

    <!-- Noodles -->
    <div class="col-md-4">
        <a href="menu.php?category=5" class="text-decoration-none text-dark">
            <div class="category-card text-center">
                <h3>🍜</h3>
                <h5>Noodles</h5>
                <p>Hot & Delicious</p>
            </div>
        </a>
    </div>

    <!-- Snacks -->
    <div class="col-md-4">
        <a href="menu.php?category=6" class="text-decoration-none text-dark">
            <div class="category-card text-center">
                <h3>🍟</h3>
                <h5>Snacks</h5>
                <p>Crispy & Crunchy</p>
            </div>
        </a>
    </div>

    <!-- Salads -->
    <div class="col-md-4">
        <a href="menu.php?category=7" class="text-decoration-none text-dark">
            <div class="category-card text-center">
                <h3>🥗</h3>
                <h5>Salads</h5>
                <p>Healthy Choice</p>
            </div>
        </a>
    </div>

    <!-- Main Course -->
    <div class="col-md-4">
        <a href="menu.php?category=8" class="text-decoration-none text-dark">
            <div class="category-card text-center">
                <h3>🍛</h3>
                <h5>Main Course</h5>
                <p>Wholesome Meals</p>
            </div>
        </a>
    </div>

    <!-- Street Food -->
    <div class="col-md-4">
        <a href="menu.php?category=9" class="text-decoration-none text-dark">
            <div class="category-card text-center">
                <h3>🌮</h3>
                <h5>Street Food</h5>
                <p>Local Favorites</p>
            </div>
        </a>
    </div>

    <!-- Desserts -->
    <div class="col-md-4">
        <a href="menu.php?category=10" class="text-decoration-none text-dark">
            <div class="category-card text-center">
                <h3>🍰</h3>
                <h5>Desserts</h5>
                <p>Sweet Moments</p>
            </div>
        </a>
    </div>

    <!-- Drinks -->
    <div class="col-md-4">
        <a href="menu.php?category=11" class="text-decoration-none text-dark">
            <div class="category-card text-center">
                <h3>🥤</h3>
                <h5>Drinks</h5>
                <p>Cold & Refreshing</p>
            </div>
        </a>
    </div>

</div>

</section>

</section>

<!-- Why Choose Us -->
<section class="container my-5">

    <h2 class="text-center fw-bold mb-5 text-success">
        🌿 Why Choose Veg Delight?
    </h2>

    <div class="row text-center">

        <div class="col-md-3 mb-4">
            <div class="feature-box">
                <h1>🥬</h1>
                <h4>Fresh Ingredients</h4>
                <p>Prepared daily using fresh vegetables and quality ingredients.</p>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="feature-box">
                <h1>👨‍🍳</h1>
                <h4>Expert Chefs</h4>
                <p>Delicious meals prepared by experienced chefs.</p>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="feature-box">
                <h1>🌱</h1>
                <h4>100% Vegetarian</h4>
                <p>Healthy, hygienic and completely vegetarian dishes.</p>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="feature-box">
                <h1>🚀</h1>
                <h4>Fast Service</h4>
                <p>Quick preparation and fast table service.</p>
            </div>
        </div>

    </div>

</section>    <!-- Why Choose Veg Delight -->

<section class="container my-5">

    <div class="row text-center">

        <div class="col-md-4">
            <h2 class="text-success fw-bold">30+</h2>
            <p>Vegetarian Dishes</p>
        </div>

        <div class="col-md-4">
            <h2 class="text-success fw-bold">100%</h2>
            <p>Fresh Ingredients</p>
        </div>

        <div class="col-md-4">
            <h2 class="text-success fw-bold">500+</h2>
            <p>Happy Customers</p>
        </div>

    </div>

</section>

<hr class="my-5">

<section class="container my-5">

    <h2 class="text-center fw-bold mb-5">
        🌿 Why Choose Veg Delight?
    </h2>

    <div class="row text-center">

        <div class="col-md-4 mb-4">
            <div class="category-card p-4">
                <h1>🥗</h1>
                <h4>Fresh Ingredients</h4>
                <p>We prepare every meal using fresh and healthy vegetables.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="category-card p-4">
                <h1>⚡</h1>
                <h4>Fast Delivery</h4>
                <p>Get your favorite vegetarian meals delivered quickly.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="category-card p-4">
                <h1>😊</h1>
                <h4>Customer Satisfaction</h4>
                <p>Quality food and excellent service are our top priorities.</p>
            </div>
        </div>

    </div>

</section>

<?php
include("includes/footer.php");
?>