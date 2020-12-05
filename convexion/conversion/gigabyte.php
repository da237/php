<?php

    require_once 'valor.php';

    class gigabyte extends valor{

        public function calculargbaby(){
            $primero=$this->getValor()*1024;
            $segundo=$primero*1024;
            $tercero=$segundo*1024;
            return $tercero;
        }
        public function calculargbakb(){
            $primero=$this->getValor()*1024;
            $segundo=$primero*1024;
            return $segundo;
        }
        public function calculargbamb(){
            $primero=$this->getValor()*1024;
            return $primero;
        }
        public function calculargbatb(){
            $primero=$this->getValor()/1024;
            return $primero;
        }
    }
?>
