<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "grantkeebler", "phaeFae7", "grantkeebler");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$select = "SELECT user_id FROM Users";
echo "<table>";

if ($result = $mysqli->query($select)) {
    while ($row = $result->fetch_assoc()) {
	echo "<tr><td>".$row["user_id"]."</td></tr>";	
    }
echo "</table>";
$result->free();
}

$mysqli->close();
?>