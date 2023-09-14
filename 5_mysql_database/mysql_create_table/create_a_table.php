<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $servername = "localhost";
        $port = "3307";
        $username = "root";
        $password = "";
        $dbname = "alumnos";

        try {
            //$conn = new PDO ("mysql:host=$servername:$port;dbname=$dbname", $username, $password);
            //query
            //sql to create table
            $sql = "CREATE TABLE alumnos (
                id INT(6) AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                register_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
            //use exec() because no results are retunred
            $conn->exec($sql);
            echo "Table alumnos created successfully";
        } catch (PDOException $e){
            echo "Connection failed: " . $sql . $e->getMessage();
        }
        
        $conn = null;
    ?>
</body>
</html>