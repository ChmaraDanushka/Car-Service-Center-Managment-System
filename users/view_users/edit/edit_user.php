
<?php



require_once 'db_connect.php';
$id=$_GET["id"];
$username="";
$name="";
$userrole="";
$email="";
$password="";

$res=mysqli_query($conn,"SELECT * FROM users WHERE id= $id");
while($row=mysqli_fetch_array($res))
{

$username=$row["username"];
$name=$row["name"];
$userrole=$row["userrole"];
$email=$row["email"];
$mobile=$row["mobile"];
$password=$row["password"];


}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<meta name="generator" content="WYSIWYG Web Builder 16 - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="file_1621751656.png" rel="icon" type="image/png">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="Rushda_users.css" rel="stylesheet">
<link href="Add_users.css" rel="stylesheet">
<link rel="stylesheet" href="css/edit_style.css" />
<script src="jquery-1.12.4.min.js"></script>
<script src="affix.min.js"></script>

</head>
<body>


<div id="contact-popup">



        <form action="" class="contact-form" action="" id="contact-form" method="post">
        <div id="add-icon">
        <img src="../icon/icon-contactt.png"  height="50"
            width="50">
</div>

       
  <div id="input_head">
  
  <span>Username </span><span>*</span>
  <span id="userName-info" class="info"></span>
  </div>
  <input type="text" id="userName" name="userName" placeholder="" value="<?php echo $username; ?>">

  <div id="input_head">
  <span>Name </span><span>*</span> <span id="name-info" class="info"></span></div>
  <input type="text" id="name" name="name" placeholder="" value="<?php echo $name; ?>">
  
  <div id="input_head">
  <span>User Role(<?php echo $userrole; ?>) </span> <span id="role-info" class="info"></span></div>
  <select name="role" size="1" id="user" value="">
  <option value="admin"></option>
  <option value="admin">Admin</option>
  <option value="receptionist">Receptionist</option>
  
  </select>
  
  <div id="input_head">
  <span>Email</span> <span id="email-info" class="info"></span></div>
  <input type="text" id="email" name="email" placeholder="" value="<?php echo $email; ?>"> 
  
  <div id="input_head">
  <span>Mobile</span> <span id="mobile-info" class="info"></span></div>
  <input type="text" id="mobile" name="mobile" placeholder="" value="<?php echo $mobile; ?>"> 

  <div id="input_head">
  <span>Password </span><span>*</span> <span id="pass1-info" class="info"></span> </div>
  <input type="password" id="pass1" name="pass1"  placeholder="" value="<?php echo $password; ?>">
  
  
  <div class="submitDiv">
  <input type="submit" id="update" name="update" value="Update" class="update">
  <input type="submit" id="cancel" name="update" value="Cancel" class="cancel" onClick="self.close()">
  </div>
  
  
  </div>
  </div>
  </form>
    </div>
<?php 

if(isset($_POST["update"])){
  mysqli_query($conn,"UPDATE users SET username='$_POST[userName]',name='$_POST[name]',userrole='$_POST[role]',email='$_POST[email]',mobile='$_POST[mobile]',password='$_POST[pass1]' WHERE id=$id");

  ?>

 <script type="text/javascript">
   alert("Update Successfull");
 
     self.close();

 </script>
<?php
}




?>
</body>
</html>