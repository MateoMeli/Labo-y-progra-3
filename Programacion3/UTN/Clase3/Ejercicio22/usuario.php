<?php
    class Usuario{
        private $mail;
        private $clave;

        public function __construct($mail, $clave)
        {
            $this->_mail = $mail;
            $this->_clave = $clave;
        }

        
    }
?>