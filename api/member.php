<?php
$mysql_server="localhost";
$mysql_user="root";
$mysql_password="Sword2014";

$memberconn = mysql_connect($mysql_server, $mysql_user, $mysql_password);

mysql_select_db('marketing',$memberconn);
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET UTF8");

$userid = $_GET[userid];
$webad = $_GET[webad];
$fbad = $_GET[fbad];
$gametitle = $_GET[gametitle];
$gamename = $_GET[gamename];
$time = $_GET[time];
$category = $_GET[category];
$ts = $_GET[ts];
$sign = $_GET[sign];

$sql = "Insert Into member (userid,webad,fbad,gametitle,gamename,time,category,ts,sign) values ('"
	."$userid"."','".$webad."','".$fbad."','".$gametitle."','".$gamename."','".$time."','".$category."','".$ts."','".$sign."')";
	
mysql_query($sql);
?>
