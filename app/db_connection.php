<?php

// define("USER_NAME", "root");
// define("LOCALHOST", "localhost:3308");
// define("DB_NAME", "pms");


const LOCALHOST = "localhost:3308";
const USER_NAME = "root";
const DB_NAME = "pms";

$conn = mysqli_connect(LOCALHOST, USER_NAME, "", DB_NAME);

if (!$conn) die("Failed To Connect " . mysqli_connect_error($conn));
