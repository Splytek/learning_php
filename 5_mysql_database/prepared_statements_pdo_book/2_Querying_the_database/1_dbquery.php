<?php 
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
];

//Tow methods for querying a database
//These are two ways to run a query in PDO

//1. Running queries with PDO::query()
//This could be used when running queries with no variables

//2. Prepared statements, which offers protecting against SQL injection

try{
    //$myPDO = new PDO($dsn, $user, $pass, $myOptions);
    //Test:
    // var_dump($myPDO);
    // echo "<br>";
    // echo "Conexion exitosa";

    //In our exmaple case, the PDO object instance is actually $myPDO
    //Here's a query example
    $sql = $myPDO->query("SELECT * FROM notes");
    //var_dump($sql);

    while($row = $sql->fetch()){
        echo "<h3>".$row['title']."</h3>";
        echo $row['content']."<br>";
    }

}catch(PDOException $e){
    echo "Something went wrong" . $e->getMessage();
}

?>