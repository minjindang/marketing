<?php

$mysql_server="localhost";
$mysql_user="root";
$mysql_password="Sword2014";

$callroleconn = new mysqli($mysql_server, $mysql_user, $mysql_password);

/*
$sql  = "SELECT LEFT(a.time, 10) AS date, COUNT(b.userid) AS create_role_cnt FROM ";
$sql .= "(select * from member where (webad LIKE 'lyladult01' OR webad LIKE 'lyladult02' OR webad LIKE 'lyladult03' OR webad LIKE 'lyladult04' OR webad LIKE 'lyladulti05' OR webad LIKE 'lyladult06' OR webad LIKE 'lyladult07' OR webad LIKE 'lyladult08' OR webad LIKE 'lylkb' OR webad LIKE 'lylpm' OR webad LIKE 'BAHA%' OR webad LIKE 'GB%' OR webad LIKE 'GOOGLELYLMAY%' OR webad LIKE 'GOOGLELYLADWORD%') AND time BETWEEN '2015-02-22' AND '2015-02-26') AS a";
$sql .= "LEFT JOIN(select * from createrole where gamesn = '47' AND time BETWEEN '2015-02-22' AND '2015-02-26') AS b ON a.userid=b.userid GROUP BY date";
*/

$sql = "select time,role from createrole where time like '2015-02-26%'";
$result = $callroleconn ->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["time"];
        echo $row["role"];
    }
} else {
    echo "0 results";
}

$callroleconn->close();

?>
