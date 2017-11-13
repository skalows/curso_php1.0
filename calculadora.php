<style media="screen">
    .resultado{
     color: #f00;
     font-weight: bold;
     font-size: 32 px;
    }

</style>
<?php
if (isset($_POST["button"])) {
  $numero1=$_POST["num1"];
  $numero2=$_POST["num2"];
  $operacion=$_POST["operacion"];
  calcular($operacion);
}

  function calcular ($calculo) {

  if (!strcmp("Suma",$calculo)) {
    global $numero1;
    global $numero2;
    $resultado=$numero1+$numero2;
    echo "<p class='resultado'>El resultado es: $resultado</p>";
  }
  if (!strcmp("Resta",$calculo)) {
    global $numero1;
    global $numero2;
    echo "El resultado es: ".($numero1-$numero2)."<p></p>";
  }
  if (!strcmp("Multiplicacion",$calculo)) {
    global $numero1;
    global $numero2;
    echo "El resultado es: ".($numero1*$numero2)."<p></p>";
  }
  if (!strcmp("Division",$calculo)) {
    global $numero1;
    global $numero2;
    echo "El resultado es: ".($numero1/$numero2)."<p></p>";
  }
  if (!strcmp("Modulo",$calculo)) {
    global $numero1;
    global $numero2;
    echo "El resultado es: ".($numero1%$numero2)."<p></p>";
  }
}
?>
