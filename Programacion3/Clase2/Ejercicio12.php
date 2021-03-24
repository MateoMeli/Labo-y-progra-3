<?php
    function InvertirPalabra($array){
        $largo = strlen($array);
        for($i = $largo; $i >= 1; $i --){
            echo $array[$i-1];
        }
    }
    InvertirPalabra('Gola');
?>