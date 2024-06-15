

<?php include_once 'db.php'; ?>
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

 margin-top: 20px;
 width: 100px;
 


   
}
table{
   margin-top: 10px;
}

.tablehead td{
   display: ;
   padding: 5px;
   height: 10px;
   padding-left: 10px;
   text-align: center;
   margin-top: 30px;
}



}
</style>

<body>
<div id="" style="width:700px;background-color: ;padding: 10px;">
<div id="wb_Text1">
<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>distributor List</strong></span></div>
<div id="" style="float: left;margin-top: 85px;">
    <select name="Combobox1" size="1" id="Combobox1" style="width:180px;height: 31px;">
      <select name="Combobox1" size="1" id="Combobox1" style="width:180px;height: 31px;">
</select>
</div>
<div id="" style="margin-left: 800px;">
<form>
   <a href="../add_distributor/add_distributor.php"><input type="button" id="Button8" name="Add_brand" value="Add_brand" style="width:70px;height: 31px;margin-top: 40px;"></a>

</form>
</div>
<div id="" style="float:right;margin-top: 15px;margin-top: 15px; margin-bottom: 15px;">
 
<br>
</div>

<div>
<table id="Table1" style="border:solid 0px;">
<thead class="tablehead">

<tr style="display: ;height: 20px;">

<td class="cell">#</td>
<td class="cell">Brand Name</td>
<td class="cell">category</td>
<td class="cell">Company</td>
<td class="cell">Contact Number</td>
<td class="cell">Email</td>
<td colspan="3" class="cell">action</td>
</tr>
</thead>
<tbody>

 <?php 


$search = mysqli_real_escape_string($conn,$_POST['search']);

echo $search;
              $res = "SELECT * FROM distributor WHERE id LIKE '%{$search}%' OR brand LIKE '%{$search}%' OR category LIKE '%{$search}%' OR company LIKE '%{$search}%' OR contact_no LIKE '%{$search}%' OR email LIKE '%{$search}%'";


if($result = $conn->query($res)){
                if($result->num_rows>0){
                  while($row = $result->fetch_assoc()){



  echo "<tr>";

echo"<td>"; echo $row["id"]; echo"</td>";
echo"<td>"; echo $row["brand"]; echo"</td>";
echo"<td>"; echo $row["category"]; echo"</td>";
echo"<td>"; echo $row["company"]; echo"</td>";
echo"<td>"; echo $row["contact_no"]; echo"</td>";
echo"<td>"; echo $row["email"]; echo"</td>";



echo"<td>"; ?> <a href="delete/admin_edit.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-success"style="background-color:#858585;border:none;padding:7px;">view</button> </a> <?php echo"</td>";
echo"<td>"; ?> <a href="edit/edit.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-success"style="background-color:#5cd65c;border:none;padding:7px;">Edit</button> </a> <?php echo"</td>";
echo"<td>"; ?> <a href="delete/delete.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-danger"style="background-color:#ff4d4d;border:none;padding:7px; ">Delete</button> </a> <?php echo"</td>";




    echo "<tr>";
}}}

?>
</tbody>
</table>
</div>
</div>
</body>
</html>