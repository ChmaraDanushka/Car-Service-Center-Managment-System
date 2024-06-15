<?php
require_once 'customer/connection.php';

$id=$_GET["id"];

$jid=$id;

//$jobnumber="";
$customerid="";
$cusname="";
$cuscontact="";
$vehiclenumber="";
$vehicletype="";
$brand="";
$model="";
$join_date="";
$join_time="";
$result="";
$rowcount="";

$res1=mysqli_query($conn,"SELECT * FROM vehicledetails,servicedetails WHERE vehicledetails.customerid=servicedetails.customerid AND vehicledetails.customerid={$id}"); //sending data for pending.php

while($row=mysqli_fetch_array($res1))
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

$res=mysqli_query($conn, "SELECT * FROM customer_list WHERE customerid=$id");
while($row=mysqli_fetch_array($res))

{

$id=$row["cid"];
//$jobnumber=$row["jobnumber"];
$customerid=$row["customerid"];
$cusname=$row["cusname"];
$cuscontact=$row["cuscontact"];
$join_date=$row["join_date"];
$join_time=$row["join_time"];

}



$sql4="SELECT * FROM approved WHERE customerid=$jid";

if ($result=mysqli_query($conn,$sql4))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  //printf("Result set has %d rows.\n",$rowcount);//
  // Free result set
  mysqli_free_result($result);
  }

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>customer registration form</title>

</head>


<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: light gray;
  margin:auto;
  width: 50%
}

 @page {
    size: 21cm 29.7cm;
    margin: 30mm 45mm 30mm 45mm;     
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 10px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


.one{
  float: left;  
  width: 48%;     
  display: inline-block;
  border: none;
  background-color: ; 
  
}

.two{
  float: right;
  width: 48%;   
  margin-left: 5px;
  display: inline-block;
  border: none;  
  background-color: ; 
}

.main{
  width: 100%;
  padding: 15px;
  margin: 5px 0 10px 0;
  display: inline-block;
  border: none;
  background-color: ;
  
}

</style>


<div class="main">
  

<div id="container">
</div>
<div id="Layer3">
<div id="wb_Text33">

<span style="#141414;"><h2>Service History</h2></strong></div>
<div id="wb_Form5">
<form name="mapform" method="post" action="" id="Form5">  
<input type="hidden" name="searchtype" value="address">
<input type="hidden" name="country" value="US">

<div class="one">
<div id="">
<span style="#141414;font-family:Arial;"><strong>Customer ID </strong></span>
<input type="text" id="Editbox35" name="customerid" value="<?php echo $customerid; ?>" spellcheck="false" placeholder="customer id" readonly>

<div id="">
<span style="#141414;font-family:Arial;"><strong>Name </strong></span></div>
<input type="text" id="Editbox33" name="cusname" value="<?php echo $cusname; ?> " spellcheck="false" placeholder=" Customer Name" readonly>

<div id="">
<span style="#141414;font-family:Arial;"><strong>Contact </strong></span></div>
<div id="wb_Text46">
<input type="text" id="Editbox36" name="cuscontact" value="<?php echo $cuscontact; ?>" spellcheck="false" placeholder="Contact Number" readonly>

<div id="">
<span style="#141414;font-family:Arial;"><strong>jobnumber </strong></span></div>
<div id="wb_Text46">
<input type="text" id="Editbox36" name="cuscontact" value="<?php echo $rowcount ?>" spellcheck="false" placeholder="Contact Number" readonly>

<div id="">
<span style="#141414;font-family:Arial;"><strong> Vehicle Number  </strong> </span></div>
<input type="text" id="Editbox37" name="vehiclenumber" value="<?php echo $vehiclenumber; ?>" spellcheck="false" placeholder="Vehicle Number" readonly>
</div>
</div>
</div>
</div>

<div class="two">

<div id="">
<span style="#141414;font-family:Arial;"><strong>Vehicle Type  </strong></span></div>
<input type="text" id="Editbox38" name="vehicletype" value="<?php echo $vehicletype; ?>" spellcheck="false" placeholder="vehicle type" readonly>

<div id="">
<span style="#141414;font-family:Arial;"><strong>brand </strong></span></div>
<input type="text" id="Editbox39" name="brand" value="<?php echo $brand; ?>" spellcheck="false" placeholder="Brand" readonly>

<div id="">
<span style="#141414;font-family:Arial;"><strong>Model </strong></span></div>
<input type="text" id="Editbox39" name="model" value="<?php echo $model; ?>" spellcheck="false" placeholder="Model" readonly>

<div id="">
<span style="#141414;font-family:Arial;"><strong>join Date </strong></span></div>
<input type="text" id="Editbox39" name="join_date" value="<?php echo $join_date; ?>" spellcheck="false" placeholder="Join Date" readonly>

<div id="wb_Text51">
<span style="#141414;font-family:Arial;"><strong>Join Time </strong></span></div>
<input type="text" id="Editbox39" name="join_time" value="<?php echo $join_time;  ?>" spellcheck="false" placeholder="join Time" readonly> 
</div>
</div>

<?php 

if(isset($_POST["update"])){
  mysqli_query($conn,"UPDATE customer_list SET cusname='$_POST[cusname]', cuscontact='$_POST[cuscontact]', vehiclenumber='$_POST[vehiclenumber]',vehicletype='$_POST[vehicletype]',brand='$_POST[brand]',model='$_POST[model]',join_date='$_POST[join_date]',join_time='$_POST[join_time]' WHERE cid=$id");

  ?>

 <script type="text/javascript">
   window.location="vip_customers.php";
   alert("Update Successfull");
 </script>
<?php
}
?>

</tbody>
</table>
</div>
</form>
</div>
</div>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>E Compartment</h2>

<table>
  <tr>
    <th>E Compartment</th>
    <th>Top up</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Engine Oil</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Gear Oil</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>P Steering Oil</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Defferential Oil (F/R) </td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Cluth Oil</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Brake Oil</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Battery Water</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>R Coolent/ Water</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Wiper Water</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Oil Filter</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Fuel Filter</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Air Filter</td>
    <td></td>
    <td></td>
  </tr>
</table>


<h2>Stores</h2>

<table>
  <tr>
    <th>Code</th>
    <th>Lubricant & Filters</th>
    <th>Qty</th>
    <th>Other Items</th>
  </tr>
  <tr>
    <td></td>
    <td>Engine Oil</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Gear /ATE</td>
    <td></td>
    <td></td>
  </tr>
    <tr>
    <td></td> 
    <td>Defferential Oil (F/R) </td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Power s Oil</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Coolant</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Oil Filter</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Air Filter</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Fuel Filter</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Battery Water</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Pen Oil</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Kerosine Oil</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>High Presure</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Auto Cream</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Ever Shine</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Car Wash</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Loquid Car Wash </td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Grease</td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>




