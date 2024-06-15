<?php
session_start();

if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}

if($_SESSION['uname']){
    
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <style>
        #loca{
           font-size:16px;
        }
        #value{
            width: 13%;
           margin-top:12%;
           background:;
           padding:0;
          margin-left:65%;
           position: absolute;
           
        }

        #value2{
            width: 13%;
           margin-top:12%;
           background:;
           padding:0;
          margin-left:15%;
           position: absolute;
         
        }

        .logout{
            background:#ff8080;
            border:none;
            padding:5px;
            color:white;
            border-radius:5px;
        }
        
        .time_date{
            margin-top:-27px;
            margin-bottom:28px;
            background:;
            height: 20px;
         
        }

        .noti_date{
            margin-top:-35px;
            float: right;
        }
    </style>
</head>

<body style="font-weight:bolt;">

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.php">C&S VENTURS</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu"> 

                        <li class="sidebar-item active ">
                            <a href="index.php" class='sidebar-link'>
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
                                    <a href="customer/new_customerservice.php">Add New Vehicle</a>
                                   
                                </li>
                                <li class="submenu-item ">
                                    <a href="customer/registered_customernew.php">Add New Service</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="customer/pendingservice.php">Pending Services</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="customer/ongoingdataadd.php">Opened Services</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="request/request_list.php">Requested</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="error_page/404.php">Completed Services</a>
                                </li>
                                
                            </ul>
                        </li> 

						
						<li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>MESSAGES</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item ">
                                    <a href="messages/send_new_m.php">Send New Message</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="messages/bulk_m.php">Bulk Message</a>
                                </li>

								<li class="submenu-item ">
                                    <a href="error_page/404.php">FeedBacks</a>
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
                                    <a href="customer/customer_list.php">View All Customers</a>
                                </li>

                                <li class="submenu-item ">
                                    <a href="messages/cus_promo.php">Send Customer Promotion</a>
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
                                    <a href="inventory/add_product/add_product.php">Add New Product</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="inventory/product_list/product_list.php">View Products</a>
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
                                    <a href="users/view_users/manage_user.php">View Users</a>
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
                                    <a href="customer/ongoingdataadd.php">POS</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="error_page/404.php">View Daily Sales</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="sales/sales_list.php">View All Sales</a>
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
                                    <a href="customer/customer_report.php">Customer Reports</a>
                                </li>
								
								<li class="submenu-item ">
                                    <a href="error_page/404.php">System Login Report</a>
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
                                    <a href="b_data/b_profile.php">Business Details</a>
                                </li>

								<li class="submenu-item ">
                                    <a href="error_page/404.php">Backups</a>
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

            <div class="page-heading">
               
            </div>
            <div class="page-content">

            <div class="time_date">
                     <h6>   <?php 
                     date_default_timezone_set('Asia/Colombo');
                            $date = date('m/d/Y', time());
                            echo $date;
                            include 'assets/digi.php'; 
                            ?> </h6>
                       <div class="noti_date"> 
                               <?php 
   
                            include 'assets/noti_bell.php'; 
                            ?>
                               </div>
                               </div>
        
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple" style="margin-right:-50%;">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8" >
                                                <h6 class="text-muted font-semibold"   style="font-size:15px;">Job Proccesing</h6>
                                                <?php 
     include 'db.php';
     $rowcount= 0;
     $query = "SELECT * FROM approved";
     if ($result=mysqli_query($conn,$query))
     {
     // Return the number of rows in result set
     $rowcount=mysqli_num_rows($result);
    // printf("Result set has %d rows.\n",$rowcount);
     // Free result set
     mysqli_free_result($result);
     }
   //  echo $total;
  
  ?>
                                                <h6 class="font-extrabold mb-0"><?php echo $rowcount; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue"  style="margin-right:-50%;">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Service Requested</h6>
                                                <?php 

     $rowcount1= 0;
     $query = "SELECT * FROM reqest";
     if ($result=mysqli_query($conn,$query))
     {
     // Return the number of rows in result set
     $rowcount1=mysqli_num_rows($result);
    // printf("Result set has %d rows.\n",$rowcount);
     // Free result set
     mysqli_free_result($result);
     }
   //  echo $total;
  
  ?>                                               
                                                <h6 class="font-extrabold mb-0"><?php echo $rowcount1; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green"  style="margin-right:-50%;">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">New Customers</h6>
                                                <?php
                                                $rowcount3= 0;
                                                $time = date("Y/m/d");
