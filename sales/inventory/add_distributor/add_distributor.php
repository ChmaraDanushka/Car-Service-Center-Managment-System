<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<meta name="generator" content="WYSIWYG Web Builder 16 - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="add_distributor.css" rel="stylesheet">


</div>
<div id="wb_Text7">
<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>Add Distributor</strong></span></div>

<div id="wb_Form1">
<form name="Form1" method="post" action="add_distributor.inc.php"  id="Form1">

<input type="text" id="brand_name" name="brand_name" value="" placeholder="Brand">
<select name="categorie_list"  id="caategorie"  title="categorie">
 <?php     include 'db.php';

$res= mysqli_query($conn,"SELECT * FROM categories");
while($row=mysqli_fetch_array($res))
{
  $value = $row["cat_name"];
  echo"<option value='$value'>"; 
  echo $row["cat_name"];
  echo"</option>";               } ?>


</select>

<input type="text" id="dis_phone" name="phone_no" value="" >
<input type="text" id="agent" name="agent" value="" >
<input type="text" id="dis_email" name="email" value="">
<div id="wb_Text1">
<span style="color:#000000;font-family:Arial;font-size:13px;">Brand Name :</span></div>
<div id="wb_Text6">
<span style="color:#000000;font-family:Arial;font-size:13px;">Email :</span></div>
<div id="wb_Text5">
<span style="color:#000000;font-family:Arial;font-size:13px;">Contact Number :</span></div>
<div id="wb_Text3">
<span style="color:#000000;font-family:Arial;font-size:13px;">Category :</span></div>
<div id="wb_Text4">
<span style="color:#000000;font-family:Arial;font-size:13px;">Company :</span></div>
<input type="submit" id="submit" name="add_distributor" value="Add distributor">
</form>
</div>
</div>
</body>
</html>