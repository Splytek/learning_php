<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- las variables tienen "contenedores" para almacenar informacion -->
    <!-- creando (declarando) variables php -->
    <!-- in php, una variable empieza con el signo $, seguido de el nombre de la variable -->
    <!-- Ejemplo -->
    <?php 
        $txt = "Hello world";
        $x = 5;
        $y = 10.5;

        echo $txt;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;
    ?>
    <!-- Despues de la ejecucion de los statements anteriores, la variable $txt mantedra el valor de "Hello World",
         la variable $x mantendra el valor de 5, y la variable $y mantendra el valor de 10.5  -->
    <!-- Note: Cuando tu asignas un valor a una varaible, pone comillas alrededor del valor -->
    <!-- A dieferencia de otros lenguajes de programacion, php no tiene comandos para declarar una variable. Es creado en el momento en que tu asignas un valor a eso  -->

    <!-- Piensa a las variables como contenedores para almacenar datos -->

    <!-- PHP variables -->
    <!-- Una variable puede tener un nombre corto (como x & y) o un nombre mas descriptivo (age, carname, total_volume) 
         Reglas para las variables php
         Una variable empieza con el signo $, seguido por el nombre de la variable
         Un nombre de variable debe empezar con una letra or el caracter guion bajo
         Un nombre de variable no puede empezar con un numero
         Un nombre de variable solo contiene caracteres alpha-numeric y guion bajo (A-z, 0-9, and _)
         Los nombres de variables son sensibles a minuscula y mayuscula ($age and $AGE son dos diferentes variables)

         //OUTPUT VARIABLES
         El "echo" de php statement es a veces usado como alida de datos hacia la pantalla
         El siguiente ejemplo mostrara como mostrar texto de una variable:
         #EJEMPLO
         <?php 
           $txt = "W3Schools.com";
           echo "I love $txt!";
         ?>

         #El siguiente ejemplo producira la misma salida como el ejemplo anterior 
         #EJEMPLO
         <?php 
           $txt = "W3Schools.com";
           echo "I love" . $txt .  "!";
         ?>

         #El siguiente ejemplo saldra de la suma de dos variables
         <?php 
          $x = 5;
          $y = 4;

          echo $x + $y;

          #PHP ES UN LENGUAJE LIBREMENTE TIPADO
          #En el ejemplo anterior, date cuenta que no tuvimos que decirle a PHP que tipo de dato es la variable
          #PHP automaticamente asociado a un tipo de dato a la variable, dependiendo de su valor. Desde que los 
          #tipos de datos no esta establecidos en un caso estricto, tu peuedes hacer cosas como agregar un string
          #a un integer sin causar un error

          #En php7, lo tipos de declaraciones fueron agregados. Esto da un opcion para especificar el tipo de dato
          #esperado cuando declaramos una funcion, y permitiendo el requiriemto estricto,, eso arrojara un "error fatal" en un
          #en un tipo de error.
          

         ?> 


        </body>
</html>