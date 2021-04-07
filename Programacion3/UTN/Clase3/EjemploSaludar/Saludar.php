<?php

    echo "va por get <br/>";
    var_dump($_GET);
    echo "va por post <br/>";
    var_dump($_POST);

    echo "Bienvenido/a ", $_POST["txtNombre"];
?>