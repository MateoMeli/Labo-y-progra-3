<?php
	$operador = "-";
	$op1 = 4;
	$op2 = 5;
	switch($operador){
		case "+":
			echo $op1 + $op2;
			break;
		case "*":
			echo $op1 * $op2;
			break;
		case "-":
			echo $op1 - $op2;
			break;
		case "/":
			echo $op1 / $op2;
			break;
		default:
			echo "No hay operador";
	}
?>