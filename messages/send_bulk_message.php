<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
  
    <script src="https://kit.fontawesome.com/e3f4107c80.js" crossorigin="anonymous"></script>
</head>

<body style="font-weight:bolt;">


            <div class="page-heading" >
  <style>
      .hedder{
    
    height: 100%;
    width:  23%;
    background-color: white;
    padding-left: 11px; 
    margin-top: -19px;
    margin-bottom: 25px;
    font-size:80%;

}


input{
    
    border:none;
    color:gray;
    
    }

    textarea{
        border:none;
    }

    .new_mg{
       margin-top:8%;
       margin-left:1%;
    }

    #send{
        background:#4d4dff;
        color:white;
    }

  </style>             
            </div>
            <div class="page-content">

            <form action="#" method="post" >
<?php
require_once 'connection.php';
if(isset($_POST['foo'])){
$name = $_POST['foo'];

foreach ($name as $key => $color){ 
    echo "{$key} => {$color} ";
    echo" <br>";
   
}
echo "<span class='mess_span'><strong>Message </strong></span></div>";
echo" <textarea id='w3review' name='w3review' rows='4' cols='50' name='' placeholder='write Message'>";

echo" </textarea>";

echo" <br>";
echo" <input type='submit' id='send' name='update' value='Send'> </a>";
}

else{
echo"empty number";
}

?>
</form>
</div>
                        </div>  
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="../assets/js/pages/dashboard.js"></script>

    <script src="../assets/js/main.js"></script>
</body>

</html>