<?php

    require ("conexion.php");

    $data = file_get_contents("php://input");

    $pdo = $conexion->prepare("DELETE FROM productos WHERE id_Producto = :ID");
    $pdo->bindParam(":ID", $data);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode("true");




?>