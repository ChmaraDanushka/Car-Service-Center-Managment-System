
<html>
<head>
  <title>Add New Service</title>
</head>
<body>

  <!--main div-->
</body>
</html>

<?php include_once 'connection.php'; ?>

<?php
$jobnumber = mysqli_real_escape_string($conn,$_REQUEST['jobnumber']);
$customerid = mysqli_real_escape_string($conn,$_REQUEST['customerid']);
$cusname = mysqli_real_escape_string($conn,$_REQUEST['cusname']);
$cuscontact = mysqli_real_escape_string($conn,$_REQUEST['cuscontact']);
$vehiclenumber= mysqli_real_escape_string($conn,$_REQUEST['vehiclenumber']);
$vehicletype= mysqli_real_escape_string($conn,$_REQUEST['vehicletype']);
$brand = mysqli_real_escape_string($conn,$_REQUEST['brand']);
$model = mysqli_real_escape_string($conn,$_REQUEST['model']);
$bodytype = mysqli_real_escape_string($conn,$_REQUEST['bodytype']);
$milage = mysqli_real_escape_string($conn,$_REQUEST['milage']);
$year =mysqli_real_escape_string($conn,$_REQUEST['year']);
$service_id = mysqli_real_escape_string($conn,$_REQUEST['service_id']);
//$vehicleid=mysqli_real_escape_string($conn,$_REQUEST['vehicleid']);
$sectionalhead= mysqli_real_escape_string($conn,$_REQUEST['sectionalhead']);
$employer= mysqli_real_escape_string($conn,$_REQUEST['employer']);
$datee=mysqli_real_escape_string($conn,$_REQUEST['join_date']);
$stime=mysqli_real_escape_string($conn,$_REQUEST['join_time']);

 
$sql4= "INSERT INTO pendingservice(customerid,cusname,cuscontact,vehiclenumber,vehicletype,brand,model,bodytype,milage,year,serviceid,sectionalhead,employer,p_datee,p_stime)
VALUES ('$customerid','$cusname','$cuscontact','$vehiclenumber','$vehicletype','$brand','$model','$bodytype','$milage','$year','$service_id','$sectionalhead','$employer','$datee','$stime')";
 

  if ($conn->query($sql4) === TRUE) {
//  echo "New record created successfully sql 1";
    echo '<script type ="text/JavaScript">';  
echo 'alert("successfully Added to pending job list")';  
echo '</script>';
header("location: pendingservice.php");
} else {
  echo "Error: " . $sql4 . "<br>" . $conn->error;
}

?>

