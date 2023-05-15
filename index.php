<?php include 'header.php' ?>

<!-- CONECTANDO CON LA BASE DE DATOS -->
<?php
    include_once "./conectando/conexion.php";
    $sentencia = $database -> query("SELECT * FROM registerhotel");
    $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>


<!-- NOMBRE DE TABLA -->
<div class='container-fluid'>
    <div class="row align-item-start">
        <div class="col fs-1">Lista de Hoteles
        <a href="registrar.php"><button type="button" class="btn btn-primary"><i class="bi bi-clipboard-plus"></i> Registrar</button></a>
        
    </div>
    
    <div class='col d-flex align-items-center'>
        <div class="container d-flex justify-content-end">    
            ¡Bienvenido!
        </div>
    </div>
    <hr/>
    </div>
</div>





<!-- inicio alerta -->
<?php 
    if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Rellena todos los campos.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php 
    }
?>


<?php 
    if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Registrado!</strong> Se agregaron los datos.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php 
    }
?>   



<?php 
    if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Vuelve a intentar.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php 
    }
?>   

<?php 
    if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Cambiado!</strong> Los datos fueron actualizados.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php 
    }
?> 


<?php 
    if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Eliminado!</strong> Los datos fueron borrados.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php 
    }
?> 

<!-- fin alerta -->




<!-- TABLA -->

<div class="p-4">
    <table class="table table-striped">
        <thead>
            <tr class="card-header">
                <th scope="col">#</th>
                <th scope="col align-center">Título</th>
                <th scope="col">Categoria</th>
                <th scope="col">País</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Dirección</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Fecha de Inscripción</th>
                <th scope="col">Estado</th>
                <th scope="col" colspan="3">Opciones</th>
            </tr>
        </thead>
        <tbody> 
            
            <?php $nro_indice = 1; foreach($resultado as $campo){ ?>
                <tr>
                <td scope="row"><?php echo $nro_indice; ?></td><?php $nro_indice = $nro_indice + 1;?>
                    <td><?php echo $campo->title; ?></td>
                    <td><?php echo $campo->star; ?></td>
                    <td><?php echo $campo->ub_1; ?></td>
                    <td><?php echo $campo->ub_2; ?></td>
                    <td><?php echo $campo->ub_3; ?></td>
                    <td><?php echo $campo->telf; ?></td>
                    <td><?php echo $campo->date_ins; ?></td>
                    <td><?php echo $campo->estado; ?></td>
                    <td>
                        <div role="group" aria-label="Basic example">
                            <a href="editar.php?id=<?php echo $campo->id; ?>"><button class="btn-primary"><i class="bi bi-pencil-square"></i></button></a>
                            <a href="crud_promocion/intf_promo.php?id=<?php echo $campo->id; ?>"><button class="btn-primary" ><i class="bi bi-cart3"></i></button></a>
                            <a href="quitar_registro.php?id=<?php echo $campo->id; ?>"><button class="btn-primary" onclick="return confirm('Estas seguro de eliminar?');"  ><i class="bi bi-trash"></i></button></a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

<?php include 'footer.php'?>
