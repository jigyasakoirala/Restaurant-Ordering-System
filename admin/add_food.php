<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../includes/db.php");
if (isset($_POST['save'])) {

    $food_name = $_POST['food_name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    move_uploaded_file($temp, "../images/" . $image);

    $sql = "INSERT INTO foods (food_name, category_id, price, description, image)
            VALUES ('$food_name', '$category', '$price', '$description', '$image')";

    if (mysqli_query($conn, $sql)) {

        echo "<script>alert('Food Added Successfully!');</script>";

    } else {

        echo "<script>alert('Failed to Add Food!');</script>";

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Food</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-success text-white">

<h3>Add New Food</h3>

</div>

<div class="card-body">

<form method="POST" enctype="multipart/form-data">

<div class="mb-3">

<label>Food Name</label>

<input type="text"
name="food_name"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Price (Rs.)</label>

<input type="number"
name="price"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Category</label>

<select name="category" class="form-select" required>

    <option value="">Select Category</option>

    <?php

    $sql = "SELECT * FROM categories";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
    ?>

        <option value="<?php echo $row['category_id']; ?>">

            <?php echo $row['category_name']; ?>

        </option>

    <?php
    }
    ?>

</select>

</div>

<div class="mb-3">

<label>Description</label>

<textarea
name="description"
class="form-control"
rows="4"></textarea>

</div>

<div class="mb-3">

<label>Food Image</label>

<input
type="file"
name="image"
class="form-control">

</div>

<button
type="submit"
name="save"
class="btn btn-success">

Save Food

</button>

<a href="dashboard.php"
class="btn btn-secondary">

Back

</a>

</form>

</div>

</div>

</div>

</body>
</html>