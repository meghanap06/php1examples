<?php
$colors = array("blue", "black", "brown"); //indexed array
rsort($colors);
$length= count($colors);

for($x = 0; $x < $length; $x++){
	echo $colors[$x];
}
?>
