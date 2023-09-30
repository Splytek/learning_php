<?php 
//Add a placeholder prefixed with a colon in the prepare method argument.
//Then, assign it as key, to the $id in the execute method.

$user = 'root';
$pass = '';
$host = 'localhost';
$port = '3307';
$db = 'mydatabase';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbmame=$db;charset=$charset";

$myOptions = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try{
    $myPDO = new PDO($dsn, $user, $pass);
    //var_dump($myPDO);
    //echo "Conexion exitosa";

    //External id
    $id = 2;

    //Prepare
    $sql = myPDO->prepare('SELECT * FROM notes WHERE id = :id');

    //Execute query
    $sql->execute(['id'=>$id]);

    //Notice how the named placeholder 

}catch(PDOException $e){
    echo "Something went wrong" . $e;
}

//Prepare
$sql = $myPDO->prepare('SELECT * FROM notes WHERE id = :id');

?>