<?php 
require_once 'connection.php';

session_start();

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
                                    <a href="../messages/send_new_m.php">Send New Message</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../messages/bulk_m.php">Bulk Message</a>
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
                                    <a href="customer_list.php">View All Customers</a>
                                </li>
								<li class="submenu-item ">
                                    <a href="vip_list.php">VIP Customers</a>
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
                                <li class="submenu-item ">
                                    <a href="../inventory/distributor_list/distributor_list.php">View Distributor</a>
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
            <div class="newvehical">
    <div class="hedder" >
    <a href="../index.html"><h7>DASHBOARD /</h7></a> <a href="new_customerservice.php"><h7 style="color:blue;">VIP CUSTOMER </h7></a>
   
    </div>
  



            <style>



table{
 margin-left:;
 margin-top:2%;
}

tr th{
  background-color: #4d4dff;
  padding-left:40px;
  padding-top:7px;
  padding-right:45px;
  color:white;  
  margin-top:110px;
  
  padding-bottom:5px;
  text-align: center;
  font-size: 70%;
  
}

td{
  background-color:;
    border-radius: 2px;
    font-size: 80%;
    text-align: center;
      padding: 5px;
      border-bottom:1px solid #cccccc;
}

.btn-success{
  padding: 4px;
  border-radius: 2px;
  border:none;
  font-size:90%;
}

.btn-danger{
  padding: 4px;
  border-radius: 2px;
  border:none;
  font-size:90%;
}

.filters{
    margin-top:4%;
    height: 40px;
    width: 100%;
    background:;
    display:;
    padding-left:14%;
}

.filters ul li{
    list-style: none;
    float:left;
    margin-left:2%;
}


.search_input{
  border:none;
  background:#e8e9ff;
  

 
}

.search_submit{
  border:none;
  background:#4d4dff;
  
}

</style>


<!-- <form class="search" action="cus_search.php" method="post"> -->
<div class="filters">
        <ul>
        <li><input class="search_input" type="text" name="search" placeholder="By ID" id="myInput"  onkeyup="find1Function()"></li>
            <li><input class="search_input" type="text" name="search" placeholder="By Name" id="my2Input"  onkeyup="find2Function()"></li>
            <li><input class="search_input" type="text" name="search" placeholder="Location" id="my3Input"  onkeyup="find4Function()"></li>
            <li><input class="search_input" type="date" name="search" placeholder="By Date" id="my3Input"  onkeyup="find3Function()"></li>
           
        </ul>
 
  </div>






<table class="coll-log-12"  id="myTable">
  
  <thead>
    <tr>

     
      <th>#</th>     
      <th>Customer id</th>
      <th>Customer name</th>
      <th>customercontact</th>   
      <th>Join Date</th>
      <th>Location</th>

    
    </tr>
  </thead>
  <tbody>

    <?php 
$res=mysqli_query($conn,"SELECT * FROM customer_list where member='vip'"); //sending data for pending.php
while($row=mysqli_fetch_array($res))
{
  echo "<tr>";

//collecting data from addservice.php

echo"<td>"; echo $row["cid"]; echo"</td>";

echo"<td>"; echo $row["customerid"]; echo"</td>";
echo"<td>"; echo $row["cusname"]; echo"</td>";
echo"<td>"; echo $row["cuscontact"]; echo"</td>";

echo"<td>"; echo $row["join_date"]; echo"</td>";
echo"<td>"; echo $row["location"]; echo"</td>";



  //selecting the page  approve or reject

echo"<td>"; ?> <a href="vip_edit.php?cid=<?php echo $row["customerid"]; ?>"> <button type="button" class="btn btn-success"style="background-color:#5cd65c">Edit</button> </a> <?php echo"</td>";

echo"<td>"; ?> <a href="delete.php?cid=<?php echo $row["customerid"]; ?>"> <button type="button" class="btn btn-danger"style="background-color:#ff4d4d ">Delete</button> </a> <?php echo"</td>";

echo"<td>"; ?> <a href="vip_view.php?cid=<?php echo $row["customerid"]; ?>"> <button type="button" class="btn btn-danger"style="background-color:#ff4d4d ">View</button> </a> <?php echo"</td>";


    echo "</tr>";
  }
 if(isset($_POST['submit'])){
   

if ($conn->query($approve) === TRUE) {
 // echo "New record created successfully sql2";
} else {
  echo "Error: " . $approve. "<br>" . $conn->error;
}
       
    }
     ?>
  </tbody>
</table>


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

    function find4Function() {
      var input, filter, table, tr, trr, td, i, txtValue;
      input = document.getElementById("my3Input");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[5];
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
<?php
}

else{
   header('Location:../login.php');
   
}

?>