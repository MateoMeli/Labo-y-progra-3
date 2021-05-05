<?php

class Producto{

    public $_id;
    public $_codigoDeBarras;
    public $_nombre;
    public $_tipo;
    public $_stock;
    public $_precio;

    public function __construct($codigoDeBarras, $nombre, $tipo, $stock, $precio)
    {
        $this->_id = rand(1, 10000);
        $this->_codigoDeBarras = $codigoDeBarras;
        $this->_nombre = $nombre;
        $this->_tipo = $tipo;
        $this->_stock = $stock;
        $this->_precio = $precio;
    }

    public function equals(Producto $p){
        return ($this->_codigoDeBarras == $p->_codigoDeBarras);
    }

    public function __toString()
    {
        return $this->_id . ',' . $this->_codigoBarras . ',' . $this->_nombre . ',' . $this->_tipo . ',' . $this->_stock . ',' . $this->_precio;
    }

    public static function ObtenerProductos($archivo){
        $array = array();
        $archivoAbierto = fopen($archivo, "a+");
        while(!feof($archivoAbierto)){
            $renglon = fgets($archivoAbierto);
            if($renglon != false){
                $productoJson = json_decode($renglon, true);
                $producto = new Producto($productoJson["_codigoDeBarras"], $productoJson["_nombre"], $productoJson["_tipo"], $productoJson["_stock"], $productoJson["_precio"]);
                array_push($array, $producto);
            }
        }
        fclose($archivoAbierto);
        return $array;
    }

    
}

?>