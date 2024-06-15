<?php 
require_once 'connection.php';


$query2 = "SELECT count() FROM answers WHERE id = $id"; $result = mysql_query($q); $row = mysql_fetch_array($result); $count = $row['count()'];




?>