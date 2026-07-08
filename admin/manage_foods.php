<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Foods</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="mb-4">Manage Foods</h2>

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Food</th>
<th>Price</th>
<th>Category</th>
<th>Image</th>
<th>Action</th>

</tr>

</thead>

<tbody>

<?php

$sql = "SELECT foods.*, categories.category_name
        FROM foods
        INNER JOIN categories
        ON foods.category_id = categories.category_id";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['food_id']; ?></td>

<td><?php echo $row['food_name']; ?></td>

<td>Rs. <?php echo $row['price']; ?></td>

<td><?php echo $row['category_name']; ?></td>

<td>

<img src="../images/<?php echo $row['image']; ?>"
width="80">

</td>

<td>

<a href="edit_food.php?id=<?php echo $row['food_id']; ?>" class="btn btn-warning btn-sm">
    Edit
</a>

<a href="delete_food.php?id=<?php echo $row['food_id']; ?>" class="btn btn-danger btn-sm">
    Delete
</a>

</td>

</tr>

<?php
}
?>

</tbody>

</table>

<a href="dashboard.php" class="btn btn-secondary">
Back
</a>

</div>

</body>
</html>