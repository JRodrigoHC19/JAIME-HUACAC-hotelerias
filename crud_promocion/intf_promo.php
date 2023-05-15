<?php include '../header.php' ?>

<?php
include_once '../conectando/conexion.php';
$id_hotel = $_GET['id'];
$sentencia = $database->prepare("SELECT * FROM registerhotel WHERE id = ?;");
$sentencia->execute([$id_hotel]);
$hotel = $sentencia->fetch(PDO::FETCH_OBJ);
$sentencia_promocion = $database->prepare("SELECT * FROM promociones WHERE id_hotel = ?;");
$sentencia_promocion->execute([$id_hotel]);
$promocion = $sentencia_promocion->fetchAll(PDO::FETCH_OBJ); 
?>
<div class='container-fluid'>
    <div class="row align-item-start">
        <div class="col fs-1">Lista de Promociones</div>
        <hr/>
    </div>
</div>
<div class="row justify-content-center">
    <!-- seccion 1 -->
    <div class="col-2">
        <div class="card-header">
            <strong>Emisor :</strong> <?php echo $hotel->title ?>
        </div>
        <form method="POST" action="code_promo.php">
            <div>
                <label class="form-label">Celular: </label><br/>
                <input type="text" name="txtCel" autofocus required>
            </div>
            <div>
                <label class="form-label">Promocion: </label><br/>
                <input type="text" name="txtPromocion" autofocus required>
            </div>
            <div>
                <label class="form-label">Duración de la Promocion: </label><br/>
                <input type="text" name="txtDuracion" autofocus required>
            </div>
            <div>
            <input type="hidden" name="codigo" value="<?php echo $hotel->id; ?>"><P></P>
                <input type="submit" value="Registrar">
            </div>
        </form>
    </div>

    <!-- sección 2 -->
    <div class="col-9">
       <div class="card-header">
            Lista de Promociones
        </div>            
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Promocion</th>
                    <th>Duracion</th>
                    <th>Celular</th>
                    <th colspan="3">Enviar Mensaje</th>
                </tr>
            </thead>
            <tbody>              
                <?php
                $nro_indice = 1;         
                foreach ($promocion as $dato) {?>
                <tr>
                    <td><?php echo $nro_indice; ?></td><?php $nro_indice = $nro_indice + 1;?>
                    <td><?php echo $dato->promocion; ?></td>
                    <td><?php echo $dato->duracion; ?></td>
                    <td><?php echo $dato->celular; ?></td>
                    <td><a class="text-primary" href="../mensajes/code_enviar.php?codigo=<?php echo $dato->id_promo ?>"><i class="bi bi-cursor"></i></a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

</div>


    

</div>



<?php include '../footer.php' ?> 
