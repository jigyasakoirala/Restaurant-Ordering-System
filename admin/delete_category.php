<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../includes/db.php");

$id = $_GET['id'];

$sql = "DELETE FROM categories WHERE category_id='$id'";

if (mysqli_query($conn, $sql)) {

    echo "<script>
            alert('Category Deleted Successfully!');
            window.location='manage_categories.php';
          </script>";

} else {

    echo "<script>
            alert('Delete Failed!');
            window.location='manage_categories.php';
          </script>";

}
?>