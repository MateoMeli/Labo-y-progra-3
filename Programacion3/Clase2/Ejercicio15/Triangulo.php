<?php
    include_once "FiguraGeometrica.php";

    class Triangulo extends FiguraGeometrica{
        private $_base;
        private $_altura;

        function __construct($base, $altura)
        {
            $this-> _base = $base;
            $this-> _altura = $altura;
            $this->CalcularDatos();
        }

        function CalcularDatos()
        {
            $this->_perimetro = ($this->_base * $this->_altura) / 2;
            $this->_superficie = $this->_base * $this->_altura*2;
        }

        function ToString()
        {
            echo "Triangulo <br/>";
            $texto = parent::ToString();
            echo $texto . "Base: " . $this->_base . " Altura: " . $this->_altura . "<br/><br/>";
            echo $this->Dibujar();
        }

        function Dibujar()
        {
            $strRet = "";
            $asteriscosAux = 1;
            for ( $alturaFor = 0; $alturaFor < $this->_altura; $alturaFor++ ) {
        
                for ( $espaciosVacios = 0; $espaciosVacios < ($this->_base - $alturaFor); $espaciosVacios++ ) {
                    $strRet .= "-";
                }
        
                for ( $asteriscos = 0; $asteriscos < $asteriscosAux; $asteriscos++ ) {
                     $strRet .= "*";
                }
        
                for ( $espaciosVacios = 0; $espaciosVacios < ($this->_base - $alturaFor); $espaciosVacios++ ) {
                    $strRet .= "-";
                }
                $strRet .= "\n<br>\n";
                $asteriscosAux += 2;
            }
        
            return $strRet;
            
        }
    }
?>