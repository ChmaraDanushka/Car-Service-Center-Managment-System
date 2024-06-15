 <?php  require_once('db_connect.php');?>


<?php


$username = mysqli_real_escape_string($conn,$_REQUEST['username']);
$name= mysqli_real_escape_string($conn,$_REQUEST['name']);
$userrole = mysqli_real_escape_string($conn,$_REQUEST['userrole']);
$email = mysqli_real_escape_string($conn,$_REQUEST['email']);
$password= mysqli_real_escape_string($conn,$_REQUEST['password']);


$sql = "INSERT INTO users(username,name,userrole,email,password)
        VALUES('$username', '$name','$userrole','$email', '$password')";

if ($conn->multi_query($sql)===TRUE) 
 
 {
	echo "<font color='green'>   Data added successfully.";
   
    
} 
	else{
	echo "Error: could not able to execute $sql." . $sql . "<br>".  $conn->error;}

$conn->close();

?>





