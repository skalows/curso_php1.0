<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Aprendiendo a usar los operadores matematicos php </title>
  </head>
  <body>
    <form name="form1" method="post" action="">
      <p>
        <label for="num1"></label>
        <input type="text" name="num1" id="num1">
        <label for="num2"></label>
        <input type="text" name="num2" id="num2">
        <label for="operacion"></label>
        <select name="operacion" id="operacion">
          <option>Suma</option>
          <option>Resta</option>
          <option>Multiplicacion</option>
          <option>Division</option>
          <option>Modulo</option>
        </select>
      </p>
      <p>
        <input type="submit" name="button" value="Enviar" onclick="prueba">
      </p>
    </form>
    <p>&nbsp;</p>
    <?php
    if (isset($_POST["button"])) {
      $numero1=$_POST["num1"];
      $numero2=$_POST["num2"];
      $operacion=$_POST["operacion"];
      if (!strcmp("Suma",$operacion)) {
        echo "El resultado es: ".($numero1+$numero2)."<p></p>";
      }
      if (!strcmp("Resta",$operacion)) {
        echo "El resultado es: ".($numero1-$numero2)."<p></p>";
      }
      if (!strcmp("Multiplicacion",$operacion)) {
        echo "El resultado es: ".($numero1*$numero2)."<p></p>";
      }
      if (!strcmp("Division",$operacion)) {
        echo "El resultado es: ".($numero1/$numero2)."<p></p>";
      }
      if (!strcmp("Modulo",$operacion)) {
        echo "El resultado es: ".($numero1%$numero2)."<p></p>";
      }
    }
     ?>
  </body>
</html>
