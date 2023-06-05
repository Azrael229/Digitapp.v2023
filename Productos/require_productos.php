<?php

    require ("conexion.php");

    $resp = $conexion->query(

        "SELECT  *
        FROM productos"
        
    ) or die(print($conexion->errorInfo()));


    $data = [];


    while($item = $resp->fetch(PDO::FETCH_OBJ)){
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
            "precio_distribuidor" => $item->precio_distribuidor,          
        ];
    };
            // echo $data;
    echo json_encode($data);
?>