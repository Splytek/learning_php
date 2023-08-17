<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //We are gonna to connection through PDO which is arealy implemented inside PHP

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    //$conexion = new PDO('mysql:host=localhost:3307;dbname=blog_cursos', root, '');

    try {
        $conn = new PDO("mysql:host=$servername:3307;dbname=alumnos", $username, $password);
        //connection successfully
        //This show if the connection was successfully
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null; //close the connection
?>
</body>
</html>