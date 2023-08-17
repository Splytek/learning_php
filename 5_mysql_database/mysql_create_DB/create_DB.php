<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
      $servername = "localhost";
      $port = "3307";
      $username = "root";
      $password = ""; //it does not has any password

      try{
        $conn = new PDO("mysql:host=$servername:$port", $username, $password);
        // echo "Connection successfully";

        //Create a database
        //query - consulta hacia mysql
        $sql = "CREATE DATABASE alumno3";
        //use exec() beacause no results are returned
        $conn->exec($sql);
        echo "Database created successfully<br>";

      } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
      }

      $conn = null; //close the connection
    ?>
</body>
</html>