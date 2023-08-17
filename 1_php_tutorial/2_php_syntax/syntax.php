<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <!-- Un script php is ejecutado en el servidor, y el resultado del html plano es enviado de regreso a el navegador -->
    <!-- Basic php syntax -->
    <!-- un script php puede ser establecido en cualquier lugar del documento -->
    <!-- un script php empieza con < ?php and end with ?> -->
    <!-- 
        < ?php
        ?>
     -->

     <!-- El extension del archivo por default para archivos php  ".php" -->
     <!-- un archivo php normalmente contiene html tags, y algunos php scripting code -->
     <!-- A continuacion, tenemos un ejemplo de un archivo simple de php, with un script php eso usa una fucnion built-in php "echo" para 
          la salida del texto "Hello World" on una pagina web -->
    <!-- EXAMPLE -->
    <!DOCTYPE html>
    <html>
        <head>
        </head>
        <body>
            <h1>My fisrt php page</h1>
            <?php 
                echo "Hello World<br><br>";
            ?>
        <!-- Note: los statements terminan con un semicolon (;) -->
        
        <!-- PHP CASE SENSITIVITY -->
        <!-- in php, los keywords (e.g. if, else, while, echo, etc.) clases, fucniones, y fucniones de usuario-definido no son canso de sesibilidad -->
        <!-- en el ejemplo siguiente, todos los siguiente tres echo statements son iguales y permitidos -->
        <!-- php es sesible a minusculas y mayusculas -->

        <?php 
            ECHO "Hello World!<br>";
            echo "Hello World!<br>";
            EcHo "Hello World!<br><br>";
        ?>

        <!-- Note: however; todo los nombre de variable son sensibles a minusculas y mayusculas -->

        <!-- mira los siguientes ejemplos; solo los primeros statement desplegaran el valor de la variable "$color". Esto es porque 
             $color, $COLOR, y $coLOR are tratados como tres variables diferentes-->
        <!-- EJMEPLO -->
        <?php 
            $color = "red";
            echo "My car is " . $color . "<br>";
            //php es sensible a minuscula y mayusculas
            //echo "My house is " . $COLOR . "<br>";
            //echo "My boat is " . $coLOR . "<br>";
        ?>


        </body>
    </html>

</body>
</html>