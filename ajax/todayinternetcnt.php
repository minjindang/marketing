<?php
	include('../includes/config.php');

	$query = "SELECT adid AS adtrace, count(ip) AS totalcnt FROM sourceclick WHERE time LIKE '".date("Y-m-d")."%' AND adid != '' GROUP BY adtrace ORDER BY totalcnt DESC";

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



