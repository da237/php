<html>
    <body>
        <?php
            if($_POST["val1"]>$_POST["val2"] && $_POST["val1"]>$_POST["val3"]){
                $valor=$_POST["val1"];
            echo "El valor mayor es el: ".$valor;       
            }
            if($_POST["val2"]>$_POST["val1"] && $_POST["val2"]>$_POST["val3"]){
                $valor=$_POST["val2"];
            echo "El valor mayor es el: ".$valor;
            }
            if($_POST["val3"]>$_POST["val1"] && $_POST["val3"]>$_POST["val2"]){
                $valor=$_POST["val3"];
            echo "El valor mayor es el: ".$valor;
            }
            echo "<br>";

            if($_POST["val1"]<$_POST["val2"] && $_POST["val1"]<$_POST["val3"]){
                $menor=$_POST["val1"];
            echo "El valor menor es el: ".$menor;       
            }
            if($_POST["val2"]<$_POST["val1"] && $_POST["val2"]<$_POST["val3"]){
                $menor=$_POST["val2"];
            echo "El valor menor es el: ".$menor;
            }
            if($_POST["val3"]<$_POST["val1"] && $_POST["val3"]<$_POST["val2"]){
                $menor=$_POST["val3"];
            echo "El valor menor es el: ".$menor;
            }

            echo "<br>";

            $promedio=($_POST["val1"]+$_POST["val2"]+$_POST["val3"])/3;
            echo "El promedio de dichos números es: ".$promedio;

            echo "<br>"   
        ?>
            <br>
            <form action="index.php" method="post">
                <input type="submit" value="Volver al menú principal">
            </form>

    </body>
</html>