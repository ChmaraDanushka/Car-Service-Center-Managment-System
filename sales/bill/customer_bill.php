
<?php 
include '../connection.php';
$cusname= mysqli_real_escape_string($conn,$_REQUEST['cusname']);
$cuscontact = mysqli_real_escape_string($conn,$_REQUEST['cuscontact']);

$cus_id = mysqli_real_escape_string($conn,$_REQUEST['bill_cus_id']);
$payment_method = mysqli_real_escape_string($conn,$_REQUEST['payment_method']);
$service_charge = mysqli_real_escape_string($conn,$_REQUEST['service_charge']);
$total_discount = mysqli_real_escape_string($conn,$_REQUEST['total_discount']);
$sub_total =mysqli_real_escape_string($conn,$_REQUEST['sub_total']);
$paid_total = mysqli_real_escape_string($conn,$_REQUEST['paid_total']);
$change = mysqli_real_escape_string($conn,$_REQUEST['change']);
$time= mysqli_real_escape_string($conn,$_REQUEST['time']);
$date = mysqli_real_escape_string($conn,$_REQUEST['date']);

//echo $payment_method;

//Generate bill code.........................
$c_query =  'SELECT id_no FROM bill_prices ORDER BY id_no DESC LIMIT 1';
    $c_result =  mysqli_query($conn, $c_query);
     $c_row =  mysqli_fetch_array($c_result);
//echo  $c_row['id_no'];
$records = $c_row['id_no'];
$code= $records+1;
$code_txt="CSBC";
$year=date("Y");
$bill_code = $code_txt.$year.$records;
 
//$bill_code=;
//echo $bill_code;
//echo $records;



$sql1 = "INSERT INTO bill_prices(bill_code,customerid,pay_method,service_charge,total_discount,sub_total,paid_total,change_price,bill_time,bill_date)
VALUES ('$bill_code','$cus_id','$payment_method','$service_charge','$total_discount','$sub_total','$paid_total','$change','$time','$date')";
	

	if ($conn->query($sql1) === TRUE) {
    mysqli_query($conn,"DELETE FROM approved WHERE customerid=$cus_id");
    mysqli_query($conn,"DELETE FROM bill_table");
//  echo "New record created successfully sql 1";
		echo '<script type ="text/JavaScript">';  
echo 'alert("successfully Added to pending job list")';  
echo '</script>';
//header("location: pendingservice.php");
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}


?>

<!DOCTYPE html>
<!--
  Invoice template by invoicebus.com
  To customize this template consider following this guide https://invoicebus.com/how-to-create-invoice-template/
  This template is under Invoicebus Template License, see https://invoicebus.com/templates/license/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Io (third)</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css/bill.css">
    <style>
      .button {
    display: block;
    width: 115px;
    height: 25px;
    background: #5DFC94;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;
    float:left;
    margin-right:40px;
}
.button2 {
    display: block;
    width: 135px;
    height: 45px;
    background:#FC5D5D;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;
    margin-right:-40px;
    border:none;
    
}
    </style>
  </head>
  <body>
  <a class="button" href="../../customer/ongoingdataadd.php">Back</a>
  <button class="button2"  onclick="window.print();">Print</button>
  <div  id="GFG">
    <div id="container">
      <section id="memo">
        <div class="company-name">
          <span>C&S VENTURES</span>
          <div class="right-arrow"></div>
        </div>

        <div class="logo">
          <img src="img/logo_cs.png">
        </div>
        
        <div class="company-info">
          <div>
            <span>CS Ventures, Kandy Road</span> <span>Kandy</span>
          </div>
          <div>csventures@gmail.com / www.csventures.com</div>
          <div>076434232 / 076452456</div>
        </div>

      </section>
      
      <section id="invoice-info">
        <div>
          <span>Issue Date :</span>
          <span>Issue Time :</span>
        </div>
        
        <div>
          <span><?php echo $date;?></span>
          <span><?php echo $time;?></span>
        </div>
      </section>
      
      <section id="client-info">
        <span>Bill To :</span>
        <div>
          <span class="bold"><?php echo $cusname;?></span>
        </div>
        
        <div>
          <span><?php echo $cuscontact;?></span>
        </div>
        
        <div>
          <span>Customer ID : <?php echo $cus_id;?></span>
        </div>
        <div>

          <span>Payment Method : <?php echo $payment_method;?></span>
        </div>
      </section>
      
      <div class="clearfix"></div>
      
      <section id="invoice-title-number">
      
        <span id="title">Service Invoice</span>
        <span id="number"><b><?php echo $bill_code;?></b></span>
        
      </section>
      
      <div class="clearfix"></div>
      
      <section id="items">
        
        <table cellpadding="0" cellspacing="0">
        
          <tr>

          <th>No</th>
  
    <th>Product</th>
    <th>Price</th>
    <th>Quntity</th>
    <th>Total</th>
    <th></th>
    
          
          <tr data-iterate="item">
          <?php  
$customerid="";
$res=mysqli_query($conn,"SELECT * FROM bill_table"); //sending data for pending.php
while($row=mysqli_fetch_array($res))
{
  //echo "<tr>";
  echo'<tr>';

//collecting data from addservice.php
echo"<td>"; echo $row["p_no"]; echo"</td>";


echo"<td>"; echo $row["product"]; echo"</td>";
echo"<td>"; echo $row["price"]; echo"</td>";
echo"<td>"; echo $row["quantity"]; echo"</td>";
echo"<td>"; echo $row["total"]; echo"</td>";


}
                        ?> 
          </tr>
          
        </table>
        
      </section>

 
      <section id="sums">
      
        <table cellpadding="0" cellspacing="0">


          <tr data-iterate="tax">
            <th>service Chrge</th>
            <td><?php echo $service_charge;  ?></td>
          </tr>
          
          <tr data-iterate="tax">
            <th>Discount</th>
            <td><?php echo $total_discount;  ?></td>
          </tr>
          
          <tr>
            <th>Sub Total</th>
            <td><?php echo $sub_total;  ?></td>
          </tr>

          <tr class="amount-total">
            <th>Total Amount</th>
            <td><?php echo $sub_total;  ?></td>
          </tr>
          
          <!-- You can use attribute data-hide-on-quote="true" to hide specific information on quotes.
               For example Invoicebus doesn't need amount paid and amount due on quotes  -->
          <tr data-hide-on-quote="true">
            <th>Paid Amount</th>
            <td><?php echo $paid_total;  ?></td>
          </tr>
          
          <tr data-hide-on-quote="true">
            <th>Change</th>
            <td><?php echo $change;  ?></td>
          </tr>
          
        </table>
        
      </section>
      
      <div class="clearfix"></div>
      
      <section id="terms">
      
   
        
      </section>




      
  </body>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
    $("#btnPrint").click(function () {
        var contents = $("#container").html();
        var frame1 = $('<iframe />');
        frame1[0].name = "frame1";
        frame1.css({ "position": "absolute", "top": "-1000000px" });
        $("body").append(frame1);
        var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
        frameDoc.document.open();
        //Create a new HTML document.
        frameDoc.document.write('<html><head><title>DIV Contents</title>');
        frameDoc.document.write('</head><body>');
        //Append the external CSS file.
        frameDoc.document.write('<link href="css/bill.css" rel="stylesheet" type="text/css" />');
        //Append the DIV contents.
        frameDoc.document.write(contents);
        frameDoc.document.write('</body></html>');
        frameDoc.document.close();
        setTimeout(function () {
            window.frames["frame1"].focus();
            window.frames["frame1"].print();
            frame1.remove();
        }, 500);
    });
});
</script>
</html>
