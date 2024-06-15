<?php 
//insert.php
include('conn.php');
if(isset($_POST["firstname"]))
{
 $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
 $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
 mysqli_query($conn,"INSERT INTO user (firstname, lastname) values 
('$firstname', '$lastname')");
}

else{
    echo "Reenter";
}
  ?>