<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
	{die("Connection failed:" . $conn->connect_error);}

?>
</body>
</html>