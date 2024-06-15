<style type="text/css">
  
</style>

<?php

require_once '../db.php';


$id=$_GET["id"];
$pro_name="";
$category="";
$brand="";
$buy_price="";
$sell_price="";
$quantity="";
$description="";

$res=mysqli_query($conn, "SELECT * FROM product WHERE id= $id");
while($row=mysqli_fetch_array($res))
{
$pro_name=$row["pro_name"];
$category=$row["category"];
$brand=$row["brand"];
$buy_price=$row["buy_price"];
$sell_price=$row["sell_price"];
$quantity=$row["quantity"];
$description=$row["description"];

}

 


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/stu_edit1.css">
  <link rel="stylesheet" type="text/css" href="../css/side.css">
  <script src="https://kit.fontawesome.com/e3f4107c80.js" crossorigin="anonymous"></script>

<style type="text/css">

.back{

 
  margin: 150px 50px;
  text-align: center;


}

body{
  background-color: #e6e6ff;

}

  input{
    background-color:  #d2s9d9;

  }

  h3
{
   font-family: Arial;
   font-weight: bold;
   font-size: 24px;
   text-decoration: none;
   color: #000000;
   background-color: transparent;
   margin: px 0px 0px 0px;
   padding: 0px 0px 0px 0px;
   display: inline;
}

#pro_name{
  height: 55px;
  weight: 600px;
  margin-bottom: 40px;
  text-align: center;
}
#brand{
  height: 40px;
  width: 230px;
  margin-left: 38px;
   margin-bottom: 40px;
}
#category{
    height: 40px;
  width: 230px;
   margin-bottom: 40px;
}

#b_price{
     height: 40px;
  width: 250px;
  margin-bottom: 40px;
}

#sell_price{
     height: 40px;
  width: 250px;
  margin-bottom: 0px;
  margin-left: 47px;
}
#quantity{
     height: 40px;
  width: 250px;
  margin-bottom: 40px;
}

#description{
     height: 40px;
  width: 250px;
  margin-bottom: 0px;
  margin-left: 38px;
}
  
.text{

  font-size: 12px;
}

</style>

</head>
<body>
    <h3>Product Details</h3> 
   <div id="back"> <button onclick="window.location.href='../product_list.php'">back</button></div>
<div class="back">
<div class="main">
<form action="" method="post" enctype="multipart/form-data">
      
<div class="border">
<div id="body">
</div>
<div class="text">
 Product name :<input style="width: 550px" type="text" name="pro_name" id="pro_name" value="<?php echo $pro_name; ?>"><br>
 Category :<input type="text" name="category" id="category"value="<?php echo $category; ?>"><br>
 Brand :<input type="text" name="brand" id="brand" value="<?php echo $brand; ?>"><br>
 Buying Price<input type="number" name="buy_price" id="b_price" value="<?php echo $buy_price; ?>"><br>
 Selling Price<input type="number" name="sell_price" id="sell_price"value="<?php echo $sell_price; ?>">
 Quantity :<input type="number" name="quantity" id="quantity" value="<?php echo $quantity; ?>"><br>
 Description:<input type="text" name="description" id="description" value="<?php echo $description; ?>"><br>

 </div>  

	</form>



</div>
</div>






<script src="scripts.js">
</script> 
</body>
</html>