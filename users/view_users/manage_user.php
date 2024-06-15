<?php
session_start();
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: ../login.php');
}
if($_SESSION['uname']){
    


?>
 
 <?php include_once 'db_connect.php'; ?>

<?php


if (! empty($_POST["send"])) {
$username = mysqli_real_escape_string($conn,$_REQUEST['userName']);
$name= mysqli_real_escape_string($conn,$_REQUEST['name']);
$userrole = mysqli_real_escape_string($conn,$_REQUEST['role']);
$email = mysqli_real_escape_string($conn,$_REQUEST['email']);
$mobile = mysqli_real_escape_string($conn,$_REQUEST['mobile']);
$pass1= mysqli_real_escape_string($conn,$_REQUEST['pass1']);
$pass2= mysqli_real_escape_string($conn,$_REQUEST['pass2']);

if ($username != "" && $email != "" && $pass2 != ""){

    $sql_query = "select count(*) as cntUser FROM users WHERE username='".$username."' and password='".$pass2."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){

        echo '<script>alert("Entered Details is Areldy Exsist")</script>';
    }

    else{
$error = "";
$sql = "INSERT INTO users(username,name,userrole,email,mobile,password)
        VALUES('$username','$name','$userrole','$email','$mobile', '$pass2')";

if ($conn->multi_query($sql)===TRUE) 
 
 {
	echo "<font color='green'>   Data added successfully.";
   
    
} 
	else{
	echo "Error: could not able to execute $sql." . $sql . "<br>".  $conn->error;}
    }
    

}
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
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.svg" type="image/x-icon">


<script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="css/style_3.css" />


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
                                    <a href="../../inventory/add_product/add_product.php">Add New Product</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../../inventory/product_list/product_list.php">View Products</a>
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
                                    <a href="    <li class="submenu-item>">
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
  

<div id="" style="width:300px;background-color: ;padding: 8px;">
<div id="wb_Text1">


  
</div>
<div id="" style="margin-left: 85px;">

<div id="contact-icon">
        <img src="./icon/icon-contactt.png" alt="contact" height="30"
            width="30">
</div>
 
</div>
<div id="" style="float:right;margin-top: 15px;margin-top: 15px; margin-bottom: 15px;">
</div>

<div>
<table id="fullTable" class="fullTable" >
<thead class="tablehead">

<tr>

<td class="cell">#</td>
<td class="cell">Username</td>
<td class="cell">Name</td>
<td class="cell">User Role</td>
<td class="cell">Email</td>
<td colspan="4"class="cell"></td>
</tr>
</thead>
<tbody>

 <?php 

$res= mysqli_query($conn,"SELECT * FROM users");
while($row=mysqli_fetch_array($res))
{
  echo "<tr>";

echo"<td>"; echo $row["id"]; echo"</td>";
echo"<td>"; echo $row["username"]; echo"</td>";
echo"<td>"; echo $row["name"]; echo"</td>";
echo"<td>"; echo $row["userrole"]; echo"</td>";
echo"<td>"; echo $row["email"]; echo"</td>";




echo"<td>"; ?> <a href="edit/edit_user.php?id=<?php echo $row["id"]; ?>"   onClick="return popup(this, 'notes')"> <button type="button" class="btn btn-success" style="background:none;border:none;"><img src="./icon/edit.png" alt="remove" height="20" width="20"></button> </a> <?php echo"</td>";


echo"<td>"; ?> <a href="delete/delete.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-danger" style="background:none;border:none;"><img src="./icon/trash.png" alt="remove" height="20" width="20"></button> </a> <?php echo"</td>";




    echo "<tr>";
}

?>

<SCRIPT TYPE="text/javascript"> 
function popup(mylink, windowname) {
   if (! window.focus)return true; 
   var href;
    if (typeof(mylink) == 'string') href=mylink; 
    else href=mylink.href;
     window.open(href, windowname, 'width=600,height=600,scrollbars=yes');
      return false; } </SCRIPT>
</tbody>
</table>
</div>
</div>

<div id="contact-popup">



        <form action="" class="contact-form" action="" id="contact-form" method="post">
        <div id="add-icon">
        <img src="./icon/icon-contactt.png"  height="50"
            width="50">
</div>

        <button class="close" onclick="document.getElementById('contact-popup').style.display='none'" ><img src="./icon/cancel.png" alt="remove" height="30" width="30"></button>
  <div id="input_head">

  <span>Username </span><span>*</span>
  <span id="userName-info" class="info"></span>
  </div>
  <input type="text" id="userName" name="userName" placeholder="">

  <div id="input_head">
  <span>Name </span><span>*</span> <span id="name-info" class="info"></span></div>
  <input type="text" id="name" name="name" placeholder="">
  
  <div id="input_head">
  <span>User Role </span> <span id="role-info" class="info"></span></div>
  <select name="role" size="1" id="user">
  <option value="admin"></option>
  <option value="admin">Admin</option>
  <option value="receptionist">Receptionist</option>
  
  </select>
  
  <div id="input_head">
  <span>Email</span> <span id="email-info" class="info"></span></div>
  <input type="text" id="email" name="email" placeholder=""> 
  
  <div id="input_head">
  <span>Mobile</span> <span id="mobile-info" class="info"></span></div>
  <input type="text" id="mobile" name="mobile" placeholder=""> 

  <div id="input_head">
  <span>Password </span><span>*</span> <span id="pass1-info" class="info"></span> </div>
  <input type="text" id="pass1" name="pass1"  placeholder="">
  
  
  <div id="input_head">
 
  <span>Confirm password </span><span>*</span> <span id="pass2-info" class="info"></span>
  <span id="check-info" class="info"></span></div>
 
  <input type="text" id="pass2" name="pass2" placeholder="">
  <div class="submitDiv">
  <input type="submit" id="send" name="send" value="ADD" class="submit">
  </div>
  
  
  </div>
  </div>
  </form>
    </div>



    <script>
$(document).ready(function () {
    $("#contact-icon").click(function () {
        $("#contact-popup").show();
    });
  //Contact Form validation on click event
  $("#contact-form").on("submit", function () {
        var valid = true;
        $(".info").html("");
        $("inputBox").removeClass("input-error");
        
        var userName = $("#userName").val();
        var name = $("#name").val();
        var role = $("#role").val();
        var email = $("#email").val();
        var mobile = $("#mobile").val();
        var pass1 = $("#pass1").val();
        var pass2 = $("#pass2").val();

        if (userName == "") {
            $("#userName-info").html("required.");
            $("#userName").addClass("input-error");
        }
        if (name == "") {
            $("#name-info").html("required.");
            $("#name").addClass("input-error");
            valid = false;
        }
        if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
        {
            $("#email-info").html("Enter Valid Email.");
            $("#email").addClass("input-error");
            valid = false;
        }

        if (mobile == "") {
            $("#mobile-info").html("required.");
            $("#mobile").addClass("input-error");
            valid = false;
        }

        if (!mobile.match(/^\d{10}$/)) {
            $("#mobile-info").html("Enter Valid Mobile.");
            $("#mobile").addClass("input-error");
            valid = false;
        }

        if (role == "") {
            $("#role-info").html("required.");
            $("#role").addClass("input-error");
            valid = false;
        }
        if (pass1 == "") {
            $("#pass1-info").html("required.");
            $("#pass1").addClass("input-error");
            valid = false;
        }

        if (pass2 == "") {
            $("#pass2-info").html("required.");
            $("#pass2").addClass("input-error");
            valid = false;
        }


        if (pass2 !== pass1) {
            $("#check-info").html("Re Enter Confirm Password.");
            $("#pass2").addClass("input-error");
            valid = false;
        }
        return valid;

    });
});
</script>
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

