
<?php include_once 'connection.php'; ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>



<style>
#Table1{
   background-color: white;
  border-collapse: collapse;

}

thead tr{
   height: 30px;
}

#Table1 tr:hover {background-color: #ddd;}

th, td {
   border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
   border-left: 1px solid #ddd;
   border-right: 1px solid #ddd;
}

tr{
 
   font-size: 5px;
   width: 100%;
   cells



}
td{
 font-size: 15px;
 text-align: center;
 margin-top: 20px;
 width: 100px;
 


   
}
table{
   margin-top: 60px;
}

.tablehead td{
   display: ;
   padding: 5px;
   height: 10px;
   padding-left: 50px;
   padding-right: 50px;
   text-align: center;
   margin-top: 30px;
}

.btn{
   display: ;
   padding-left: 10px;
   padding-top: 10px;
}

</style>
<body>

<form action="cus_search.php" method="post">
  <input type="" name="search" placeholder="Search here">

  <input type="submit" name="submit"> 
</form> 


<div id="" style="width:800px;background-color: ;padding: 10px;">
<div id="wb_Text1">
<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>Product List</strong></span></div>
<div id="" style="float: left;margin-top: 85px;">
    
</div>
<div id="" style="margin-left: 730px;">
<form>
   <a href="customer_list.php"><input type="button" id="Button8" name="back" value="back" style="width:70px;height: 31px;margin-top: 40px;"></a>


</div>

<div>
<table id="Table1" style="border:solid 0px;">
<thead class="tablehead">

<tr style="display: ;height: 20px;">

<td class="cell">#</td>
<td class="cell">Job Number</td>
<td class="cell">Customer id </td>
<td class="cell">Customer name</td>
<td class="cell">Customer Contactr</td>
<td class="cell">Vehicle Number </td>
<td class="cell">Vehicle Type</td>
<td class="cell">Brand</td>
<td class="cell">model </td>
<td class="cell">Join Date</td>
<td class="cell">Join Time</td>




<td colspan="3" class="cell">action</td>
</tr>
</thead>
<tbody>








 <?php


$search = mysqli_real_escape_string($conn,$_POST['search']);

echo $search;
              $res = "SELECT * FROM customer_list WHERE customerid LIKE '%{$search}%' OR cusname LIKE '%{$search}%' OR vehiclenumber LIKE '%{$search}%' OR model LIKE '%{$search}%'";


if($result = $conn->query($res)){
                if($result->num_rows>0){
                  while($row = $result->fetch_assoc()){



  echo "<tr>";

echo"<td>"; echo $row["cid"]; echo"</td>";

echo"<td>"; echo $row["jobnumber"]; echo"</td>";
echo"<td>"; echo $row["customerid"]; echo"</td>";
echo"<td>"; echo $row["cusname"]; echo"</td>";
echo"<td>"; echo $row["cuscontact"]; echo"</td>";
echo"<td>"; echo $row["vehiclenumber"]; echo"</td>";
echo"<td>"; echo $row["vehicletype"]; echo"</td>";
echo"<td>"; echo $row["brand"]; echo"</td>";
echo"<td>"; echo $row["model"]; echo"</td>";
echo"<td>"; echo $row["join_date"]; echo"</td>";
echo"<td>"; echo $row["join_time"]; echo"</td>";


echo"<td>"; ?> <a href="edit2.php?cid=<?php echo $row["cid"]; ?>"> <button type="button" class="btn btn-success"style="background-color:#5cd65c">Edit</button> </a> <?php echo"</td>";

echo"<td>"; ?> <a href="delete.php?cid=<?php echo $row["cid"]; ?>"> <button type="button" class="btn btn-danger"style="background-color:#ff4d4d ">Delete</button> </a> <?php echo"</td>";

echo"<td>"; ?> <a href="view.php?cid=<?php echo $row["cid"]; ?>"> <button type="button" class="btn btn-danger"style="background-color:#ff4d4d ">View</button> </a> <?php echo"</td>";

    echo "<tr>";
}}}

?>
</tbody>
</table>
</div>
</div>
</body>
</html>