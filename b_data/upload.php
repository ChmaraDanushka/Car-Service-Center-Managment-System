<?php
require_once '../customer/connection.php';
$logo = mysqli_real_escape_string($conn,$_POST['fileToUpload']);

    $sql = "UPDATE b_data SET b_logo='$logo' WHERE b_id=1 ";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
      //header ('location: b_profile.php');
    } else {
      echo "Error updating record: " . $conn->error;
    }



    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
?>