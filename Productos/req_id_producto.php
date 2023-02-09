<?php
    require ("conexion.php");

    $dato = file_get_contents("php://input");

    $pdo = $conexion->prepare("SELECT * FROM productos WHERE id_producto = :ID");

    $pdo->bindParam(":ID", $dato);
    $pdo->execute() or die(print($pdo->errorInfo()));

    $data = [];

    while($item = $pdo->fetch(PDO::FETCH_OBJ)){
        $data[] = [
            //--variable--/--base de datos--
            "ID" => $item->id_producto,
            "imagen" => $item->imagen,
            "subcategoria" => $item->subcategoria,
            "marca" => $item->marca,
            "modelo" => $item->modelo,
            "capacidad" => $item->capacidad,
            "resolucion" => $item->resolucion,
            "descripcion" => $item->descripcion,
            "precio_publico" => $item->precio_publico,
            "nombre_prod" => $item->nombre_prod          

        ];
    }

    
    echo json_encode($data);








?>
