<?php
    require "Auto.php";

    $auto1 = new Auto("Peugeot", "Rojo"); 
    $auto2 = new Auto("Peugeot", "Azul");

    $auto3 = new Auto("Ford", "Azul", 400);
    $auto4 = new Auto("Ford", "Azul", 300);

    $auto5 =  new Auto("Chevrolet", "Verde", 5000, new DateTime('now'));

    $auto3->AgregarImpuestos(1500);
    $auto4->AgregarImpuestos(1500);
    $auto5->AgregarImpuestos(1500);
    

    $importe = Auto::Add($auto1, $auto2);
    echo "<br>";

    if($auto1->Equals($auto2)){
        echo "Son iguales <br>";
    }
    if($auto1->Equals($auto5)){
        echo "Son iguales <br>";
    }


    echo Auto::MostrarAuto($auto1);
    echo Auto::MostrarAuto($auto3);
    echo Auto::MostrarAuto($auto5);
?>