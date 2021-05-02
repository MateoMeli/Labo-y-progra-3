<?php
    require "usuario.php";

    if(isset($_GET["lista"])){
        $lista = $_GET["lista"];
        switch($lista){
            case "usuario":
                $usuarios = Usuario::LeerDeJson("usuarios.json");
                echo Usuario::ImprimirArrayJson($usuarios);
                break;
            default:
                echo "La lista no es de un tipo adecuado";
        }
    }else{
        echo "No hay ninguna lista";
    }

?>