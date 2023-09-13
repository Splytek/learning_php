<?php

try(PDOException $e){
    echo "Conexion exitosa";
}catch(){
    //echo "Something went wrong"; //OLD TEST MESSAGE
    echo "Something went wrong <br>" . $e->getMessage();
}

?>