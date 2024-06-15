<?php
require_once 'db.php';
$id=$_GET["id"];
mysqli_query($conn,"DELETE FROM distributor WHERE id=$id");

?>
 <script type="text/javascript">
   window.location="../distributor_list.php";
 </script>
<?php
?>


