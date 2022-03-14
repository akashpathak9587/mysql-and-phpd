<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection to Mysqli</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "4k4949585";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}
echo "connected successfully<br>";

mysqli_close($conn);
?>
</body>
</html>