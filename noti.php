<?php
 include('conn.php');
 ?>

<!DOCTYPE html>
<html lang = "en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.
1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com
/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7
/js/bootstrap.min.js"></script>
<title>PHP Pop-up Notification using AJAX Bootstrap</title>

<style>
#alert_popover
{
display:block;
position:absolute;
bottom:50px;
left:50px;
}
.wrapper {
display: table-cell;
vertical-align: bottom;
height: auto;
width:200px;
}
.alert_default
{
color: #333333;
background-color: #f2f2f2;
border-color: #cccccc;
}
</style>
</head>
<body>
<div style="height:30px;"></div>

<div class="row"> 
<div class="col-md-3">
</div>
 <div class="col-md-6 well">
 <div class="row">
 <div class="col-lg-12">
 <center><h2 class="text-primary">PHP Pop-up Not
ification using AJAX Bootstrap</h2></center>
 <hr>
 <div>
 <form class="form-inline" method="POST" id="add_form">
 <div class="form-group">
<label>Firstname:</label>
<input type="text" name="firstname" id=
"firstname" class="form-control">
 </div>
 <div class="form-group">
 <label>Lastname:</label>
 <input type="text" name="lastname" id="
lastname" class="form-control">
 </div>
 <div class="form-group">
 <input type="submit" name="addnew" id="
addnew" class="btn btn-primary" value="Add">
 </div>
 </form>
 </div>
 </div>
 </div><br>
 </div>
 <div class = "col-md-3">

 </div>
 </div>
 <div id="alert_popover">
 <div class="wrapper">
 <div class="content">

 </div>
 </div>
 </div> 

 </body>
 <script>
 $(document).ready(function(){

 setInterval(function(){
 load_last_notification();
 }, 5000);

 function load_last_notification(){
 $.ajax({
 url:"fetch.php",
 method:"POST",
 success:function(data){
 $('.content').html(data);
 }
 })
 }

 $('#add_form').on('submit', function(event){
 event.preventDefault();
 if($('#firstname').val() != '' && $('#lastname').val() != '
'){
95. var form_data = $(this).serialize();
 $.ajax({
 url:"addnew.php",
 method:"POST",
 data:form_data,
 success:function(data){
 $('#add_form')[0].reset();
 }
 })
 }
 else{
 alert("Please input data first");
 }
 });
 });
 </script>
  </html>