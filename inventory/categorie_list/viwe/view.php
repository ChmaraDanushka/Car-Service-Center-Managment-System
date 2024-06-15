<style type="text/css">
  
</style>

<?php

require_once '../db.php';


$id=$_GET["id"];
$parent_categorie="";
$cat_name="";
$description="";



$res=mysqli_query($conn, "SELECT * FROM categories WHERE id= $id");
while($row=mysqli_fetch_array($res))
{

$parent_categorie=$row["parent_categorie"];
$cat_name=$row["cat_name"];
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
  background-color: white;

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


#parent_cat{
  height: 35px;
  width: 220px;
     margin-left: 17px;

   margin-bottom: 40px;
}
#cat_name{
    height: 35px;
    width: 220px;
   margin-bottom: 40px;
     margin-right: 145px;
     margin-left: 30px;
}

#description{
  margin-top: 70px;
     height: 90px;
  width: 600px;
  margin-bottom: 40px;
}

  .submit{
       background-color:#80ff80; 
  }

  form{
    margin-top: 20px;
    
  }
</style>

</head>
<body>
    <h3>Edit category Details</h3> 
<div class="back">
<div class="main">
<form action="" method="post" enctype="multipart/form-data">
      
<div class="border">
<div id="body">
</div>
 
Parent category <select name="categorie_list" size="1" id="parent_cat"  value="<?php echo $parent_category; ?>">
<option >Categore</option><br>
<option selected value="Categorie">Categorie 1</option>
<option selected value="categorie 2">Categorie 2</option>
<option selected value="categorie3">Categorie 3</option>
<option selected value="Categorie  4">Categorie 4</option>
</select>
Category name<input type="text" name="cat_name" id="cat_name"            value="<?php echo $cat_name; ?>"> <br>

Description
<input type="text" name="description" id="description"                   value="<?php echo $description; ?>"> <br>

<button type="submit" name="update" id="submit">UPDATE</button>
	</form>


</div>
</div>
<?php 

if(isset($_POST["update"])){
  mysqli_query($conn,"UPDATE categories SET parent_categorie='$_POST[categorie_list]',cat_name='$_POST[cat_name]',description='$_POST[description]' WHERE id=$id");

  ?>

 <script type="text/javascript">
   window.location="../category_list.php";
   alert("Update Successfull");
 </script>
<?php
}




?>





<script src="scripts.js">
</script> 
</body>
</html>