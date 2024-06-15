<?php  require_once('db_connect.php');?>


<?php
$pass2="dfsdfdf";
$error="";
if(isset($_POST["submit"])){
$username = mysqli_real_escape_string($conn,$_REQUEST['username']);
$name= mysqli_real_escape_string($conn,$_REQUEST['name']);
$userrole = mysqli_real_escape_string($conn,$_REQUEST['userrole']);
$email = mysqli_real_escape_string($conn,$_REQUEST['email']);
$pass1= mysqli_real_escape_string($conn,$_REQUEST['pass1']);
$pass2= mysqli_real_escape_string($conn,$_REQUEST['pass2']);

//if($pass1 === $pass2){
$sql = "INSERT INTO users(username,name,userrole,email,password)
        VALUES('$username','$name','$userrole','$email', '$pass2')";

if ($conn->multi_query($sql)===TRUE) 
 
 {
	echo "<font color='green'>   Data added successfully.";
   
    
} 
	else{
	echo "Error: could not able to execute $sql." . $sql . "<br>".  $conn->error;}
 //   }
}

//else {
    echo "dfgdsfgdfgdf";
 //$color="#FF6262";
// $error="invalid confirm password";
//}


$conn->close();

?>



<div id="Layer1">
<div id="wb_Text7">
&nbsp;</div>
<div id="wb_Text6">
<span style="color:#141414;font-family:Arial;font-size:22px;">Add User</span><span style="color:#000000;font-family:'Lucida Sans Unicode';font-size:11px;"><br></span></div>

<div id="wb_Text5">
<span style="color:#141414;font-family:Arial;font-size:22px;"><strong>User Management</strong></span><span style="color:#000000;font-family:Arial;font-size:13px;"><strong><br></strong></span></div>
</div>
<div id="Layer7">



<form action="" id="manage_user" method="post">
  
<div id="wb_Text3">

<span style="color:#141414;font-family:Arial;font-size:19px;">Username </span><span style="color:#FF0000;font-family:Arial;font-size:19px;">*</span></div>
<input type="text" id="Editbox1" name="username" value="" placeholder="username">
<div id="wb_Text4">
<span style="color:#141414;font-family:Arial;font-size:19px;">Name </span><span style="color:#FF0000;font-family:Arial;font-size:19px;">*</span></div>
<input type="text" id="Editbox2" name="name" value="" placeholder="Name">

<div id="wb_Text8">
<span style="color:#141414;font-family:Arial;font-size:19px;">User Role </span><span style="color:#FF0000;font-family:Arial;font-size:19px;">*</span></div>
<select name="userrole" size="1" id="Combobox1">
<option value="admin">Admin</option>
<option value="receptionist">Receptionist</option>

</select>

<div id="wb_Text9">
  
<span style="color:#141414;font-family:Arial;font-size:19px;">Email</span></div>
<input type="text" id="Editbox4" name="email" value=""  placeholder="Email"> 
<div id="wb_Text10">
<span style="color:#141414;font-family:Arial;font-size:19px;">Password </span><span style="color:#FF0000;font-family:Arial;font-size:19px;">*</span></div>
<input type="text" id="Editbox5" name="pass1" value="" maxlength="100"  placeholder="Password">


<div id="wb_Text11">
<p class="error"><?php echo $error;   echo $pass2; ?></p>
<span style="color:#141414;font-family:Arial;font-size:19px;">Confirm password </span><span style="color:<?php echo $color;?>;font-family:Arial;font-size:19px;">*</span></div>
<input type="text" id="Editbox6" name="pass2" value="" maxlength="100"  placeholder="Confirm password">

<input type="submit" id="Button1" name="submit" value="Submit">



</div>
</div>
</form>
