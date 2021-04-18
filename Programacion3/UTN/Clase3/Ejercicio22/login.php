<?php
    include "usuario.php";

    $mail = $_POST["mail"];
    $clave = $_POST["clave"];

    if(isset($mail) && isset($clave)){
        echo Usuario::Validar($mail, $clave);
    }else{
        echo("Variables sin settear<br>");
    }
?>