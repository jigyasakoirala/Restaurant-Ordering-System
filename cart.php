<?php
session_start();

include("includes/db.php");

if(isset($_GET['id']))
{
    $food_id = $_GET['id'];

    if(!isset($_SESSION['cart']))
    {
        $_SESSION['cart'] = array();
    }

    if(isset($_SESSION['cart'][$food_id]))
    {
        $_SESSION['cart'][$food_id]++;
    }
    else
    {
        $_SESSION['cart'][$food_id] = 1;
    }

    header("Location: cart.php");
    exit();
}
?>

<?php
include("includes/header.php");
?>

<div class="container mt-5">

<h2 class="mb-4">Shopping Cart</h2>

<?php

if(empty($_SESSION['cart']))
{
    echo "<h4>Your cart is empty.</h4>";
}
else
{

$total = 0;

?>

<table class="table table-bordered">

<tr>

<th>Food</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
<th>Action</th>

</tr>

<?php

foreach($_SESSION['cart'] as $id => $qty)
{

$sql="SELECT * FROM foods WHERE food_id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$subtotal=$row['price']*$qty;
$total += $subtotal;

?>

<tr>

<td><?php echo $row['food_name']; ?></td>

<td>Rs. <?php echo $row['price']; ?></td>

<td><?php echo $qty; ?></td>

<td>Rs. <?php echo $subtotal; ?></td>
<td>
    <a href="remove_cart.php?id=<?php echo $id; ?>" class="btn btn-danger btn-sm">
        Remove
    </a>
</td>

</tr>

<?php
}
?>

<tr>

<th colspan="3">Grand Total</th>

<th>Rs. <?php echo $total; ?></th>

</tr>

</table>

<?php
}
?>

<a href="menu.php" class="btn btn-primary">
Continue Shopping
</a>

<a href="checkout.php" class="btn btn-success ms-2">
    Proceed to Checkout
</a>

<?php
include("includes/footer.php");
?>