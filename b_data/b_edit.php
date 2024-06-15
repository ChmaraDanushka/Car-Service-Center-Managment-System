<?php
require_once '../customer/connection.php';

$id=$_GET["id"];

$b_name="";
$b_ceo="";
$b_tp="";
$b_address="";
$b_email="";
$b_website="";
$b_logo="";

$res1=mysqli_query($conn,"SELECT * FROM b_data"); //sending data for pending.php

while($row=mysqli_fetch_array($res1))
{

//vehicle details
$b_name=$row["b_id"];
$b_name=$row["b_name"];
$b_ceo=$row["b_ceo"];
$b_tp=$row["b_tp"];
$b_address=$row["b_address"];
$b_email=$row["b_email"];
$b_website=$row["b_website"];
$b_logo=$row["b_logo"];
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
<style>
  *{
    margin:auto;
  }
#edit_box{
  height: 30px;
  width: 300px;
  margin-left:90px;
  margin-top:10px;
  border:none;
}
form{
  height: 470px;
  width: 500px;
  background:#FAFAFA;
  padding-top:60px;
  margin:auto;


}
#Button1{
  height: 30px;
  width: 300px;
  margin-left:95px;
  margin-top:10px;
  border:none;
  color:white;
  
}
.top{
  margin-top:;
}
.head{
  font-size:25px;
  margin-left:130px;
  
}
.button {
  height: 30px;
  width: 300px;
  margin-top:10px;
  border:none;
  color:white;
  cursor :pointer;
}
</style>
<body>
<div id="container">
</div>
<div id="Layer3">


<div id="wb_Form5">
<form method="post" action="" id="Form5">
<span style="" class="head">Customer Registration</span><br>
<input type="text" id="edit_box" name="b_name" value="<?php echo $b_name; ?>" spellcheck="false" placeholder="Name"><br>
<input type="text" id="edit_box" name="b_ceo" value="<?php echo $b_ceo; ?> " spellcheck="false" placeholder=" CEO"><br>
<input type="text" id="edit_box" name="b_tp" value="<?php echo $b_email; ?>" spellcheck="false" placeholder="Email"><br>
<input type="text" id="edit_box" name="b_address" value="<?php echo $b_address; ?>" spellcheck="false" placeholder="Adress"><br>
<input type="text" id="edit_box" name="b_email" value="<?php echo $b_tp; ?>" spellcheck="false" placeholder="email"><br>
<input type="text" id="edit_box" name="b_website" value="<?php echo $b_website; ?>" spellcheck="false" placeholder="Website"><br>

<input type="submit" id="Button1" class="top" name="update" value="Update" style="margin-top:30px;background:#b2ec5d; cursor :pointer;"> 

<button id="Button1"  style="background:#ff9999;"><a class="button" href="b_profile.php">Cancel</a></button>
</form>

<?php 

if(isset($_POST["update"])){
    $sql = "UPDATE b_data SET b_name='$_POST[b_name]', b_ceo='$_POST[b_ceo]', b_tp='$_POST[b_tp]',b_address='$_POST[b_address]',	b_email='$_POST[b_email]',b_website='$_POST[b_website]' WHERE b_id=1 ";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
      header ('location: b_profile.php');
    } else {
      echo "Error updating record: " . $conn->error;
    }
    

  



}

?>

</div>
</div>
</body>
</html>
