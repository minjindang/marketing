<?php

$mysql_server="willy741026-marketing-1349478";
$mysql_user="willy741026";
$mysql_password="";

$loginconn = mysql_connect($mysql_server, $mysql_user, $mysql_password);

mysql_select_db('marketing',$loginconn);
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET UTF8");

$userid = $_POST["user_name"];
$password = $_POST["user_password"];
$cookieid = $_POST["cookieid"];

$sql = 'SELECT * FROM user WHERE userid = "'.$userid.'" and password="'.$password.'";';
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
$record_count = mysql_num_rows($result); 
if($record_count==1){
    echo 'success';
}else{
    echo 'no data';
    //echo $userid;
    //echo $password;
    //echo $cookieid;
}


?>