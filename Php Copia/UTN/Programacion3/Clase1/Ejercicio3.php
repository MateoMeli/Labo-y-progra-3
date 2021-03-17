<?php
	$a = 8;
	$b = 9;
	$c = 10;

	printf("Numeros: %d, %d, %d", $a, $b, $c);
	echo"<br>";
	echo "Numero de en medio: ";
	
	if($a > $b && $a < $c){
		echo $a;
	}else if($b > $a && $b < $c){
		echo $b;
	}else if($c > $b && $c < $a){
		echo $c;
	}else{
		echo "No hay valor de en medio";
	}
?>