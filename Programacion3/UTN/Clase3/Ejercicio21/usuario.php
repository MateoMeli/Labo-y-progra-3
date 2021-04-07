<?php
    class Usuario{
        private $_nombre;
        private $_mail;
        private $_clave;

        function __construct($nombre, $mail, $clave)
        {
            $this->_nombre = $nombre;
            $this->_mail = $mail;
            $this->_clave = $clave;
        }
        
        public function GuardarEnCsv(){
            $archivo = fopen("usuarios.csv", "a");
            if(fwrite($archivo, $this->UsuarioACsv() . "\n") != false){
                fclose($archivo);
                return true;
            }else{
                fclose($archivo);
                return false;
            }
        }

        public static function LeerDeCsv($archivo){
            $arrayUsuarios = array();
            while(feof($archivo)){

            }
        }

        public static function ImprimirArray($array){
            
        }

        private function UsuarioACsv() : string{
            
            return $this->_nombre . ", " . $this->_mail . ", " . $this->_clave;
        }
    }
?>