//echo $time;
$query = mysqli_query($conn, "DELETE FROM today_added WHERE add_id,customer_id,cus_contact < DATE_SUB(NOW() , INTERVAL 1 DAY)"); 
$query= "SELECT * FROM today_added";
if ($result=mysqli_query($conn,$query))
{
// Return the number of rows in result set
$rowcount3=mysqli_num_rows($result);
// printf("Result set has %d rows.\n",$rowcount);
// Free result set
mysqli_free_result($result);
}
//  echo $total;

?> 
                                                <h6 class="font-extrabold mb-0"><?php echo $rowcount3; ?></h6>
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red"  style="margin-right:-50%;">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Service Done</h6>
                                                <?php 

$rowcount3= 0;
$query= "SELECT * FROM payment";
if ($result=mysqli_query($conn,$query))
{
// Return the number of rows in result set
$rowcount3=mysqli_num_rows($result);
// printf("Result set has %d rows.\n",$rowcount);
// Free result set
mysqli_free_result($result);
}
//  echo $total;

?> 
                                                <h6 class="font-extrabold mb-0"><?php echo $rowcount3; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Completed Services</h4>
                                    </div>
                                    <style>
         .card-body{
        
         }
         .chart{
            height: 380px;

         }
         .chart iframe{
               height: 100%;
               width: 100%;
         }
                                    </style>
                                    <div class="card-body">
                                        <div class="chart"> <iframe src="assets/chart/chart.php" frameborder="0"></iframe></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Top Customer Locations</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center" id="loca">

                                                    <h5 class="mb-0 ms-3" id="loca">Kandy</h5>
                                                </div>
                                            </div>
                                            <div class="col-6" id="value">
                                                <h6 class="mb-0" >20</h6>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                 
                                                    <h5 class="mb-0 ms-3" id="loca">Peradeniya</h5>
                                                </div>
                                            </div>
                                            <div class="col-6" id="value">
                                                <h6 class="mb-0">12</h6>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">

                                                    <h5 class="mb-0 ms-3" id="loca">Tennakumbura</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="mb-0" id="value2">17</h6>
                                            </div>
                                            
                                        </div>
										<div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
  
                                                    <h5 class="mb-0 ms-3" id="loca">Katugastota</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="mb-0" id="value2">15</h6>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Customer Feedback</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Comment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/2.png">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Harsha</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Thank you for service my vehicle qulckly!</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/2.png">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Wijesinghe</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Wow amazing Service!</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <style>
                                    .d-flex{
                                        height: 81px;
                                    }
                                </style>
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="assets/images/faces/2.png" alt="Face 1">
                                    </div>
                       
                                    <div class="ms-3 name">
                                        <h5 class="font-bold"><?php echo $_SESSION['uname']; ?></h5>
                                        <h6 class="text-muted mb-0">
                                        <form method='post' action="">
                                         <input type="submit" class="logout" value="Logout" name="but_logout">
                                         </form>
                                    </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card"  style="margin-top:35px;">
                            <div class="card-header">
                                <h4>New Customer Request</h4>
                        
                 </div>
                         <div style="overflow:hidden; margin-top:-51px";>
                         <?php 
                         include 'db.php';
                         $total= "";
                         $res=mysqli_query($conn,"SELECT * FROM request"); //sending data for pending.php
                         while($row=mysqli_fetch_array($res))
                         {
                           // echo"<li>"; echo $row['cusname']; echo"</li>";
                          //  echo"<li>"; echo $row['discription']; echo"</li>";
                          echo"<div class='card-content pb-4'>"; echo"</div>";
                               echo"<div class='recent-message d-flex px-4 py-3'  style='margin-bottom:-30px;height:100%;background:;'>";
                            
                                   echo"<div class='avatar avatar-lg' style='width:17%;'>";
                                    echo"<img src='assets/images/faces/2.png' width='100' height='100'>";
                                echo"</div>";
                                
                                echo"<div class='name ms-4' style='width:70%;';>";
                                       echo"<h5 class='mb-1'>";echo $row['cusname'];echo"</h5>";
                            
                                    echo"</div>";
                                
                                echo"</div>";
                            
                            }
                            ?>                  
                                <div class="px-1" style="margin-top:20px; margin-bottom:5px;">
                                    <a href="customer/request_list.php"><button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>View All</button></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>
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
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>



</body>

</html>

<?php
}

else{
   header('Location:login.php');
   
}



?>

