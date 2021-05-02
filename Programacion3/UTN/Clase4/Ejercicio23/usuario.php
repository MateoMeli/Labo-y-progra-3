<?php
   class Usuario{
    public $_nombre;
    public $_mail;
    public $_id;
    public $_foto;
    public $_fecha;
    public $_clave;

    function __construct($nombre, $mail, $clave, $foto)
    {
        $this->_id = rand(1, 10000);
        $this->_foto= $foto;
        $this->_fecha=date("d-m-y");
        $this->_nombre = $nombre;
        $this->_mail = $mail;
        $this->_clave = $clave;
    }

    public function GetMail(){
        return $this->_mail;
    }
    
    public function GetClave(){
        return $this->_clave;
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
    public static function GuardarEnJson(Usuario $u){
        $archivo = fopen("usuarios.json", "a");
        $usuario = json_encode($u);
        if(fwrite($archivo, $usuario.PHP_EOL) != false){
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
        
        return $this->_nombre . "," . $this->_mail . "," . $this->_clave;
    }

    public static function Validar($mail, $clave){
        $arrayUs = Usuario::LeerDeCsv("Listado.csv");
        foreach($arrayUs as $key => $value){
            if(!strcmp($mail, $value->GetMail()))
            {
               
                if(!strcmp($clave, $value->GetClave())){
                    return "Ingreso correctamente :)";
                }else{
                    return "Clave incorrecta";
                }
            }
        }
        return "No existe";
    }
}
?>