<?php
	include('../includes/config.php');

	$query = "SELECT a.adid AS adtrace, count(DISTINCT a.ip) AS ipcnt, count(DISTINCT c.userid) AS regcnt, count(DISTINCT d.userid) AS create_role_cnt FROM ( SELECT adid, ip FROM sourceclick WHERE adid != '' AND time LIKE '".date("Y-m-d")."%' ) a LEFT OUTER JOIN ( SELECT webad, userid FROM member WHERE webad != '' AND time LIKE '".date("Y-m-d")."%' ) b ON a.adid = b.webad LEFT OUTER JOIN ( SELECT userid FROM register WHERE userid != '' AND time LIKE '".date("Y-m-d")."%' ) c ON b.userid = c.userid LEFT OUTER JOIN ( SELECT userid, role FROM createrole WHERE userid != '' AND time LIKE '".date("Y-m-d")."%' ) d ON c.userid = d.userid GROUP BY adtrace ORDER BY ipcnt desc";

	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$arr = array();
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$arr[] = $row;	
		}
	}

	# JSON-encode the response
	$json_response = json_encode($arr);

	// # Return the response
	echo $json_response;
?>



