<?php
    class Auto{
        private $_color;
        private $_precio;
        private $_marca;
        private $_fecha;

        function  __construct()
        {
            $param = func_get_args();
            $numParams = func_num_args();
            $functionConstructor='__construct'.$numParams;
            if(method_exists($this, $functionConstructor)){
                call_user_func_array(array($this, $functionConstructor), $param);
            }
        }

        function __construct2($marca, $color)
        {
            $this->_marca = $marca;
            $this->_color = $color;
        }

        function __construct3($marca, $color, $precio)
        {
            $this->__construct2($marca, $color);
            $this->_precio = $precio;

        }

        function __construct4($marca, $color, $precio, $fecha)
        {
            $this->__construct3($marca, $color, $precio);
            $this->_fecha = $fecha;
        }

        function AgregarImpuestos($impuesto)
        {
            $this->_precio += $impuesto;
        }

        static function MostrarAuto(Auto $auto)
        {
            $fecha = is_a($auto->_fecha, "DateTime") ? date_format($auto->_fecha, "Y/m/d") : $auto->_fecha;
            $aux = "Marca: " . $auto->_marca . " Color: " . $auto->_color . " Precio: " . $auto->_precio . " Fecha: " . $fecha ."<br>";
            return $aux;
        }

        function Equals(Auto $auto){
            if(!strcmp($this->_marca, $auto->_marca)){
                return true;
            }
            return false;
        }

        static function Add(Auto $auto1, Auto $auto2){
            if($auto1->Equals($auto2) && !strcmp($auto1->_color, $auto2->_color)){
                $doble = (double)$auto1->_precio + $auto2->_precio;
                echo "Autos sumados con exito y suman ". $doble;
                return $doble;
            }else{
                echo "Estos autos son distintos y no se pueden sumar";
                return 0;
            }
        }
    }
?>