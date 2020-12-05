<?php

    class fibonacci{
        private $valor;

        public function constructor(){
            $this->valor=0;
        }

        public function setValor($numero){
            $this->valor=$numero;
        }

        public function getValor(){
            return $this->valor;
        }

        public function calcularFibonacciPara(){
            $a=0;
            $b=1;

            for($i=1;$i<=$this->getValor();$i++){
                echo $a."";
                $c=$a+$b;
                $a=$b;
                $b=$c;
            }
        }
    }
?>
