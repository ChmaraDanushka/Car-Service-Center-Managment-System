<?php
include "connection.php";
$color="";
$error="";
$shadow="#4b8aff";
  

if(isset($_POST['but_submit'])){

    $contact = mysqli_real_escape_string($conn,$_POST['number']);



    if ($username != ""){

        $sql_query = "select count(*) as cntUser FROM  customer_list WHERE cuscontact='".$contact."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $username;
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
            header("Location: customer_requestform.php?id=$contact");
        }else{
            $error="Invalid Number";
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


        .main_r{
            width: 20%;
            height: 50%;
            background:#f7f7f7;   
            position: flex;
            margin-left:35%;
            padding:10%;
            
           
        }


        
        h3{
     
            color:#d1d1d1;
            margin-left:51%;
            margin-top:10px;
            margin-bottom:30px;
            font-family: 'Open Sans', sans-serif;
        
        }

        h5{
            color:#F78181;
            margin-left:2%;
            position: absolute;
            margin-top:-25px;
            font-family: 'Open Sans', sans-serif;
        }
        


        .main_r .form form input{
             border:none;
             height: 30px;
             width: 245px;
            
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
             width: 30%;
             margin-left:46%;
             border:none;
             color:white;
             background:lightgreen;
        }

        .main_r .form form .inp_div{
            
             height: 40px;
             width: 325px;
             background: white;
             margin-left:6%;
        }

        .inp_div img {
              margin-left:;
              margin-top: 6px;
              float:left;       
        }
        .main_r{
            
            padding-left:4%;        
        }


.forget a:hover{
    color:black;
}
   
.form_icon{
   margin-left:49%
}
.form_icon img{
    margin-left:6%;
    height: 40%;
    width: 40%;
   
}

p{
    color:#ababab;
    font-family: 'Open Sans', sans-serif;
    font-size:13px;
    margin-left:6%;
}

.back{
  width:70px;
  padding:5px;
  border:none;
  border-radius:10px;
 position: absolute;
left:36%;
top:2%;
}

.back img {
    height:20px ;
    width: 20px;
    margin:auto;
}
.back:hover{
 background:#d6d6d6;
}



/*# sourceMappingURL=style.css.map */

    </style>
</head>
<body>
<div class="loader" id="loader">

    </div>
    <div class="main" id="main">
    <button class="back"><a href="http://localhost/wordp/?customize_changeset_uuid=bd59118d-e902-4baf-841f-f01b8b08b8fb"><img src="../assets/images/home.png"></a></button>
    <div class="main_r">
               
<div class="form" method="post">

    <div class="form_icon"><img src="../assets/images/patient.png" alt="" class="login"><br></div>

    <h3> VERIFY</h3>
    
    <form action="" method="post">
    <h5> <?php echo  $error; ?></h5>
        <div class="inp_div" style="background-color:<?php echo $color ?>"><img src="../assets/images/smartphone.png"><input type="text" name="number" placeholder="NUMBER"></div>
        <p>Enter Your Valid Phone Number</p> 
     <button type="sobmit" class="submit" name="but_submit">VERIFY</button>
    

    </form>
  
         
</div>

               </div>

               </div>


    
    
    


</body>
</html>