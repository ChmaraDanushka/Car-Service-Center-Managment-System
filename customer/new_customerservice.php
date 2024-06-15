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
    <link rel="stylesheet" type="text/css" href="assets/css/cus__style.css">
</head>

<body style="background:;">
    <div id="app">
        <div id="sidebar" class="active" style="">
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
        <div id="main">
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

                                    .page-head{
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

                                    .inputa #vehicletype{
                                           width: 204px;
                                           width: 300px;
                                           padding: 4px;
                                           border:none;
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
    <div class="page-head" >
    <a href="../index.html"><h7 style="color:lightblue;">DASHBOARD /</h7></a> <a href="new_customerservice.php"><h7 style="color:Gray;">ADD NEW VEHICLE</h7></a>
   
    </div>

<form action="new_customerserviceadddata.php" method="post" class="form" onsubmit="return validate();">

<!-- customerdetails-->
<div class="mainone">
      <div class="left">

  <div class="inputa">
    <label for="cusname"></label>
    <input type="text" id="cusname" name="cusname" placeholder="CUSTOMER NAME" required>
   </div>

  <div class="inputa">
    <label for="cuscontact"></label>
    <input type="text" id="cuscontact" name="cuscontact" placeholder="CUSTOMER CONTACT"  required>
  </div>
  <div class="inputa">
    <label for="year"></label>
    <input type="number" id="year" name="year" placeholder="PRODUCTION YEAR">
  </div>
 

 <div class="inputa">
  <label for="vehiclenumber"></label>
  <input type="text" id="vehiclenumber" name="vehiclenumber" placeholder="VEHICLE NUMBER"  required>
</div>

<div class="inputa">
    <label for="milage"></label>
    <!--servicedetails-->
    <input type="number" id="milage" name="milage" placeholder="MILAGE">
  </div>

</div>
</div>
<div class="maintwo">

    <div class="inputb">
        
        <select class="select" name="location" id="cars">
        <option value="" disabled selected>LOCATION</option> 	
        <option value="Ambalangoda">Ambalangoda</option> 	
<option value="Ampara">Ampara</option> 
<option value="Anuradhapura">Anuradhapura	</option> 
<option value="Badulla">Badulla</option> 
<option value="Balangoda">Balangoda		</option> 
<option value="Bandarawela">Bandarawela	</option> 
<option value="Bandarawela">Batticaloa	</option> 
<option value="Beruwala">Beruwala		</option> 
<option value="Chavakacheri">Chavakacheri		</option> 
<option value="Chilaw">Chilaw		</option> 
<option value="Colombo">Colombo	</option> 
<option value="Dambulla">Dambulla	</option> 
<option value="Dehiwala-Mount LaviniA">Dehiwala-Mount LaviniA</option> 	
<option value="Eravur">Eravur			</option> 
<option value="Galle">Galle	</option> 
<option value="Gampaha">Gampaha		</option> 
<option value="Gampola">Gampola		</option> 
<option value="Hambantota">Hambantota		</option> 
<option value="Haputale">Haputale		</option> 
<option value="Haputale">Harispattuwa			</option> 				
<option value="Hatton">Hatton		</option> 
<option value="Horana">Horana		</option> </option> 
<option value="Ja-Ela">Ja-Ela		</option> 
<option value="Jaffna">Jaffna	</option>
<option value="Kadugannawa">Kadugannawa	</option> 		
<option value="Kalmunai">Kalmunai	</option> 
<option value="Kalmunai Tamil">Kalmunai Tamil </option> 
<option value="Sainthamarathu">Sainthamarathu	</option> 
<option value="Kalutara">Kalutara	</option> 
<option value="Kandy">Kandy		</option> 
<option value="Kattankudy">Kattankudy			</option> 
<option value="Katunayake">Katunayake		</option> 
<option value="Kegalle">Kegalle		</option> 
<option value="Kelaniya">Kelaniya		</option> 
<option value="Kolonnawa">Kolonnawa		</option> 
<option value="Kuliyapitiya">Kuliyapitiya		</option> 
<option value="Kurunegala">Kurunegala		</option> 
<option value="Mannar">Mannar	</option> 
<option value="Matale">Matale	</option> 
<option value="Matara">Matara		</option> 
<option value="Minuwangoda">Minuwangoda		</option> 
<option value="Moneragala">Moneragala	</option> 
<option value="Moratuwa">Moratuwa</option> 
<option value="Nawalapitiya">Nawalapitiya	</option> 
<option value="Negombo">Negombo	</option> 
<option value="Nuwara">Nuwara Eliya</option> 
<option value="panadura">panadura	</option> 
<option value="Peliyagoda">Peliyagoda	</option> 
<option value="Point Pedro">Point Pedro</option> 
<option value="Puttalam">Puttalam	</option> </option> 
<option value="Ratnapura">Ratnapura	</option> 
<option value="Seethawakapura">Seethawakapura</option> 
<option value="Avissawella">Avissawella		</option> 
<option value="Sigiriya">Sigiriya	</option> 
<option value="Sri Jayawardenapura Kotte">Sri Jayawardenapura Kotte</option> 	
<option value="Talawakele">Talawakele	</option> 
<option value="Tangalle">Tangalle	</option> 
<option value="Trincomalee">Trincomalee	</option> 
<option value="Valvettithurai">Valvettithurai</option> 
<option value="Vavuniya">Vavuniya	</option> 
<option value="Wattala">Wattala	</option> 
<option value="Wattegama">Wattegama	</option> 
<option value="Weligama">Weligama</option> 
        </select>
      </div>


<div class="inputb">

  <select class="select" name="model" id="cars">
  <option value="" disabled selected>MODEL</option> 
  <option value="Honda">Honda</option>
  <option value="Toyota">Toyota</option>
  <option value="Suzuki">Suzuki</option>
  <option value="Nissan">Nissan</option>
  <option value="mazda">Mazda</option>
  <option value="tata">TATA</option>
  <option value="bmw">BMW</option>
  <option value="micro">Micro</option>
  <option value="audi">Audi</option>
  <option value="leland">Leland</option>
  <option value="pleser">Pleser</option>
  <option value="Other">Other</option>
  </select>

</div>


<div class="inputb">



  <select class="select" name="bodytype" id="bodytype">
  <option value="" disabled selected>BODYTYPE</option> 
  <option value="Light motor">Light motor</option>
  <option value="Motorcycles">Motorcycles</option>
  <option value="Motor Tricycle or vans">Motor Tricycle or van</option>
  <option value="Dual purpose Motor vehicle">Dual purpose Motor vehicle</option>
  <option value="Light Motor Lorry ">Light Motor Lorry </option>
  <option value="Motor Lorry">Motor Lorry</option>
  <option value="Motor Lorry">Motor Lorry</option>
  <option value="Light Motor Coach">Light Motor Coach</option>
  <option value=" Motor Coach">Motor Coach</option>
  <option value="Heavy Motor Coach">Heavy Motor Coach</option>
  <option value="Hand Tractors ">Hand Tractors </option>
  <option value="Land Vehicle">Land Vehicle</option>
  <option value="Special purpose Vehicle">Special purpose Vehicle</option>
</select>
</div>

<!--employerdetails-->
  <div class="inputb" style="">
 
  <select class="select" name="c_type" id="c_type">
  <option value="" disabled selected>CUSTOMER TYPE</option> 
  <option value="vip">VIP</option>
  <option value="normal">NORMAL</option>
</select> 
</div>

 <div class="submit" style="background:;">
  <input type="submit" value="SUBMIT" name="submit" style="width: 200px; margin-top:70px;margin-left:116%;">
</div>
</div>

</form>
</div>
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

    <script type="text/javascript">
function validate()
{
 var error="";
 var name = document.getElementById( "cusname" );
 if( name.value == "" )
 {
  error = " Name Required. ";
  document.getElementById( "cusname" ).innerHTML = error;
  return false;
 }

 var contact = document.getElementById( "cuscontact" );
 if( contact.value == "" || contact.value == "/^\d{10}$/" )
 {
  error = "Contact Required";
  document.getElementById( "cuscontact" ).innerHTML = error;
  return false;
 }



 else
 {
  return true;
 }
}

</script>
</body>

</html>

<?php
}

else{
   header('Location:../login.php');
   
}

?>

