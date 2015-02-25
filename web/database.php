<?php
	// Content of database.php
	 
	$mysqli = new mysqli('localhost', 'jinglu', 'Zheng1109', 'databasename');
	 
	if($mysqli->connect_errno) {
		printf("Connection Failed: %s\n", $mysqli->connect_error);
		exit;
	}
?>