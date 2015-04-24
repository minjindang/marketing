<?php
	include('../includes/config.php');

	if(is_null($_GET['startdate'])){
		$startdate=  date("Y-m-d", strtotime("yesterday"));
	} else {
		$startdate= $_GET['startdate'];
	}

	if(is_null($_GET['enddate'])){
		$enddate =  date("Y-m-d");
	} else {
		$enddate = $_GET['enddate'];
	}

	$query = "SELECT a.adid AS adtrace, count(DISTINCT a.ip) AS ipcnt, count(DISTINCT c.userid) AS regcnt, count(DISTINCT d.userid) AS create_role_cnt FROM ( SELECT adid, ip FROM sourceclick WHERE adid != '' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) a LEFT OUTER JOIN ( SELECT webad, userid FROM member WHERE webad != '' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) b ON a.adid = b.webad LEFT OUTER JOIN ( SELECT userid FROM register WHERE userid != '' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) c ON b.userid = c.userid LEFT OUTER JOIN ( SELECT userid, role FROM createrole WHERE userid != '' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) d ON c.userid = d.userid GROUP BY adtrace ORDER BY ipcnt DESC";

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



