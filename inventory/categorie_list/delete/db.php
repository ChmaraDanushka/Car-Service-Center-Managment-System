<?php 


 $servername = "localhost";
 $username   = "supun2";
 $password   = "admin";
 $dbname     = "inveto";


$conn=  mysqli_connect( $servername ,$username,$password,$dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>