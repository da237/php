<?php

    require_once 'valor.php';

    class kilobyte extends valor{

        public function calcularkbaby(){
            $primero=($this->getValor()*1024);
            return $primero;
        }
        public function calcularkbamb(){
            $primero=($this->getValor()/1024);
            return $primero;
        }
        public function calcularkbagb(){
            $primero=($this->getValor()/1024);
            $segundo=$primero/1024;
            return $segundo;
        }
        public function calcularkbatb(){
            $primero=($this->getValor()/1024)/(1024);
            $segundo=$primero/1024;
            return $segundo;
        }
    }
?>