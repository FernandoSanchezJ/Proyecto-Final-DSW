<div class="container">
    <div class="row">
        <h2 class="text-center">Agregar Repartidor</h2>
        <div class="col-2"></div>

        <div class="col-8">
            <form action="<?= base_url('admin/insert'); ?>" method="POST">
                <?= csrf_field() ?>

                <div class="mb-3 my-4">
                    <label for="nombre" class="form-label">Nombre/s</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                </div>

                <div class="mb-2 my-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" required>
                </div>

                <div class="mb-2 my-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" class="form-control" name="edad" id="edad" required>
                </div>

                <div class="mb-2 my-3">
                    <label for="cumpleaños" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="cumpleaños" id="cumpleaños" required>
                </div>

                <div class="mb-2 my-3">
                    <label for="curp" class="form-label">CURP</label>
                    <input type="text" class="form-control" name="curp" id="curp" required maxlength="18">
                </div>

                <div class="mb-2 my-3">
                    <label for="genero">Sexo</label>
                    <select name="genero" id="genero" class="form-control" required>
                        <option value="Hombre" class="value">Hombre</option>
                        <option value="Mujer" class="value">Mujer</option>
                    </select>
                </div>

                <div class="mb-2 my-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" name="telefono" id="telefono" required>
                </div>

                <div class="mb-2 my-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <div class="mb-2 my-3">
                    <label for="licencia" class="form-label">Número de Licencia de Conducir</label>
                    <input type="text" class="form-control" name="licencia" id="licencia" required maxlength="10">
                </div>

                <div class="mb-3 my-4">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
