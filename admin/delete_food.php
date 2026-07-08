<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../includes/db.php");

$id = $_GET['id'];

$sql = "DELETE FROM foods WHERE food_id='$id'";

if (mysqli_query($conn, $sql)) {

    echo "<script>
            alert('Food Deleted Successfully!');
            window.location='manage_foods.php';
          </script>";

} else {

    echo "<script>
            alert('Delete Failed!');
            window.location='manage_foods.php';
          </script>";

}
?>