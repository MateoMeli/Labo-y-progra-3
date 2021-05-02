<?php

class Pizza{

    public $_id;
    public $_sabor;
    public $_precio;
    public $_tipo;

    public function __construct($sabor, $precio, $tipo)
    {   
        $this->_id = rand(1, 1000);
        $this->_sabor = $sabor;
        $this->_precio = $precio;
        $this->_tipo = $tipo;
    }

    public static function CargarPizzaEnJson(Pizza $p){
        $archivo = fopen("Pizza.json", "a");
        $pizza = json_encode($p);
        if(fwrite($archivo, $pizza.PHP_EOL) != false){
            fclose($archivo);
            return true;
        }else{
            fclose($archivo);
            return false;
        }
    }

    public static function LeerPizzaDeJson($archivo){
        $arrayPizza = array();
        $archivo = fopen($archivo, "r");
        while(!feof($archivo)){
            $renglon = fgets($archivo);
            $pizza = json_decode($renglon, true);
            array_push($arrayUsuarios, $pizza);
        }
        fclose($archivo);
        return $arrayUsuarios;
    }

    public static function MostrarPizzaDeJson($array){
        $retorno = "<ul>";
        foreach($array as $key => $value){
            $retorno .= '<li>Id: ' . $value["_id"]. ' Sabor: ' . $value["_sabor"] . ' Precio: ' . $value["_precio"] . ' Tipo: ' . $value["_tipo"] . '" /></li>';
        }
        $retorno .= "<ul>";
        return $retorno;
    }
}

?>