<?php 
require_once 'connection.php';


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
                                    <a href="request_list.php">Requested</a>
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
               
            </div>
            <div class="page-content">




<?php

$datee="";
$stime="";
require_once('connection.php');


//Generate Customer Id.........................
$c_query =  'SELECT customerid FROM vip_customer ORDER BY id DESC LIMIT 1';
    $c_result =  mysqli_query($conn, $c_query);
     $c_row =  mysqli_fetch_array($c_result);

$records = $c_row['customerid'];
$record= $records+1;
echo $record;




 //Vehicle Id Customer Id.........................
$v_query =  'SELECT vehicleid FROM vehicledetails ORDER BY ver_id DESC LIMIT 1';
//echo $v_query;
    $v_result =  mysqli_query($conn, $v_query);
    $v_row =  mysqli_fetch_array($v_result);

$v_records = $v_row['vehicleid'];
$vrecord= $v_records+1;
//echo $vrecord;

 //Service Id .......................
$s_query =  'SELECT service_id FROM servicedetails ORDER BY serv_id DESC LIMIT 1';
//echo $s_query;
    $s_result =  mysqli_query($conn, $s_query);
    $s_row =  mysqli_fetch_array($s_result);

$s_records = $s_row['service_id'];
$srecord= $s_records+1;
//echo $vrecord;

$current_date = date("Y-m-d");
$current_time =date("h:i:sa");
$my_date = strtotime($current_date);

$customerid = $record;

echo $customerid;
$jobnumber="";
$cusname = mysqli_real_escape_string($conn,$_REQUEST['cusname']);
$cuscontact = mysqli_real_escape_string($conn,$_REQUEST['cuscontact']);
$discription = mysqli_real_escape_string($conn,$_REQUEST['discription']);

$v_record = $vrecord; 
//$vehicleid= mysqli_real_escape_string($conn,$_REQUEST['vehicleid']);
//$customerid= mysqli_real_escape_string($conn,$_REQUEST['customerid']);
$brand = mysqli_real_escape_string($conn,$_REQUEST['brand']);
$model = mysqli_real_escape_string($conn,$_REQUEST['model']);
$bodytype = mysqli_real_escape_string($conn,$_REQUEST['bodytype']);
$milage = mysqli_real_escape_string($conn,$_REQUEST['milage']);
$year =mysqli_real_escape_string($conn,$_REQUEST['year']);
$vehiclenumber = mysqli_real_escape_string($conn,$_REQUEST['vehiclenumber']);
$vehicletype = mysqli_real_escape_string($conn,$_REQUEST['vehicletype']);

$datee=$current_date;
//echo $datee;
$stime=$current_time;

$service_id = $srecord;
$servicetype = mysqli_real_escape_string($conn,$_REQUEST['service_type']);

//$vehicleid=mysqli_real_escape_string($conn,$_REQUEST['vehicleid']);
$sectionalhead= mysqli_real_escape_string($conn,$_REQUEST['sectionalhead']);
$employer= mysqli_real_escape_string($conn,$_REQUEST['employer']);




$sql1 = "INSERT INTO vip_customer(customerid,discription,cusname,cuscontact,datee,stime)
VALUES ('$record','$discription','$cusname','$cuscontact','$datee','$stime')";
	

	if ($conn->query($sql1) === TRUE) {
//  echo "New record created successfully sql 1";
		echo '<script type ="text/JavaScript">';  
echo 'alert("successfully Added to pending job list")';  
echo '</script>';
//header("location: pendingservice.php");
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}


$sql2= "INSERT INTO vehicledetails(vehicleid,customerid,brand,model,bodytype,milage,year,vehiclenumber,vehicletype)
VALUES ('$vrecord','$record','$brand','$model','$bodytype','$milage','$year','$vehiclenumber','$vehicletype')";


	if ($conn->query($sql2) === TRUE) {
 // echo "New record created successfully sql2";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}


$sql3= "INSERT INTO servicedetails(customerid,service_id,sectionalhead,employer,service_type)
VALUES ('$record','$srecord','$sectionalhead','$employer','$servicetype')";


	if ($conn->query($sql3) === TRUE) {
  //echo "New record created successfully sql2";
} else {
  echo "Error: " . $sql3 . "<br>" . $conn->error;
}

 if(isset($_POST['submit'])){
       
       
    }


$sql4= "INSERT INTO pendingservice(customerid,cusname,vehiclenumber,vehicletype,brand,model,bodytype,milage,year,serviceid,service_type,sectionalhead,employer,p_datee,p_stime)
VALUES ('1000','$customerid','$cusname','$vehiclenumber','$vehicletype','$brand','$model','$bodytype','$milage','$year','$service_id','$servicetype','$sectionalhead','$employer','$datee','$stime')";
	

	if ($conn->query($sql4) === TRUE) {
//  echo "New record created successfully sql 1";
		echo '<script type ="text/JavaScript">';  
echo 'alert("successfully Added to pending job list")';  
echo '</script>';
header("location: pendingservice.php");
} else {
  echo "Error: " . $sql4 . "<br>" . $conn->error;
}


$vip_list =  "INSERT INTO vip_list(customerid,cusname,cuscontact,vehiclenumber,vehicletype,brand,model,bodytype,milage,year,serviceid,service_type,sectionalhead,employer,join_date,join_time)
VALUES ('$customerid','$cusname','$cuscontact','$vehiclenumber','$vehicletype','$brand','$model','$bodytype','$milage','$year','$serviceid','$servicetype','$sectionalhead','$employer','$datee','$stime')";

 
  if ($conn->query($vip_list) === TRUE) {
 // echo "New record created successfully sql2";
} else {
  echo "Error: " . $vip_list. "<br>" . $conn->error;
}


$conn->close();

?>

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
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>


    <script type="text/JavaScript">
    function find1Function() {
      var input, filter, table, tr, trr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
   
    }

    function find2Function() {
      var input, filter, table, tr, trr, td, i, txtValue;
      input = document.getElementById("my2Input");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }

    }

    function find3Function() {
      var input, filter, table, tr, trr, td, i, txtValue;
      input = document.getElementById("my3Input");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[4];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }

    }
    </script>


<SCRIPT TYPE="text/javascript"> 
function popup(mylink, windowname) {
   if (! window.focus)return true; 
   var href;
    if (typeof(mylink) == 'string') href=mylink; 
    else href=mylink.href;
     window.open(href, windowname, 'width=600,height=800,scrollbars=yes');
      return false; } </SCRIPT>




</body>

</html>
   