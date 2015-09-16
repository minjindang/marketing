<?php 	
	$DB_HOST = 'localhost';
	$DB_USER = 'willy741026';
	$DB_PASS = '';
	$DB_NAME = 'marketing';

	$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

	mysql_query("SET NAMES 'UTF8'");
	mysql_query("SET CHARACTER SET UTF8");
?>
