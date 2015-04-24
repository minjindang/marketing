<?php
$mysql_server="localhost";
$mysql_user="root";
$mysql_password="Sword2014";

$conn = mysql_connect($mysql_server, $mysql_user, $mysql_password);

mysql_select_db('marketing',$conn);
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET UTF8");

$appid = $_GET[appid];
$adid = $_GET[adid];
$sessionid = $_GET[sessionid];
$macaddress = $_GET[macaddress];
$url = $_GET[url];
$ip = $_GET[ip];
$time = $_GET[time];
$ts = $_GET[ts];
$sign = $_GET[sign];

$sql = "Insert Into sourceclick (appid,adid,sessionid,macaddress,url,ip,time,ts,sign) values ('"
	.$appid."','"."$adid"."','".$sessionid."','".$macaddress."','".$url."','".$ip."','".$time."','".$ts."','".$sign."')";

mysql_query($sql);
?>