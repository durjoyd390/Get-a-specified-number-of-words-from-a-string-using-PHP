<?php
function ShortDes($string, $length){
	$array = explode(" ", $string);
	$newString = '';
	for ($i=0; $i < $length; $i++) { 
		$newString .= $array[$i].' ';	
	}

	return $newString;
}


$string = 'At least 30 workers were injured in the clash and several workers were shot dead';
echo ShortDes($string, 13);
?>