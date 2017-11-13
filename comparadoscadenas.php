<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> ejercicio que compara variables tipo string </title>
  </head>
  <body>
    <?php
      $variable1="casa";
      $variable2="CASA";

      //devuelve 1 si no son iguales 0 si son iguales
      //$resultado=strcasecmp($variable1,$variable2);
      $resultado=strcmp($variable1,$variable2);
      if ($resultado) {
        echo "<p>no coinciden</p>";
      }
      else {
        echo "coinciden";
      }

     ?>
  </body>
</html>
