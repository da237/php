<html>
  <body>
    <?php

      function obtieneFactorial($numero){ 
        $factorial = 1; 
        for ($i = 1; $i <= $numero; $i++){ 
          $factorial = $factorial * $i; 
        } 
        return $factorial; 
      } 
    echo "El factorial de tu número es: ".obtieneFactorial($_POST["Valor1"]); 
    ?>

    <form action="index.php" method="post">
      <input type="submit" value="Volver al menú principal">
    </form>
  </body>
</html>