<?php

$mysqli = new mysqli('localhost', 'anhvqle', 'helloVN84', 'news');

if($mysqli-> connect_errno) {
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
}

?>