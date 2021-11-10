<?php


$conn = mysql_connect('localhost', 'root', 'password', 'testdb');

$getUser = $_REQUEST["username"];

$result = mysql_query("SELECT * FROM users WHERE username = '" .$getUser . "'");

?>
