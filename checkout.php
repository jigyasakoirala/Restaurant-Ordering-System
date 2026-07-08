<?php
session_start();

include("includes/db.php");
include("includes/header.php");

if(isset($_POST['place_order']))
{
    $customer_name = $_POST['customer_name'];
    $phone = $_POST['phone'];
    $table_number = $_POST['table_number'];

    $total_amount = 0;

    foreach($_SESSION['cart'] as $food_id => $qty)
    {
        $sql = "SELECT * FROM foods WHERE food_id='$food_id'";
        $result = mysqli_query($conn, $sql);
        $food = mysqli_fetch_assoc($result);

        $total_amount += ($food['price'] * $qty);
    }

    $status = "Pending";

    $sql = "INSERT INTO orders(customer_name, phone, table_number, total_amount, status)
            VALUES('$customer_name','$phone','$table_number','$total_amount','$status')";

    mysqli_query($conn, $sql);

    $order_id = mysqli_insert_id($conn);

    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header("Location: cart.php");
    exit();
}

    foreach($_SESSION['cart'] as $food_id => $qty)
{
    $sql = "SELECT * FROM foods WHERE food_id='$food_id'";
    $result = mysqli_query($conn, $sql);
    $food = mysqli_fetch_assoc($result);

    $subtotal = $food['price'] * $qty;

    $sql = "INSERT INTO order_items(order_id, food_id, quantity, subtotal)
            VALUES('$order_id', '$food_id', '$qty', '$subtotal')";

    mysqli_query($conn, $sql);
}

unset($_SESSION['cart']);

echo "<script>
        alert('Order Placed Successfully!');
        window.location='menu.php';
      </script>";

exit();

    
}
?>

<div class="container mt-5">

<h2 class="mb-4">Checkout</h2>

<form method="POST">

<div class="mb-3">
<label>Customer Name</label>
<input type="text" name="customer_name" class="form-control" required>
</div>

<div class="mb-3">
<label>Phone Number</label>
<input type="text" name="phone" class="form-control" required>
</div>

<div class="mb-3">
    <label>Table Number</label>
    <input type="number"
           name="table_number"
           class="form-control"
           required>
</div>
</div>

<button type="submit" name="place_order" class="btn btn-success">
Place Order
</button>

<a href="cart.php" class="btn btn-secondary">
Back to Cart
</a>

</form>

</div>

<?php
include("includes/footer.php");
?>