<?php
require_once 'connection.php';
$id=$_GET["id"];
mysqli_query($conn,"DELETE FROM bill_table WHERE p_no=$id");
?>

 <script type="text/javascript">
   window.location="customer_list.php";
 </script>
<?php
?>


