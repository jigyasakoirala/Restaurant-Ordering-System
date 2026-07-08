<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../includes/db.php");

$id = $_GET['id'];

if(isset($_POST['update']))
{
    $status = $_POST['status'];

    $sql = "UPDATE orders
            SET status='$status'
            WHERE order_id='$id'";

    mysqli_query($conn, $sql);

    header("Location: orders.php");
    exit();
}

$sql = "SELECT * FROM orders WHERE order_id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

include("../includes/header.php");
?>

<div class="container mt-5">

<h2>Update Order Status</h2>

<form method="POST">

<div class="mb-3">

<label>Status</label>

<select name="status" class="form-control">

<option value="Pending"
<?php if($row['status']=="Pending") echo "selected"; ?>>
Pending
</option>

<option value="Preparing"
<?php if($row['status']=="Preparing") echo "selected"; ?>>
Preparing
</option>

<option value="Completed"
<?php if($row['status']=="Completed") echo "selected"; ?>>
Completed
</option>

</select>

</div>

<button class="btn btn-success" name="update">
Update
</button>

<a href="orders.php" class="btn btn-secondary">
Back
</a>

</form>

</div>

<?php
include("../includes/footer.php");
?>