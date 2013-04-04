<?php
$name = array("Gem", 100, "Ngoc", "Nguyen");
for($i = 0; $i < 4; $i++){
	echo "Name ".($i+1) . " :$name[$i]<br>";
	echo gettype($name[$i])."<br>";
}
?>