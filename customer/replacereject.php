<?php
require_once 'connection.php';

//if (!empty($_GET["pid"])) {
    

$customerid=$_GET["customerid"];
$id="";
$cusname="";
$cuscontact="";
$vehiclenumber="";
$vehicletype="";
$service_id="";
$datee="";
$stime="";
$vehicle_id="";
$brand="";
$model="";
$bodytype="";
$milage="";
$year="";
$serviceid="";
$servicetype="";
$sectionalhead="";
$employer="";


$res=mysqli_query($conn, "SELECT * FROM rejectedservices WHERE customerid=$customerid");
while($row=mysqli_fetch_array($res))

{
$id=$row["rid"];
$customerid=$row["customerid"];
$cusname=$row["cusname"];
$cuscontact=$row["cuscontact"];
$datee=$row["join_date"];
$stime=$row["join_time"];
$vehiclenumber=$row["vehicle_number"];
$vehicletype=$row["vehicle_type"];
$brand=$row["brand"];
$model=$row["model"];
$bodytype=$row["bodytype"];
$milage=$row["milage"];
$year=$row["year"];
$service_id=$row["serviceid"];
$sectionalhead=$row["sectionalhead"];
$employer=$row["employer"];

}
$sql4= "INSERT INTO pendingservice(customerid,cusname,cuscontact,vehiclenumber,vehicletype,brand,model,bodytype,milage,year,serviceid,sectionalhead,employer,p_datee,p_stime)
VALUES ('$customerid','$cusname','$cuscontact','$vehiclenumber','$vehicletype','$brand','$model','$bodytype','$milage','$year','$service_id','$sectionalhead','$employer','$datee','$stime')";
 

  if ($conn->query($sql4) === TRUE) {
//  echo "New record created successfully sql 1";
    echo '<script type ="text/JavaScript">';  
echo 'alert("successfully Added to pending job list")';  
echo '</script>';
mysqli_query($conn,"DELETE FROM rejectedservices WHERE customerid='16'");
header("location: pendingservice.php");
} else {
  echo "Error: " . $sql4 . "<br>" . $conn->error;
}
   
     
?>
