<!-- Create the "trye code block", which will only work if the credentials are correct -->

<?php 
$user = 'root';
$pass = '';
$host = 'localhost:3307';
$db = 'universidad';

$dsn = "mysql:host=$host;dbname=$db";

try{
    $myPDO = new PDO($dsn, $user, $pass);
    echo "Conexion exitosa";
} catch(PDOException $e){
    echo "Erro en el codigo " . $e->getMessage();
}

?>