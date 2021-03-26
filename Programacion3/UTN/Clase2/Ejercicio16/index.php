<?php
    require_once "Rectangulo.php";

    $rectangulo = new Rectangulo(new Punto(2, 2), new Punto( 8, 8));
    $rectangulo->Dibujar();
?>