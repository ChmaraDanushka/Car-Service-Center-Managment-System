
<?php
require_once 'connection.php';
?>

<?php

$d_cusname = mysqli_real_escape_string($conn,$_REQUEST['cusname']);
$d_cuscontact = mysqli_real_escape_string($conn,$_REQUEST['cuscontact']);
$d_discription = mysqli_real_escape_string($conn,$_REQUEST['discription']);
$d_date =mysqli_real_escape_string($conn,$_REQUEST['date']);
$d_time = mysqli_real_escape_string($conn,$_REQUEST['time']);

$cuscontact=$d_cuscontact ;
$customerid="";
$res=mysqli_query($conn, "SELECT * FROM customer_list WHERE cuscontact=$cuscontact");
while($row=mysqli_fetch_array($res)){

$customerid=$row["customerid"];

}


$sql1 = "INSERT INTO request(customerid,cusname,cuscontact,discription,date,time)
VALUES ('$customerid','$d_cusname','$d_cuscontact','$d_discription','$d_date','$d_time')";
	

	if ($conn->query($sql1) === TRUE) {
//  echo "New record created successfully sql 1";
		echo '<script type ="text/JavaScript">';  
echo 'alert("request successfull")';  
header("location: request_list.php");
echo '</script>';
//header("location: pendingservice.php");
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}




$conn->close();

?>











   