<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../includes/db.php");
include("../includes/header.php");
?>

<div class="container mt-4">

    <h2 class="mb-4">Manage Orders</h2>

    <table class="table table-bordered table-striped">

        <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Phone</th>
            <th>Table</th>
            <th>Total</th>
            <th>Status</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

<?php

$sql = "SELECT * FROM orders ORDER BY order_id DESC";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['order_id']; ?></td>

<td><?php echo $row['customer_name']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php echo $row['table_number']; ?></td>

<td>Rs. <?php echo $row['total_amount']; ?></td>

<td><?php echo $row['status']; ?></td>

<td><?php echo $row['order_date']; ?></td>

<td>
    <a href="update_order.php?id=<?php echo $row['order_id']; ?>"
       class="btn btn-primary btn-sm">
        Update Status
    </a>
</td>

<td>
    <a href="view_order.php?id=<?php echo $row['order_id']; ?>" class="btn btn-info btn-sm">View</a>
    <a href="edit_order.php?id=<?php echo $row['order_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
    <a href="delete_order.php?id=<?php echo $row['order_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this order?')">Delete</a>
</td>

</tr>

<?php
}
?>

    </table>

</div>

<?php
include("../includes/footer.php");
?>