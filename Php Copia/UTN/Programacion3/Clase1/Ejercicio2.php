<?php
	$mes = date("m");
	echo"Fecha: ", date("d.m.y");
	echo"<br>";
	echo"Fecha: ", date("F j, Y");
	echo "<br>";
	echo "Estacion: ";

	switch ($mes) {
		case 01:
		case 02:
		case 12:
			echo "verano";
			break;
		case 9:
		case 10:
		case 11:
			echo "primavera";
			break;
		case 03:
		case 04:
		case 05:
		echo "Otoño";
			break;
		case 06:
		case 07:
		case 8:
			echo "invierno";
			break;
	}
?>