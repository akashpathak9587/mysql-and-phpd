
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mysqli_real_escape_string() Function in PHP</title>
</head>
<body>
<?php
//The mysqli_real_escape_string() function is an inbuilt function in PHP which is used to escape all special characters for use in an SQL query. It is used before inserting a string in a database, as it removes any special characters that may interfere with the query operations.
$connection = mysqli_connect("localhost", "root", "4k4949585", "newDB");
if (mysqli_connect_error()) {
    echo "Database connection failed";
}

$firstname = "robert'o";
$lastname = "O'Connell";

$firstname_escape = mysqli_real_escape_string($connection, $firstname);
$lastname_escape = mysqli_real_escape_string($connection, $lastname);

$sql = "insert into Persons(FirstName, LastName) values ('$firstname_escape', '$lastname_escape');";
if (mysqli_query($connection, $sql)) {
    printf("%d row inserted.<br>", mysqli_affected_rows($connection));
} else {
    printf("An orror occurred!");
}

$firstname = "Akash";
$lastname = "Pathak";
$sql = "insert into Persons(FirstName, LastName) values ('$firstname', '$lastname');";
if (mysqli_query($connection, $sql)) {
    printf("%d row inserted.<br>", mysqli_affected_rows($connection));
} else {
    printf("An orror occurred!");
}

$firstname = "Aman";
$lastname = "Sharma";
$sql = "insert into Persons(FirstName, LastName) values ('$firstname', '$lastname');";
if (mysqli_query($connection, $sql)) {
    printf("%d row inserted.<br>", mysqli_affected_rows($connection));
} else {
    printf("An orror occurred!");
}

$firstname = "Rahul";
$lastname = "Singh";
$sql = "insert into Persons(FirstName, LastName) values ('$firstname', '$lastname');";
if (mysqli_query($connection, $sql)) {
    printf("%d row inserted.<br>", mysqli_affected_rows($connection));
} else {
    printf("An orror occurred!");
}

$firstname = "Yansh";
$lastname = "Taksali";
$sql = "insert into Persons(FirstName, LastName) values ('$firstname', '$lastname');";
if (mysqli_query($connection, $sql)) {
    printf("%d row inserted.<br>", mysqli_affected_rows($connection));
} else {
    printf("An orror occurred!");
}

?>
</body>
</html>