<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> declaracion de constantes php </title>
  </head>
  <body>
    <?php
    //forma de declarar una constante mediante el metodo define
    //la palabra true hace que sea insensible a mayusculas
    define("AUTOR","roberto",true);
    echo "El autor: ".autor."<p></p>";
    echo  "La linea en la cual se encuentra es: ".__LINE__."<p></p>";
    echo "La ruta donde se encuentra este archi es: ".__FILE__."<p></p>";
     ?>
  </body>
</html>
