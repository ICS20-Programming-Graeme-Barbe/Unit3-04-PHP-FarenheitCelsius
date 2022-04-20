<html lang="en-ca">
	<head>
		<!-- Meta Data -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Favicon -->
	    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
	    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
	    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
	    <link rel="manifest" href="./fav_index/site.webmanifest" />
		<!-- Css style sheet -->
		<link rel="stylesheet"dfghj href="./css/style.css" />
		<title>Fahrenheit to Celsius</title>
	</head>
	<body>
		<!-- Title, Info and image -->
		<center><?php 
			echo '<center><h1>Fahrenheit to Celsius</h1></center>';
			echo '<img src="./images/fahrenheit.jpg" width="25%"/>';
			echo '<center><p>Formula to convert temperature from fahrenheit to celsius.</center></p>';
			echo "<p><center>Fill out the text fields below and determine the temperature in celsius.</center></p>"; 
		?>
		<!-- Textfield -->
		<form method = "post">   
			Temperature in Fahrenheit (°F) <input type="number" name="fahrenheit" step="0.01">   
			<br><br>   
			<!-- Button -->
			<input type = "submit" name = "enter" value="Calculate">    
			<br><br>
		<!-- Variables and Calculations -->
		<?php  
			if(isset($_POST['enter'])) {  
				$fahrenheit = $_POST['fahrenheit'];    
				$celsius = 5 / 9 * ($fahrenheit - 32);
				$celsius = round($celsius, 2);
				echo "<br><br>The temperature is ". $celsius . "°C";
			}
		?>
	</body>
</html>