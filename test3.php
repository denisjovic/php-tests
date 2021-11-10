<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>


<?php 

function one() {
    $offset = $argv[0]; // beware, no input validation!
    $query  = "SELECT id, name FROM products ORDER BY name LIMIT 20 OFFSET $offset;";
    $result = pg_query($conn, $query)
}

one()

function two() {
    $query  = "SELECT id, name, inserted, size FROM products
           WHERE size = '$size'";
    $result = odbc_exec($conn, $query);
}

two()

function three() {
    $conn = mysql_connect('localhost', 'root', 'passwd', 'usertable')
    $query = "UPDATE usertable SET pwd='$pwd' WHERE uid='$uid';";
    $result = mysql_query($conn, $query)
}

three()

?>
</body>
</html>