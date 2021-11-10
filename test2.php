
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

function testSQLi() {
	$conn = mysql_connect('localhost', 'root', 'password', 'testdb');

	$articleid = $_GET[‘article’];
	echo "SELECT * FROM articles WHERE articleid = $articleid";

};

testSQLi();

echo 'hello';




?>

</body>
</html>