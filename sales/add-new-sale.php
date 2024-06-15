<?php
require_once 'connection.php';
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="css/sale_style1.css">
    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
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
               
            <div class="page-content">

<style>
    .logout{
        background:none;
        border:none;
        color:#ff8080;
        border-radius:5px;
        margin-top:-10px;
        margin-left:-7px;
        background-color:;
        position: absolute;
        


    }

    .font-bold{

    }
    .card{
     
       width: 107%;
       margin-top:-47px;
       margin-left:-4%;
       padding-left:93%;
       height: 50px;
       border-radius:1px;
       box-shadow: 0.5px 1px 12px #ececec;
       background:;
       margin-bottom:15px;
    }
    .d-flex{
        height: 81px;
    }
    .ms-3 h6{
      background-color:;
       margin-top:-20px;
    }

    .card-body{
        margin-top:-10px;
    }

    .page-head{
        background:;
       
        margin-left:-2%;
        font-size:13px;
        

    }
    .newvehical form{
        margin-top:10px;
     
    }

    .time_date{
        position: absolute;
        margin-left:-85%;
        margin-top:1.4%;
        background:;
        width: 100%;
    }

    .pro_pic{
        margin-top:-10px;
    }


</style>
<div class="card">
<div class="time_date">
<h6>   <?php 
                     date_default_timezone_set('Asia/Colombo');
                            $date = date('m/d/Y', time());
                            echo $date;
                            include '../assets/digi.php'; 
                            ?> </h6>
</div>
<div class="card-body py-0 px-0">
<div class="d-flex align-items-center">
    <div class="avatar avatar-x0">
        <img  class="pro_pic" src="../assets/images/faces/2.png" alt="Face 1">
    </div>

    <div class="ms-3 name">
    <h6 class="font-bold"><?php echo $_SESSION['uname']; ?></h6>
        
        <form method='post' action="" class="">
         <input type="submit" class="logout" value="Logout" name="but_logout">
         </form>

    </div>
</div>
</div>
</div>



<?php 
$cu_id=$_GET["id"];

$bill_cus_id=$cu_id;

//$jobnumber="";
$customerid="";
$cusname="";
$cuscontact="";
$vehiclenumber="";
$vehicletype="";

$res=mysqli_query($conn, "SELECT * FROM customer_list WHERE customerid=$cu_id");
while($row=mysqli_fetch_array($res))

{

$id=$row["cid"];
//$jobnumber=$row["jobnumber"];
$customerid=$row["customerid"];
$cusname=$row["cusname"];
$cuscontact=$row["cuscontact"];


}

?>

<style>
.main{
  background-color:;
  width: 100%;
}

.product{
    background-color: white;
    width: 56%;
    padding:10px;
    border-radius:5px;
    margin-bottom:20px;
}

.product select{
    width: 70%;
}

.payment{
    background-color:white;
    width: 43%;
    float:right;
    padding:20px;
    margin-top:-64px;
    margin-left:px;
    border-radius: 5px;
    font-size: 13px;

}

.payment select{
    width: 40%;
}

.pro_list{
    background-color:;
    width: 56%;
    float:left;
    
}



.bill_prices{
    background-color:;
    width: 50%;
    font-size: 13px;
 
  
}

</style>



<div class="main">



<div class="box1">
<div class="product">





<?php

if(isset($_POST["product"])){
$product = "";
$pro_id = mysqli_real_escape_string($conn,$_REQUEST['product']);;
$cat_name= "";
$sell_price= "";
$quntity= "";
$quantity="";
$total="";

$res=mysqli_query($conn, "SELECT * FROM product WHERE pro_id=$pro_id");
while($row=mysqli_fetch_array($res))

{
   $cat_name= $row["cat_name"];
   $product = $row["pro_name"];
   $sell_price= $row["sell_price"];
   $id= $row["pro_id"];

 //  echo $cat_name;
}
echo $cu_id;
$sql1 = "INSERT INTO bill_table(pro_cat,product,price)
VALUES ('$cat_name','$product','$sell_price')";
	

	if ($conn->query($sql1) === TRUE) {
//  echo "New record created successfully sql 1";
//echo '<script type ="text/JavaScript">';  
//echo 'alert("successfully Added to pending job list")';  
//echo '</script>';


} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$sql11 = "INSERT INTO pro_bill(pro_cat,pro_name,price,quntity,total)
VALUES ('$cat_name','$product','$sell_price','$quantity','$total')";
	

	if ($conn->query($sql11) === TRUE) {
//  echo "New record created successfully sql 1";
//echo '<script type ="text/JavaScript">';  
//echo 'alert("successfully Added to pending job list")';  
//echo '</script>';


} else {
  echo "Error: " . $sql11 . "<br>" . $conn->error;
}

}

?>


