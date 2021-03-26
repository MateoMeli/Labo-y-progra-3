<?php
    require "Punto.php";

    class Rectangulo{
        private Punto $_vertice1;
        private Punto $_vertice2;
        private Punto $_vertice3;
        private Punto $_vertice4;
        private $area;
        private $lado1;
        private $lado2;
        private $perimetro;

        function __construct(Punto $v1, Punto $v2)
        {
            $this->_vertice1 = $v1;
            $this->_vertice2 = $v1;
            $this->_vertice3 = $v2;
            $this->_vertice4 = $v2;
        }

        function Dibujar(){
            $x1 = $this->_vertice1->GetX();
            $y1 = $this->_vertice1->GetY();
            $x2 = $this->_vertice3->GetX();
            $y2 = $this->_vertice3->GetY();
            $lado1 = $x2-$x1;
            $lado2 = $y2-$y1;
            $perimetro = $lado1*2 + $lado2*2;
            $area = $lado1 * $lado2;
            $i = 1;
            $a = 0;
            while($i < $y1){
                echo "<br>";
                $i++;
            }
            while($a < $y2-$y1+1){
                for($b = 1; $b < $x1; $b++){
                    echo "-";
                }
                for($t = 0; $t < $x2-$x1+1; $t++){
                    echo "*";
                }
                echo "<br>";
                $a++;
            }
            echo "Rectangulo <br>";
            echo "Area: ". $area. "<br>";
            echo "Perimetro: ". $perimetro. "<br>";
        }
    }
?>