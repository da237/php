<html>

    <body>
        <h2>Seleccione un opciones:</h2>

        <form action="fibo.php" method="post">
            <h3>Serie Fibonacci</h3>
            <input type="submit" name="validar" value="Ingresar">
        </form>
        <form action="calculo.php" method="post">
           <h3>Calculos matematicos</h3>Calculos matematicos
            <input type="submit" value="Ingresar">
        </form>
        <br>
        <h3>Digita 3 números, vamos a calcular el valor mayor, menor y el promedio: </h3>
        <form action="numeros.php" method="post">
            <input type="text" name="val1">
            <input type="text" name="val2">
            <input type="text" name="val3">
            <input type="submit" value="Ir">
        </form>

    </body>

</html>