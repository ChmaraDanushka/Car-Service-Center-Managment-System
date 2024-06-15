<?php 
include "customer/connection.php";
$id=$_GET["id"];
echo $id;

$name="";
$email="";
$pass1="";
$pass2="";
$color="white";
$error="";
$succ="";

$res1=mysqli_query($conn,"SELECT * FROM users WHERE id=$id"); //sending data for pending.php

while($row=mysqli_fetch_array($res1))
{

//vehicle details
$name=$row["username"];
$email=$row["email"];
}
?>


<?php
if(isset($_POST['but_submit'])){
$pass1 = mysqli_real_escape_string($conn,$_POST['pass1']);
$pass2 = mysqli_real_escape_string($conn,$_POST['pass2']);

if($pass1 === $pass2){
echo $pass1;
echo $pass2;


$sql = "UPDATE users SET password=$pass1 WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  $succ="Password Rest Successfull";
} else {
  echo "Error updating record: " . $conn->error;
}
  
}
else{
    $error="Confirm Password Doesn't Match Renter Yor Confirom Password";
    echo "RE enter";
    $color="#ffefef";
}
    }
?>

<style>
        *{
            margin: auto;
            padding: auto;
        }


        .main{
          margin-top:5%;
            background-color:;
            
        }

        .main_r{
           height: 100%;
           width: 30%;
           background:#e7e7e7 ;
           padding-bottom:3%;
           text-align: center;
        }


        .main_r .form .login{
            margin-top:70px;
            height: 10%;
            width: 10%;
            background-color:;
           
        }
        
        p{
     
            color:gray;
            margin:auto;
            margin-top:10px;
            margin-bottom:10px;
            font-family: 'Open Sans', sans-serif;
        }

        h5{
            color:#F78181;
            
            position: absolute;
            margin-top:-25px;
            font-family: 'Open Sans', sans-serif;
        }


        .main_r .form form input{
             border:none;
             height: 30px;
             width: 245px;
             margin:auto;
             margin-top:3px;
             background:none;
             font-family: 'Open Sans', sans-serif;
             color:gray;
             border-style:none;
             
             
           
        }


        .main_r .form form input::placeholder{
            color:#d1d1d1;   
        }

        .main_r .form  form .submit{
       
            height: 30px;
             width: 20%;
           margin:auto;
       
             border:none;
             color:white;
             background:lightgreen;
        }

        .main_r .form form .inp_div{
            
             height: 40px;
             width: 325px;
             background: <?php echo $color; ?>;
          
        }

        .inp_div img {
            margin-left: 6px;
              margin-top: 9px;
              float:left;    
              width: 6%;   
        }
        .main_r{
            
               
        }


        
    </style>

<div class="main">

    <div class="main_r">
               
<div class="form" method="post">
   <div class="img_div"> <img src="assets/images/padlock1.png" alt="" class="login"></div><br>
    <p> Rest  Password</p>
    <p style="font-size:12px;margin-bottom:20px;">Hi <?php echo $name;?> Enter Your New Password</p>
    <p style="font-size:12px;margin-bottom:20px;color:#ff8585;"><?php echo $error;?></p>
    <p style="font-size:12px;margin-bottom:20px;color:#8cff85;"><?php echo $succ;?></p>
    <form action="" method="post">
 
        <div class="inp_div" style="background-color:white"><img src="assets/images/password.png"><input type="password" value="<?php echo $pass1 ?>" name="pass1" placeholder="New Password"></div><br>
        <div class="inp_div" style="background-color:<?php echo $color ?>"><img src="assets/images/password.png"><input type="password" value="<?php echo $pass2 ?>" name="pass2" placeholder="Confirm Password"></div><br>
      
      
        <button type="sobmit" class="submit" name="but_submit">OK</button>
        <p style="font-size:12px;margin-left:-64%;">To go <a href="login.php">login</a></p>
    </form>
</div>

               </div>

               </div>
