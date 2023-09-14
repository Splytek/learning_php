<?php 
//CODE - Complete code as of current discussion

$user = 'root';
$pass = '';
$host = 'localhost:3307';
$db = "universidad";

$dsn = "mysql:host=$host;dbname=$db";

$myOptions = [
    PDO::ATTR_ERRMODE =>
    PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE =>
    PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false, 
];

try{
    //$myPDO = new PDO($dsn, $user, $pass, $myOptions);
    //Test
    //var_dump($myPDO); //For testing
    //echo "<br>"
    echo "Conexion existosa";

}catch(PDOException $e){
    echo "Algo salio mal en el codigo" . $e->getMessage(); 
}

?>