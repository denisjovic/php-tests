<?php

$articleid = $_GET[‘article’];
$query = "SELECT * FROM articles WHERE articleid = $articleid";

?>