
<html>
<head>
  <title>Add New Service</title>
</head>
<body>

  <!--main div-->

<div class="newvehical">
  <div class="mainone">

<form action="" method="post">

<!-- customerdetails-->


<div class="inputa">
  <label for="cusname"></label>
  <input type="text" id="cusname" name="cusname" placeholder="Customername">
</div>
<input type="submit" name="submit" value="submit">
</form>
</div>
</body>
</html>




<?php include_once 'connection.php'; ?>

<?php  

$id=mysqli_real_escape_string($conn,$_REQUEST['cusname']);

echo $id;

$customerid="";
$cusname="";
$cuscontact="";
$p_datee="";
$p_stime="";
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
$vehiclenumber="";
$vehicletype="";

$res=mysqli_query($conn,"SELECT * FROM customer_list WHERE customerid=$id"); //sending data for pending.php

while($row=mysqli_fetch_array($res))
{

$customerid=$row["customerid"];
$cusname=$row["cusname"];
$cuscontact=$row["cuscontact"];
$p_datee=$row["join_date"];
$p_stime=$row["join_time"];
}


$res=mysqli_query($conn,"SELECT * FROM vehicledetails,servicedetails WHERE vehicledetails.customerid=servicedetails.customerid AND vehicledetails.customerid={$id}"); //sending data for pending.php



while($row=mysqli_fetch_array($res))
{

//vehicle details
$customerid=$row["customerid"];
$brand=$row["brand"];
$model=$row["model"];
$bodytype=$row["bodytype"];
$milage=$row["milage"];
$year=$row["year"];
$vehiclenumber=$row["vehiclenumber"];
$vehicletype=$row["vehicletype"];
$serviceid=$row["service_id"];
$sectionalhead=$row["sectionalhead"];
$employer=$row["employer"];

}

$conn->close();

?>

<form action="new_customerserviceadddata.php" method="post">

<!-- customerdetails-->

<div class="inputa">
  <label for="customerid">Customer ID</label>
  <input type="customerid" id="customerid" name="customerid" placeholder="" value="<?php echo $customerid ; ?>">
</div>


<div class="inputa">
  <label for="cusname"> customer Name</label>
  <input type="text" id="cusname" name="cusname" placeholder="" required="" value="<?php echo $cusname;?>">
</div>

<div class="inputa">
  <label for="cuscontact">Contact</label>
  <input type="text" id="cuscontact" name="cuscontact" placeholder="" value="<?php echo $cuscontact;?>" >
</div>
  <!--vehicledetails-->
  


<div class="inputa">
  <label for="vehiclenumber">vehiclenumber</label>
  <input type="text" id="vehiclenumber" name="vehiclenumber" placeholder="" required="" value="<?php echo $vehiclenumber;?>">
 
</div>

<div class="inputa">
  <label for="vehicletype">vehicletype</label>
  <input type="text" id="vehicletype" name="vehicletype" placeholder="" value="<?php echo $vehicletype;?>">
 </div>
 <div class="inputa">

  <label for="brand">brand</label>
  <input type="text" id="brand" name="brand" placeholder="" value="<?php echo $brand;?>">
</div>
<div class="inputa">
  <label for="model">model</label>
  <input type="text" id="model" name="model" placeholder="" value="<?php echo $model;?>">
</div>
</div>

<div class="maintwo">

<div class="inputb">
<div>
  <label for="bodytype">bodytype</label>
  <input type="text" id="bodytype" name="bodytype" placeholder="" value="<?php echo $bodytype;?>">
 
</div>

<div class="inputb">
   <label for="milage">milage</label>
   <input type="text" id="milage" name="milage" placeholder="" value="<?php echo $milage;?>">

</div>



<div class="inputb">

  <label for="year">year</label>
   <input type="text" id="year" name="year" placeholder="" value="<?php echo $year;?>">
</div>



<div class="inputb">

  <label for="serviceid">serviceid</label>

  <input type="text" id="serviceid" name="serviceid" placeholder=""  value="<?php echo $serviceid;?>">
</div>

<div class="inputb">

  <label for="sectionalhead">sectionalhead</label>

  <input type="text" id="sectionalhead" name="sectionalhead" placeholder=""  value="<?php echo $sectionalhead;?>">
</div>

<div class="inputb">

  <label for="employer">employer</label>

  <input type="text" id="employer" name="employer" placeholder=""  value="<?php echo $employer;?>">
</div>




<div class="inputb">

  <label for="p_datee">join date</label>
  <input type="text" id="p_datee" name="p_datee" placeholder=""  value="<?php echo $p_datee;?>">
</div>

<div class="inputb">

  <label for="p_stime">join time</label>

  <input type="text" id="p_stime" name="p_stime" placeholder=""  value="<?php echo $p_stime;?>">
</div>



 <div class="submit">
  <input type="submit" value="Submit" name="submit">
</div></div>
</form>

