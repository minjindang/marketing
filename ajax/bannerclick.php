<?php
	include('../includes/config.php');

	if(is_null($_GET['name'])){
		$date = date("Y-m-d");
	} else {
		$date = $_GET['name'];
	}

	$query = "SELECT concat(adid) AS adtrace, COUNT(ip) AS totalcnt, COUNT(DISTINCT ip) AS ipcnt FROM sourceclick WHERE time like '".$date."%' AND adid != '' GROUP BY adtrace ORDER BY totalcnt DESC";

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



