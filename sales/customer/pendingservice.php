<?php 
require_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>PENDING SERVICE</title>
    <link rel="stylesheet" type="text/css" href="css/side.css">
  <script src="https://kit.fontawesome.com/e3f4107c80.js" crossorigin="anonymous"></script>
    

<style type="text/css">

  
table{
  margin-left: 255px;
}

tr th{
  background-color: #3498DB;
  font-family: Arial Black;
  font-color:#000000;
  padding: 10px;
  border-radius: 2px;
  text-align: center;
}

td{
  background-color:;
    border-radius: 2px;
    font-size: 13px;
    text-align: center;
      padding: 5px;
      border-bottom:1px solid #cccccc;
}

.btn-success{
  padding: 10px;
  border-radius: 2px;
  border:none;
}

.btn-danger{
  padding: 10px;
  border-radius: 2px;
  border:none;
}


</style>

</head>
<body>
 
<table class="coll-log-12">
  
  <thead>
    <tr>     
      <th>pid</th>      
      <th>Customer id</th>
      <th>Customer name</th>
      <th>customercontact</th> 
      <th>Vehicle Number</th>      
      <th>Vehicle Type</th>
      <th>Brand</th>
      <th>model</th>
      <th>bodytype</th>
      <th>milage</th>
      <th>year</th>
      <th>serviceid</th>       
      <th>sectionalhead</th>
      <th>employer</th>
      <th>date</th>
      <th>time</th>    
    </tr>
  </thead>
  <tbody>

    <?php 
$res=mysqli_query($conn,"SELECT * FROM pendingservice"); //sending data for pending.php
while($row=mysqli_fetch_array($res))
{
  echo "<tr>";

//collecting data from addservice.php

echo"<td>"; echo $row["pid"]; echo"</td>";

$closekey=$row["pid"];

echo"<td>"; echo $row["customerid"]; echo"</td>";
echo"<td>"; echo $row["cusname"]; echo"</td>";
echo"<td>"; echo $row["cuscontact"]; echo"</td>";
echo"<td>"; echo $row["vehiclenumber"]; echo"</td>";
echo"<td>"; echo $row["vehicletype"]; echo"</td>";
echo"<td>"; echo $row["brand"]; echo"</td>";
echo"<td>"; echo $row["model"]; echo"</td>";
echo"<td>"; echo $row["bodytype"]; echo"</td>";
echo"<td>"; echo $row["milage"]; echo"</td>";
echo"<td>"; echo $row["year"]; echo"</td>";

//collecting data from  servicedetails.php

echo"<td>"; echo $row["serviceid"]; echo"</td>";
echo"<td>"; echo $row["sectionalhead"]; echo"</td>";
echo"<td>"; echo $row["employer"]; echo"</td>";
echo"<td>"; echo $row["p_datee"]; echo"</td>";
echo"<td>"; echo $row["p_stime"]; echo"</td>";


//echo"<form";echo "action="; echo "ongoingjob.php"; echo "method="; echo "post"; echo">";

  //selecting the page  approve or reject
echo"<td>"; ?> <a href="ongoingjob.php?customerid=<?php echo $row["customerid"]; ?>"> <button type="button" name="submit" class="btn btn-success"style="background-color:#5cd65c">APPROVE</button> </a> <?php echo"</td>";

echo"</form>";


echo"<td>"; ?> <a href="reject.php?customerid=<?php echo $row["customerid"]; ?>"> <button type="button" name="close" class="btn btn-success"style="background-color:#5cd65c">REJECT</button> </a> <?php echo"</td>";

    echo "</tr>";
  }
 
//if(isset($_POST['submit'])){


    // add to customer list

     $conn->close();    
    
     ?>
  </tbody>
</table>
</body>
</html>