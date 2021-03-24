<?php
	$array = array(rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10));
	$contador = 0;
	foreach ($array as $key => $value) {
		$contador += $value;
	}
	$promedio = $contador / 5;
	if($promedio == 6){
		echo "En promedio son iguales a 6";
	}else if($promedio > 6){
		echo "En promedio son mayores a 6";
	}else if($promedio < 6){
		echo "En promedio son menores a 6";
	}
?>