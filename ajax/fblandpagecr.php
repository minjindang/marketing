<?php
	include('../includes/config.php');

	if(is_null($_GET['name'])){
		$date = date("Y-m-d");
	} else {
		$date = $_GET['name'];
	}

	$query = "SELECT webad AS adtrace, COUNT(userid) AS totalcnt FROM member WHERE webad != '' AND userid IN ( SELECT DISTINCT userid FROM register WHERE time LIKE '".$date."%' AND category = 'Facebook' AND userid IN ( SELECT userid FROM createrole WHERE time LIKE '".$date."%' )) GROUP BY adtrace";

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



