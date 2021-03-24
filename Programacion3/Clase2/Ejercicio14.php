<?php
    function EsPar($num){
        if($num % 2 == 0){
            return true;
        }
        return false;
    }
    function EsImpar($num){
        if(!EsPar($num)){
            return true;
        }
    }

    if(EsPar(4)){
        echo "Fue par <br/>";
    }
    if(EsImpar(3)){
        echo "Fue impar";
    }
?>