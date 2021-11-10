<?php


$conn = mysqli_connect('localhost', 'root', 'password', 'users')

$offset = $argv[0]; // beware, no input validation!
$query  = "SELECT id, name FROM products ORDER BY name LIMIT 20 OFFSET $offset;";
$result = mysqli_query($conn, $query))


?>
