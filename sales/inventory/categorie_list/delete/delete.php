<?php
require_once 'db.php';
$id=$_GET["id"];
mysqli_query($conn,"DELETE FROM product WHERE id=$id");

?>
 <script type="text/javascript">
   window.location="../category_list.php";
 </script>
<?php
?>


