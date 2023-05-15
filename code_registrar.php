<?php
//print_r($_POST);
if (empty($_POST["txtTITULO"]) || empty($_POST["txtSTART"]) || empty($_POST["txtPAIS"]) || empty($_POST["txtCIUDAD"]) || empty($_POST["txtDIRECCION"]) || empty($_POST["txtDATE"]) || empty($_POST["txtTELF"]) || empty($_POST["txtSTATE"])) {
    header('Location: index.php?mensaje=falta');
    exit();
}

include_once 'conectando/conexion.php';
$titulo = $_POST['txtTITULO'];
$categoria = $_POST['txtSTART'];
$ubi_1 = $_POST['txtPAIS'];
$ubi_2 = $_POST['txtCIUDAD'];
$ubi_3 = $_POST['txtDIRECCION'];
$date_ins = $_POST['txtDATE'];
$telf = $_POST['txtTELF'];
$state = $_POST['txtSTATE'];

$sentencia = $database->prepare("INSERT INTO registerhotel(title,star,ub_1,ub_2,ub_3,telf,date_ins,estado) VALUES (?,?,?,?,?,?,?,?);");
$resultado = $sentencia->execute($titulo, $categoria, $ubi_1, $ubi_2, $ubi_3, $telf, $date_ins, $state);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=registrado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}
