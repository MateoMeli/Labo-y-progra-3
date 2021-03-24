<?php
    abstract class FiguraGeometrica{
        protected $_color;
        protected $_perimetro;
        protected $_superficie;

        public function __construct() { }

        protected abstract function CalcularDatos();
        public abstract function Dibujar();

        function GetColor(){
            return $this->_color;
        }
        function SetColor($var){
            $this->_color = $var;
        }

        function ToString()
        {
            return "Color: " .$this->GetColor(). "<br/>" . "Perimetro: " .$this->_perimetro . "<br/>" . "Superficie: " . 
            $this->_superficie . "<br/>";
        }
        
    }
?>