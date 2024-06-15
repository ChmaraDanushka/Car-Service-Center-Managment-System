<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

require_once('connection.php');

$cusname = mysqli_real_escape_string($conn,$_REQUEST['cusname']);
$cuscontact = mysqli_real_escape_string($conn,$_REQUEST['cuscontact']);
$brand = mysqli_real_escape_string($conn,$_REQUEST['brand']);
$year = mysqli_real_escape_string($conn,$_REQUEST['year']);
$vehiclenumber = mysqli_real_escape_string($conn,$_REQUEST['vehicle_number']);
$model = mysqli_real_escape_string($conn,$_REQUEST['model']);
$bodytype = mysqli_real_escape_string($conn,$_REQUEST['bodytype']);
$milage = mysqli_real_escape_string($conn,$_REQUEST['milage']);
$servicedetails = mysqli_real_escape_string($conn,$_REQUEST['servicedetails']);


$sql = "INSERT INTO addservice(cusname,cuscontact,brand,year,vehiclenumber,model,bodytype,milage,servicedetails)
VALUES ('$cusname','$cuscontact','$brand','$year','$vehiclenumber','$model','$bodytype','$milage','$servicedetails')";

if ($conn->multi_query($sql)===TRUE) 
{
	echo "<font color='green'> Data added successfully.";
       
} 
	else{
	echo "Error: could not able to execute $sql." . $sql . "<br>".  $conn->error;}

$conn->close();

?>
</body>
</html>
