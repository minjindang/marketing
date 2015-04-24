<?php
	include('../includes/config.php');

	if(is_null($_GET['startdate'])){
		$startdate = date("Y-m-d", strtotime("yesterday"));
	} else {
		$startdate = $_GET['startdate']." 00:00:00";
	}

	if(is_null($_GET['enddate'])){
		$enddate = date("Y-m-d");
	} else {
		$enddate = $_GET['enddate']." 23:59:59";
	}
	
	if($_GET['game'] == 70){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '70' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '70' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '70' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '70' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '70' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '70' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '70' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 69){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '69' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '69' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '69' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '69' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '69' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '69' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '69' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 68){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '68' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '68' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '68' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '68' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '68' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '68' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '68' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 67){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '67' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '67' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '67' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '67' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '67' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '67' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '67' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 66){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '66' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '66' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '66' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '66' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '66' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '66' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '66' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 65){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '65' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '65' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '65' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '65' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '65' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '65' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '65' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 64){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '64' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '64' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '64' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '64' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '64' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '64' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '64' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 63){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '63' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '63' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '63' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '63' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '63' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '63' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '63' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 62){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '62' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '62' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '62' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '62' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '62' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '62' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '62' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 61){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '61' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '61' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '61' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '61' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '61' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '61' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '61' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 60){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '60' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '60' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '60' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '60' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '60' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '60' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '60' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 59){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '59' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '59' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '59' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '59' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '59' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '59' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '59' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 58){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '58' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '58' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '58' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '58' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '58' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '58' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '58' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 57){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '57' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '57' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '57' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '57' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '57' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '57' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '57' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}
	
	if($_GET['game'] == 56){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '56' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '56' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '56' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '56' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '56' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '56' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '56' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 55){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '55' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '55' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '55' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '55' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '55' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '55' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '55' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 54){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '54' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '54' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '54' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '54' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '54' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '54' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '54' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 53){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '53' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '53' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '53' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '53' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '53' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '53' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '53' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 52){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '52' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '52' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '52' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '52' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '52' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '52' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '52' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 51){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '51' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '51' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '51' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '51' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '51' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '51' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '51' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 50){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '50' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '50' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '50' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '50' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '50' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '50' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '50' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 49){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '49' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '49' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '49' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '49' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '49' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '49' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '49' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 48){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '48' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '48' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '48' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '48' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '48' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '48' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '48' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 47){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '47' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '47' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '47' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '47' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '47' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '47' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '47' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 46){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '46' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '46' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '46' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '46' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '46' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '46' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '46' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 45){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '45' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '45' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '45' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '45' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '45' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '45' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '45' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 44){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '44' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '44' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '44' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '44' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '44' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '44' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '44' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 43){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '43' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '43' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '43' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '43' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '43' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '43' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '43' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 42){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '42' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '42' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '42' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '42' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '42' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '42' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '42' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 41){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '41' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '41' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '41' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '41' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '41' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '41' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '41' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 40){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '40' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '40' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '40' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '40' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '40' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '40' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '40' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 39){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '39' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '39' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '39' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '39' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '39' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '39' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '39' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 38){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '38' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '38' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '38' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '38' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '38' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '38' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '38' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 37){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '37' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '37' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '37' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '37' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '37' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '37' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '37' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 36){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '36' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '36' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '36' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '36' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '36' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '36' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '36' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 35){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '35' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '35' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '35' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '35' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '35' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '35' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '35' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 34){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '34' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '34' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '34' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '34' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '34' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '34' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '34' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 33){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '33' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '33' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '33' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '33' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '33' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '33' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '33' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 32){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '32' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '32' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '32' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '32' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '32' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '32' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '32' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 31){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '31' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '31' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '31' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '31' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '31' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '31' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '31' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 30){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '30' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '30' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '30' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '30' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '30' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '30' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '30' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 29){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '29' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '29' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '29' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '29' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '29' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '29' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '29' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 28){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '28' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '28' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '28' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '28' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '28' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '28' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '28' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 27){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '27' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '27' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '27' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '27' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '27' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '27' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '27' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 26){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '26' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '26' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '26' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '26' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '26' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '26' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '26' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 25){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '25' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '25' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '25' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '25' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '25' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '25' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '25' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 24){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '24' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '24' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '24' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '24' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '24' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '24' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '24' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 23){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '23' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '23' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '23' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '23' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '23' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '23' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '23' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 22){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '22' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '22' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '22' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '22' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '22' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '22' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '22' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 21){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '21' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '21' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '21' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '21' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '21' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '21' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '21' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 20){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '20' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '20' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '20' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '20' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '20' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '20' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '20' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 19){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '19' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '19' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '19' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '19' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '19' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '19' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '19' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}
	
	if($_GET['game'] == 18){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '18' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '18' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '18' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '18' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '18' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '18' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '18' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 17){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '17' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '17' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '17' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '17' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '17' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '17' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '17' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 16){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '16' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '16' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '16' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '16' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '16' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '16' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '16' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 15){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '15' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '15' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '15' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '15' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '15' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '15' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '15' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 14){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '14' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '14' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '14' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '14' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '14' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '14' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '14' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 13){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '13' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '13' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '13' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '13' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '13' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '13' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '13' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 12){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '12' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '12' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '12' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '12' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '12' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '12' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '12' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 11){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '11' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '11' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '11' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '11' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '11' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '11' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '11' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 10){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '10' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '10' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '10' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '10' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '10' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '10' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '10' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 9){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '9' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '9' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '9' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '9' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '9' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '9' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '9' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 8){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '8' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '8' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '8' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '8' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '8' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '8' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '8' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 7){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '7' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '7' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '7' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '7' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '7' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '7' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '7' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 6){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '6' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '6' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '6' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '6' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '6' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '6' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '6' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 5){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '5' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '5' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '5' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '5' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '5' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '5' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '5' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 4){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '4' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '4' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '4' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '4' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '4' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '4' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '4' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 3){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '3' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '3' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '3' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '3' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '3' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '3' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '3' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 2){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '2' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '2' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '2' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '2' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '2' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '2' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '2' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}

	if($_GET['game'] == 1){
		if($_GET['source'] == "all"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '1' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lyladult"){
			$query = "SELECT LEFT(a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladult05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '1' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylkb"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylkb' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '1' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "lylpm"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad = 'lylpm' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '1' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "BAHA"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'BAHA%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '1' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "GB"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE webad LIKE 'GB%' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '1' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "googlelyl"){
			$query = "SELECT LEFT (a.time, 10) AS date, COUNT(a.userid) AS regcnt, COUNT(b.userid) AS create_role_cnt, sum(c.money) AS money FROM ( SELECT * FROM member WHERE ( webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%' ) AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS a LEFT JOIN ( SELECT * FROM createrole WHERE gamesn = '1' AND time BETWEEN '".$startdate."' AND '".$enddate."' ) AS b ON a.userid = b.userid LEFT JOIN ( SELECT * FROM paymoney WHERE time BETWEEN '".$startdate."' AND '".$enddate."' ) AS c ON b.userid = c.userid GROUP BY date";
		}
		if($_GET['source'] == "Facebook"){
			//$query = "";
		}
	}






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



