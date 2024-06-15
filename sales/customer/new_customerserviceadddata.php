<?php

$datee="";
$stime="";
require_once('connection.php');

//Generate Customer Id.........................
$c_query =  'SELECT customerid FROM addservice ORDER BY id DESC LIMIT 1';
    $c_result =  mysqli_query($conn, $c_query);
     $c_row =  mysqli_fetch_array($c_result);

$records = $c_row['customerid'];
$record= $records+1;
echo $record;

 //Vehicle Id Customer Id.........................
$v_query =  'SELECT vehicleid FROM vehicledetails ORDER BY ver_id DESC LIMIT 1';
//echo $v_query;
    $v_result =  mysqli_query($conn, $v_query);
    $v_row =  mysqli_fetch_array($v_result);

$v_records = $v_row['vehicleid'];
$vrecord= $v_records+1;
//echo $vrecord;

 //Service Id .......................
$s_query =  'SELECT service_id FROM servicedetails ORDER BY serv_id DESC LIMIT 1';
//echo $s_query;
    $s_result =  mysqli_query($conn, $s_query);
    $s_row =  mysqli_fetch_array($s_result);

$s_records = $s_row['service_id'];
$srecord= $s_records+1;
//echo $vrecord;

$current_date = date("Y-m-d");
$current_time =date("h:i:sa");
$my_date = strtotime($current_date);

$customerid = $record;

echo $customerid;
$jobnumber="";
$cusname = mysqli_real_escape_string($conn,$_REQUEST['cusname']);
$cuscontact = mysqli_real_escape_string($conn,$_REQUEST['cuscontact']);

$v_record = $vrecord; 
//$vehicleid= mysqli_real_escape_string($conn,$_REQUEST['vehicleid']);
//$customerid= mysqli_real_escape_string($conn,$_REQUEST['customerid']);
$brand = mysqli_real_escape_string($conn,$_REQUEST['brand']);
$model = mysqli_real_escape_string($conn,$_REQUEST['model']);
$bodytype = mysqli_real_escape_string($conn,$_REQUEST['bodytype']);
$milage = mysqli_real_escape_string($conn,$_REQUEST['milage']);
$year =mysqli_real_escape_string($conn,$_REQUEST['year']);
$vehiclenumber = mysqli_real_escape_string($conn,$_REQUEST['vehiclenumber']);
$vehicletype = mysqli_real_escape_string($conn,$_REQUEST['vehicletype']);

$datee=$current_date;
//echo $datee;
$stime=$current_time;

$service_id = $srecord;

//$vehicleid=mysqli_real_escape_string($conn,$_REQUEST['vehicleid']);
$sectionalhead= mysqli_real_escape_string($conn,$_REQUEST['sectionalhead']);
$employer= mysqli_real_escape_string($conn,$_REQUEST['employer']);


$sql1 = "INSERT INTO addservice(customerid,cusname,cuscontact,datee,stime)
VALUES ('$record','$cusname','$cuscontact','$datee','$stime')";
	

	if ($conn->query($sql1) === TRUE) {
//  echo "New record created successfully sql 1";
		echo '<script type ="text/JavaScript">';  
echo 'alert("successfully Added to pending job list")';  
echo '</script>';
//header("location: pendingservice.php");
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$sql2= "INSERT INTO vehicledetails(vehicleid,customerid,brand,model,bodytype,milage,year,vehiclenumber,vehicletype)
VALUES ('$vrecord','$record','$brand','$model','$bodytype','$milage','$year','$vehiclenumber','$vehicletype')";


	if ($conn->query($sql2) === TRUE) {
 // echo "New record created successfully sql2";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}


$sql3= "INSERT INTO servicedetails(customerid,service_id,sectionalhead,employer)
VALUES ('$record','$srecord','$sectionalhead','$employer')";


	if ($conn->query($sql3) === TRUE) {
  //echo "New record created successfully sql2";
} else {
  echo "Error: " . $sql3 . "<br>" . $conn->error;
}

 //if(isset($_POST['submit'])){     
       
   // }


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


$customer_list =  "INSERT INTO customer_list(customerid,cusname,cuscontact,join_date,join_time)
VALUES ('$customerid','$cusname','$cuscontact','$datee','$stime')";

 
   if ($conn->query($customer_list) === TRUE) {
 // echo "New record created successfully sql2";
} else {
  echo "Error: " . $customer_list. "<br>" . $conn->error;
}


$conn->close();

?>


   