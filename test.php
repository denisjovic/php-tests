<?php


$conn = mysql_connect('localhost', 'root', 'password', 'testdb');

$getUser = $_REQUEST["username"];

echo "SELECT * FROM users WHERE username = '" .$getUser . "'";


?>
