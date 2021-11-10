<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php
$logged_in = false;
if ($logged_in) {
	echo "User is logged in";
} else {
	echo "User is NOT logged in";
}

function writeMsg() {
  echo "Hello world!";
}

writeMsg();
?>
</body>
</html>
