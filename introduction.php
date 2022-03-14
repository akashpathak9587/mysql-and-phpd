<?php
// Connecting to MySQL database using PHP
$servername = "localhost";
$username = "root";
$password = "4k4949585";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
echo "connected successfully";
$conn->close();
