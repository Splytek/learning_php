<!-- PHP ECHO AND PRINT STATEMENTS -->
<!-- With PHP, there are two basic ways to get output: "echo" and "print" -->
<!-- In this tutorial we use "echo" and "print" in almost every example. So,
     this chapter contains a little more info about those two output statements
-->

<!-- PHP ECHO AND PRINT STATEMENTS -->
<!-- "echo" and "print" are more or less the same. They are both used to output data
     to the screen.
     The differences are samll: "echo" has no return value while "print" of 1so it can
     be used in expressions. "echo" can take multiple parameters (although such usage is rare)
     while "print" can take one argument. "echo" is marginally faster that print. 
-->

<!-- THE PHP ECHO STATEMENT -->
<!-- The "echo" statement can be used with or without paretheses: "echo" or "echo()" 
     DISPLAY TEST
     The following example shows how to output text with the "echo" command (notice that the next
     can contain HTML markup) 
-->
<!-- Example -->
<?php 
     echo "<h2>PHP is Fun!</h2>";
     echo "Hello world<br>";
     echo "I'm about to learn PHP!<br>";
     echo "This ", "string", "was", "made", "with multiple parameters";
?>

<!-- Display Variables 
     The following example show how to output text and variables with the "echo" statement:
-->

<!-- EXAMPLE -->
<?php 
     $txt1 = "Learn PHP";
     $txt2 = "W3Schools.com";
     $x = 5;
     $y = 4;

     echo "<h2>" . $txt1 . "</h2><br>";
     echo "Study PHP at" . $txt2 . "<br>";
     echo  $x + $y;
?>

<!-- THE PHP PRINT STATEMENT -->
<!-- The print statement can be used with or without parentheses: "print" or "print()" -->
<!-- DISPLAY TXT
     The following example shows how to output text with the "print" command (notice that
     the text can contain HTML markup)
-->
<?php 
     print "<h2>PHP is Fun!</h2>";
     print "Hello world!<br>";
     print "I'm about to learn PHP!";
?>

<!-- Display variables 
     The following example shows how to output text and variables with the "print" statement:
-->
<!-- Example -->
<?php 
     $txt1 = "Learn PHP";
     $txt2 = "W3Schools.com";
     $x = 5;
     $y = 4;

     print "<h2>" . $txt1 . "</h2>";
     print "Study PHP at" . $txt2 . "<br>";
     print $x + $y;
?>