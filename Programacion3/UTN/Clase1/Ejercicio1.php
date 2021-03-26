<?php
	$resultado = 0;
	$contador = 0;
	for($i = 1; $resultado < 1000; $i ++)
	{
		$resultado += $i;
		echo $i;
		echo "<br>";
		$contador ++;
	}
	if($resultado > 1000)
		echo "<br>";
		echo "La cantidad de numeros sumados fueron: ", $contador;
		echo "<br>";
		echo "El resultado es: ", $resultado - $i;
?>