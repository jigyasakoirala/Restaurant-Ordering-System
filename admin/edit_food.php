<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../includes/db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM foods WHERE food_id='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
if (isset($_POST['update'])) {

    $food_name = $_POST['food_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE foods
            SET food_name='$food_name',
                price='$price',
                description='$description'
            WHERE food_id='$id'";

    if (mysqli_query($conn, $sql)) {

        echo "<script>
                alert('Food Updated Successfully!');
                window.location='manage_foods.php';
              </script>";

    } else {

        echo "<script>alert('Update Failed!');</script>";

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Food</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-warning">

<h3>Edit Food</h3>

</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">

<label>Food Name</label>

<input
type="text"
name="food_name"
class="form-control"
value="<?php echo $row['food_name']; ?>"
required>

</div>

<div class="mb-3">

<label>Price</label>

<input
type="number"
name="price"
class="form-control"
value="<?php echo $row['price']; ?>"
required>

</div>

<div class="mb-3">

<label>Description</label>

<textarea
name="description"
class="form-control"
rows="4"><?php echo $row['description']; ?></textarea>

</div>

<button
type="submit"
name="update"
class="btn btn-success">

Update Food

</button>

<a href="manage_foods.php"
class="btn btn-secondary">

Back

</a>

</form>

</div>

</div>

</div>

</body>
</html>