<?php
if(isset($_POST["quantity"])){
$product = "";
$quantity = mysqli_real_escape_string($conn,$_REQUEST['quantity']);
$p_id = mysqli_real_escape_string($conn,$_REQUEST['p_id']);
//echo $p_id;
$sql2 = "UPDATE bill_table SET quantity='$quantity' WHERE p_no=$p_id";
	

	if ($conn->query($sql2) === TRUE) {
//  echo "New record created successfully sql 1";
		echo '<script type ="text/JavaScript">';  
//echo 'alert("successfully Added to pending job list")';  
echo '</script>';
//header("location: pendingservice.php");
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}


}
?>

<form action="" method="post"  id='myform'>

<span style="color:rgb(193, 193, 193);;font-family:Arial;font-size:15px;"><b>Product</b></span>

<select  id="select" class="select_product" name="product" onchange='submitForm();'>
<option value=""></option>
 <?php     include 'db.php';

$res= mysqli_query($conn,"SELECT * FROM product");
while($row=mysqli_fetch_array($res))
{ 
   $pro_name = $row["pro_name"];
   $value = $row["pro_id"];

  echo"<option value='$value'>"; 
  echo $row["pro_name"];
  echo"</option>";               } ?>

</select>
</div>
</div>
</form>

<!---------------------- Form Submit ------------------------->
<script type='text/javascript'> 
function submitForm(){ 
  // Call submit() method on <form id='myform'>
 document.getElementById('myform').submit();
} 
</script>

<script type='text/javascript'> 
function submitForm2(){ 
  // Call submit() method on <form id='myform'>
  var table = document.getElementById ("regtable");
  document.getElementById('myform2').submit();
  ;
} 
</script>

<!---------------------- Form Submit ------------------------->
<script type='text/javascript'>



</script>

<?php
if(isset($_POST["quantity"])){
$product = "";
$quantity = mysqli_real_escape_string($conn,$_REQUEST['quantity']);
$p_id = mysqli_real_escape_string($conn,$_REQUEST['p_id']);
//echo $p_id;
$sql2 = "UPDATE bill_table SET quantity='$quantity' WHERE p_no=$p_id";
	

	if ($conn->query($sql2) === TRUE) {
//  echo "New record created successfully sql 1";
//echo '<script type ="text/JavaScript">';  
//echo 'alert("successfully Added to pending job list")';  
//echo '</script>';
//header("location: pendingservice.php");
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}


}
?>  

<div class="pro_list" id="pro_list">


<table class="table"  id="regtable">
  
  <thead>
    <tr>

    <th>No</th>
    <th>Code</th>   
    <th>Category</th>
    <th>Product</th>
    <th>Price</th>
    <th>Quntity</th>
    <th>Total</th>
    <th></th>
    
    </tr>
  </thead>
  <tbody id="data_table">
<?php  
$customerid="";
$res=mysqli_query($conn,"SELECT * FROM bill_table"); //sending data for pending.php
while($row=mysqli_fetch_array($res))
{
  //echo "<tr>";
  echo'<tr>';

//collecting data from addservice.php
echo"<td>"; echo $row["p_no"]; echo"</td>";
echo"<td>"; echo $row["pro_code"]; echo"</td>";
echo"<td>"; echo $row["pro_cat"]; echo"</td>";
echo"<td>"; echo $row["product"]; echo"</td>";
echo"<td>"; echo $row["price"]; echo"</td>";
echo"<td>"; ?> <form action="" method="post"  id='myform2'> 
                    <input type="hidden" value="<?php echo  $row["p_no"]; ?>" name="p_id">
                       <input type="number" class="quantity"  id="quantity" name="quantity" min="1" max="100" value="<?php echo $row["quantity"]; ?>"  onchange='submitForm2()';> 
                        </form> <?php  echo"</td>";

                        ?> 
            
                <?php echo"</td>";

echo"<td>"; ?> 
<?php 
$id=$row["p_no"];
$total=$row["price"]* $row["quantity"];

$sql2 = "UPDATE bill_table SET total='$total' WHERE p_no=$id";
	

	if ($conn->query($sql2) === TRUE) {
//  echo "New record created successfully sql 1";
		echo '<script type ="text/JavaScript">';  
//echo 'alert("successfully Added to pending job list")';  
echo '</script>';
//header("location: pendingservice.php");
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}

?> 
               
<input type="text" id="total" class="total" name="total" min="1" max="100" value="<?php echo $total ?>"  onchange='submitForm2()';> 
    
                </form> <?php echo"</td>";

  //selecting the page  approve or reject
  echo '<td><div align="center"><a href="#"  id="' . $row['p_no'] . '" onclick="del('.$row['p_no'].')"><i style="color:red;margin-right:20px;"class="far fa-trash-alt"></i></a></div></td>';
}

?>

  </tbody>
