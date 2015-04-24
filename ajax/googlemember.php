<?php
	include('../includes/config.php');

	if(is_null($_GET['name'])){
		$date = date("Y-m-d");
	} else {
		$date = $_GET['name'];
	}
	
	$query = "select concat(fbad,webad) as adtrace, COUNT(DISTINCT userid) as mbregister from member where userid IN (select userid from register where time like '".$date."%') and category like 'google' group by adtrace order by mbregister desc";

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



