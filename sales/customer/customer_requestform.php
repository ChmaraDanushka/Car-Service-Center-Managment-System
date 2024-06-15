<!DOCTYPE html>
<html>
<head>
	<title>Customer Request </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <!--main div-->

<div class="newvehical">
  <div class="mainone">

<form action="customer_request.php" method="post">

<!-- customerdetails-->


<div class="inputa">
  <label for="cusname"></label>
  <input type="text" id="cusname" name="cusname" placeholder="Customername">
</div>

<div class="inputa">
  <label for="cuscontact"></label>
  <input type="text" id="cuscontact" name="cuscontact" placeholder="customercontact">
</div>
   
<div class="inputa">
  <label for="discription"></label>
  <textarea rows="4" cols="50" name="discription" placeholder="Describe yourself here..."></textarea>
</div>

<div class="inputa">
  <label for="date"></label>
  <input type="date" id="date" name="date" placeholder="date">
</div>

<div class="inputa">
  <label for="time"></label>
  <input type="time" id="time" name="time" placeholder="time">
</div>

<div class="submit">
  <input type="submit" value="Submit" name="submit"  >


</div></div>
</form>
</div>
</body>
</html>