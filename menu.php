<?php
include("includes/db.php");
include("includes/header.php");
?>

<div class="container mt-5">

    <h2 class="text-center mb-4">
        Our Menu
    </h2>

    <div class="row">

    <?php

    $sql = "SELECT * FROM foods";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
    ?>

        <div class="col-md-4 mb-4">

            <div class="card shadow h-100">

                <img src="images/<?php echo $row['image']; ?>"
                     class="card-img-top"
                     style="height:220px; object-fit:cover;">

                <div class="card-body text-center">

                    <h4><?php echo $row['food_name']; ?></h4>

                    <p><?php echo $row['description']; ?></p>

                    <h5 class="text-success">
                        Rs. <?php echo $row['price']; ?>
                    </h5>

                    <a href="cart.php?id=<?php echo $row['food_id']; ?>" class="btn btn-success">
                        Add to Cart
                    </a>

                </div>

            </div>

        </div>

    <?php
    }
    ?>

    </div>

</div>

<?php
include("includes/footer.php");
?>