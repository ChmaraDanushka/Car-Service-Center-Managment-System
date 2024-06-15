<?php
require_once 'connection.php';
$id=$_GET["cid"];
mysqli_query($conn,"DELETE FROM customer_list WHERE cid=$id");
?>

 <script type="text/javascript">
   window.location="customer_list.php";
 </script>
<?php
?>


