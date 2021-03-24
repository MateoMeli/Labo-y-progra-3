<?php
    include_once "Rectangulo.php";
    include_once "Triangulo.php";

    $triangulo = new Triangulo(4, 3);
    $triangulo->ToString();

    $rectangulo = new Rectangulo(5, 3);
    $rectangulo->ToString();
?>