<?php
require_once 'connection.php';

$id=$_GET["customerid"];

$jobnumber="";
$customerid="";
$cusname="";
$cuscontact="";
$vehiclenumber="";
$vehicletype="";
$brand="";
$model="";
$join_date="";
$join_time="";
$location="";


$res=mysqli_query($conn, "SELECT * FROM customer_list WHERE customerid=$id");
while($row=mysqli_fetch_array($res))

{

$id=$row["cid"];
$jobnumber=$row["jobnumber"];
$customerid=$row["customerid"];
$cusname=$row["cusname"];
$cuscontact=$row["cuscontact"];
$join_date=$row["join_date"];
$join_time=$row["join_time"];
$location=$row["location"];
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> SUSTOMER REGISTRATION FORM </title>
<meta name="generator" content="WYSIWYG Web Builder 16 - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div id="container">
</div>
<div id="Layer3">
<div id="wb_Text33">
<span style="color:#141414;font-family:Arial;font-size:18px;">Customer Registration</span></div>
<div id="wb_Form5">
<form name="mapform" method="post" action="" id="Form5">
<input type="hidden" name="searchtype" value="address">
<input type="hidden" name="country" value="US">

<div id="">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>Customer ID </strong></span>
<input type="text" id="Editbox35" name="customerid" value="<?php echo $customerid; ?>" spellcheck="false" placeholder="customer id">

<div id="">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>Name </strong></span></div>
<input type="text" id="Editbox33" name="cusname" value="<?php echo $cusname; ?> " spellcheck="false" placeholder=" Customer Name">

<div id="">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>Contact </strong></span></div>
<div id="wb_Text46">
<input type="text" id="Editbox36" name="cuscontact" value="<?php echo $cuscontact; ?>" spellcheck="false" placeholder="Contact Number">


<div id="">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>join Date </strong></span></div>
<input type="text" id="Editbox39" name="join_date" value="<?php echo $join_date; ?>" spellcheck="false" placeholder="Join Date">

<div id="wb_Text51">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>Join Time </strong></span></div>
<input type="text" id="Editbox39" name="join_time" value="<?php echo $join_time;  ?>" spellcheck="false" placeholder="join Time"> 

<br>

<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>Location(<?php echo $location; ?>)  </strong></span></div>
<select name="location" id="city">
  <option value="Kandy">Kandy</option>
  <option value="Mulgampala">Mulgampala</option>
  <option value="Gatabe">Gatabe</option>
  <option value="Peradeniya">Peradeniya</option>
  <option value="Polgahamula">Polgahamula</option>
</select>

<br>
<input type="submit" id="Button1" name="update" value="updater"> </a>
</form>

<?php 

if(isset($_POST["update"])){
  mysqli_query($conn,"UPDATE customer_list SET cusname='$_POST[cusname]', cuscontact='$_POST[cuscontact]',join_date='$_POST[join_date]',join_time='$_POST[join_time]' ,location='$_POST[location]' WHERE cid=$id");

  ?>


 <script type="text/javascript">
   window.location="customer_list.php";
   alert("Update Successfull");
 </script>
<?php
}

?>

</div>
</div>
</body>
</html>