<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_database";

//mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);

// Create connection
try {
    $conn = new mysqli($servername, $username, $password, $database);
} catch (mysqli_sql_exception $e) {
    die ("Connection failed: Check Database settings <br>".$e);
}

?>