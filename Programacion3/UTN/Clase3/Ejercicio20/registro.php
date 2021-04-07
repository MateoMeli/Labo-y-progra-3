<?php
    include "usuario.php";

    $nombre = $_POST["nombre"];
    $mail = $_POST["mail"];
    $clave = $_POST["clave"];
    
    if(!(isset($nombre) && isset($mail) && isset($clave))){
        echo "Algun dato ingresado es invalido";
    }else{
        $usuario = new Usuario($nombre, $mail, $clave);
        if($usuario->Guardar()){
            echo "Usuario creado correctamente";
        }else{
            echo "Algo salio mal";
        }
    }
?>