<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<meta name="generator" content="WYSIWYG Web Builder 16 - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="add_product.css" rel="stylesheet">



</div>
<div id="wb_Form1">
<form name="Form1" method="post" action="add_product.inc.php" enctype="multipart/form-data" id="Form1">
<input type="text" id="product_name" name="product_name" value="" spellcheck="false" placeholder="Product Name">
<select name="categorie_list" size="1" id="caategorie" tabindex="categorie" title="categorie">
 <?php     include 'db.php';

$res= mysqli_query($conn,"SELECT * FROM categories");
while($row=mysqli_fetch_array($res))
{
  $value = $row["cat_name"];
  echo"<option value='$value'>"; 
  echo $row["cat_name"];
  echo"</option>";               } ?>
</select>

<select name="Combobox1" size="1" id="brand" tabindex="brand" title="brand">
<?php     include 'db.php';

$res= mysqli_query($conn,"SELECT * FROM distributor");
while($row=mysqli_fetch_array($res))
{
  $value = $row["brand"];
  echo"<option value='$value'>"; 
  echo $row["brand"];
  echo"</option>";               } ?>
</select>

<input type="text" id="buying_price" name="buy_price" value="" spellcheck="false">
<input type="text" id="selling-price" name="sell_price" value="" spellcheck="false">
<input type="number" id="Quantity" name="Quantity" value="" spellcheck="false">
<input type="submit" id="submit" name="" value="Add Item">
<textarea name="TextArea1" id="decription" rows="7" cols="25" spellcheck="false" placeholder=" something more about product...."></textarea>
<div id="wb_Text1">
<span style="color:#000000;font-family:Arial;font-size:13px;">Prduct Name</span></div>
<div id="wb_Text3">
<span style="color:#000000;font-family:Arial;font-size:13px;">Category Name :</span></div>
<div id="wb_Text4">
<span style="color:#000000;font-family:Arial;font-size:13px;">Buying Price :</span></div>
<div id="wb_Text5">
<span style="color:#000000;font-family:Arial;font-size:13px;">Quantity :</span></div>
<div id="wb_Text10">
<span style="color:#000000;font-family:Arial;font-size:13px;">Selling Price :</span></div>
<div id="wb_Text6">
<span style="color:#000000;font-family:Arial;font-size:13px;">Brand Name :</span></div>
<div id="wb_Text9">
<span style="color:#000000;font-family:Arial;font-size:13px;">Description :</span></div>
</form>
</div>
<div id="wb_Text7">
<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>Add Prooduct</strong></span></div>
</div>
</body>
</html>