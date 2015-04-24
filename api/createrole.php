<?php
//PHP送Header告訴瀏覽器這是UTF-8編碼
header("Content-Type:text/html;charset=utf-8");
$mysql_server="localhost";
$mysql_user="root";
$mysql_password="Sword2014";

$registerconn = mysql_connect($mysql_server, $mysql_user, $mysql_password);

mysql_select_db('marketing',$registerconn);
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET CHARACTER SET UTF8");

$userid = $_GET[userid];
$role = $_GET[role];
$time = $_GET[time];
$gamesn = $_GET[gamesn];
$serversn = $_GET[serversn];
$ts = $_GET[ts];
$sign = $_GET[sign];

$sql = "Insert Into createrole (userid,role,time,gamesn,serversn,ts,sign) values ('".
	"$userid"."',N'"."$role"."','"."$time"."','"."$gamesn"."','"."$serversn"."','"."$ts"."','"."$sign"."')";
	
mysql_query($sql);
//echo 'Get參數：'.$role;
?>
