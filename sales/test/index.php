<?php include 'connection.php';


$select = "SELECT * FROM payment_method ";
$result = $conn->query($select);
$option = '<option value="">Select Name</option>';
while($row = $result->fetch_object()){
    $option .= '<option value="'.$row->id.'">'.$row->payment_method.'</option>';
}
?>     
<html>
    <head>
        <title>Retrieve data from database using Ajax</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
		crossorigin="anonymous">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript">
            function getData(empid, divid){
                $.ajax({
                    url: 'loademployeedata.php?empid='+empid, 
                    success: function(html) {
                        var ajaxDisplay = document.getElementById(divid);
                        ajaxDisplay.innerHTML = html;
                    }
                });
            }
        </script>
    </head>
    <body>
        <form method="post">
            <select name="empid" id="empid"  class="form-control" onchange="getData(this.value, 'displaydata')">
              <?php
                echo $option;
              ?> 
            </select>
            <div id="displaydata">
            </div>
        </form>
    </body>
</html>