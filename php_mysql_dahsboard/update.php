<?php 
include "connection.php";
try {
    $stmt = $conn->query("UPDATE ");
}catch(PDOException $e){
    echo "Esto es un error: " $e->getMessage();
}

?>