<?php 

$num1 = 12;

function greatest($num1, $num2, $num3) {
	if($num1 > $num2) {
		$max = $num1;
	} else {
		$max = $num2;
	}

	if($num3 > $max ) {
		$max = $num3;
	}
	return $max; 	
}
echo greatest(45, 34, 34);
echo greatest(12, 12, 10);
echo max(45, 23, 43);

 ?>