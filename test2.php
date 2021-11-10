
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

function testSQLi() {

	$user = $_POST[username];
	$pass = $_POST[password];

	$query = mysql_query("SELECT * FROM users WHERE username = ' " . $user ."' AND password = '".$pass."'");

};

testSQLi();
?>

</body>
</html>