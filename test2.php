<?php

function testSQLi() {
	$conn = mysql_connect('localhost', 'root', 'password', 'testdb');

	$articleid = $_GET[‘article’];
	$query = "SELECT * FROM articles WHERE articleid = $articleid";

	$result = mysql_query($conn, $query);
};

testSQLi();




?>