<?php if (empty($_POST["txtPromocion"]) || empty($_POST["txtDuracion"]) || empty($_POST["txtCel"])) {header('Location: index.php'); exit();}

include_once '../conectando/conexion.php';
$promocion = $_POST["txtPromocion"];
$duracion = $_POST["txtDuracion"];
$codigo = $_POST["codigo"];
$celular = $_POST["txtCel"];

$sentencia = $database->prepare("INSERT INTO promociones(promocion,duracion,celular,id_hotel) VALUES (?,?,?,?);");
$resultado = $sentencia->execute([$promocion,$duracion,$celular, $codigo ]);

if ($resultado === TRUE) { header('Location: intf_promo.php?id='.$codigo); }