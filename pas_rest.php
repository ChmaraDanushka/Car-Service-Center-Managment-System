<?php
include "customer/connection.php";
session_start();
$color="white";
$error="";
$succ="";
$sendmail="";
$shadow="#4b8aff";


if(isset($_POST['but_submit'])){

    $email = mysqli_real_escape_string($conn,$_POST['email']);



    if ($email != ""){
        $sendmail="";
        $rid="";
        $sql_query = "SELECT count(*) as cntUser FROM users WHERE email='".$email."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];
echo $count;
        if($count > 0){
         
            $res=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'"); //sending data for pending.php
            while($row=mysqli_fetch_array($res))
            {
                $rid=$row["id"];
            echo $row["email"];
            $sendmail=$row["email"];

            }


            $receiver =   $sendmail;
            $subject = "This Is Your Password Rest Link";
            $body = "http://localhost/C&RVENTURS/pass_rest_page.php?id=$rid";
            $sender = "From:sampleemnail@gmail.com";

            if(mail($receiver,$subject,$body,$sender)){
                $color="#8cff85";
                $succ="Cheack Your Email"; 
            }else{
                
                $error="The Email Sending Error";
            }

        }else{
            $error="The Email Does Not Exsist";
            $color="#FBEFEF";
            $shadow="#ff7070";
        }

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
           height: 400px;
           width: 30%;
           background:#e7e7e7 ;
           
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
            background: <?php echo $color; ?>;
             height: 40px;
             width: 325px;
             background: white;
          
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
   <div class="img_div"> <img src="assets/images/synchronize.png" alt="" class="login"></div><br>
    <p> Rest Your Password</p>
    <p style="font-size:12px;margin-bottom:20px;"> Enter your account regislation email address to rest your password</p>
    <p style="font-size:12px;margin-bottom:20px;color:#ff8585;"><?php echo $error;?></p>
    <p style="font-size:12px;margin-bottom:20px;color:#8cff85;"><?php echo $succ;?></p>
    <form action="" method="post">
 
        <div class="inp_div" style="background-color:<?php ?>"><img src="assets/images/arroba.png"><input type="email" name="email" placeholder="EMAIL"></div><br>
      
      
        <button type="sobmit" class="submit" name="but_submit">OK</button>
    </form>
    <p style="font-size:12px;margin-left:-64%;">To go <a href="login.php">login</a></p>
</div>

               </div>

               </div>


               