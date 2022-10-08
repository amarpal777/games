<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "test";
// Create database connection
$conn = mysqli_connect($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>