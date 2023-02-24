<?php

    require ("conexion.php");

    $resp = $conexion->query(

        "SELECT  e.categoria_empresa, e.nombre_empresa, e.calle, e.colonia, e.ciudad, e.estado 
        FROM empresas AS e
        INNER JOIN contactos AS c
        ON "
        
    ) or die(print($conexion->errorInfo()));


    $data = [];


    while($item = $resp->fetch(PDO::FETCH_OBJ)){
        $data[] = [
       //--variable--/--base de datos--
            "ID" => $item->categoria_empresa,
            "imagen" => $item->nombre_empresa,
            "subcategoria" => $item->calle,
            "marca" => $item->colonia,
            "modelo" => $item->ciudad,
            "capacidad" => $item->estado,
            "resolucion" => $item->nombre_contacto,
            "descripcion" => $item->departamento,
            "descripcion" => $item->telefono_celular,
            "descripcion" => $item->email_contacto,
            
            
        ];
    };
            // echo $data;
    echo json_encode($data);
?>