<?php
	include('../includes/config.php');

	if(is_null($_GET['startdate'])){
		$startdate=  date("Y-m-d", strtotime("today"));
	} else {
		$startdate= $_GET['startdate'];
	}

	if(is_null($_GET['enddate'])){
		$enddate =  date("Y-m-d",strtotime("tomorrow "));
	} else {
		$enddate = date("Y-m-d", strtotime($_GET['enddate']. ' + 1 day'));
	}

	$query = "SELECT fbad AS adtrace, gametitle, gamename, count(DISTINCT userid) AS role FROM member WHERE time BETWEEN '".$startdate."%' AND '".$enddate."%' AND userid IN ( SELECT DISTINCT userid FROM register WHERE time BETWEEN '".$startdate."%' AND '".$enddate."%' AND userid IN ( SELECT userid FROM createrole WHERE time BETWEEN '".$startdate."%' AND '".$enddate."%' )) AND category = 'facebook' GROUP BY adtrace ORDER BY role DESC";

//	$query = "select fbad as adtrace, gametitle,gamename,count(distinct userid) as role from member where time LIKE '".$startdate."%' and userid IN (select DISTINCT userid from register where time LIKE '".$startdate."%' and userid IN (select userid from createrole where time LIKE '".$startdate."%')) and category = 'facebook' group by adtrace order by role desc";
	
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



