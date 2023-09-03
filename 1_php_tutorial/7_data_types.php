<!-- PHP DATA TYPES -->
<!-- Variables can store data of different types, and different data types can do different things -->
<!-- PHP supports the following data types: -->
<!-- 
    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource
 -->

 <!-- PHP STRING -->
 <!-- A string is a consequece of characters, like "Hello World" -->
 <!-- A string can be any text inside quotes. you can use single or double quotes  -->
 <!-- Example -->
 <?php 
    $x = "Hello world!";
    $y = 'Hello world';

    echo $x;
    echo "<br>";
    echo $y;
 ?>

 <!-- PHP INTEGER -->
 <!-- An integer data types is a non-decimal number between -2,147,483,648 and 2,147,483,647. -->
 <!-- Rules for integers -->
 <!-- - An integer must have at least one digit  -->
 <!-- - An integer must not have a decimal point -->
 <!-- - An integer can be either positive or negative -->
 <!-- - Integers can be specified in: decimal (base 10), hexadecimal(16), octal(base 8), or bynary (base 2) notation -->

 <!-- In the following example $x is an integer. The PHP var_dump() function returns data type and value: -->
 <!-- EXAMPLE -->
 <?php 
   $x = 5985;
   echo "<br>";
   var_dump($x);
 ?>

 <!-- PHP FLOAT -->
 <!-- A float (floating point number) is a number with a decimal point or a number in exponencial form -->
 <!-- In the following  example $x is a float. The PHP var_dump() function returns de data types and value -->
 <!-- EXAMPLE -->
 <?php 
   $x = 10.386;
   echo "<br>";
   var_dump($x);
 ?>

 <!-- PHP Boolean -->
<!-- A boolean represents two possible states: TRUE or FALSE -->
<?php
$x = true;
$y = false;
echo "<br>";
var_dump($y);
?>
<!-- Booleans are often used in conditional testing. -->

<!-- PHP Array -->
<!-- An array stores multiple values in one single variable -->
<!-- In the following example $car is an array. In PHP var_dump() fucction returns the date type and value-->

<!-- EXAMPLE -->
<?php
  echo "<br>";
  $cars = array("Volvo", "BMW", "Toyota");
  var_dump($cars);
?>

<!-- Clasess and objects are the two main aspects of object-oriented programming -->
<!-- A class is a template for objects, and an object is an instances of a class -->
<!-- When the individual objects are created, they inherit all the properties and behaviors 
     from the class, but each object will have different values for the properties
-->
<!-- Let's assume we have a class named Car. A Car can have properties like model, color, etc.
     We can define variables like $model, $color, and so on, to hold the values of the properties
-->

<!-- When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties 
     and behaviors from the class, but each object will have different values for the properties.
-->

<!-- If you create a __contruct() function, PHP will functionally call this function when you create an
     object from a class.          
-->
<!-- EXAMPLE -->
<?php 
  class Car {
    // Variables
    public $color;
    public $model;

    // Constructor
    public function __construct($color, $model){
      $this->color = $color;
      $this->color = $model;
    }

    // Method
    public function message(){
      return "My car is a " . $this->color . " " . $this->model . "!";
    }

  }

  //Instances
  //Create a new object and send the values to the class
  echo "<br>";
  $myCar = new Car("black", "Volvo");
  //Call and print the method
  echo $myCar -> message();
  echo "<br>";

  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();

?>

<!-- PHP NULL VALUE -->
<!-- Null is a special data type which can have only one value: NULL -->
<!-- A variable of data type NULL is a variable that has no value assigned to it -->
<!-- Tip: If a variable is created without a value, it is automatically assigned a value of NULL -->
<!-- Variable can also be emptied by setting the value to NULL -->

<?php 
echo "<br>";
  $x = "Hello world!";
  $x = null;
  var_dump($x);
?>

<!-- PHP Resourse -->
<!-- The special resource type is not an actual data type. It is the storing of a 
     reference to functions and resources external to PHP
     A common example of using  the resource data type  is a database call.
-->