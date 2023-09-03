<!-- PHP STRINGS -->
<!-- A string is a consequence of characters, like "Hello World" -->

<!-- PHP string Fucntions -->
<!-- In this chapter we will look at some commonly used functions to manipulate strings -->

<!-- strlen() - Return the Length of a String -->
<!-- The PHP strlen() function returns the lenght of a string -->
<!-- EXAMPLE -->
<!-- Return the lenght of the string "Hello World" -->
<?php 
    echo strlen("Hello World"); //Outputs 11
?>

<!-- str_word_count() -Count Words in a String -->
<!-- The PHP str_word_count() function counts the number of words in a string -->
<!-- EXAMPLE -->
<!-- Count the number of word in the string "Hello World" -->
<?php
    echo "<br>";
    echo str_word_count("Hello world"); //outputs 2
?>

<!-- strrev() - Reverse a String -->
<!-- The PHP strev() function reverses a string -->
<!-- EXAMPLE -->
<!-- Reverse the string "Hello world" -->
<?php
    echo "<br>";
    echo strrev("Hello world"); //outputs "dlrow olleH"
?>

<!-- strpos() - Search For a Text Wihtin a String -->
<!-- The PHP srtpos() function searches for a specific text within a string.
     If a match is foundm the function returns the character position of the first
     match. If no match is found, it will return FALSE.  
-->
<!-- EXAMPLE -->
<!-- Search for the text "world" in the string "Hello World" -->
<?php
    echo "<br>";
    echo strpos("Hello world", "world"); //outputs 6
    //Tip: The first character position in a string is 0 (not 1)

?>

<!-- str_replace() - Replace Text Within a String -->
<!-- The PHP str_replace() function replaces some characters with some others characters in a string -->
<!-- Example -->
<!-- Replace the text "world" with "Dolly" -->
<?php 
    echo str_replace("world", "Dolly", "Hello world"); //outputs Hello Dolly
?>

<!-- Complete PHP String Reference -->