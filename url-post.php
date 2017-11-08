<?php
			if(isset($_POST["submit"])){
			// Checking For Blank Fields..
			if($_POST["color"]==""{
			echo "Fill All Fields..";
			} 
			$hex = $_GET['hexval']; 
  			$file = fopen("light.json", "w") or die("can't open file");
  			fwrite($file, '{"hex": $hex}');
  			fclose($file);
 ?>
