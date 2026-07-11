<?php
session_start();

include("includes/db.php");
include("includes/header.php");
?>

<div class="container mt-5">
    <div class="row mb-4">

    <div class="col-md-6 mx-auto">

        

    </div>

</div>

<div class="text-center mb-4">

    <a href="menu.php"
class="btn <?php echo !isset($_GET['category']) ? 'btn-success' : 'btn-outline-success'; ?> m-1">
        All
    </a>

    <?php

    $cat = mysqli_query($conn, "SELECT * FROM categories ORDER BY category_name");

    while($c = mysqli_fetch_assoc($cat))
    {
    ?>

        <a href="menu.php?category=<?php echo $c['category_id']; ?>"
           class="btn <?php echo (isset($_GET['category']) && $_GET['category']==$c['category_id']) ? 'btn-success' : 'btn-outline-success'; ?> m-1">

            <?php echo $c['category_name']; ?>

        </a>

    <?php
    }
    ?>

</div>

    <h2 class="text-center mb-4">
        Our Menu
    </h2>

    <div class="row">

    <?php

if(isset($_GET['category']))
{
    $category = (int)$_GET['category'];

    if(isset($_GET['search']) && $_GET['search'] != "")
    {
        $search = mysqli_real_escape_string($conn, $_GET['search']);

        $sql = "SELECT * FROM foods
                WHERE category_id=$category
                AND food_name LIKE '%$search%'";
    }
    else
    {
        $sql = "SELECT * FROM foods WHERE category_id=$category";
    }
}
else
{
    if(isset($_GET['search']) && $_GET['search'] != "")
    {
        $search = mysqli_real_escape_string($conn, $_GET['search']);

        $sql = "SELECT * FROM foods
                WHERE food_name LIKE '%$search%'";
    }
    else
    {
        $sql = "SELECT * FROM foods";
    }
}

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
    ?>

        <div class="col-md-4 mb-4 food-card">>

            <div class="card shadow h-100">

                <?php
$image = "images/" . $row['image'];

if(file_exists($image))
{
?>
    <img src="images/<?php echo $row['image']; ?>"
     class="card-img-top"
     style="height:220px; object-fit:cover;">
<?php
}
else
{
?>
    <div class="card-img-top d-flex align-items-center justify-content-center bg-light"
         style="height:220px;">
        <span class="text-secondary">
            📷 Image Coming Soon
        </span>
    </div>
<?php
}
?>

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