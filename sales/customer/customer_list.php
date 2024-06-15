<?php 
require_once 'connection.php';


?>


<!DOCTYPE html>
<html>
<head>
  <title>CUSTOMER LIST</title>
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

<form action="cus_search.php" method="post">
  <input type="" name="search" placeholder="Search here">

  <input type="submit" name="submit">

  
</form> 


<table class="coll-log-12">
  
  <thead>
    <tr>

     
      <th>#</th>
     
      <th>Customer id</th>
      <th>Customer name</th>
      <th>customercontact</th>    
      <th>Join Date</th>
      <th>Join Time</th>

    
    </tr>
  </thead>
  <tbody>

    <?php 
$res=mysqli_query($conn,"SELECT * FROM customer_list"); //sending data for pending.php
while($row=mysqli_fetch_array($res))
{
  echo "<tr>";

//collecting data from addservice.php

echo"<td>"; echo $row["cid"]; echo"</td>";
echo"<td>"; echo $row["customerid"]; echo"</td>";
echo"<td>"; echo $row["cusname"]; echo"</td>";
echo"<td>"; echo $row["cuscontact"]; echo"</td>";
echo"<td>"; echo $row["join_date"]; echo"</td>";
echo"<td>"; echo $row["join_time"]; echo"</td>";


  //selecting the page  approve or reject

echo"<td>"; ?> <a href="edit2.php?customerid=<?php echo $row["customerid"]; ?>"> <button type="button" class="btn btn-success"style="background-color:#5cd65c">Edit</button> </a> <?php echo"</td>";

echo"<td>"; ?> <a href="delete.php?cid=<?php echo $row["cid"]; ?>"> <button type="button" class="btn btn-danger"style="background-color:#ff4d4d ">Delete</button> </a> <?php echo"</td>";

echo"<td>"; ?> <a href="view.php?customerid=<?php echo $row["customerid"]; ?>"> <button type="button" class="btn btn-danger"style="background-color:#ff4d4d ">View</button> </a> <?php echo"</td>";


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


</body>
</html>