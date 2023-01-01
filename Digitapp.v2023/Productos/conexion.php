<?php
    
    try{
        $conexion = new PDO("mysql:host=localhost; port=3306; dbname=servico1_digitappBD", "servico1_israelprogramador", "744920lovepass");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);


    }catch(PDOException $error){
    echo $error->getMessage(); 
    die();
    }
 
?>