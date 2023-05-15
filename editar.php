<?php include 'header.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: https://jaime-huacac-hotelerias-production.up.railway.app?mensaje=error');
        exit();
    }

    include_once 'conectando/conexion.php';
    $id = $_GET['id'];

    $sentencia = $database->prepare("SELECT * FROM registerhotel WHERE id = ?;");
    $sentencia->execute([$id]);
    $resultado = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<br/>

<div class='container-fluid '>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="code_editar.php">
                    <div class="mb-3">
                        <label class="form-label">Título: </label>
                        <input type="text" class="form-control" name="txtTITULO" required 
                        value="<?php echo $resultado->title; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria: </label>
                        <input type="text" class="form-control" name="txtSTART" autofocus required
                        value="<?php echo $resultado->star; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">País: </label>
                        <input type="text" class="form-control" name="txtPAIS" autofocus required
                        value="<?php echo $resultado->ub_1; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ciudad: </label>
                        <input type="text" class="form-control" name="txtCIUDAD" autofocus required
                        value="<?php echo $resultado->ub_2; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dirección: </label>
                        <input type="text" class="form-control" name="txtDIRECCION" autofocus required
                        value="<?php echo $resultado->ub_3; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de Inscripción: </label>
                        <input type="date" class="form-control" name="txtDATE" autofocus required
                        value="<?php echo $resultado->date_ins; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Celular: </label>
                        <input type="number" class="form-control" name="txtTELF" autofocus required
                        value="<?php echo $resultado->telf; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Estado: </label>
                        <input type="text" class="form-control" name="txtSTATE" autofocus required
                        value="<?php echo $resultado->estado; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>
