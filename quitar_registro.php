<?php 
    if(!isset($_GET['id'])){
        header('Location: https://jaime-huacac-hotelerias-production.up.railway.app?mensaje=error');
        exit();
    }

    include 'conectando/conexion.php';
    $id = $_GET['id'];

    $sentencia = $database->prepare("DELETE FROM registerhotel where id = ?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: https://jaime-huacac-hotelerias-production.up.railway.app?mensaje=eliminado');
    } else {
        header('Location: https://jaime-huacac-hotelerias-production.up.railway.app?mensaje=error');
    }
    
?>
