<?php
include "customer/connection.php";
session_start();
$color="";
$error="";
$shadow="#4b8aff";
$role=""; 
$res=mysqli_query($conn, "SELECT * FROM users WHERE username='chamara'");
while($row=mysqli_fetch_array($res))

{



$role=$row["userrole"];

}

if(isset($_POST['but_submit'])){

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $role="";



    if ($username != "" && $password != ""){

        $sql_query = "select count(*) as cntUser FROM users WHERE username='".$username."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];


        if($count > 0){

            $_SESSION['uname'] = $username;
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
            header('Location: index.php');
        }else{
            $error="Invalid username or password";
            $color="#FBEFEF";
            $shadow="#ff7070";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: auto;
        }
    

        body{
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .main{
            width: 100%;
            height: 100%; 
            opacity: 100%;
        }

        .main_back{
            width: 65%;
            height: 666.5px;
          overflow: hidden;
          float:left;
        }
        .main_l{
            margin-top:-38px;
            margin-left:-38px;
            width: 100%;
            background:#eaeaea;
            height: 786.5px;
            background-repeat:none;
            border-bottom-right-radius:90%;
            transform: rotate(-5deg);
            overflow: hidden;
            animation: mymove 4s infinite;
        }
        @keyframes mymove {
  50% {box-shadow: 0px 2px 30px <?php echo $shadow ?>;}
}
        .main_l img{
            display:;
            height:90% ;
            width:110% ;
            transform: rotate(5deg);
        }


        .main_r{
            width: 70%;
            height: 666.5px;
            background:#f7f7f7;   
            position: flex;
            margin-left:30%
        }

        .main_r .form .login{
            margin-top:170px;
            height: 6%;
            width: 6%;
            margin-left:18%;
        }
        
        h3{
     
            color:#d1d1d1;
            margin-left:59%;
            margin-top:10px;
            margin-bottom:30px;
            font-family: 'Open Sans', sans-serif;
        }

        h5{
            color:#F78181;
            margin-left:39%;
            position: absolute;
            margin-top:-25px;
            font-family: 'Open Sans', sans-serif;
        }


        .main_r .form form input{
             border:none;
             height: 30px;
             width: 245px;
             margin-left:9%;
             margin-top:3px;
             background:none;
             font-family: 'Open Sans', sans-serif;
             color:gray;
             border-style:none;
             
           
        }

        .main_r .form form input::placeholder{
            color:#d1d1d1;   
        }

        .main_r .form form .submit{
            margin-top:40px;
            height: 30px;
             width: 10%;
             margin-left:16%;
             border:none;
             color:white;
             background:lightgreen;
        }

        .main_r .form form .inp_div{
            
             height: 40px;
             width: 325px;
             background: white;
             margin-left:48%;
        }

        .inp_div img {
              margin-left:10px;
              margin-top: 6px;
              float:left;       
        }
        .main_r{
            
            padding-left:4%;        
        }

.forget a{
  
    margin-left:25%;
    color:gray;
    font-size:14px;
    font-family: 'Open Sans', sans-serif;
    text-decoration:none;
    
}
.forget a:hover{
    color:black;
}
   



.loader {
  position: absolute;
  background-color: #1D1F20;

  width: 100%;
  height: 100vh;
  z-index: 99;
  left: ;
  -webkit-transition: .5s;
  transition: .5s;
}

.loader img {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
         
}

.page1 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background-color: #b1f6ff;
  text-align: center;
}

.page1 h1 {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  font-size: 100px;
  color: white;
}

.page1 h1 a {
  font-size: 30px;
  color: white;
  cursor: pointer;
}

.page2 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background-color: #f8b1ff;
  display: none;
  text-align: center;
}


/*# sourceMappingURL=style.css.map */

    </style>
</head>
<body>
<div class="loader" id="loader">
    <?php 
  include "assets/loader.php";
?>
    </div>
    <div class="main" id="main">
    <div class="main_back">
    <div class="main_l">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
               <img src="assets/images/19111.jpg">
    </div>
    </div>
    <div class="main_r">
               
<div class="form" method="post">
    <img src="assets/images/login.png" alt="" class="login"><br>
    <h3> C&S VENTURS </h3>
    <form action="" method="post">
    <h5> <?php echo  $error; ?></h5>
        <div class="inp_div" style="background-color:<?php echo $color ?>"><img src="assets/images/id-card.png"><input type="text" name="username" placeholder="USERNANE"></div><br>
        <div class="inp_div" style="background-color:<?php echo $color ?>"><img src="assets/images/show-password.png"><input type="password" name="password" placeholder="PASSWORD"></div><br>
        <div class="forget"> <a href="pas_rest.php">Forget Password ?</a></div>
     <button type="sobmit" class="submit" name="but_submit">LOGIN</button>
    
<?php echo $role; ?>
    </form>
  
         
</div>

               </div>

               </div>

               <div class="loader" id="loader" style="position:absolute;">
        <img src="img/totoro.gif" alt="">
    </div>
               <script>
              
        function appearP2() { 
            var loader = document.getElementById('loader');
            var page1 = document.getElementById('page1');
            var page2 = document.getElementById('page1');
            main.style.opacity= "10%"; 
            loader.style.left = "0";
          
            setTimeout(function() { 
                loader.style.display = "none";
                page1.style.display = "none";
                page2.style.display = 'block';
             }, 2000)
         
         }

         function appearP1() { 
            var loader = document.getElementById('loader');
            var page1 = document.getElementById('page1');
            var page2 = document.getElementById('index');
            loader.style.left = "0";
            main.style.opacity= "10%"; 
            setTimeout(function() { 
                loader.style.display = "none";
                page1.style.display = "block";
                page2.style.display = 'none';
             }, 2000)

         }

         window.onload = appearP2();
         window.onload = appearP1();
         main.style.opacity= "100%"; 
    </script>  
    

<?php 

if($_SESSION['uname']==$username){

}

?>
</body>
</html>