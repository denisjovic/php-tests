<?php


$conn = mysqli_connect('localhost', 'root', 'password', 'testdb')

$getUser = $_REQUEST["username"];
$getId    = $_REQUEST["id"];

$query = "SELECT * FROM users WHERE username = '" .$getUser . "'";

$result = mysqli_query($conn, $query)


?>
