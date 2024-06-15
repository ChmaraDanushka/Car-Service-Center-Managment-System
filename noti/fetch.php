<?php 
include('conn.php');
$query=mysqli_query($conn,"SELECT * from user where seen_status='0
' order by userid desc");
 $output = '';
 while($row=mysqli_fetch_array($query)){
 $output .= '
 <div class="alert alert_default">
 <a href="#" class="close" data-dismiss="alert" aria-label="c
lose">&times;</a>
 <p>Firstname: <strong>'.$row['firstname'].'</strong><br>
 Lastname: <strong>'.$row['lastname'].'</strong></p>
 </div>
 ';
 }

 mysqli_query($conn,"UPDATE user set seen_status='1' where seen_st
 atus='0'");
  echo $output;
  ?>