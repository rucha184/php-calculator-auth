<?php
$host = "localhost";
$user = "root";  // your MySQL username
$pass = "";      // your MySQL password
$db   = "calculator_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
