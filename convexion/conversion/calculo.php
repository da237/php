<?php
    if(isset($_POST["botoncal"])){

        require_once 'byte.php';
        require_once 'kilobyte.php';
        require_once 'megabyte.php';
        require_once 'gigabyte.php';
        require_once 'terabyte.php';

        $byte = new byte();
        $kilobyte = new kilobyte();
        $megabyte = new megabyte();
        $gigabyte = new gigabyte();
        $terabyte = new terabyte();

        $valor=$_POST["txtvalor"];
        $tipomedida=$_POST["smedidas"];
        $opcion=$_POST["medidas"];

        
        switch($tipomedida){

            case 'byte':

                switch($opcion){
                    case 'byte':
                        echo "La conversión de ".$valor." bytes a bytes es: ".$valor;
                    break;

                    case 'kilobyte':
                        $byte->setValor($valor);
                        echo "La conversión de ".$valor." bytes a kilobytes es: ".$byte->calcularbyteakb();
                    break;

                    case 'megabyte':
                        $byte->setValor($valor);
                        echo "La conversión de ".$valor." bytes a megabyte es: ".$byte->calcularbyteamb();
                    break;

                    case 'gigabyte':
                        $byte->setValor($valor);
                        echo "La conversión de ".$valor." bytes a gigabyte es: ".$byte->calcularbyteagb();
                    break;

                    case 'terabyte':
                        $byte->setValor($valor);
                        echo "La conversión de ".$valor." bytes a terabyte es: ".$byte->calcularbyteatb();
                    break;

                }
            break;

            case 'kilobyte':

                switch($opcion){

                    case 'byte':
                        $kilobyte->setValor($valor);
                        echo "La conversión de ".$valor." kylobytes a bytes es: ".$kilobyte->calcularkbaby();
                    break;

                    case 'kilobyte':
                        echo "La conversión de ".$valor." kilobytes a kilobytes es: ".$valor;
                    break;

                    case 'megabyte':
                        $kilobyte->setValor($valor);
                        echo "La conversión de ".$valor." kilobytes a megabyte es: ".$kilobyte->calcularkbamb();
                    break;

                    case 'gigabyte':
                        $kilobyte->setValor($valor);
                        echo "La conversión de ".$valor." kilobytes a gigabyte es: ".$kilobyte->calcularkbagb();
                    break;

                    case 'terabyte':
                        $kilobyte->setValor($valor);
                        echo "La conversión de ".$valor." kilobytes a terabyte es: ".$kilobyte->calcularkbatb();
                    break;

                }
                break;

            break;

            case 'megabyte':

                switch($opcion){

                    case 'byte':
                        $megabyte->setValor($valor);
                        echo "La conversión de ".$valor." megabyte a bytes es: ".$megabyte->calculcarmbaby();
                    break;

                    case 'kilobyte':
                        $megabyte->setValor($valor);
                        echo "La conversión de ".$valor." megabyte a kilobytes es: ".$megabyte->calcularmbakb();
                    break;

                    case 'megabyte':
                        echo "La conversión de ".$valor." megabyte a megabyte es: ".$valor;
                    break;

                    case 'gigabyte':
                        $megabyte->setValor($valor);
                        echo "La conversión de ".$valor." megabyte a gigabyte es: ".$megabyte->calcularmbagb();
                    break;

                    case 'terabyte':
                        $megabyte->setValor($valor);
                        echo "La conversión de ".$valor." megabyte a terabyte es: ".$megabyte->calcularmbatb();
                    break;

                }
                break;

            break;

            case 'gigabyte':

                switch($opcion){

                    case 'byte':
                        $gigabyte->setValor($valor);
                        echo "La conversión de ".$valor." gigabyte a bytes es: ".$gigabyte->calculargbaby();
                    break;

                    case 'kilobyte':
                        $gigabyte->setValor($valor);
                        echo "La conversión de ".$valor." gigabyte a kilobytes es: ".$gigabyte->calculargbakb();
                    break;

                    case 'megabyte':
                        $gigabyte->setValor($valor);
                        echo "La conversión de ".$valor." gigabyte a megabyte es: ".$gigabyte->calculargbamb();
                    break;

                    case 'gigabyte':
                        echo "La conversión de ".$valor." gigabyte a gigabyte es: ".$valor;
                    break;

                    case 'terabyte':
                        $gigabyte->setValor($valor);
                        echo "La conversión de ".$valor." gigabyte a terabyte es: ".$gigabyte->calculargbatb();
                    break;
                }
                break;

            break;

            case 'terabyte':

                switch($opcion){

                    case 'byte':
                        $terabyte->setValor($valor);
                        echo "La conversión de ".$valor." terabyte a bytes es: ".$terabyte->calculartbaby();
                    break;

                    case 'kilobyte':
                        $terabyte->setValor($valor);
                        echo "La conversión de ".$valor." terabyte a kilobytes es: ".$terabyte->calculartbakb();
                    break;

                    case 'megabyte':
                        $terabyte->setValor($valor);
                        echo "La conversión de ".$valor." terabyte a megabyte es: ".$terabyte->calculartbamb();
                    break;

                    case 'gigabyte':
                        $terabyte->setValor($valor);
                        echo "La conversión de ".$valor." terabyte a gigabyte es: ".$terabyte->calculartbagb();
                    break;

                    case 'terabyte':
                        echo "La conversión de ".$valor." terabyte a terabyte es: ".$valor;
                    break;
                }
                break;

            break;
        }
    }
?>