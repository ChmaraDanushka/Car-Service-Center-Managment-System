<?php 
include 'connection.php';
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
                                    <a href="../b_data/b_profile.php">Business Details</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../error_page/404.php">Backups</a>
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
            
 
            <style>

.hedder{
    
    height: 100%;
    width:  23%;

    padding-left: 11px; 
    margin-top: -19px;
    margin-bottom: 25px;
    font-size:80%;
}

table{
 margin-left:%
}

tr th{
  background-color: #4d4dff;
  padding-left:36px;
  padding-right:38px;
  color:white;
  
  margin-top:110px;
  padding-top:5px;
  padding-bottom:5px;
  text-align: center;
  font-size: 90%;
  
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
    margin-bottom:2%;
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

.send_m{
    border:none;
    background:#4bff54;
    color:white;
    margin-left:84.5%;
    margin-bottom:1%;   
}

#color:checked{
  background-color: red;{
    
}
</style>

            <div class="hedder" >
    <a href="../index.html"><h7>DASHBOARD /</h7></a> <a href="new_customerservice.php"><h7 style="color:blue;">Bulk Masseges</h7></a>
   
    </div>



<!-- <form class="search" action="cus_search.php" method="post"> -->
<div class="filters">
        <ul>
        <li><input class="search_input" type="text" name="search" placeholder="By ID" id="myInput"  onkeyup="find1Function()"></li>
            <li><input class="search_input" type="text" name="search" placeholder="By Name" id="my2Input"  onkeyup="find2Function()"></li>
            <li><input class="search_input" type="text" name="search" placeholder="Location" id="my3Input"  onkeyup="find4Function()"></li>
            <li><input class="search_input" type="date" name="search" placeholder="By Date" id="my3Input"  onkeyup="find3Function()"></li>
            
           
        </ul>
 
  </div>
<!--  <input class="search_submit" type="submit" name="submit">  </form>  -->

  

<form class="" action="send_bulk_message.php" method="post"  onsubmit="target_popup(this)"> 
<input type="submit" id="myBtn" class="send_m" value="Send Massage" >
<table class="coll-log-12" id="myTable">
  
  <thead>
    <tr>

     
      <th><input id="color" type="checkbox" onClick="toggle(this)" /><br/></th>
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
$res=mysqli_query($conn,"SELECT * FROM customer_list"); //sending data for pending.php
while($row=mysqli_fetch_array($res))
{
  echo "<tr>";

//collecting data from addservice.php
echo "<td><input type='checkbox'   name='foo[]' id='color' value='$row[cuscontact]'> </td>";
echo"<td>"; echo $row["cid"]; echo"</td>";
echo"<td>"; echo $row["customerid"]; echo"</td>";
echo"<td>"; echo $row["cusname"]; echo"</td>";
echo"<td>"; echo $row["cuscontact"]; echo"</td>";
echo"<td>"; echo $row["join_date"]; echo"</td>";
echo"<td>"; echo $row["location"]; echo"</td>";


  //selecting the page  approve or reject






    echo "</tr>";
  }
 if(isset($_POST['submit'])){
   

if ($conn->query($approve) === TRUE) {
 //echo "New record created successfully sql2";
} else {
  echo "Error: " . $approve. "<br>" . $conn->error;
}
       
    }
    $conn->close();
     ?>
  </tbody>
</table>


</form> 

<!--------------------Send Massage ---------------------------------------->

<!--------------------Send Massage ---------------------------------------->

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

    <script type="text/JavaScript">
    function findFunction() {
      var input, filter, table, tr, trr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3];
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

    <script language="JavaScript">
function toggle(source) {
  checkboxes = document.getElementsByName('foo[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>

<script language="JavaScript">

function target_popup(form) {
    window.open('', 'formpopup', 'width=1000%,height=1000%,');
    form.target = 'formpopup';
}
    
</script>

<script type="text/JavaScript">
    function find1Function() {
      var input, filter, table, tr, trr, td, i, txtValue;
      input = document.getElementById("myInput");
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

    function find2Function() {
      var input, filter, table, tr, trr, td, i, txtValue;
      input = document.getElementById("my2Input");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3];
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

    
    function find4Function() {
      var input, filter, table, tr, trr, td, i, txtValue;
      input = document.getElementById("my3Input");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[6];
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

</body>

</html>
<?php
}

else{
   header('Location:../login.php');
   
}

?>