<?php  require_once('../../connection.php');?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<?php 


$parent_categorie = mysqli_real_escape_string($conn,$_REQUEST['parent_categorie']);
$categorie_name= mysqli_real_escape_string($conn,$_REQUEST['categorie_name']);
$TextArea1 = mysqli_real_escape_string($conn,$_REQUEST['TextArea1']);



$sql = "INSERT INTO categories(parent_categorie, cat_name, description)
        VALUES('$parent_categorie', '$categorie_name','$TextArea1')";

if ($conn->multi_query($sql)===TRUE) 
 
 {
	echo "<font color='green'>   Data added successfully.";
   
    
} 
	else{
	echo "Error: could not able to execute $sql." . $sql . "<br>".  $conn->error;}

$conn->close();

?>


 ?>


</body>
</html>