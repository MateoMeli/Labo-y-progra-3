<?php
	$operador = "/";
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
			if($op2 > 0)
			{
				echo $op1 / $op2;
			}else{
				echo "No se puede dividir por cero";
			}
			break;
		default:
			echo "No hay operador";
	}
?>