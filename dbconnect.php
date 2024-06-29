<?php
$server = "sql300.byethost32.com";
$username = "b32_36561637";
$password = "Project123!";
$database = "b32_36561637_nodev";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error());
}

?>
