<?php

//  variables para clientes---------------------------------------------------
//    se utiliza el "name" para definir el valor del input 


$id_contacto = isset($_POST["id_contacto"]) ? $_POST["id_contacto"] : "";
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$departamento = isset($_POST["departamento_contacto"]) ? $_POST["departamento_contacto"] : "";
$telefono1 = isset($_POST["tel1_contacto"]) ? $_POST["tel1_contacto"] : "";
$telefono2 = isset($_POST["tel2_contacto"]) ? $_POST["tel2_contacto"] : "";
$email = isset($_POST["email_contacto"]) ? $_POST["email_contacto"] : "";
$empresa = isset($_POST["empresa_contacto"]) ? $_POST["empresa_contacto"] : "";



require ("conexion.php");  

$pdo = $conexion->prepare(

    "INSERT INTO Contactos(nombre, departamento, telefono1, telefono2, email)
     VALUES(?,?,?,?,?)"
     );

$pdo->bindParam(1, $nombre);
$pdo->bindParam(2, $departamento);
$pdo->bindParam(3, $telefono1);
$pdo->bindParam(4, $telefono2);
$pdo->bindParam(5, $email);
// $pdo->bindParam(6, $empresa);


$pdo->execute() or die(print($pdo->errorInfo()));

echo json_encode("true");




?>