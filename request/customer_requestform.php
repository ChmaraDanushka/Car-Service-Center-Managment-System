<?php 
require_once 'connection.php';
$id=$_GET["id"];
echo $id;
$name="";
$contact="";

$res=mysqli_query($conn, "SELECT * FROM customer_list WHERE cuscontact=$id");
while($row=mysqli_fetch_array($res))

{

$id=$row["cid"];
//$jobnumber=$row["jobnumber"];

$name=$row["cusname"];
$contact=$row["cuscontact"];


}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer Request </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
  body{
    font-family: 'Open Sans', sans-serif;
  }
  .newvehical{
    background:;
    margin:auto;
    height: 100%;



  }

  .inputa input{
    height: 30px;
    width: 80%;
    margin-left:8.5%;
    margin-bottom:10px;
    border:none;
    color:gray;
    padding-left:10px;
  }

  textarea{
    margin-left:3%;
    border:none;
    color:gray;
  }
  p{
    font-size:20px;
    color:#ababab;
    font-family: 'Open Sans', sans-serif;
    margin-left:32%;
  }
  .mainone{
    height: 500px;
    width: 400px;
    background:#ebebeb;
    margin:auto;
    padding: 5px;
    border-radius:5px;

  }

.submit{
            margin-top:20px;
            height: 30px;
             width: 30%;
             margin-left:35%;
             border:none;
             color:white;
             background:lightgreen;
        }
        .submit input{
          margin-left:30%;
          margin-top:5%;
          border:none;
          background:none;
          color:white;
        }

        .form_icon{
   margin-left:37%
}
.form_icon img{
   
    height: 40%;
    width: 40%;
   
}

.back{
  width:70px;
  padding:5px;
  border:none;
  border-radius:10px;

}

.back img {
    height:20px ;
    width: 20px;
    margin:auto;
}
.back:hover{
 background:#d6d6d6;
}
</style>
<body>

  <!--main div-->

<div class="newvehical">
  <div class="mainone">
    <button class="back"><a href="http://localhost/wordp/?customize_changeset_uuid=bd59118d-e902-4baf-841f-f01b8b08b8fb"><img src="../assets/images/home.png"></a></button>
  <div class="form_icon"><img src="../assets/images/friend-request.png" alt="" class="login"><br></div>
<p>Request Form</p>
<form action="customer_request.php" method="post">

<!-- customerdetails-->


<div class="inputa">
  <label for="cusname"></label>
  <input type="text" id="cusname" name="cusname" value="<?php echo $name; ?>" >
</div>

<div class="inputa">
  <label for="cuscontact"></label>
  <input type="text" id="cuscontact" name="cuscontact" value="<?php echo $contact; ?>" >
</div>
   

<div class="inputa">
  <label for="date"></label>
  <input type="date" id="date" name="date" placeholder="date" required>
</div>

<div class="inputa">
  <label for="time"></label>
  <input type="time" id="time" name="time" placeholder="time"  required>
</div>

<div class="inputa">
  <label for="discription"></label>
  <textarea rows="4" cols="50" name="discription" placeholder="Describe yourself here..."></textarea>
</div>

<div class="submit">
  <input type="submit" value="SEND" name="submit"  >
</div>
</div>
</form>
</div>
</body>
</html>