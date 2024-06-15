<?php
require_once '../customer/connection.php';
session_start();
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: ../login.php');
}

if($_SESSION['uname']){
    



//$id=$_GET["id"];

$b_name="";
$b_ceo="";
$b_tp="";
$b_address="";
$b_email="";
$b_image="";
$b_website="";

$res1=mysqli_query($conn,"SELECT * FROM b_data"); //sending data for pending.php

while($row=mysqli_fetch_array($res1))
{

//vehicle details
$b_name=$row["b_id"];
$b_name=$row["b_name"];
$b_ceo=$row["b_ceo"];
$b_tp=$row["b_tp"];
$b_address=$row["b_address"];
$b_email=$row["b_email"];
$b_image=$row["b_logo"];
$b_website=$row["b_website"];
}


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

   
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  

</head>

<body style="font-weight:bolt;">
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="../index.php">C&S VENTURS</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu"> 

                        <li class="sidebar-item active ">
                            <a href="../index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>SERVICE</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="../customer/new_customerservice.php">Add New Vehicle</a>
                                   
                                </li>
                                <li class="submenu-item ">
                                    <a href="../customer/registered_customernew.php">Add New Service</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="../customer/pendingservice.php">Pending Services</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../customer/ongoingdataadd.php">Opened Services</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="request_list.php">Requested</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="../error_page/404.php">Completed Services</a>
                                </li>
                                
                            </ul>
                        </li> 

						
						<li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>MESSAGES</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="../messages/send_new_m.php">Send New Message</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../messages/bulk_m.php">Bulk Message</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="../error_page/404.php">Feedbacks</a>
                                </li>
  
                            </ul>
                        </li> 
						
						
						<li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>CUSTOMERS</span>
                            </a>
                            <ul class="submenu ">

                                <li class="submenu-item ">
                                    <a href="../customer/customer_list.php">View All Customers</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../messages/bulk_m.php">Send Customer Promotion</a>
                                </li>
								
                            </ul>
                        </li> 


						<li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span>INVENTORY</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="../inventory/add_product/add_product.php">Add New Product</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../inventory/product_list/product_list.php">View Products</a>
                                </li>


                                
								
                            </ul>
                        </li> 
						
						<li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>USERS</span>
                            </a>
                            <ul class="submenu ">
        
                            <li class="submenu-item ">
                                    <a href="../users/view_users/manage_user.php">View Users</a>
                                </li>
						
                                
								
                            </ul>
                        </li> 
						
						
						<li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-bar-chart-fill"></i>
                                <span>SALES</span>
                            </a>
                            <ul class="submenu ">
                            <li class="submenu-item ">
                                    <a href="../customer/ongoingdataadd.php">POS</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../error_page/404.php">View Daily Sales</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="../sales/sales_list.php">View All Sales</a>
                                </li>
                                
								
                            </ul>
                        </li> 
						


						
						<li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>REPORTS</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                <li class="submenu-item ">
                                    <a href="../customer/customer_report.php">Customer Reports</a>
                                </li>
								
								<li class="submenu-item ">
                                    <a href="../error_page/404.php">System Login Report</a>
                                </li>
                                
								
                            </ul>
                        </li> 
						
						
						<li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>SETTINGS</span>
                            </a>
                            <ul class="submenu ">
                            <li class="submenu-item ">
                                    <a href="b_profile.php">Business Details</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../error_page/404.php">Backups</a>
                                </li>

								
                            </ul>
                        </li> 

                    </ul>

                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
        <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading" >
               
            </div>
            <div class="page-content">

             <!--  Logout headder        ------------------------->

<style>
                                    .logout{
                                        background:none;
                                        border:none;
                                        color:#ff8080;
                                        border-radius:5px;
            
                                    }

                                    .font-bold{
          
                                    }
                                    .card{
                                     
                                       width: 107%;
                                       margin-top:-65px;
                                       margin-left:-4%;
                                       padding-left:93%;
                                       height: 50px;
                                       border-radius:1px;
                                       box-shadow: 0.5px 1px 12px #ececec;
                                       ;
                                      
                                      
                                    }
                                    .d-flex{
                                        height: 81px;
                                    }
                                    .ms-3 h6{
                                       margin-bottom:-2px;
                                       margin-left:6px;
                                       
                                    }

                                    .card-body{
                                        margin-top:-15px;
                                    }

                                    .hedder{
                                        background:;
                                        margin-top:-3%;
                                        margin-left:-2%;
                                        font-size:13px;
                                      
                                        

                                    }
                                    .newvehical form{
                      
                                    }

                                    .time_date{
                                        position: absolute;
                                        margin-left:-85%;
                                        margin-top:1.4%;
                                    }
                                </style>
                        <div class="card">
                        <div class="time_date">
                     <h6>   <?php 
                     date_default_timezone_set('Asia/Colombo');
                            $date = date('m/d/Y h:i:s a', time());
                            echo $date;
                            ?> </h6>
                               </div>
                            <div class="card-body py-0 px-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-x0">
                                        <img  class="pro_pic" src="../assets/images/faces/2.png" alt="Face 1">
                                    </div>
                       
                                    <div class="ms-3 name">
                                    <h6 class="font-bold"><?php echo $_SESSION['uname']; ?></h6>
                                        
                                        <form method='post' action="">
                                         <input type="submit" class="logout" value="Logout" name="but_logout">
                                         </form>
                               
                                    </div>
                                </div>
                            </div>
                        </div>
  
<!--  Logout headder        ------------------------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.b_card {
  
  max-width: 100%;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.b_title {
  color: grey;
  font-size: 18px;
}

.b_button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: lightblue;
  text-align: center;
  cursor: pointer;
  width: 50%;
  font-size: 18px;
}

.b_a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

.b_button:hover, a:hover {
  opacity: 0.7;
}
</style>




<div class="b_card">
  <img src="logo cs.png" alt="John" style="width:20%">

  <form action="upload.php" method="post" enctype="multipart/form-data">

 <!-- <input type="file" name="fileToUpload" id="fileToUpload" >

  <button  type="submit"  name="submit"><i class="material-icons">upload</i></button>
-->
</form>

  <h1><?php echo $b_name?></h1>
  <p class="b_title"><?php echo $b_ceo?></p>
  <p><?php echo $b_address?></p>
  <p><?php echo $b_tp?></p>
  <p><?php echo $b_email?></p>
  <p><?php echo $b_website?></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
 <?php
 $res2=mysqli_query($conn,"SELECT * FROM b_data"); //sending data for pending.php

 while($row=mysqli_fetch_array($res2))
 {
 
 //vehicle details
 $b_name=$row["b_id"];

 
 

 
  echo"<td>"; ?> <a href="b_edit.php?id=<?php echo $row["b_id"]; ?>"> <button type="button" class="btn btn-success"style="background-color:#5cd65c;border:none;padding:7px;">Edit</button> </a> <?php echo"</td>";
 }
?>
  </div>

  <footer>
   
   <div class="footer clearfix mb-0 text-muted">
       <div class="float-start">
         <!--  <p>2021 &copy; C&R VENTURS</p> -->
       </div>
       
   </div>
</footer>
</div>
</div>
<script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendors/apexcharts/apexcharts.js"></script>
<script src="../assets/js/pages/dashboard.js"></script>

<script src="../assets/js/main.js"></script>
</body>

</html>

<?php
}

else{
   header('Location:../login.php');
   
}

?>