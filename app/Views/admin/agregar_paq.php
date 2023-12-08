<div class="container">
    <div class="row">
        <h2 class="text-center">Agregar Id</h2>
        <div class="col-2"></div>


        <div class="col-8">
    <form action="<?= base_url('admin/insertPaquetes'); ?>" method="POST" onsubmit="return validarFormulario()">
        <?= csrf_field() ?>

        <div class="mb-3 my-4">
            <label for="idML" class="form-label">ID Mercado Libre</label>
            <input type="text" class="form-control" name="idML" id="idML">
            <span id="errorIdML" style="color: red;"></span> <!-- Mensaje de error -->
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <div>
                <input type="submit" class="btn btn-success">
            </div>
        </div>
    </form>
</div>

<script>
    function validarFormulario() {
        var idMLInput = document.getElementById('idML');
        var idMLValue = idMLInput.value.trim();

        var errorIdML = document.getElementById('errorIdML');
        errorIdML.textContent = ''; // Limpiar el mensaje de error

        if (idMLValue === '') {
            errorIdML.textContent = 'Por favor, ingresa un ID de Mercado Libre válido.';
            idMLInput.focus();
            return false; // Evitar que se envíe el formulario si el campo está vacío
        }

        // Aquí puedes agregar más validaciones si es necesario

        return true; // Permitir el envío del formulario si pasa todas las validaciones
    }
</script>

        <div class="col-2"></div>
    </div>
</div>