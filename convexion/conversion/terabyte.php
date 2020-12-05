<?php

    require_once 'valor.php';

    class terabyte extends valor{

        public function calculartbaby(){
            $primero=$this->getValor()*1024;
            $segundo=$primero*1024;
            $tercero=$segundo*1024;
            $cuarto=$tercero*1024;
            return $cuarto;
        }
        public function calculartbakb(){
            $primero=$this->getValor()*1024;
            $segundo=$primero*1024;
            $tercero=$segundo*1024;
            return $tercero;
        }
        public function calculartbamb(){
            $primero=$this->getValor()*1024;
            $segundo=$primero*1024;;
            return $segundo;
        }
        public function calculartbagb(){
            $primero=$this->getValor()*1024;
            return $primero;
        }
    }
?>

              