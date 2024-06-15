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
                                    <a href="../new_customerservice.php">Add New Vehicle</a>
                                   
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
                                    <a href="../customer/request_list.php">Requested</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">Completed Services</a>
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
                                    <a href="#">Send New Message</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">Bulk Message</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">Customer Messages</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">Answered Messages</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">Feedbacks</a>
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
                                    <a href="#">Add New Customer</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">View All Customers</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">VIP Customers</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">Send Customer Promotion</a>
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
                                    <a href="#">Add New Product</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">View Products</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">Discounts</a>
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
                                    <a href="#">Add New User</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">View All Users</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">User Permissions</a>
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
                                    <a href="#">POS</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">View Daily Sales</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">View All Sales</a>
                                </li>
                                
								
                            </ul>
                        </li> 
						
						
						<li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-life-preserver"></i>
                                <span>EMPLOYE</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="#">New Employer</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">View Employer</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">Attendance</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">Salary</a>
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
                                    <a href="#">Customer Reports</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">Product Reports</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">Service Reports</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">Sales Reports</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">All Reports</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">Attendance Reports</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">Salary Reports</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">System Login Report</a>
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
                                    <a href="#">Business Details</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">Printer Settings</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">Message Settings</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">Backups</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="#">Database Settings</a>
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
            <div class="hedder" >
    <a href="../index.html"><h7>DASHBOARD /</h7></a> <a href="new_customerservice.php"><h7 style="color:blue;">NEW MESSAGE</h7></a>
   
    </div>

<?php
require_once 'connection.php';

$id=$_GET["customerid"];

$jobnumber="";
$customerid="";
$cusname="";
$cuscontact="";
$vehiclenumber="";
$vehicletype="";
$brand="";
$model="";
$join_date="";
$join_time="";

$res1=mysqli_query($conn,"SELECT * FROM vehicledetails,servicedetails WHERE vehicledetails.customerid=servicedetails.customerid AND vehicledetails.customerid={$id}"); //sending data for pending.php

while($row=mysqli_fetch_array($res1))
{

//vehicle details
$customerid=$row["customerid"];
$brand=$row["brand"];
$model=$row["model"];
$bodytype=$row["bodytype"];
$milage=$row["milage"];
$year=$row["year"];
$vehiclenumber=$row["vehiclenumber"];
$vehicletype=$row["vehicletype"];
$serviceid=$row["service_id"];
$sectionalhead=$row["sectionalhead"];
$employer=$row["employer"];

}

$res=mysqli_query($conn, "SELECT * FROM customer_list WHERE customerid=$id");
while($row=mysqli_fetch_array($res))

{

$id=$row["cid"];
$jobnumber=$row["jobnumber"];
$customerid=$row["customerid"];
$cusname=$row["cusname"];
$cuscontact=$row["cuscontact"];
$join_date=$row["join_date"];
$join_time=$row["join_time"];

}

?>


<div id="container">
</div>
<div id="Layer3">
<div id="">
<span style="color:#141414;font-family:Arial;font-size:18px;"></span></div>
<div id="wb_Form5">
<form action="https://www.srilankawebhosting.com/send/sms.php" method="GET">


<label for="ref">Reference No:</label><br>
  <input type="text" id="r" name="r" value="<?php echo $customerid; ?>"><br>
  
  <label for="mobi">Mobile Number:</label><br>
  <input type="text" id="m" name="m" value="0<?php echo $cuscontact; ?>"><br><br>
  
  <label for="sms">Message:</label><br>
  <textarea  cols="50" rows="5" type="text" id="txt" name="txt" value=""></textarea><br><br>
  
  <label for="path"></label><br>
  <input    type="hidden" id="rtn" name="rtn" value="http://localhost/C&RVENTURS/messages/send_ok.php">
  
  
  <input type="submit" value="Send SMS">
</form> 





<?php


?>

</div>
</div>


</div>
                        </div>
                        
                    </div>
                </section>
            </div>

            <footer>
   
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; C&R VENTURS</p>
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