<?php
	include('../includes/config.php');

	if(is_null($_GET['startdate'])){
		$startdate = date("Y-m-d");
	} else {
		$startdate = $_GET['startdate'];
	}

	$query = "SELECT b.gametitle AS gametitle, b.gamename AS gamename, a.appid AS adtrace, count(DISTINCT a.ip) AS ipcnt, count(DISTINCT b.userid) AS regcnt, count(DISTINCT d.userid) AS create_role_cnt FROM ( SELECT appid, ip FROM sourceclick WHERE appid != '' AND time LIKE '".$startdate."%' ) a LEFT OUTER JOIN ( SELECT gametitle,gamename,fbad, userid FROM member WHERE fbad != '' AND time LIKE '".$startdate."%' ) b ON a.appid = b.fbad LEFT OUTER JOIN ( SELECT userid, role FROM createrole WHERE userid != '' AND time LIKE '".$startdate."%' ) d ON b.userid = d.userid GROUP BY adtrace ORDER BY ipcnt DESC";

	$mysqli->query("SET NAMES UTF8");

	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$arr = array();
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$arr[] = $row;
		}
	}

	// JSON-encode the response
	$json_response = json_encode($arr);

	// Return the response
	echo $json_response;
?>



