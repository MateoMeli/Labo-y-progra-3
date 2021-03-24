<?php
	$dia = date("d");
	$mes = date("m");
	echo"Fecha: ", date("d.m.y");
	echo"<br>";
	echo"Fecha: ", date("F j, Y");
	echo "<br>";
	echo "Estacion: ";

	switch ($mes) {
		case 01:
		case 02:
			echo "verano";
			break;
		case 10:
		case 11:
			echo "primavera";
			break;
		case 04:
		case 05:
		echo "Otoño";
			break;
		case 07:
		case 08:
			echo "invierno";
			break;
		case 03:
			if($dia < 21){
				echo "Verano";
			}else if($dia >= 21){
				echo "Otoño";
			}
			break;
		case 06:
			if($dia < 21){
				echo "Otoño";
			}else if($dia >= 21){
				echo "Invierno";
			}
			break;
		case 09:
			if($dia < 21){
				echo "Invierno";
			}else if($dia >= 21){
				echo "Primavera";
			}
			break;	
		case 12:
			if($dia < 21){
				echo "Primavera";
			}else if($dia >= 21){
				echo "Verano";
			}
			break;	
	}
?>