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
$money = $_GET[money];
$time = $_GET[time];
$ts = $_GET[ts];
$sign = $_GET[sign];

$sql = "Insert Into paymoney (userid,category,money,time,ts,sign) values ('"
	."$userid"."',N'".$category."','".$money."','".$time."','".$ts."','".$sign."')";
	
mysql_query($sql);
?>
