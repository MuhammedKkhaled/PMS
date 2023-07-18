<?php
require("../config.php");
require("../db_connection.php");

$id = $_REQUEST['id'];

$validateQuery = "SELECT * FROM `categories` WHERE `_id`= '$id' ";

$validateResult = mysqli_query($conn, $validateQuery);

$num = mysqli_num_rows($validateResult);

if (!is_numeric($id) || $num <= 0) {
    header('Location: ' . APP_URL . 'categories/index.php');
}

$query = " DELETE FROM `categories` Where `_id` = $id";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error in deletion operation" . mysqli_error($conn, $result));
} else header('Location: ' . APP_URL . 'categories/index.php');
