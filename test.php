<?php


$conn = mysql_connect('localhost', 'root', 'password', 'testdb');

$getUser = $_REQUEST["username"];

$query = "SELECT * FROM users WHERE username = '" .$getUser . "'";

$result = mysql_query($conn, $query);


?>
