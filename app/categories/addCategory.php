<?php
require("../config.php");
require("../db_connection.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $id = rand(1, 200);

    if (empty($name)) {
        header('Location: ' . APP_URL . 'categories/add.php');
    }

    $query = "INSERT INTO `categories` (`_id`,`name`) 
                           values    ($id , '$name')
        ";
    $result =  mysqli_query($conn, $query);

    if (!$result) {
        die("Error in insertion operation " . mysqli_error($conn, $result));
    } else {
        header('Location: ' . APP_URL . 'categories/index.php');
    }
}
