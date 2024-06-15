<?php
require_once 'connection.php';

//if (empty($_GET["pid"])) {
    

$id=$_GET["customerid"];
$customerid="";
$cusname="";
$cuscontact="";
$datee="";
$stime="";
$vehicle_id="";
$brand="";
$model="";
$bodytype="";
$milage="";
$year="";
$serviceid="";
$sectionalhead="";
$employer="";



$res=mysqli_query($conn, "SELECT * FROM pendingservice WHERE customerid=$id");
while($row=mysqli_fetch_array($res))

{
$id=$row["pid"];
$customerid=$row["customerid"];
$cusname=$row["cusname"];
$cuscontact=$row["cuscontact"];
$datee=$row["p_datee"];
$stime=$row["p_stime"];
$brand=$row["brand"];
$model=$row["model"];
$bodytype=$row["bodytype"];
$milage=$row["milage"];
$year=$row["year"];
$serviceid=$row["serviceid"];
$sectionalhead=$row["sectionalhead"];
$employer=$row["employer"];

}

?>

    <?php
    
$sql1 = "INSERT INTO approved(customerid,cusname,cuscontact,datee,stime,brand,model,bodytype,milage,year,serviceid,sectionalhead,employer)
VALUES ('$customerid','$cusname','$cuscontact','$datee','$stime','$brand','$model','$bodytype','$milage','$year','$serviceid','$sectionalhead','$employer')";
  

  if ($conn->query($sql1) === TRUE) {

mysqli_query($conn,"DELETE FROM pendingservice WHERE customerid=$id"); 

//  echo "New record created successfully sql 1";
    echo '<script type ="text/JavaScript">'; 
     //mysqli_query($conn,"DELETE FROM pendingservice WHERE customerid=$id"); 
echo 'alert("successfully Added to  job list")';  
echo '</script>';

header("location:ongoingdataadd.php");
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();

 ?>
</body>
</html>