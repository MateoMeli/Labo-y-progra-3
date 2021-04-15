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
        
        public static function GuardarEnCsv(Usuario $u){
            $archivo = fopen("Listado.csv", "a+");
            if(fwrite($archivo, $u->UsuarioACsv() . "\n") != false){
                fclose($archivo);
                return true;
            }else{
                fclose($archivo);
                return false;
            }
        }

        public static function LeerDeCsv($archivo){
            $arrayUsuarios = array();
            $archivo = fopen($archivo, "r");
            while(!feof($archivo)){
                $renglon = fgetcsv($archivo,1000 ,',');
                var_dump($renglon);
                $usuario = new Usuario($renglon[0], $renglon[1], $renglon[2]);
                array_push($arrayUsuarios, $usuario);
            }
            fclose($archivo);
            return $arrayUsuarios;
        }

        public static function ImprimirArray($array){
            $retorno = "<ul>";
            foreach($array as $key => $value){
                $retorno .= "<li>Nombre: " . $value->_nombre . " Clave: " . $value->_clave . " Mail: " . $value->_mail . "<li>";
            }
            $retorno .= "<ul>";
            return $retorno;  
        }

        private function UsuarioACsv() : string{
            
            return $this->_nombre . ", " . $this->_mail . ", " . $this->_clave;
        }
    }
?>