<?php 
require_once 'db.php';
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
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../../assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.svg" type="image/x-icon">
  

</head>

<body style="font-weight:bolt;">
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="../../index.php">C&S VENTURS</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu"> 

                        <li class="sidebar-item active ">
                            <a href="../../index.php" class='sidebar-link'>
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
                                    <a href="../../customer/new_customerservice.php">Add New Vehicle</a>
                                   
                                </li>
                                <li class="submenu-item ">
                                    <a href="../../customer/registered_customernew.php">Add New Service</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="../../customer/pendingservice.php">Pending Services</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../../customer/ongoingdataadd.php">Opened Services</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="../../customer/request_list.php">Requested</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="../../error_page/404.php">Completed Services</a>
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
                                    <a href="../../messages/send_new_m.php">Send New Message</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../../messages/bulk_m.php">Bulk Message</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="../../error_page/404.php">Feedbacks</a>
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
                                    <a href="../../customer/customer_list.php">View All Customers</a>
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
                                    <a href="add_product.php">Add New Product</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../product_list/product_list.php">View Products</a>
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
                                    <a href="    <li class="submenu-item ">
                                    <a href="../../users/view_users/manage_user.php">View Users</a>
                                </li>
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
                                    <a href="../../customer/ongoingdataadd.php">POS</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../../error_page/404.php">View Daily Sales</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="../../sales/sales_list.php">View All Sales</a>
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
                                    <a href="../../customer/customer_report.php">Customer Reports</a>
                                </li>
								
								<li class="submenu-item ">
                                    <a href="../../error_page/404.php">System Login Report</a>
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
                                    <a href="../../b_data/b_profile.php">Business Details</a>
                                </li>

								<li class="submenu-item ">
                                    <a href="../../error_page/404.php">Backups</a>
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
                                        <img  class="pro_pic" src="../../assets/images/faces/2.png" alt="Face 1">
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
  

  <!--main div-->
<div class="newvehical">
    <div class="hedder" >
    <a href="../index.html"><h7>DASHBOARD /</h7></a> <a href="new_customerservice.php"><h7 style="color:blue;">ADD ITEM</h7></a>
   
    </div>
  

    <style>


.left{
  height: 200px;
  width: 30%;
  background:;
  float:left;
}

.right{
  float:left;
  height: 200px;
  width: 30%;
  background:;
  margin-left:4%
}

.dis{
  
  height: 20%;
  width: 64%;
  background:;
  float:left;
}
.dis textarea{
    width: 100%;
    border:none;
}

#submit{
  margin-top:50%;
}

select{
  width: 100%;
  border:none;
}

#wb_Form1{
  margin-left:10%;
  margin-top:7%;
}

input{
  width: 100%;
  border:none;

}

.submit{
  width: 10%;
  background:lightgreen;
  color:white;
}

span{
  color:gray;
}

</style>

<div id="wb_Form1">
<form name="Form1" method="post" action="add_product.inc.php" enctype="multipart/form-data" id="Form1">
<div class="left">
<div id="wb_Text1">
<span >Prduct Name</span></div>
<input type="text" id="product_name" name="product_name" value="" spellcheck="false" placeholder="">
<div id="wb_Text3">
<span>Buying Price(RS) :</span></div>
<input type="text" id="buying_price" name="buy_price" value="" spellcheck="false">
<div id="wb_Text4">
<span>Selling Price(RS) :</span></div>
<input type="text" id="selling-price" name="sell_price" value="" spellcheck="false">
</div>

<div class="right">


<div id="wb_Text10">
<span>Category Name :</span></div>
<select name="categorie_list" size="1" id="caategorie" tabindex="categorie" title="categorie">
 <?php     include 'db.php';

$res= mysqli_query($conn,"SELECT * FROM categories");
while($row=mysqli_fetch_array($res))
{
  $value = $row["cat_name"];
  echo"<option value='$value'>"; 
  echo $row["cat_name"];
  echo"</option>";               } ?>
</select>

<div id="wb_Text6">
<span>Brand Name :</span></div>
<select name="Combobox1" size="1" id="brand" tabindex="brand" title="brand">
<option value='$value'>
<?php     include 'db.php';

$res= mysqli_query($conn,"SELECT * FROM distributor");
while($row=mysqli_fetch_array($res))
{
  $value = $row["dis_id"];
  echo"<option value='$value'>"; 
  echo $row["brand"];
  echo"</option>";               } ?>
</select>
</div>
<div id="wb_Text9">

<div class="dis">
<textarea name="TextArea1" id="decription" rows="7" cols="25" spellcheck="false" placeholder=" something more about product...."></textarea></div>
</div>


<input class="submit" type="submit" id="submit" name="" value="Add Item">

</form>
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
    <script src="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../../assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="../../assets/js/pages/dashboard.js"></script>

    <script src="../../assets/js/main.js"></script>



</body>

</html>
<?php
}

else{
   header('Location:../../login.php');
   
}

?>