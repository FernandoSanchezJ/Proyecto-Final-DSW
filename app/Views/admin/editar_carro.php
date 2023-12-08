<div class="container">
    <div class="row">
        <h2 class="text-center">Editar Repartidor</h2>
        <div class="col-2"></div>

        <div class="col-8">
            <form action="<?= base_url('admin/updateC'); ?>" method="POST" onsubmit="return validarFormulario()">
                <?= csrf_field() ?>
                <input type="hidden" name="idCarro" value="<?= $carros->idCarro ?>" />

                <div class="mb-3 my-2">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" class="form-control" value="<?= $carros->marca ?>" name="marca" id="marca">
                    <span id="errorMarca" style="color: red;"></span> <!-- Mensaje de error -->
                </div>

                <!-- Repite el mismo esquema para los otros campos -->

                <div class="mb-3 my-4">
                    <input type="submit" class="btn btn-warning" value="Guardar">
                </div>
            </form>
        </div>

        <div class="col-2"></div>
    </div>
</div>

<script>
    function validarFormulario() {
        var marcaInput = document.getElementById('marca');
        var marcaValue = marcaInput.value.trim();
        var errorMarca = document.getElementById('errorMarca');
        errorMarca.textContent = '';

        if (marcaValue === '') {
            errorMarca.textContent = 'Por favor, ingresa la marca del carro.';
            marcaInput.focus();
            return false;
        }

        // Repite el mismo esquema para validar otros campos si es necesario

        return true;
    }
</script>
