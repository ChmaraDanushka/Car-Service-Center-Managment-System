<?php include_once 'functions.php'; ?>

<?php  require_once('db.php');?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<?php 


//Generate product  Id.........................
$p_query =  'SELECT pro_id FROM product ORDER BY id DESC LIMIT 1';
    $p_result =  mysqli_query($conn, $p_query);
     $p_row =  mysqli_fetch_array($p_result);

$product_id = $p_row['pro_id'];
$p_id= $product_id+1;

$product_name = mysqli_real_escape_string($conn,$_REQUEST['product_name']);
$category= mysqli_real_escape_string($conn,$_REQUEST['categorie_list']);
$brand = mysqli_real_escape_string($conn,$_REQUEST['Combobox1']);
$buy_price = mysqli_real_escape_string($conn,$_REQUEST['buy_price']);
$sell_price = mysqli_real_escape_string($conn,$_REQUEST['sell_price']);

$description = mysqli_real_escape_string($conn,$_REQUEST['TextArea1']);

$sql = "INSERT INTO product(pro_id,pro_name,cat_name, buy_price, sell_price, description)
        VALUES('$p_id','$product_name','$category','$buy_price', '$sell_price','$description')";

if ($conn->multi_query($sql)===TRUE) 
 
 {
	echo "<font color='green'>   Data added successfully.";
   
    
} 
	else{
	echo "Error: could not able to execute $sql." . $sql . "<br>".  $conn->error;}

$conn->close();

?>




</body>
</html>