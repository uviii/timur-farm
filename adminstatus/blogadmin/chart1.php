<?php
 
$dataPoints = array(
	array("label"=> "Yuvraj", "y"=> 60.0),
	array("label"=> "Joomla", "y"=> 6.5),
	array("label"=> "Drupal", "y"=> 4.6),
	array("label"=> "Magento", "y"=> 2.4),
	array("label"=> "Blogger", "y"=> 1.9),
	array("label"=> "Shopify", "y"=> 1.8),
	array("label"=> "Bitrix", "y"=> 1.5),
	array("label"=> "Squarespace", "y"=> 1.5),
	array("label"=> "PrestaShop", "y"=> 1.3),
	array("label"=> "Wix", "y"=> 0.9),
	array("label"=> "OpenCart","y"=> 0.8)
);
	

$data = array(
	array("label"=> "Education", "y"=> 284935),
	array("label"=> "Entertainment", "y"=> 256548),
	array("label"=> "Lifestyle", "y"=> 245214),
	array("label"=> "Business", "y"=> 233464),
	array("label"=> "Music & Audio", "y"=> 200285),
	array("label"=> "Personalization", "y"=> 194422),
	array("label"=> "Tools", "y"=> 180337),
	array("label"=> "Books & Reference", "y"=> 172340),
	array("label"=> "Travel & Local", "y"=> 118187),
	array("label"=> "Puzzle", "y"=> 107530)
);
	


?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "CMS Market Share - 2017"
	},
	axisY: {
		suffix: "%",
		scaleBreaks: {
			autoCalculate: true
		}
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0\"%\"",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainerss", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Top 10 Google Play Categories - till 2017"
	},
	axisY: {
		title: "Number of Apps"
	},
	data: [{
		type: "column",
		dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
<div id="chartContainerss" style="height: 370px; width: 100%;"></div>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</body>
</html> 

