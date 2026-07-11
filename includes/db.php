<?php

if ($_SERVER['SERVER_NAME'] == "localhost") {

    // Localhost Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "restaurant_db";

} else {

    // InfinityFree Database
    $servername = "sql107.infinityfree.com";
    $username = "if0_42380762";
    $password = "71ICQA3wLbdOS";
    $database = "if0_42380762_restaurant_db";

}

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

?>