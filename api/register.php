<?php
$mysql_server="localhost";
$mysql_user="root";
$mysql_password="Sword2014";

$registerconn = mysql_connect($mysql_server, $mysql_user, $mysql_password);

mysql_select_db('marketing',$registerconn);
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET UTF8");

$userid = $_GET[userid];
$category = $_GET[category];
$time 		= mysql_real_escape_string($_GET[time]);
$gamesn 	= mysql_real_escape_string($_GET[gamesn]);
$serversn 	= mysql_real_escape_string($_GET[serversn]);
$ts 		= mysql_real_escape_string($_GET[ts]);
$sign 		= mysql_real_escape_string($_GET[sign]);
 
$sql = "Insert Into register (userid,category,time,gamesn,serversn,ts,sign) values ('"
	."$userid"."','".$category."','".$time."','".$gamesn."','".$serversn."','".$ts."','".$sign."')";
	
mysql_query($sql);
?>
