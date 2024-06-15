<?php
include_once 'connection.php';
session_start();
if($_SESSION['my'] == "my"){
$product = "";
$pro_id = mysqli_real_escape_string($conn,$_REQUEST['product']);;
$cat_name= "";
$sell_price= "";
$quntity= "";


$res=mysqli_query($conn, "SELECT * FROM product WHERE pro_id=$pro_id");
while($row=mysqli_fetch_array($res))

{
   $cat_name= $row["cat_name"];
   $sell_price= $row["sell_price"];
   $id= $row["pro_id"];

   echo $cat_name;
}

$sql1 = "INSERT INTO bill_table(pro_cat,product,price)
VALUES ('$cat_name','$product','$sell_price')";
	

	if ($conn->query($sql1) === TRUE) {
//  echo "New record created successfully sql 1";
//echo '<script type ="text/JavaScript">';  
//echo 'alert("successfully Added to pending job list")';  
//echo '</script>';

echo $_POST['product'];
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

}


?>