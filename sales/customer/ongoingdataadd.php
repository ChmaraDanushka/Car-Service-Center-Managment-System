<?php
require_once 'connection.php';
?>


<!DOCTYPE html>
<html>
<head>
  <title>Approved Services</title>
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

    <th>id</th>
    <th>Customer Id</th>   
    <th>CustomerName</th>
    <th>Contact Number</th>
    <th>Register Date</th>
    <th>Time</th>       
    <th>VehicleNumber</th>
    <th>Brand</th>
    <th>model</th>
    <th>bodytype</th>
    <th>milage</th>
    <th>year</th>
    <th>serviceid</th>      
    <th>sectionalhead</th>
    <th>employer</th>  
    
    </tr>
  </thead>
  <tbody>

<?php  

$res=mysqli_query($conn,"SELECT * FROM approved"); //sending data for pending.php
while($row=mysqli_fetch_array($res))
{
  echo "<tr>";

//collecting data from addservice.php
echo"<td>"; echo $row["oid"]; echo"</td>";
echo"<td>"; echo $row["customerid"]; echo"</td>";
echo"<td>"; echo $row["cusname"]; echo"</td>";
echo"<td>"; echo $row["cuscontact"]; echo"</td>";
echo"<td>"; echo $row["datee"]; echo"</td>";
echo"<td>"; echo $row["stime"]; echo"</td>"; 

//collecting data from vehicledetails.php
echo"<td>"; echo $row["customerid"]; echo"</td>";
echo"<td>"; echo $row["brand"]; echo"</td>";
echo"<td>"; echo $row["model"]; echo"</td>";
echo"<td>"; echo $row["bodytype"]; echo"</td>";
echo"<td>"; echo $row["milage"]; echo"</td>";
echo"<td>"; echo $row["year"]; echo"</td>";

//collecting data from  servicedetails.php
echo"<td>"; echo $row["serviceid"]; echo"</td>";
echo"<td>"; echo $row["sectionalhead"]; echo"</td>";
echo"<td>"; echo $row["employer"]; echo"</td>";


  //selecting the page  approve or reject
echo"<td>"; ?> <a href="../add-new-sale.php?id=<?php echo $row["customerid"]; ?>"> <button type="button" name="submit" class="btn btn-success"style="background-color:#5cd65c">APPROVE</button> </a> <?php echo"</td>";

echo"<td>"; ?> <a href="jobreject.php?id=<?php echo $row["cusid"]; ?>"> <button type="button" class="btn btn-danger"style="background-color:#ff4d4d "><a href ="jobreject.php">REJECT</button> </a> <?php echo"</td>";

}

    echo "</tr>";
//$id=$_GET["pid"];
//mysqli_query($conn,"DELETE FROM pendingservice WHERE pid=$id");
   
     ?>



  </tbody>
</table>	

