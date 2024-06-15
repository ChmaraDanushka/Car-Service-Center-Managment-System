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

#s_price{
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
  .submit{
       background-color:#80ff80; 
  }

.text{

  font-size: 12px;
}

</style>

</head>
<body>
    <h3>Edit Product Details</h3> 
<div class="back">
<div class="main">
<form action="" method="post" enctype="multipart/form-data">
      
<div class="border">
<div id="body">
</div>
<div class="text">
 Product name :<input style="width: 550px" type="text" name="pro_name" id="pro_name" value="<?php echo $pro_name; ?>"><br>
 Category :<input type="text" name="category" id="category"value="<?php echo $category; ?>">
 Brand :<input type="text" name="brand" id="brand" value="<?php echo $brand; ?>"><br>
 Buying Price<input type="number" name="buy_price" id="b_price" value="<?php echo $buy_price; ?>">
 Selling Price<input type="number" name="sell_price" id="sell_price"value="<?php echo $sell_price; ?>"><br>
 Quantity :<input type="number" name="quantity" id="quantity" value="<?php echo $quantity; ?>">
 Description:<input type="text" name="description" id="description" value="<?php echo $description; ?>"><br>

 </div>  
<button type="submit" name="update" class="submit">UPDATE</button>


	</form>


</div>
</div>
<?php 

if(isset($_POST["update"])){
  mysqli_query($conn,"UPDATE product SET pro_name='$_POST[pro_name]',category='$_POST[category]',brand='$_POST[brand]',buy_price='$_POST[buy_price]',sell_price='$_POST[sell_price]',quantity='$_POST[quantity]' ,description='$_POST[description]' WHERE id= '$id'");

  ?>

 <script type="text/javascript">
   window.location="../product_list.php";
   alert("Update Successfull");
 </script>
<?php
}




?>





<script src="scripts.js">
</script> 
</body>
</html>