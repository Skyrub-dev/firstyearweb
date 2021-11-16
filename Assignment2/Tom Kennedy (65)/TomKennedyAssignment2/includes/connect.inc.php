<!--Page is responsible for connecting to the MySql database, this code is used for a lot
of the functions to connect to the database -->

<!DOCTYPE html>

<html lang = "en">

<head>

</head>

<body>

<?php
$connection = mysqli_connect("localhost", "root", "", "musicstream");

if (mysqli_connect_errno())
{
    echo "ERROR: could not connect to database: ".mysqli_connect_error();
}
else
{
    echo "Connected to database.";
}
?>

</body>


</html>