<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../includes/db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM categories WHERE category_id='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
if (isset($_POST['update'])) {

    $category_name = $_POST['category_name'];

    $sql = "UPDATE categories
            SET category_name='$category_name'
            WHERE category_id='$id'";

    if (mysqli_query($conn, $sql)) {

        echo "<script>
                alert('Category Updated Successfully!');
                window.location='manage_categories.php';
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-warning">

<h3>Edit Category</h3>

</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">

<label>Category Name</label>

<input
type="text"
name="category_name"
class="form-control"
value="<?php echo $row['category_name']; ?>"
required>

</div>

<button
type="submit"
name="update"
class="btn btn-success">

Update Category

</button>

<a href="manage_categories.php"
class="btn btn-secondary">

Back

</a>

</form>

</div>

</div>

</div>

</body>
</html>