<?php 
require_once 'connection.php';
if(isset($_POST['reject'])){
   
    mysqli_query($conn, "DELETE FROM bill_table");
header('location: ../customer/ongoingdataadd.php',false);
}
?>