<?php

require "usuario.php";

$mail = $_POST["mail"];
$clave = $_POST["clave"];
$nombre = $_POST["nombre"];
$archivo = $_FILES["foto"]["name"];

if(isset($mail) && isset($clave) && isset($mail)){
    $tipo = pathinfo($archivo, PATHINFO_EXTENSION);
    $path = "Usuario/Fotos/" . $mail . "." . $tipo;
    if(file_exists($path)){
        echo("Archivo existente.<br>");
    }else{
        move_uploaded_file($_FILES["foto"]["tmp_name"], $path);
        $usuario = new Usuario($nombre, $mail, $clave, $path);
        if(Usuario::GuardarEnJson($usuario)){
            echo("Todo ok<br>");
        }else{
            echo("Todo no ok<br>");
        }
    }
}else{
    echo("Los datos que ingreso tienen errores.<br>");
}

?>