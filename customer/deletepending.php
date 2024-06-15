<?php
require_once 'connection.php';

session_start();
$customerid=$_SESSION['deleteid'];

$sql = "DELETE FROM pendingservice WHERE customerid=$customerid";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("location:ongoingdataadd.php");
} else {
  echo "Error deleting record: " . $conn->error;
}





$conn->close();


?>