<?php
require_once '../customer/connection.php';
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
$year =mysqli_real_escape_string($conn,$_REQUEST['year']);
$vehiclenumber = mysqli_real_escape_string($conn,$_REQUEST['vehiclenumber']);
$milage = mysqli_real_escape_string($conn,$_REQUEST['milage']);
$location = mysqli_real_escape_string($conn,$_REQUEST['location']);
$model = mysqli_real_escape_string($conn,$_REQUEST['model']);
$bodytype = mysqli_real_escape_string($conn,$_REQUEST['bodytype']);
$member = mysqli_real_escape_string($conn,$_REQUEST['c_type']);

echo $vehicletype;
$datee=$current_date;
//echo $datee;
$stime=$current_time;

$service_id = $srecord;

//$vehicleid=mysqli_real_escape_string($conn,$_REQUEST['vehicleid']);
$sectionalhead= mysqli_real_escape_string($conn,$_REQUEST['sectionalhead']);
$employer= mysqli_real_escape_string($conn,$_REQUEST['employer']);


$sql1 = "INSERT INTO addservice(customerid,cusname,cuscontact,datee,stime,location)
VALUES ('$record','$cusname','$cuscontact','$datee','$stime','$location')";
	

	if ($conn->query($sql1) === TRUE) {
//  echo "New record created successfully sql 1";
		echo '<script type ="text/JavaScript">';  
echo 'alert("successfully Added to pending job list")';  
echo '</script>';
//header("location: pendingservice.php");
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$sql2= "INSERT INTO vehicledetails(vehicleid,customerid,model,bodytype,milage,year,vehiclenumber)
VALUES ('$vrecord','$record','$model','$vehicletype','$milage','$year','$vehiclenumber')";


	if ($conn->query($sql2) === TRUE) {
 // echo "New record created successfully sql2";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}


$sql3= "INSERT INTO servicedetails(customerid,service_id)
VALUES ('$record','$srecord')";


	if ($conn->query($sql3) === TRUE) {
  //echo "New record created successfully sql2";
} else {
  echo "Error: " . $sql3 . "<br>" . $conn->error;
}

 //if(isset($_POST['submit'])){     
       
   // }


$sql4= "INSERT INTO pendingservice(customerid,cusname,cuscontact,vehiclenumber,model,bodytype,milage,year,serviceid,p_datee,p_stime)
VALUES ('$customerid','$cusname','$cuscontact','$vehiclenumber','$model','$vehicletype','$milage','$year','$service_id','$datee','$stime')";
	

	if ($conn->query($sql4) === TRUE) {
//  echo "New record created successfully sql 1";
		echo '<script type ="text/JavaScript">';  
echo 'alert("successfully Added to pending job list")';  
echo '</script>';

} else {
  echo "Error: " . $sql4 . "<br>" . $conn->error;
}

$sql5= "INSERT INTO today_added(customer_id,cus_contact)
VALUES ('$customerid','$cuscontact')";
	

	if ($conn->query($sql5) === TRUE) {
//  echo "New record created successfully sql 1";
		echo '<script type ="text/JavaScript">';  
//echo 'alert("successfully Added to pending job list")';  
header("location: pendingservice.php");
echo '</script>';

} else {
  echo "Error: " . $sql5 . "<br>" . $conn->error;
}


$customer_list =  "INSERT INTO customer_list(customerid,cusname,cuscontact,member,join_date,join_time,location)
VALUES ('$customerid','$cusname','$cuscontact','$member','$datee','$stime','$location')";

 
   if ($conn->query($customer_list) === TRUE) {
 // echo "New record created successfully sql2";
} else {
  echo "Error: " . $customer_list. "<br>" . $conn->error;
}


$conn->close();

?>


   