<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../includes/db.php");
if (isset($_POST['save'])) {

    $category_name = $_POST['category_name'];

    $sql = "INSERT INTO categories (category_name)
            VALUES ('$category_name')";

    if (mysqli_query($conn, $sql)) {

        echo "<script>alert('Category Added Successfully!');</script>";

    } else {

        echo "<script>alert('Error Adding Category!');</script>";

    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Category</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h3>Add New Category</h3>

</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">

<label>Category Name</label>

<input type="text"
name="category_name"
class="form-control"
placeholder="Enter Category Name"
required>

</div>

<button
type="submit"
name="save"
class="btn btn-success">

Save Category

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