</table>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
function del(id)
{

 var info = 'id=' + id;
  
        var html = $.ajax({
        type: "GET",
        url: "delete.php",
        data: info,
        async: false ,
         success: function() {
            $( "#pro_list" ).load(window.location.href + " #pro_list" );
            $( "#bill_prices" ).load(window.location.href + " #bill_prices" );}
        }).responseText;


    }

</script>
</div>

<div class="payment">

<div>
<?php 
     date_default_timezone_set('Asia/Colombo');  
     $time= date('h:i:s a', time());
     
?> 

<form action="bill/customer_bill.php" method="post">
<input type="text" id="DatePicker1" name="date" value="<?php echo $date = date('Y-m-d') ?>" spellcheck="false">
<input type="text" id="DatePicker1" name="time" value="<?php echo $time; ?>" spellcheck="false">
</div>
<hr>

<div>

<span class="cus_details1">Name         </span><h7>: <?php echo $cusname; ?> </h7><br>
<input type="hidden" value="<?php echo $cusname; ?>" name="cusname">
<span class="cus_details2"> Mobile      </span> <h7>: <?php echo $cuscontact; ?> </h7><br>
<input type="hidden" value="<?php echo $cuscontact; ?>" name="cuscontact">
<span class="cus_details3"> Customer ID </span> <h7>: <?php echo $cu_id; ?> </h7>
<input type="hidden" value="<?php echo $customerid; ?>" name="cuscontact">

</div>
<hr>


<form action="bill/customer_bill.php" method="post">
<input type="hidden" name="">
    <input type="hidden" value="<?php echo $bill_cus_id; ?>" name="bill_cus_id">
<span class="payment_method">Payment Method</span>

<select class="class_payment_method" name="payment_method"   required>
    
 <?php     include 'db.php';

$res= mysqli_query($conn,"SELECT * FROM Payment_method");
while($row=mysqli_fetch_array($res))
{
  $value = $row["payment_m"];
  echo"<option value='$value'>"; 
  echo $row["payment_m"];
  echo"</option>";               } ?>
</select>



<?php
$result = mysqli_query($conn, 'SELECT SUM(total) AS value_sum  FROM bill_table'); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];

?>

<div class="bill_prices" id="bill_prices">
<div id="box0">



<span>Service charge</span>
<input class="bill_input1" type="text" value="" id="Text1" name="service_charge"  oninput="add_number()" style="padding-left:1.5em;font:inherit" required><span style="margin-left:-11.5em;margin-right:10em;">RS</span>
</div>

<div id="box0">

<span>Total Discount</span>
<input class="bill_input2" type="text" value="" id="Text2" name="total_discount" oninput="add_number()" style="padding-left:1.5em;font:inherit"><span style="margin-left:-11.5em;margin-right:10em;">RS</span>
<hr>
</div>

<div id="box0">

<span>SubTotal</span>
 <input class="bill_input3" type="text" value="" id="txtresult" name="sub_total"  value="<?php echo $sum; ?>"  style="padding-left:1.5em;font:inherit"><span style="margin-left:-11.5em;margin-right:10em;">RS</span>
<hr>
</div>
<div id="box0">

<span>Paid Total</span>
<input class="bill_input4" type="text" value="" id="paidtotal" name="paid_total" oninput="add_number()" style="padding-left:1.5em;font:inherit" required><span style="margin-left:-11.5em;margin-right:10em;">RS</span>
</div>

<div id="box0">

<span>Change</span>
<input class="bill_input5" type="text" value="" id="change" name="change" oninput="add_number()" style="padding-left:1.5em;font:inherit" ><span style="margin-left:-11.5em;margin-right:10em;">RS</span>
</div>

<button type="submit" name="pay"class="bill_submit"><b>PAY BILL</b></button>
</form>
<form action="reject_sale.php" method="post">
<button type="submit" name="reject" class="bill_reject"><b>REJECT</b></button>
</form>



</div>
</div>
<script type='text/javascript'> 
var text1 = document.getElementById("Text1");
var text2 = document.getElementById("Text2");
var paid = document.getElementById("paidtotal");
function add_number() {
    var new_total= <?php echo $sum; ?>;
   var first_number = parseFloat(text1.value);
   if (isNaN(first_number)) first_number = 0;

   var second_number = parseFloat(text2.value);
   if (isNaN(second_number)) second_number = 0;


   var sum = first_number + new_total;
   var result = sum - second_number;

   document.getElementById("txtresult").value = result;

 
   var newpaid = parseFloat(paid.value);
   if (isNaN(newpaid)) newpaid = 0;
   var changevalue = newpaid - result;
   
   document.getElementById("change").value = changevalue;
}
</script>

</body>



</div>
                        </div>
                        
                    </div>
                </section>
            </div>

            <footer>
   
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <!--<p>2021 &copy; C&R VENTURS</p>!-->
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

