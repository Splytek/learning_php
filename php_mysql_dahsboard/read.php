<?php
include "connection.php";

try{
    $stmt = $conn->query("SELECT * FROM users");

    foreach ($stmt as $row ) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nombre: " . $row['name'] . "<br>";
        echo "Apellido: " . $row['lastname'] . "<br>";
    }

} catch (PDOException $e){
    Echo "Esto es un error: " . $e->getMessage();
}

?>