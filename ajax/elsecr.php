<?php
	include('../includes/config.php');

	if(is_null($_GET['name'])){
		$date = date("Y-m-d");
	} else {
		$date = $_GET['name'];
	}

	$query = "SELECT a.adid AS adtrace, count(DISTINCT d.userid) AS role FROM ( SELECT adid, ip FROM sourceclick WHERE adid != '' AND time LIKE '".$date."%' ) a LEFT OUTER JOIN ( SELECT webad, userid FROM member WHERE webad != '' AND time LIKE '".$date."%' ) b ON a.adid = b.webad LEFT OUTER JOIN ( SELECT userid FROM register WHERE userid != '' AND time LIKE '".$date."%' ) c ON b.userid = c.userid LEFT OUTER JOIN ( SELECT userid, role FROM createrole WHERE userid != '' AND time LIKE '".$date."%' ) d ON c.userid = d.userid GROUP BY adtrace";

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



