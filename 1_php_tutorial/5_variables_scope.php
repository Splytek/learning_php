
<!-- #PHP VARIABLES SCOPE
#En PHP, las variables pueden ser declaradas en cualquier lugar en el script
#El escope de una variable es la parte del script donde la variable puede se referenciado/usado
#PHP tiene tres diferentes variables scopes
#Local, Global y static

#SCOPE DE UNA VARIABLE LOCAL Y GLOBAL
#Una variable declarada afuera de una fucnion tiene a GLOBAL SCOPE y puede solo ser accedida afuera de una funcion
#EJEMPLO
#Variable con scope global -->
<?php
//   $x = 5; //global scope

//   function myTest(){
//     //Using x inside this function will generate a error
//     echo "<p>Variable x inside function is: </p>" 
//   }

//   myTest();

//   echo "<p>Variable x outside function is: $x</p>"
?>

<!-- A variable declared "within" a function has a LOCAL SCOPE and can only be accessed within that function: -->
<!-- EXAMPLE -->
<!-- Variable with local scope -->
<?php
// function myTest1(){
//     $x = 5; //local variable
//     echo "<p>Variable x inside function is: $x</p>";
// }

// myTest1();
// using x outside the function will generate an error
// echo "<p>Variable x outside function is: $x</p>" 

#Tu puedes tener las variables locales con el mismo nombre in diferentes funciones, porque
#las variables locales son solo reoonocidos por la fucnion en la cual ellos son declarados

#PHP LA LLAVE LOCAL
#La variable GLOBAL is usado para accesar a una variable global desde dentro de una funcion
#Para hacer esto, usamos la variable GLOBAL antes de la variables (dentro de la funcion)

#EJEMPLO
$x = 5;
$y = 10;

function myTest2(){
    global $x, $y;
    $y = $x = $y;
}

myTest2();
echo $y; //salida 15

?>

<!-- PHP tambien alamacena toda las variables globales en un array llamado "$GLOBAL[index]". 
     The "index"matiene el nombre de la variable. Este array es tambien accesible desde dentro
     funciones y puede ser actualizado las variables globales directamente.

     El ejemplo anterior puede ser reescrito asi:
-->
    <!-- <?php 
      $x = 5;
      $y = 10;

      function  myTest3(){
        $GLOBAL['y'] = $GLOBAL['x'] + $GLOBAL['y'];
      }

      myTest3();
      echo $y; // salida 15
      
    ?> -->

<!-- PHP THE STATIC KEYWORD -->
<!-- Normally, when a function is completed/executed, all of its variables are deleted.
     However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
     
     To do this, use the "static" keyword when you first declare the variable
-->
<?php 
  function myTest4(){
    static $x = 0;
    echo $x;
    $x++;
  }

  echo "<br>";
  echo "<br>";
  myTest4(); 
  echo "<br>";
  myTest4();
  echo "<br>";
  myTest4();
?>

<!-- 
  Then, each time the function is called, that variable will still have the information
  it contained from the last time the function was called.

  Note: The variable is still local to the function.
 -->

 <!-- PHP EXCERSICES -->