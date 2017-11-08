<?php
			if(isset($_POST["submit"])){
			// Checking For Blank Fields..
			if($_POST["color"]==""{
			echo "Fill All Fields..";
			}
			$hexval = $_POST['color'];
			echo '<a href="mycgi?hex=', urlencode($hexval), '">';
 ?>
