<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "my_database";

try {
    $conn = new mysqli($servername, $username, $password, $database);
} catch (mysqli_sql_exception $e) {
    die ("Connection failed: Check Database settings <br>".$e);
}