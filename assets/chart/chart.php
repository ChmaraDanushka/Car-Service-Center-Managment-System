<?php
 
$dataPoints = array( 
	array("y" => 3373.64, "label" => "SUNDAY" ),
	array("y" => 2435.94, "label" => "MONDAY" ),
	array("y" => 1842.55, "label" => "TUESDAY" ),
	array("y" => 1828.55, "label" => "WEDNESDAY" ),
	array("y" => 1039.99, "label" => "THURSDAY" ),
	array("y" => 765.215, "label" => "FRIDAY" ),
	array("y" => 612.453, "label" => "SATURDAY" )
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",

	axisY: {
		title: "SERVISES"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 100%; width: 100%;"></div>
<script src="chart.js"></script>
</body>
</html>          

