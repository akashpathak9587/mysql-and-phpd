<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | mysqli_close() Function</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "4k4949585";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
} else {
    echo "Connection successfull<br>";
}

$sql = "create database if not exists newDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully with the name newDB";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>