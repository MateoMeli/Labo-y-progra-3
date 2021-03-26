<?php
    require "Auto.php";

    class Garage{
        private $_razonSocial;
        private $_precioPorHora;
        private array $_autos;

        public function __construct()
        {
            $param = func_get_args();
            $numParams = func_num_args();
            $functionConstructor='__construct'.$numParams;
            if(method_exists($this, $functionConstructor)){
                call_user_func_array(array($this, $functionConstructor), $param);
            }
        }

        public function __construct1($razonSocial)
        {
            $this->_razonSocial = $razonSocial;
        }
        public function __construct2($razonSocial, $precioPorHora)
        {
            $this->__construct1($razonSocial);
            $this->_precioPorHora = $precioPorHora;
        }

        public function MostrarGarage(){
            echo "Razon social: " . $this->_razonSocial. " Precio por hora: " . $this->_precioPorHora . "<br> Autos: ";
            foreach($this->_autos as $valor){
                $aux = is_a($valor, "Auto") ? Auto::MostrarAuto($valor) : false;
            }
        }

        public function Equals(Auto $auto){
            foreach($this->_autos as $valor){
                if($auto->Equals($valor)){
                    return true;
                }
            }
            return false;
        }

        public function Add(Auto $auto){
            if(!($this->Equals($auto))){
                array_push($this->_autos, $auto);
            }
        }

        public function Remove(Auto $auto){
            if($this->Equals($auto)){
                foreach($this->_autos as $i => $value){
                    if($auto->Equals($value)){
                        unset($this->_autos[$i]);
                    }
                }
            }
        }
    }
?>