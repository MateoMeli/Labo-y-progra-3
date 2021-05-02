<?php

require_once "Pizza.php";

$sabor = $_GET["sabor"];
$precio = $_GET["precio"];
$tipo = $_GET["tipo"];

if(!(isset($sabor) && isset($precio) && isset($tipo))){
    echo("Error ingresando los datos.<br>");
}else{
    $pizza = new Pizza($sabor, $precio, $tipo);
    if(Pizza::CargarPizzaEnJson($pizza)){
        echo("Pizza guardada.<br>");
    }else{
        echo("Error al guardar la pizza.<br>");
    }
}

?>