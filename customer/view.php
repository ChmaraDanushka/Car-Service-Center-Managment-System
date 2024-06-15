<?php
require_once 'connection.php';

$id=$_GET["customerid"];

$jid=$id;

//$jobnumber="";
$customerid="";
$cusname="";
$cuscontact="";
$vehiclenumber="";


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

$model=$row["model"];
$bodytype=$row["bodytype"];
$milage=$row["milage"];
$year=$row["year"];
$vehiclenumber=$row["vehiclenumber"];

$serviceid=$row["service_id"];


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
$location=$row["location"];
}



$sql4="SELECT * FROM approved WHERE customerid=$jid";

if ($result=mysqli_query($conn,$sql4))
  {
//Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  //printf("Result set has %d rows.\n",$rowcount);
  //Free result set
  mysqli_free_result($result);
  }

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>customer registration form</title>
<meta name="generator" content="WYSIWYG Web Builder 16 - https://www.wysiwygwebbuilder.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
  #Layer3{
    /*background:#e8e8e8;*/
    height: 500px;
    width: 100%;
    padding-left: 30px;
    padding-top:30px;
    border:1px ;
  }
  #main_title{
    font-size:20px;
    margin-bottom:20px;
    color:#575757;
    margin-left:100px;
  }

  .input_title{
    
    font-size:15px;
    color:#575757;
  }
  #data_inputs{
    color:gray;
    height: 25px;
    width: 300px;
    border:none;
   
    margin-left:20px;
    background:none;
    padding-left:20px;
  }

  .cancel{
    position: absolute;
    margin-left:685px;
    background:none;
    border:none;
    margin-top:5px;
  }

  .table{
    margin-top:30px;
  }
  .table thead tr th{
     width:80px;
     border-bottom:1px solid rgb(212,212,212);
  }
  .table tbody tr td{
    text-align:center;
    font-size:10px;
  }
</style>
<body style="font-family: 'Roboto', sans-serif;">
<button type="button" id="cancel"  class="cancel" onClick="self.close()"><img src="assets/images/cancel.png" alt=""  height="30"  width="30"></button>
<div id="Layer3">
<div id="main_title">
<span style="">Customer Details</span></div>
<div id="wb_Form5">



<div id="">
<span class="input_title" style="">ID</span><br>
<input type="text" id="data_inputs" name="customerid" value="<?php echo $customerid; ?>" spellcheck="false" placeholder="customer id" readonly>

<div id="">
<span class="input_title" style="">Name</span></div>
<input type="text" id="data_inputs" name="cusname" value="<?php echo $cusname; ?> " spellcheck="false" placeholder=" Customer Name" readonly>

<div id="">
<span class="input_title" style="">Contact</span></div>
<div id="">
<input type="text" id="data_inputs" name="cuscontact" value="<?php echo $cuscontact; ?>" spellcheck="false" placeholder="Contact Number" readonly>

<div id="">
<span class="input_title" style="">Jobs</span></div>
<div id="">
<input type="text" id="data_inputs" name="cuscontact" value="<?php echo $rowcount ?>" spellcheck="false" placeholder="Contact Number" readonly>

<div id="">
<span class="input_title" style=""> Vehicle Number  </span></div>
<input type="text" id="data_inputs" name="vehiclenumber" value="<?php echo $vehiclenumber; ?>" spellcheck="false" placeholder="Vehicle Number" readonly>




<div id="">
<span class="input_title" style="">Join Date</span></div>
<input type="text" id="data_inputs" name="join_date" value="<?php echo $join_date; ?>" spellcheck="false" placeholder="Join Date" readonly>

<div id="wb_Text51">
<span class="input_title" style="">Join Time</span></div>
<input type="text" id="data_inputs" name="join_time" value="<?php echo $join_time;  ?>" spellcheck="false" placeholder="join Time" readonly> 

<div id="wb_Text51">
<span class="input_title" style="">Locatio</span></div>
<input type="text" id="data_inputs" name="join_time" value="<?php echo $location;  ?>" spellcheck="false" placeholder="join Time" readonly> 

<br>





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




