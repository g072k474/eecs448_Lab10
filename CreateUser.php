<?php
 $mysqli= new mysqli('mysql.eecs.ku.edu', 'grantkeebler' , 'phaeFae7', 'grantkeebler');
 
 /* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

 $newUser=$_POST['username'];
 echo "<h1>" .$newUser. "<h1>";
 $check="INSERT INTO Users (user_id) VALUES ('$newUser')";
 if($newUser==''){
     echo "Your Username cannot be Empty!";
 }
 else{
    if($mysqli->query($check)==TRUE)
    {
        echo "User Successfully Created!";
    }
    else{
        echo "User Failed to be Created!";
    }
 }
 $mysqli->close();
?>