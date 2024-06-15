<?php include_once 'connection.php'; ?>

<?php

$customerid= mysqli_real_escape_string($conn,$_REQUEST['customerid']);
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
$join_date= ""; 
$join_time= ""; 


$res=mysqli_query($conn,"SELECT * FROM customer_list WHERE customerid=$customerid"); //sending data for pending.php

while($row=mysqli_fetch_array($res))
{
$customerid=$row["customerid"];
$cusname=$row["cusname"];
$cuscontact=$row["cuscontact"];
$join_date=$row["join_date"];
$join_time=$row["join_time"];
}

//$res=mysqli_query($conn,"SELECT * FROM vehicledetails,servicedetails,addservice WHERE vehicledetails.customerid=servicedetails.customerid=addservice.customerid AND vehicledetails.customerid=$id"); //sending data for pending.php

//$res=mysqli_query($conn,"SELECT * FROM vehicledetails,servicedetails,customer_list WHERE vehicledetails.customerid=servicedetails.customerid=customer_list.customerid AND vehicledetails.customerid={$id}"); //sending data for pending.php

$res=mysqli_query($conn,"SELECT * FROM vehicledetails,servicedetails WHERE vehicledetails.customerid=servicedetails.customerid AND vehicledetails.customerid={$customerid}"); //sending data for pending.php

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
 
?>

<form action="flow.php" method="post">

<div class="inputa">
  <label for="customerid"></label>
  <input type="customerid" id="customerid" name="customerid" placeholder="" value="<?php echo $customerid ; ?>" readonly>
</div>

<div class="inputa">
  <label for="cusname"></label>
  <input type="text" id="cusname" name="cusname" placeholder="" required="" value="<?php echo $cusname;?>" readonly>
</div>

<div class="inputa">
  <label for="cuscontact"></label>
  <input type="text" id="cuscontact" name="cuscontact" placeholder="" value="<?php echo $cuscontact;?>" readonly>
</div> 

<div class="inputa">
  <label for="vehiclenumber"></label>
  <input type="text" id="vehiclenumber" name="vehiclenumber" placeholder="" required="" value="<?php echo $vehiclenumber;?>" readonly> 
</div>

<div class="inputa">
  <label for="vehicletype"></label>
  <input type="text" id="vehicletype" name="vehicletype" placeholder="" value="<?php echo $vehicletype;?>" readonly>
 </div>

 <div class="inputa">
  <label for="brand"></label>
  <input type="text" id="brand" name="brand" placeholder="" value="<?php echo $brand;?>" readonly>
</div>

<div class="inputa">
  <label for="model"></label>
  <input type="text" id="model" name="model" placeholder="" value="<?php echo $model;?>" readonly>
</div>
</div>

<div class="maintwo">

<div class="inputb">
<div>
  <label for="bodytype"></label>
  <input type="text" id="bodytype" name="bodytype" placeholder="" value="<?php echo $bodytype;?>" readonly> 
</div>

<div class="inputb">
   <label for="milage"></label>
   <input type="text" id="milage" name="milage" placeholder="" value="<?php echo $milage;?>" readonly>
</div>

<div class="inputb">
  <label for="year"></label>
   <input type="text" id="year" name="year" placeholder="" value="<?php echo $year;?>" readonly>
</div>

<div class="inputb">
  <label for="serviceid"></label>
  <input type="text" id="serviceid" name="service_id" placeholder=""  value="<?php echo $serviceid;?>" readonly>
</div>

<div class="inputb">
  <label for="sectionalhead"></label>
  <input type="text" id="sectionalhead" name="sectionalhead" placeholder=""  value="<?php echo $sectionalhead;?>" readonly>
</div>

<div class="inputb">
  <label for="employer"></label>
  <input type="text" id="employer" name="employer" placeholder=""  value="<?php echo $employer;?>" readonly>
</div>

<div class="inputb">
  <label for="join_date"></label>
  <input type="text" id="join_date" name="join_date" placeholder=""  value="<?php echo $join_date;?>" readonly>
</div>

<div class="inputb">
  <label for="join_time"></label>
  <input type="text" id="join_time" name="join_time" placeholder=""  value="<?php echo $join_time;?>" readonly>
</div>

<div class="submit">
<input type="submit" name="submit" >
</div></div> 
</form>