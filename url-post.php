nano / etc / nginx / sites-enabled / default
location / {
root / home / users / www /;
index index.html index.htm;
# Simply add this:
error_page uri = $ 405;
}

<?php
			if(isset($_POST["submit"])){
			// Checking For Blank Fields..
			if($_POST["color"]==""{
			echo "Fill All Fields..";
			}
			$hexval = $_POST['color'];
			echo '<a href="mycgi?hex=', urlencode($hexval), '">';
 ?>
