<!-- Create the "trye code block", which will only work if the credentials are correct -->

<?php 
$user = 'root';
$pass = '';
$host = 'localhost:3307';
$db = 'universidad';

//Creamos un variable para guardar los valores que pide PDO
//Lo guardamos en la variable $dsn
$dsn = "mysql:host=$host;dbname=$db";

try{
    //Agregamos las variable $dsn, seguido de $user y $pass
    //$myPDO = new PDO($dsn, $user, $pass);
    //echo "Conexion exitosa";
} catch(PDOException $e){
    echo "Erro en el codigo " . $e->getMessage();
}

?>