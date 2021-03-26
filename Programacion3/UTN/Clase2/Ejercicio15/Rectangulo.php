<?php
    include_once "FiguraGeometrica.php";

    class Rectangulo extends FiguraGeometrica{
        private $_ladoUno;
        private $_ladoDos;

        function __construct($l1, $l2)
        {
            $this-> _ladoUno = $l1;
            $this-> _ladoDos = $l2;
            $this->CalcularDatos();
        }

        function CalcularDatos()
        {
            $this->_perimetro = $this->_ladoUno*2 + $this->_ladoDos*2;
            $this->_superficie = $this->_ladoUno * $this->_ladoDos;
        }
        function ToString()
        {
            echo "Rectangulo <br/>";
            $texto = parent::ToString();
            echo $texto . "Lado 1: " . $this->_ladoUno . " Lado 2: " . $this->_ladoDos . "<br/><br/>";
            $this->Dibujar();
        }

        function Dibujar()
        {
            for($i = 0; $i < $this->_ladoDos; $i++){
                for($j = 1; $j < $this->_ladoUno; $j++){
                    echo "*";
                }
                echo "* <br/>";
            }
        }
    }
?>