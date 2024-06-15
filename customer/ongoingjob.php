
<?php
require_once 'connection.php';

//if (empty($_GET["pid"])) {
session_start();    

$id=$_GET["customerid"];
$_SESSION['deleteid'] =$id;
$customerid="";
$cusname="";
$cuscontact="";
$datee="";
$stime="";
$vehicle_id="";

$model="";
$bodytype="";
$milage="";
$year="";
$serviceid="";




$res=mysqli_query($conn, "SELECT * FROM pendingservice WHERE customerid=$id");
while($row=mysqli_fetch_array($res))

{
$id=$row["pid"];
$customerid=$row["customerid"];
$cusname=$row["cusname"];
$cuscontact=$row["cuscontact"];
$datee=$row["p_datee"];
$stime=$row["p_stime"];
$model=$row["model"];
$bodytype=$row["bodytype"];
$milage=$row["milage"];
$year=$row["year"];
$serviceid=$row["serviceid"];


}

?>

    <?php
    
$sql1 = "INSERT INTO approved(customerid,cusname,cuscontact,datee,stime,model,bodytype,milage,year,serviceid)
VALUES ('$customerid','$cusname','$cuscontact','$datee','$stime','$model','$bodytype','$milage','$year','$serviceid')";
  

  if ($conn->query($sql1) === TRUE) {


$sql5 = "DELETE FROM pendingservice WHERE customerid=$id";


//  echo "New record created successfully sql 1";
    echo '<script type ="text/JavaScript">'; 
     //mysqli_query($conn,"DELETE FROM pendingservice WHERE customerid=$id"); 
echo 'alert("successfully Added to  job list")';  
echo '</script>';

header("location:deletepending.php?id=$id");
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();

 ?>
