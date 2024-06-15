<style type="text/css">
  
</style>

<?php



require_once '../db_connect.php';
$id=$_GET["id"];
$username="";
$name="";
$userrole="";
$email="";
$password="";

$res=mysqli_query($conn, "SELECT * FROM users WHERE id= $id");
while($row=mysqli_fetch_array($res))
{
$id=$row["id"];
$username=$row["username"];
$name=$row["name"];
$userrole=$row["userrole"];
$email=$row["email"];
$password=$row["password"];


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

#name{
  height: 55px;
  weight: 600px;
  margin-bottom: 40px;
  text-align: center;
}
#product{
  height: 40px;
  width: 250px;
  margin-left: 38px;
   margin-bottom: 40px;
}
#modal{
    height: 40px;
  width: 250px;
   margin-bottom: 40px;
}

#price{
     height: 40px;
  width: 250px;
  margin-bottom: 40px;
}

#price1{
     height: 40px;
  width: 250px;
  margin-bottom: 0px;
  margin-left: 38px;
}
  .submit{
       background-color:#80ff80; 
  }
</style>

</head>
<body>
    <h3>Edit user Details</h3> 
<div class="back">
<div class="main">
<form action="" method="post" enctype="multipart/form-data">
      
<div class="border">
<div id="body">
</div>
 <input style="width: 550px" type="text" name="category" id="name" placeholder="Category" class="name" value="<?php echo $pro_name; ?>"><br>                                        <input type="text" name="modal" id="modal" placeholder="Modle" class="address" value="<?php echo $category; ?>">
 <input type="text" name="id" id="product"  class="nic"  value="<?php echo $id; ?>"><br>
 <input type="text" name="username" id="price"  class="birth"  value="<?php echo $username; ?>">
  <input type="text" name="name" id="price1"  class="birth"  value="<?php echo $name; ?>"><br>
   <input type="text" name="userrole" id="price"  class="birth"  value="<?php echo $userrole; ?>">

   <select name="userrole" size="1" id="Combobox1" style="position:absolute;left:366px;top:123px;width:330px;height:42px;z-index:0;margin-top: 23px; margin-left:55px;border: solid #CCCCCC 1px;">
<option value="num1">Admin</option>
<option value="num2">receptionist</option>
<option value="num3">Super user</option>
</select>
    <input type="text" name="email" id="price1"  class="birth"  value="<?php echo $email; ?>">
    <br>
   
<button type="submit" name="update" class="submit">UPDATE</button>


	</form>


</div>
</div>
<?php 

if(isset($_POST["update"])){
  mysqli_query($conn,"UPDATE users SET category='$_POST[category]',modal='$_POST[modal]',users='$_POST[product]',price='$_POST[price]' WHERE p_id=$id");

  ?>

 <script type="text/javascript">
   window.location="../delete.php";
   alert("Update Successfull");
 </script>
<?php
}




?>





<script src="scripts.js">
</script> 
</body>
</html>