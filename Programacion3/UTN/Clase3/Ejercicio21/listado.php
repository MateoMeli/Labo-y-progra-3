<?php
    include "usuario.php";

    if(!(isset($_GET["lista"]))){
        $lista = $_GET["lista"];
        switch($lista){
            case "usuario":
                $usuarios = Usuario::LeerDeCsv("Listado.csv");
                echo Usuario::ImprimirArray($usuarios);
                break;
            default:
                echo "La lista no es de un tipo adecuado";
        }
    }else{
        echo "No hay ninguna lista";
    }

?>