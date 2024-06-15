<?php
require_once 'db_connect.php';
$id=$_GET["id"];
mysqli_query($conn,"DELETE FROM users WHERE id=$id");

?>
 <script type="text/javascript">
   window.location="../manage_user.php";
 </script>
<?php
?>


