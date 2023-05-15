<?php
    print_r($_POST);
    if(!isset($_POST['id'])){header('Location: https://jaime-huacac-hotelerias-production.up.railway.app?mensaje=error');}

    include 'conectando/conexion.php';
    $codigo = $_POST['id'];
    $titulo = $_POST['txtTITULO'];
    $categoria = $_POST['txtSTART'];
    $ubi_1 = $_POST['txtPAIS'];
    $ubi_2 = $_POST['txtCIUDAD'];
    $ubi_3 = $_POST['txtDIRECCION'];
    $date_ins = $_POST['txtDATE'];
    $telf = $_POST['txtTELF'];
    $state = $_POST['txtSTATE'];

    $sentencia = $database->prepare("UPDATE registerhotel SET title = ?, star = ?, ub_1 = ?, ub_2 = ?, ub_3 = ?, date_ins = ?, telf = ?, estado = ? WHERE id = ?;");
    $resultado = $sentencia->execute([$titulo, $categoria, $ubi_1, $ubi_2, $ubi_3, $date_ins, $telf, $state, $codigo]);

    if ($resultado === TRUE) {
        header('Location: https://jaime-huacac-hotelerias-production.up.railway.app/index.php?mensaje=editado');
    } else {
        header('Location: https://jaime-huacac-hotelerias-production.up.railway.app/index.php?mensaje=error');
        exit();
    }
