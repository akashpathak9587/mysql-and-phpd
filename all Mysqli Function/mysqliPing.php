<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | mysqli_ping() Function</title>
</head>
<body>
<?php
// The mysqli_ping() function is used to ping a server connection. That is it is used to check if a host is reachable on an IP network or not. This function also tries to reconnect if an existing server connection is lost.
$servername = "localhost";
$username = "root";
$password = "4k4949585";

$conn = mysqli_connect($servername, $username, $password);

if (mysqli_connect_error()) {
    die("connection to the server fail: " . mysqli_connect_error());
}

if (mysqli_ping($conn)) {
    echo "successfull connection<br>";
} else {
    printf("Error: %s<br>", mysqli_error($conn));
}

mysqli_close($conn);
?>
</body>
</html>