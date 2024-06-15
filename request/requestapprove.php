<?php
require_once 'connection.php';

$id=$_GET["customerid"];


$delete = "DELETE FROM request WHERE customerid='$id'";
if($conn->query($delete)=== TRUE){echo "record delete successfully";}

$customerid="";
$cusname="";
$cuscontact="";
$p_datee="";
$p_stime="";
$vehicle_id="";
$model="";
$bodytype="";
$milage="";
$year="";
$serviceid="";
$vehiclenumber="";


$res=mysqli_query($conn,"SELECT * FROM customer_list WHERE customerid=$id"); //sending data for pending.php

while($row=mysqli_fetch_array($res))
{
$customerid=$row["customerid"];
$cusname=$row["cusname"];
$cuscontact=$row["cuscontact"];
$p_datee=$row["join_date"];
$p_stime=$row["join_time"];
}

//$res=mysqli_query($conn,"SELECT * FROM vehicledetails,servicedetails,addservice WHERE vehicledetails.customerid=servicedetails.customerid=addservice.customerid AND vehicledetails.customerid=$id"); //sending data for pending.php

//$res=mysqli_query($conn,"SELECT * FROM vehicledetails,servicedetails,customer_list WHERE vehicledetails.customerid=servicedetails.customerid=customer_list.customerid AND vehicledetails.customerid={$id}"); //sending data for pending.php

$res=mysqli_query($conn,"SELECT * FROM vehicledetails,servicedetails WHERE vehicledetails.customerid=servicedetails.customerid AND vehicledetails.customerid={$id}"); //sending data for pending.php



while($row=mysqli_fetch_array($res))
{

//vehicle details
$customerid=$row["customerid"];

$model=$row["model"];
$bodytype=$row["bodytype"];
$milage=$row["milage"];
$year=$row["year"];
$vehiclenumber=$row["vehiclenumber"];

$serviceid=$row["service_id"];


}

?>

    <?php

 echo $customerid;


$sql1 = "INSERT INTO pendingservice(customerid,cusname,cuscontact,vehiclenumber,vehicletype,model,bodytype,milage,year,serviceid,p_datee,p_stime)
VALUES ('$customerid','$cusname','$cuscontact','$vehiclenumber','$vehicletype','$model','$bodytype','$milage','$year','$serviceid','$p_datee','$p_stime')";
  
  
  if ($conn->query($sql1) === TRUE) {
//  echo "New record created successfully sql 1";
    echo '<script type ="text/JavaScript">'; 

  

    header("location: pendingservice.php");
echo 'alert("successfully Added to  job list")';  
echo '</script>';
//header("location: pendingservice.php");
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();
?>