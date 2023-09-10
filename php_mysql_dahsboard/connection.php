<?php 

$servername = "localhost";
$dbname = "universidad";
$username = "root";
$password = "";

try{
    //Conexion a las base de datos
    //Crear una nueva instancia de PDO 
    $conn = new PDO("mysql:host=$servername:3307;dbname=$dbname", $username, $password);
    // echo "Conexion existosa";
} catch (PDOException $e){
    //Este codigo dara mas info sis urge un error
    echo "Error de conexion: " . $e->getMessage();
}

?>