<?php

$id_producto = isset($_POST["id"]) ? $_POST["id"] : "";
$producto = isset($_POST["Producto"]) ? $_POST["Producto"] : "";
$marca = isset($_POST["Marca"]) ? $_POST["Marca"] : "";
$modelo = isset($_POST["Modelo"]) ? $_POST["Modelo"] : "";
$capacidad = isset($_POST["Capacidad"]) ? $_POST["Capacidad"] : "";
$resolucion = isset($_POST["Resolucion"]) ? $_POST["Resolucion"] : "";
$descripcion = isset($_POST["descripProducto"]) ? $_POST["descripProducto"] : "";
$precioDist = isset($_POST["precioDist"]) ? $_POST["precioDist"] : "";
$proveedor = isset($_POST["proveedor"]) ? $_POST["proveedor"] : "";
$categoria = isset($_POST["categoria"]) ? $_POST["categoria"] : "";
$subcategoria = isset($_POST["subcategoria"]) ? $_POST["subcategoria"] : "";
$precioPublico = isset($_POST["precioPublico"]) ? $_POST["precioPublico"] : "";
$factor = isset($_POST["factor"]) ? $_POST["factor"] : "";
$act_precio = isset($_POST["actual_precio"]) ? $_POST["actual_precio"] : "";
$image_name = $_FILES["imagen"]["name"];
$image_type = $_FILES["imagen"]["type"];
$image_tmp = $_FILES["imagen"]["tmp_name"];

$carpeta_destino = $_SERVER["DOCUMENT_ROOT"]."/Digitapp.v2023/img/";
move_uploaded_file($_FILES["imagen"]["tmp_name"],$carpeta_destino.$image_name);


if($producto =="" || $descripcion =="" || $precioDist =="" || $proveedor =="" || $categoria =="" || $precioPublico ==""){
   
    echo json_encode("false");

}else{

    if(empty($_POST['id'])){
        require ("conexion.php");  
        $pdo = $conexion->prepare("INSERT INTO productos(nombre_prod, marca, modelo, capacidad, resolucion, descripcion, precio_distribuidor, proveedor, subcategoria, categoria, precio_publico, imagen, factor, fecha_actualizacion) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $pdo->bindParam(1, $producto);
        $pdo->bindParam(2, $marca);
        $pdo->bindParam(3, $modelo);
        $pdo->bindParam(4, $capacidad);
        $pdo->bindParam(5, $resolucion);
        $pdo->bindParam(6, $descripcion);
        $pdo->bindParam(7, $precioDist);
        $pdo->bindParam(8, $proveedor);
        $pdo->bindParam(9, $subcategoria);
        $pdo->bindParam(10, $categoria);
        $pdo->bindParam(11, $precioPublico);
        $pdo->bindParam(12, $image_name);
        $pdo->bindParam(13, $factor);
        $pdo->bindParam(14, $act_precio);
        $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode("true");

    };
};
?>