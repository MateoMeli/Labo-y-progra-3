<?php
    include "usuario.php";

    $mail = $_POST["mail"];
    $clave = $_POST["clave"];

    if(isset($mail) && isset($clave)){
        if(Usuario::Validar($mail, $clave)){
            echo ("Verficado<br>");
        }else{
            echo("");
        }
    }else{
        echo("Error en los datos ingresados<br>");
    }
?>