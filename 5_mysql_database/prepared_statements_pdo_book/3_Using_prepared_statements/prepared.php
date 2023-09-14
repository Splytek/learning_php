<?php
//We start with a database connection

$user = 'root';
$pass = '';
$host = 'localhost:3307';
$db = 'mydatabase';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$myOptions = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
    //It will always have a comma at the final of the sentence
];

try{
    $myPDO = new PDO($dsn, $user, $pass, $myOptions);
    //var_dump($myPDO);
    /*Below I'm replacing the actual "id" for a "placeholder", and then let the PDO
      object prepare and sanitize the "id", before the query is processed.
    */
    //******$sql = $myPDO->prepare('SELECT * FROM notes WHERE id=?');
    /* The "prepare() method will set the query to accept a dynamic input"*/

    //The "prepare()" method does two things
    // It prepares the stateemnt
    // It returns an object

    /*That object is an instances of class PDOStatement, which offers us multiples methods 
      we can use.
    */

    //After preparing, we use another method to execute the query(I'm fetching a document with id 2).
    //*******$sql->([2]);

    //Notice where I have placed  the id: It's an "array" of possible placeholders
    /*So far, we only have one element, but we would have others. 
      In addition, the element can be numeric or string value
    */
    /*However, we're not done yet 
      We can do better by using an "id variable" instead of the data itself.
    */

/* ***************************************************************************************************************** */

    //EXTERNAL ID
    //VARIABLE
    /*Add a variable called $id. Then pass the variable to the "execute" method as an array element */
    $id = 2; //2

    //PREPARE
    $sql = $myPDO->prepare('SELECT * FROM notes WHERE id=?');

    //EXECUTE QUERY
    $sql->execute([$id]);

    /*Then, we can loop it to display the result on screen  as we did earlier
      on another exercise
      See the whole query code and looping on the next page
    */

    //DISPLAY EACH ROW
    while($row = $sql->fetch()){
        echo "<h3>" . $row['title'] . "</h3>"; //Do not forget to use quotation marks, as of this is a string variable
        echo $row['content'] . "<br>";
        echo $row['date_pub'] . "<br>";
     }

}catch(PDOException $e){
    echo 'Something went wrong' . $e->getMessage();
}

?>