<?php
 $mysqli = new mysqli("mysql.eecs.ku.edu", "grantkeebler", "phaeFae7", "grantkeebler");
 if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query="SELECT author_id, content, post_id FROM Posts";
$result=$mysqli->query($query);
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            $delete=$_POST[$row["post_id"]];
            if($delete=="on")
            {
                $query="DELETE FROM Posts WHERE post_id='" .$row["post_id"]. "'";
                $check = $mysqli->query($query);
                echo "The Post " .$row["post_id"]. " Has Been Deleted Forever<br>";
            }
        }
    }
$mysqli->close()
?>