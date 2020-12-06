<?php
$mysqli= new mysqli('mysql.eecs.ku.edu', 'grantkeebler' , 'phaeFae7', 'grantkeebler');
 
/* check connection */
if ($mysqli->connect_errno) {
   printf("Connect failed: %s\n", $mysqli->connect_error);
   exit();
}

$username=$_POST["username"];
$post=$_POST["post"];
$select="SELECT user_id FROM Users";
$result=$mysqli->query($select);
$find;
$insert="INSERT INTO Posts (author_id, content) VALUES ('$username', '$post')";
$result2=$mysqli->query($insert);
if($post==""){
 echo "You can't post nothing!";
}
if($result->num_rows >0){
 while($row=$result->fetch_assoc()){
  if($row["user_id"] == $username){
    echo " This is User " .$row["user_id"]. " ";
    $find=TRUE;
  }
  else{
    $find=FALSE;
  }
 }
}
if(!$find){
 echo "The User does Not Exist!";
 exit();
}
if($result2 = $mysqli->query($insert)){
 echo "Post was created for " .$username;
}
else{
 echo "Post Failed to be created";
}
$mysqli->close();
?>