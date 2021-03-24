<?php
    function InvertirPalabraConLimite($array, $max){
        $largo = strlen($array);
        if($largo > $max){
            return 0;
        }else if(!strcmp($array, "Recuperatorio") || !strcmp($array, "Parcial") || !strcmp($array, "Programacion")){
            for($i = $largo; $i >= 1; $i --){
                echo $array[$i-1];
            }
            return 1;
        }
    }
    InvertirPalabraConLimite("Recuperatorio", 15);
?>