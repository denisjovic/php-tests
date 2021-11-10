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
    return $result
}

one()

function two() {
    $query  = "SELECT id, name, inserted, size FROM products
           WHERE size = '$size'";
    $result = odbc_exec($conn, $query);
    return $result
}

two()

function three() {
    $query = "UPDATE usertable SET pwd='$pwd' WHERE uid='$uid';";
    return $query

}

three()

function four() {
    $query  = "SELECT * FROM products WHERE id LIKE '%$prod%'";
    $result = mssql_query($query);
    return $result

}

four()





?>
</body>
</html>