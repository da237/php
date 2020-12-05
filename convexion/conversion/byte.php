<?php

    require_once 'valor.php';

    class byte extends valor{
        public function calcularbyteakb(){
            $primero=($this->getValor()/1024);
            return $primero;
        }
        public function calcularbyteamb(){
            $primero=($this->getValor()/1024)/(1024);
            return $primero;
        }
        public function calcularbyteagb(){
            $primero=($this->getValor()/1024)/(1024);
            $segundo=$primero/1024;
            return $primero;
        }
        public function calcularbyteatb(){
            $primero=($this->getValor()/1024)/(1024);
            $segundo=$primero/1024;
            $tercero=$segundo/1024;
            return $tercero;
        }
    }
?>