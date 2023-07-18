<?php

/// connection 
require_once("../app/db_connection.php");

// $conn = mysqli_connect("localhost:3308", "root", "", "pms");

/// query 
$query = "SELECT  * FROM `categories`";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error in SQL Query " . mysqli_error($conn, $result));
}
