<div class="container">
    <div class="row">
        <h2 class="text-center">Editar Id Paquete</h2> <!-- Título de la página -->
        <div class="col-2"></div>
        
        <div class="col-8">
            <form action="<?= base_url('admin/updateP'); ?>" method="POST"> <!-- Formulario para actualizar un paquete -->
                <?= csrf_field() ?> <!-- Campo de seguridad CSRF -->
                <input type="hidden" name="idPk" value="<?=$paquetes->idPk?>" /> <!-- Campo oculto para el ID del paquete -->

                <div class="mb-3 my-4">
                    <label for="idML" class="form-label">Id del Paquete</label> <!-- Campo para el ID del paquete -->
                    <input type="text" class="form-control" value="<?=$paquetes->idML?>"
                        name="idML" id="idML">
                </div>

                <div class="mb-3 my-4">
                    <input type="submit" class="btn btn-warning" value="Guardar"> <!-- Botón para enviar el formulario -->
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
