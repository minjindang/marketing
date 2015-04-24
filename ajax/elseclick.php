<?php
	include('../includes/config.php');

 	if(is_null($_GET['name'])){
		$date=date("Y-m-d");
	} else {
		$date = $_GET['name'];
	}

	$query = "select url, adid AS adtrace, COUNT(ip) AS totalcnt, COUNT(DISTINCT ip) AS ipcnt from sourceclick where time LIKE '".$date."%' and adid != '' and url NOT LIKE '%gamebase%' and url NOT LIKE '%gamer%' and url NOT LIKE '%baha%' and url NOT LIKE '%yahoo%' and url NOT LIKE '%google%' and url NOT LIKE '%facebook%' group by adtrace ORDER BY totalcnt desc";

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



