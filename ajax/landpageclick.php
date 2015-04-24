<?php
	include('../includes/config.php');

	if(is_null($_GET['name'])){
		$date = date("Y-m-d");
	} else {
		$date = $_GET['name'];
	}

	$query = "SELECT concat(webad) AS adtrace, COUNT(userid) AS totalcnt, COUNT(DISTINCT userid) AS ipcnt  FROM member WHERE time like '".$date."%' AND webad != '' GROUP BY adtrace ORDER BY totalcnt DESC";

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



