<?php
require("../config.php");
require("../db_connection.php");

$id = $_REQUEST['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];


    $query = "UPDATE `categories`
              SET `name` = '$name'
              where `_id` = $id
    ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error in update operation " . mysqli_error($conn, $result));
    } else {
        header("Location: " . APP_URL . "categories/index.php");
    }
}
