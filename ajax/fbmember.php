<?php
	include('../includes/config.php');
	
	if(is_null($_GET['name'])){
		$date = date("Y-m-d");
	} else {
		$date = $_GET['name'];
	}

	$query = "SELECT gametitle, gamename, concat(fbad) AS adtrace, COUNT(DISTINCT userid) AS mbregister FROM member WHERE time LIKE '".$date."%' AND category LIKE 'facebook' GROUP BY adtrace ORDER BY mbregister DESC";

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



