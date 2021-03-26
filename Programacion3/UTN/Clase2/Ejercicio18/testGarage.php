<?php
    require "Garage.php";
    $garage = new Garage("Estacionamiento", 100);

    $auto1 = new Auto("Peugeot", "Verde", 2000, new DateTime('now'));
    $auto2 = new Auto("Ford", "Verde", 3000, new DateTime('25-3-2020'));
    $auto3 = new Auto("Chevrolet", "Rojo", 5000, new DateTime('12-4-1999'));

    echo(Auto::MostrarAuto($auto2));

?>