<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | mysqli_fetch_array() Function</title>
</head>
<body>
<?php
// The mysqli_fetch_array() function is used to fetch rows from the database and store them as an array. The array can be fetched as an associative array, as a numeric array or both.
// Syntax:mysqli_fetch_array ("database_name", "mode")
$servername = "localhost";
$username = "root";
$password = "4k4949585";
$database = "newDB";

$conn = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_error()) {
    die("connection to the server failed: " . mysqli_connect_error());
}

$sql = "select FirstName, LastName from Persons order by LastName;";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_NUM);
print_r($row);
echo "<br>";
$row = mysqli_fetch_array($result, MYSQLI_NUM);
print_r($row);
echo "<br>";

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
print_r($row);

mysqli_close($conn);

?>
</body>
</html>