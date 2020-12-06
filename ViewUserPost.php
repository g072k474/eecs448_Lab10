<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "grantkeebler", "phaeFae7", "grantkeebler");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$username = $_POST['users'];
$select = "SELECT content FROM Posts WHERE author_id = '$username'";
echo "<table>";
if ($result = $mysqli->query($select)) {
    while ($row = $result->fetch_assoc()) {
	echo "<tr><td>".$row["content"]."</td></tr>";	
    }
echo "</table>";
    $result->free();
}
$mysqli->close();
?>