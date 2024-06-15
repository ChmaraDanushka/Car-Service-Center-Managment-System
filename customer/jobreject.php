<?php
require_once 'connection.php';
$id=$_GET["id"];
mysqli_query($conn,"DELETE FROM approved WHERE customerid=$id");
?>

 <script type="text/javascript">
  window.location="ongoingdataadd.php";
 </script>
<?php
?>


