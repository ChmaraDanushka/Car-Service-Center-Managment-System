
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
<div id="" style="width:800px;background-color: ;padding: 10px;">
<div id="wb_Text1">
<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>Product List</strong></span></div>
<div id="" style="float: left;margin-top: 85px;">
    <select name="Combobox1" size="1" id="Combobox1" style="width:180px;height: 31px;">
</select>
</div>
<div id="" style="margin-left: 730px;">
<form>
   <a href="../add_product/add_product.php"><input type="button" id="Button8" name="Add item" value="Add item" style="width:70px;height: 31px;margin-top: 40px;"></a>


</div>

<div>
<table id="Table1" style="border:solid 0px;">
<thead class="tablehead">

<tr style="display: ;height: 20px;">

<td class="cell">#</td>
<td class="cell"> Parent Categorie</td>
<td class="cell">Category Name</td>
<td colspan="3" class="cell">action</td>
</tr>
</thead>
<tbody>

 <?php


$search = mysqli_real_escape_string($conn,$_POST['search']);

echo $search;
              $res = "SELECT * FROM categories WHERE id LIKE '%{$search}%' OR parent_categorie LIKE '%{$search}%' OR cat_name LIKE '%{$search}%' OR description LIKE '%{$search}%'";


if($result = $conn->query($res)){
                if($result->num_rows>0){
                  while($row = $result->fetch_assoc()){



  echo "<tr>";

echo"<td>"; echo $row["id"]; echo"</td>";
echo"<td>"; echo $row["parent_categorie"]; echo"</td>";
echo"<td>"; echo $row["cat_name"]; echo"</td>";


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