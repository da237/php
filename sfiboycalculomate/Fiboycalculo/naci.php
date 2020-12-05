<html>
    <body>
        <?php
            if(isset($_POST["ir"])){

                require_once 'operacion.php';

                $fibonacci= new fibonacci(); 

                $numero=$_POST["valor"];

                $fibonacci->setValor($numero);
                
                $fibonacci->calcularFibonacciPara();
            }
        ?>
        <br>
        <form action="index.php" method="post">
            <input type="submit" value="Volver al menú principal">
        </form>
    </body>
</html>