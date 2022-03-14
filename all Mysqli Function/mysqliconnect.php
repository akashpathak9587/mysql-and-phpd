<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYsqli Function</title>
</head>
<body>
<?php
// The mysqli_connect() function in PHP is used to connect you to the database.
// Syntax: mysqli_connect ( "host", "username", "password", "database_name" )
mysqli_connect("localhost", "root", "4k4949585");
if (mysqli_connect_error()) {
    echo "Connection failed";
} else {
    echo "Database connection successfully";
}
?>
</body>
</html>