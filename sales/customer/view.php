<?php
require_once 'connection.php';

$id=$_GET["customerid"];

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
  printf("Result set has %d rows.\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>customer registration form</title>
<meta name="generator" content="WYSIWYG Web Builder 16 - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="container">
</div>
<div id="Layer3">
<div id="wb_Text33">
<span style="color:#141414;font-family:Arial;font-size:18px;">Service History</span></div>
<div id="wb_Form5">
<form name="mapform" method="post" action="" id="Form5">
<input type="hidden" name="searchtype" value="address">
<input type="hidden" name="country" value="US">


<div id="">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>Customer ID </strong></span>
<input type="text" id="Editbox35" name="customerid" value="<?php echo $customerid; ?>" spellcheck="false" placeholder="customer id" readonly>

<div id="">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>Name </strong></span></div>
<input type="text" id="Editbox33" name="cusname" value="<?php echo $cusname; ?> " spellcheck="false" placeholder=" Customer Name" readonly>

<div id="">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>Contact </strong></span></div>
<div id="wb_Text46">
<input type="text" id="Editbox36" name="cuscontact" value="<?php echo $cuscontact; ?>" spellcheck="false" placeholder="Contact Number" readonly>

<div id="">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>jobnumber </strong></span></div>
<div id="wb_Text46">
<input type="text" id="Editbox36" name="cuscontact" value="<?php echo $rowcount ?>" spellcheck="false" placeholder="Contact Number" readonly>

<div id="">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong> Vehicle Number  </strong> </span></div>
<input type="text" id="Editbox37" name="vehiclenumber" value="<?php echo $vehiclenumber; ?>" spellcheck="false" placeholder="Vehicle Number" readonly>

<div id="">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>Vehicle Type  </strong></span></div>
<input type="text" id="Editbox38" name="vehicletype" value="<?php echo $vehicletype; ?>" spellcheck="false" placeholder="vehicle type" readonly>

<div id="">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>brand </strong></span></div>
<input type="text" id="Editbox39" name="brand" value="<?php echo $brand; ?>" spellcheck="false" placeholder="Brand" readonly>

<div id="">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>Model </strong></span></div>
<input type="text" id="Editbox39" name="model" value="<?php echo $model; ?>" spellcheck="false" placeholder="Model" readonly>
<div id="">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>join Date </strong></span></div>
<input type="text" id="Editbox39" name="join_date" value="<?php echo $join_date; ?>" spellcheck="false" placeholder="Join Date" readonly>

<div id="wb_Text51">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>Join Time </strong></span></div>
<input type="text" id="Editbox39" name="join_time" value="<?php echo $join_time;  ?>" spellcheck="false" placeholder="join Time" readonly> 

<br>

<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>Location  </strong></span></div>
<select name="location" id="city">
  <option value="Kandy">Kandy</option>
  <option value="Mulgampala">Mulgampala</option>
  <option value="Gatabe">Gatabe</option>
  <option value="Peradeniya">Peradeniya</option>
  <option value="Polgahamula">Polgahamula</option>
</select>

</form>


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


<table class="coll-log-12">
  
  <thead>
    <tr>     
      <th>#</th>     
      <th>Brand</th>
      <th>Model</th>
      <th>Body Type</th>
      <th>Milage</th>
      <th>Year</th>     
      <th>Date</th>  
      <th>Time</th>       
      <th>Sectional Head </th>  
      <th>Employeer</th>      
    </tr>
  </thead>

  <tbody>

    <?php 
$res=mysqli_query($conn,"SELECT * FROM approved WHERE customerid=$customerid"); //sending data for pending.php

while($row=mysqli_fetch_array($res))
{
  echo "<tr>";

//collecting data from customer.php

echo"<td>"; echo $row["oid"]; echo"</td>";

echo"<td>"; echo $row["brand"]; echo"</td>";
echo"<td>"; echo $row["model"]; echo"</td>";
echo"<td>"; echo $row["bodytype"]; echo"</td>";
echo"<td>"; echo $row["milage"]; echo"</td>";
echo"<td>"; echo $row["year"]; echo"</td>";


//collecting data from service.php
echo"<td>"; echo $row["datee"]; echo"</td>";
echo"<td>"; echo $row["stime"]; echo"</td>";
echo"<td>"; echo $row["sectionalhead"]; echo"</td>";
echo"<td>"; echo $row["employer"]; echo"</td>";

  //selecting the page  approve or reject

    echo "</tr>";
  }
  $conn->close();
  ?>

</tbody>
</table>
</div>
</form>
</div>
</div>
</body>
</html>




