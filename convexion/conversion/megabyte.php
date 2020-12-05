<?php

    require_once 'valor.php';

    class megabyte extends valor{

        public function calculcarmbaby(){
            $primero=$this->getValor()*1024;
            $segundo=$primero*1024;
            return $segundo;
        }
        public function calcularmbakb(){
            $primero=$this->getValor()*1024;
            return $primero;
        }
        public function calcularmbagb(){
            $primero=$this->getValor()/1024;
            return $primero;
        }
        public function calcularmbatb(){
            $primero=$this->getValor()/1024;
            $segundo=$primero/1024;
            return $segundo;
        }
    }
?>
