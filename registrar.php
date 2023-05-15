<?php include 'header.php'?>
<br/>
<div class='container-fluid'>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="code_registrar.php">
                    <div class="mb-3">
                        <label class="form-label">Título: </label>
                        <input type="text" class="form-control" name="txtTITULO" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria: </label>
                        <input type="text" class="form-control" name="txtSTART" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">País: </label>
                        <input type="text" class="form-control" name="txtPAIS" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ciudad: </label>
                        <input type="text" class="form-control" name="txtCIUDAD" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dirección: </label>
                        <input type="text" class="form-control" name="txtDIRECCION" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de Inscripción: </label>
                        <input type="date" class="form-control" name="txtDATE" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Celular: </label>
                        <input type="number" class="form-control" name="txtTELF" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Estado: </label>
                        <input type="text" class="form-control" name="txtSTATE" autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id">
                        <input type="submit" class="btn btn-primary" value="registrado">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

