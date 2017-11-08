<!DOCTYPE HTML>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="stylesheetLite.css"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title>Team Cosmo Light Control</title>
	</head>
	<body>
		<h1>Hex Mode is On</h1>
	
		<script src="jscolor.js"></script>
		
		<form action="#" id="form" method="post" name="form">
			<input class="jscolor" name="color" placeholder="Enter color" type="text" value="">
			<input id="send" name="submit" type="submit" value="Submit Hex">
		</form>

		<script>
		function setTextColor(picker) {
			document.getElementsByTagName('body')[0].style.color = '#' + picker.toString()
		}
		</script>
		
		<?php
			if(isset($_POST["submit"])){
			// Checking For Blank Fields..
			if($_POST["color"]==""{
			echo "Fill All Fields..";
			}
			$hexval = $_POST['color'];
			echo '<a href="mycgi?hex=', urlencode($hexval), '">';
		?>
	</body>
</html>
