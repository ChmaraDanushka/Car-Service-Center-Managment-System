<?php
require_once 'connection.php';
$id=$_GET["rid"];
mysqli_query($conn,"DELETE FROM request WHERE rid=$id");
?>

 <script type="text/javascript">
   window.location="request_list.php";
 </script>
<?php
?>


