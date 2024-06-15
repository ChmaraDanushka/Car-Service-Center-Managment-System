<style type="text/css">
  
</style>

<?php



require_once '../db.php';
$id=$_GET["id"];
$brand="";
$category="";
$company="";
$contact_no="";
$email="";

$res=mysqli_query($conn, "SELECT * FROM distributor WHERE id= $id");
while($row=mysqli_fetch_array($res))
{
$brand=$row["brand"];
$category=$row["category"];
$company=$row["company"];
$contact_no=$row["contact_no"];
$email=$row["email"];

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
  weight: 700px;
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
    <h3>Edit Ds Details</h3> 
<div class="back">
<div class="main">
<form action="" method="post" enctype="multipart/form-data">
      
<div class="border">
<div id="body">
</div>
 <input style="width: 550px" type="text" name="category" id="name" placeholder="brand" class="name" value="<?php echo $brand; ?>"><br>                                   <input type="text" name="modal" id="modal"  class="address" value="<?php echo $category; ?>">
 <input type="text" name="product" id="product"  class="nic"  value="<?php echo $company; ?>"><br>
 <input type="price" name="price" id="price"  class="birth"  value="<?php echo $contactS_no; ?>">
  <input type="price" name="price" id="price1"  class="birth"  value="<?php echo $email; ?>"><br>
    <br>
   
<button type="submit" name="update" class="submit">UPDATE</button>


	</form>


</div>
</div>
<?php 

if(isset($_POST["update"])){
  mysqli_query($conn,"UPDATE distributor SET brand='$_POST[brand]',category='$_POST[category]',phone_no='$_POST[phone_no]',email='$_POST[email]' WHERE id=$id");

  ?>

 <script type="text/javascript">
   window.location="../edit/edit.php";
   alert("Update Successfull");
 </script>
<?php
}




?>





<script src="scripts.js">
</script> 
</body>
</html>