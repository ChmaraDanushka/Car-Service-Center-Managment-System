
<?php  require_once('db.php');?>


	
<?php 
 
 //Generate product  Id.........................
$dis_query =  'SELECT dis_id FROM distributor ORDER BY id DESC LIMIT 1';
    $dis_result =  mysqli_query($conn, $dis_query);
     $dis_row =  mysqli_fetch_array($dis_result);

$distributor_id = $dis_row['dis_id'];
$dis_id= $distributor_id+1;

$brand_name = mysqli_real_escape_string($conn,$_POST['brand_name']);
$category= mysqli_real_escape_string($conn,$_POST['categorie_list']);
$agent = mysqli_real_escape_string($conn,$_POST['agent']);
$phone_no = mysqli_real_escape_string($conn,$_POST['phone_no']);
$email = mysqli_real_escape_string($conn,$_POST['email']);


$sql = "INSERT INTO distributor(dis_id, brand, category, company, contact_no, email)
        VALUES ('$dis_id', $brand_name', 's$category','$agent', '$phone_no', '$email')";

if ($conn->multi_query($sql)===TRUE) 
 
 {
	echo "<font color='green'>   Data added successfully.";
   
    
} 
	else{
	echo "Error: could not able to execute $sql." . $sql . "<br>".  $conn->error;}

$conn->close();

?>



