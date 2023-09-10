<!-- PHP has a set of match functions that allows you to perform mathematical tasks on numbers -->
<!-- pi() Function -->
<!-- The pi() function returns the value of PI -->
<!-- Example -->
<?php 
echo(pi()); //returns 3.1415926535898
?>

<!-- mid() and max() Functions -->
<!-- The min() and max() functions can be used to find the lowest or highest value in a list of arguments -->
<?php 
    echo(min(0, 150, 30, 20, -8, -200)); //returns -200
    echo(max(0, 150, 30, 20, -8, -200)); //returns 150
    echo "<br>";
?>

<!-- abs() Functions -->
<!-- the abs() function return the abosulte(positive) value of a number -->
<!-- Example -->
<?php 
echo(abs(-6.7)); //return 6.7
?>

<!-- sqrt() Function -->
<!-- The sqrt() fucntion returns the square root of a number -->
<!-- Example -->
<?php
echo "<br>";
  echo(sqrt(64)); //returns 8
?>

<!-- round() Function -->
<!-- The round() function rounds a floating-point number to its nearest integer -->
<!-- Example -->
<?php
    echo "<br>";
    echo(round(0.60)); //returns 1
    echo "<br>";
    echo(round(0.49)); //returns 0 
?>

<!-- Random Numbers -->
<!-- The road() function generates a random number: -->
<!-- Example -->
<?php
    echo "<br>";
    echo(rand());
?>

<!-- To get more control over the random number, you can add the "min" and "max" parameters 
     to specify the lowest integer and the highest integer to be returned
     For example, if you want a random integer between 10 and 100 (inclusive), use rand(10., 100)
-->
<?php
echo "<br>";
echo(rand(10, 100));
?>