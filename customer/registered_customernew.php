<?php
session_start();
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: ../login.php');
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/new_cus1.css">
  
</head>

<body>
    <div id="app" >
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
                                    <a href="new_customerservice.php">Add New Vehicle</a>
                                   
                                </li>
                                <li class="submenu-item ">
                                    <a href="registered_customernew.php">Add New Service</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="pendingservice.php">Pending Services</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ongoingdataadd.php">Opened Services</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="../request/request_list.php">Requested</a>
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
                                    <a href="customer_list.php">View All Customers</a>
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
                                    <a href="ongoingdataadd.php">POS</a>
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
                                    <a href="customer_report.php">Customer Reports</a>
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
                                    <a href="../b_data/b_profile.php">Business Details</a>
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
        <div id="main" >
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading" >
               
            </div>
            <div class="page-content">

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
                                       
                                    }

                                    .card-body{
                                        margin-top:-15px;
                                    }

                                    .hedder{
                                        background:;
                                        margin-top:-3%;
                                        margin-left:-2%;
                                        font-size:13px;
                                        background:none;
                                        

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
                                        <img  class="pro_pic" src="assets/images/faces/2.png" alt="Face 1">
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

  <!--main div-->

<div class="newvehical">
<div class="hedder" >
    <a href="../index.html"><h7>DASHBOARD /</h7></a> <a href="new_customerservice.php"><h7 style="color:gray;">ADD NEW SERVICE</h7></a>
   
    </div>
  <div class="ma">

<form action="" method="post">

<!-- customerdetails-->


<div class="id_search">
  <label for="search_lable"></label>
  <input type="text" id="cusname" name="cusname"  valu="<?php echo $id ?>">

<input type="submit" name="submit" value="FIND" id="find">
</div>

</div>

</form>



<?php include_once 'connection.php'; ?>

<?php  
$customerid="";
$cusname="";
$cuscontact="";
$p_datee="";
$p_stime="";
$vehicle_id="";
$brand="";
$model="";
$bodytype="";
$milage="";
$year="";
$serviceid="";
$servicetype="";
$sectionalhead="";
$employer="";
$vehiclenumber="";
$vehicletype="";
$vehicle_number="";

//$vehicle_number=mysqli_real_escape_string($conn,$_REQUEST['vehicle']);

 if(isset($_POST['submit'])) { 
    $id=mysqli_real_escape_string($conn,$_REQUEST['cusname']);
//echo $id;



$res=mysqli_query($conn,"SELECT * FROM customer_list WHERE customerid=$id OR cuscontact=$id"); //sending data for pending.php

while($row=mysqli_fetch_array($res))
{

$customerid=$row["customerid"];
$cusname=$row["cusname"];
$cuscontact=$row["cuscontact"];
$p_datee=$row["join_date"];
$p_stime=$row["join_time"];
}


$res=mysqli_query($conn,"SELECT * FROM vehicledetails WHERE customerid=$customerid"); //sending data for pending.php

//$vehi=mysqli_query($conn,"SELECT * FROM vehicledetails WHERE customerid=$customerid");

while($row=mysqli_fetch_array($res))
{

//vehicle details
$customerid=$row["customerid"];

$model=$row["model"];
$bodytype=$row["bodytype"];
$milage=$row["milage"];
$year=$row["year"];
$vehiclenumber=$row["vehiclenumber"];





}
 }
$conn->close();

?>



<form action="reg_customer_service_add_data.php" method="post">

<!-- customerdetails-->

<div class="mainone" style=""> 
<div class="left">
  <label for="customerid">Customer ID </label>
  
  <input type="customerid" id="customerid" name="customerid" placeholder="" value="<?php echo $customerid ; ?>">



<div class="inputa">
  <label for="cusname"> customer Name</label>
  <input type="text" id="cusname" name="cusname" placeholder="" required="" value="<?php echo $cusname;?>">
</div>

<div class="inputa">
  <label for="cuscontact">Contact</label>
  <input type="text" id="cuscontact" name="cuscontact" placeholder="" value="<?php echo $cuscontact;?>" >
</div>
</div>



</div>

<div class="mainfive">
<div class="left2">

<div class="inpute">
  <label for="p_datee">join date</label>
  <input type="text" id="p_datee" name="p_datee" placeholder=""  value="<?php echo $p_datee;?>">
</div>

<div class="inpute">
  <label for="p_stime">join time</label>
  <input type="text" id="p_stime" name="p_stime" placeholder=""  value="<?php echo $p_stime;?>">
</div>
<div class="inpute">
<label for="vehiclenumber">vehiclenumber</label>
  <input type="text" id="vehiclenumber" name="vehiclenumber" placeholder=""  value="<?php echo $vehiclenumber;?>">
 
</div>
</div>
</div>








  <!--vehicledetails-->
  <div class="maintwo" style=""> 
  
  

<div class="right">
<div class="inputb">

</div>


 
</div>
</div>
</div>



<div class="mainthree">
<div class="left1">
<div class="inputc">
  <label for="model">model</label>
  <input type="text" id="model" name="model" placeholder="" value="<?php echo $model;?>">
 </div>
<div class="inputc">

  <label for="bodytype">bodytype</label>
  <input type="text" id="bodytype" name="bodytype" placeholder="" value="<?php echo $bodytype;?>">
 
</div>

<div class="inputc">
   <label for="milage">milage</label>
   <input type="text" id="milage" name="milage" placeholder="" value="<?php echo $milage;?>">
</div>

<label for="year">year</label>
   <input type="text" id="year" name="year" placeholder="" value="<?php echo $year;?>">
</div>

</div>
</div>


<div class="mainfour">
<div class="right1">
<div class="inputd">








</div>
</div>




 <div class="bb_right">
 <div class="submit">
   <?php if(isset($_POST['submit'])) { ?>
  <input type="submit" value="Add Service" name="submit">
  <?php  }
    else{
      echo '<script type="text/javascript">';
      echo ' alert("ENTER CUSTOMER ID OR CONTACT")';  //not showing an alert box.
      echo '</script>'; 
    }
    
    ?>
</div></div>



<footer>
    <div class="footer clearfix mb-0 text-muted"> 
        <div class="float-start"  style="background-color:;margin-top:5%;margin-left:25%;">
           
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

