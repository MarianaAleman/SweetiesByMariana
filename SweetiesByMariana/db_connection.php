<!-- PHP code -->
<!-- Connection with php admin -->
<?php
$servername = "localhost";
$port = "3306";
$username = "root";
$password = "root";
$database = "sweetiesbymariana";

$conn = mysqli_connect("$servername:$port", $username, $password, $database);

// Check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};
