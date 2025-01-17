<?php 
include '../connection.php';
$cus_id = mysqli_real_escape_string($conn,$_REQUEST['bill_cus_id']);
$payment_method = mysqli_real_escape_string($conn,$_REQUEST['payment_method']);
$service_charge = mysqli_real_escape_string($conn,$_REQUEST['service_charge']);
$total_discount = mysqli_real_escape_string($conn,$_REQUEST['total_discount']);
$sub_total =mysqli_real_escape_string($conn,$_REQUEST['sub_total']);
$paid_total = mysqli_real_escape_string($conn,$_REQUEST['paid_total']);
$change = mysqli_real_escape_string($conn,$_REQUEST['change']);


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
echo $bill_code;
//echo $records;



$sql1 = "INSERT INTO bill_prices(bill_code,customerid,pay_method,service_charge,total_discount,sub_total,paid_total,change_price)
VALUES ('$bill_code','$cus_id','$payment_method','$service_charge','$total_discount','$sub_total','$paid_total','$change')";
	

	if ($conn->query($sql1) === TRUE) {
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
    
    <meta name="description" content="Invoicebus Invoice Template">
    <meta name="author" content="Invoicebus">

    <meta name="template-hash" content="f3142bbb0a1696d5caa932ecab0fc530">

    <link rel="stylesheet" href="css/template.css">
  </head>
  <body>
    <div id="container">
      <section id="memo">
        <div class="company-name">
          <span>{company_name}</span>
          <div class="right-arrow"></div>
        </div>

        <div class="logo">
          <img data-logo="{company_logo}" />
        </div>
        
        <div class="company-info">
          <div>
            <span>{company_address}</span> <span>{company_city_zip_state}</span>
          </div>
          <div>{company_email_web}</div>
          <div>{company_phone_fax}</div>
        </div>

      </section>
      
      <section id="invoice-info">
        <div>
          <span>{issue_date_label}</span>
          <span>{due_date_label}</span>
          <span>{net_term_label}</span>
          <span>{po_number_label}</span>
        </div>
        
        <div>
          <span>{issue_date}</span>
          <span>{due_date}</span>
          <span>{net_term}</span>
          <span>{po_number}</span>
        </div>
      </section>
      
      <section id="client-info">
        <span>{bill_to_label}</span>
        <div>
          <span class="bold">{client_name}</span>
        </div>
        
        <div>
          <span>{client_address}</span>
        </div>
        
        <div>
          <span>{client_city_zip_state}</span>
        </div>
        
        <div>
          <span>{client_phone_fax}</span>
        </div>
        
        <div>
          <span>{client_email}</span>
        </div>
        
        <div>
          <span>{client_other}</span>
        </div>
      </section>
      
      <div class="clearfix"></div>
      
      <section id="invoice-title-number">
      
        <span id="title">{invoice_title}</span>
        <span id="number">{invoice_number}</span>
        
      </section>
      
      <div class="clearfix"></div>
      
      <section id="items">
        
        <table cellpadding="0" cellspacing="0">
        
          <tr>
            <th>{item_row_number_label}</th> <!-- Dummy cell for the row number and row commands -->
            <th>{item_description_label}</th>
            <th>{item_quantity_label}</th>
            <th>{item_price_label}</th>
            <th>{item_discount_label}</th>
            <th>{item_tax_label}</th>
            <th>{item_line_total_label}</th>
          </tr>
          
          <tr data-iterate="item">
            <td>{item_row_number}</td> <!-- Don't remove this column as it's needed for the row commands -->
            <td>{item_description}</td>
            <td>{item_quantity}</td>
            <td>{item_price}</td>
            <td>{item_discount}</td>
            <td>{item_tax}</td>
            <td>{item_line_total}</td>
          </tr>
          
        </table>
        
      </section>

      <div class="currency">
        <span>{currency_label}</span> <span>{currency}</span>
      </div>
      
      <section id="sums">
      
        <table cellpadding="0" cellspacing="0">
          <tr>
            <th>{amount_subtotal_label}</th>
            <td>{amount_subtotal}</td>
          </tr>
          
          <tr data-iterate="tax">
            <th>{tax_name}</th>
            <td>{tax_value}</td>
          </tr>
          
          <tr class="amount-total">
            <th>{amount_total_label}</th>
            <td>{amount_total}</td>
          </tr>
          
          <!-- You can use attribute data-hide-on-quote="true" to hide specific information on quotes.
               For example Invoicebus doesn't need amount paid and amount due on quotes  -->
          <tr data-hide-on-quote="true">
            <th>{amount_paid_label}</th>
            <td>{amount_paid}</td>
          </tr>
          
          <tr data-hide-on-quote="true">
            <th>{amount_due_label}</th>
            <td>{amount_due}</td>
          </tr>
          
        </table>
        
      </section>
      
      <div class="clearfix"></div>
      
      <section id="terms">
      
        <span>{terms_label}</span>
        <div>{terms}</div>
        
      </section>

      <div class="payment-info">
        <div>{payment_info1}</div>
        <div>{payment_info2}</div>
        <div>{payment_info3}</div>
        <div>{payment_info4}</div>
        <div>{payment_info5}</div>
      </div>
    </div>

    <script src="http://cdn.invoicebus.com/generator/generator.min.js?data=data.js"></script>
  </body>
</html>