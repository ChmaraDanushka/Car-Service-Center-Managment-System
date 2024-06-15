<!DOCTYPE html>
<html>
<head>
	<title>VIP CUSTOMER</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <h3>Vip Customer </h3>


  <!--main div-->

<div class="newvehical">
  <div class="mainone">

<form action="vip_customer.php" method="post">

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
  <input type="text" id="discription" name="discription" placeholder="discription about vip">
</div>
 
  <!--vehicledetails-->
  
<div class="inputa">
  <label for="brand">Brand:</label>

  <select name="brand" id="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
  </select><br>
</div>

<div class="inputa">
  <label for="year"></label>
  <input type="text" id="year" name="year" placeholder="production year">
 </div>
 <div class="inputa">

  <label for="vehiclenumber"></label>
  <input type="text" id="vehiclenumber" name="vehiclenumber" placeholder="vehiclenumber">
</div>
<div class="inputa">
  <label for="vehicletype"></label>
  <input type="text" id="vehicletype" name="vehicletype" placeholder="vehicletype">
</div>
</div>

<div class="maintwo">

<div class="inputb">
<div>
  <label for="model">Model:</label>

  <select name="model" id="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
  </select>
</div>

<div class="inputb">

  <label for="bodytype">Bodytype:</label>

  <select name="bodytype" id="bodytype">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
  

</div>
<br>
<div class="inputb">

  <label for="milage"></label>
  <!--servicedetails-->

  <input type="text" id="milage" name="milage" placeholder="milage">
</div>

<div class="inputb">

  <label for="service_type"></label><br>

  <input type="text" id="servicetype" name="service_type" placeholder="servicetype">
</div>
<br>

<!--employerdetails-->
<div class="inputb">


  <label for="sectionalhead">Sectionalhead:</label>

  <select name="sectionalhead" id="sectionalhead">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>


</div><br>

<!--employerdetails-->
  <div class="inputb">
  <label for="employer">Employer:</label>

  <select name="employer" id="employer">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
</div>
 <br>

 <div class="submit">
  <input type="submit" value="Submit" name="submit"  >
</div></div>
</form>
</div>
</body>
</html>