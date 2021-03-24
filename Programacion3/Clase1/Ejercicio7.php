<?php
	$array = array();
	$contadorImpares = 0;
	for($i = 0; $contadorImpares < 10; $i ++){
		if($i % 2){

			$contadorImpares ++;
			$array[$contadorImpares] = $i;
		}
	}
	foreach($array as $valor){
		echo "<br/>", $valor;
	}
?>