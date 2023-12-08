<div class="container">
    <div class="row">
        <h2 class="text-center">Editar Repartidor</h2> <!-- Título de la página -->
        <div class="col-2"></div>
        
        <div class="col-8">
            <form action="<?= base_url('admin/update'); ?>" method="POST"><!-- Formulario para actualizar un repartidor -->
                <?= csrf_field() ?> <!-- Campo de seguridad CSRF -->
                <input type="hidden" name="idRepartidor" value="<?=$repartidores->idRepartidor?>" /><!-- Campo oculto para el ID del repartidor -->

                <div class="mb-3 my-4">
                    <label for="nombre" class="form-label">Nombre/s</label><!-- Campo para editar el nombre -->
                    <input type="text" class="form-control" value="<?=$repartidores->nombre?>"
                        name="nombre" id="nombre" required>
                </div>

                <div class="mb-2 my-3">
                    <label for="apellidos" class="form-label">Apellidos</label><!-- Campo para editar el apellidos -->
                    <input type="text" class="form-control" value="<?=$repartidores->apellidos?>"
                        name="apellidos" id="apellidos" required>
                </div>

                <div class="mb-2 my-3">
                    <label for="edad" class="form-label">Edad</label><!-- Campo para editar el edad -->
                    <input type="number" class="form-control" value="<?=$repartidores->edad?>"
                        name="edad" id="edad" required>
                </div>

                <div class="mb-2 my-3">
                    <label for="cumpleaños" class="form-label">Fecha de Nacimiento</label><!-- Campo para editar el fecha de nacimiento -->
                    <input type="date" class="form-control" value="<?=$repartidores->cumpleaños?>"
                        name="cumpleaños" id="cumpleaños" required>
                </div>

                <div class="mb-2 my-3">
                    <label for="curp" class="form-label">CURP</label><!-- Campo para editar el curp -->
                    <input type="text" class="form-control" value="<?=$repartidores->curp?>"
                        name="curp" id="curp" maxlength="18" required>
                </div>

                <div class="mb-2 my-3">
                    <label for="genero">Sexo</label><!-- Campo para editar el sexo -->
                    <select name="genero" id="genero" class="form-control" required>
                        <option value="Hombre" class="value">Hombre</option>
                        <option value="Mujer" class="value">Mujer</option>
                    </select>
                </div>

                <div class="mb-2 my-3">
                    <label for="telefono" class="form-label">Telefono</label><!-- Campo para editar el telefono -->
                    <input type="tel" class="form-control" value="<?=$repartidores->telefono?>"
                        name="telefono" id="telefono" pattern="[0-9]{10}" title="Por favor, introduce un número de teléfono válido" required>
                </div>

                <div class="mb-2 my-3">
                    <label for="email" class="form-label">Email</label><!-- Campo para editar el email -->
                    <input type="email" class="form-control" value="<?=$repartidores->email?>"
                        name="email" id="email" required>
                </div>

                <div class="mb-2 my-3">
                    <label for="licencia" class="form-label">Numero de Licencia de Conducir</label><!-- Campo para editar el licencia -->
                    <input type="text" class="form-control" value="<?=$repartidores->licencia?>"
                        name="licencia" id="licencia" maxlength="10" required>
                </div>

                <div class="mb-3 my-4">
                    <input type="submit" class="btn btn-warning" value="Guardar"> <!-- Boton para guardar los cambios -->
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>


<div class="container">
    <div class="row">
        <h2 class="text-center">Editar Repartidor</h2> <!-- Título de la página -->
        <div class="col-2"></div>
        
        <div class="col-8">
            <form action="<?= base_url('admin/update'); ?>" method="POST"> <!-- Formulario para actualizar un repartidor -->
                <?= csrf_field() ?> <!-- Campo de seguridad CSRF -->
                <input type="hidden" name="idRepartidor" value="<?=$repartidores->idRepartidor?>" /> <!-- Campo oculto para el ID del repartidor -->

                <div class="mb-3 my-4">
                    <label for="nombre" class="form-label">Nombre/s</label> <!-- Campo para el nombre del repartidor -->
                    <input type="text" class="form-control" value="<?=$repartidores->nombre?>"
                        name="nombre" id="nombre" required>
                </div>

                <!-- Los siguientes campos son similares al campo de nombre, pero para diferentes datos del repartidor -->
                <!-- Apellidos, edad, fecha de nacimiento, CURP, género, teléfono, email, número de licencia -->

                <div class="mb-3 my-4">
                    <input type="submit" class="btn btn-warning" value="Guardar"> <!-- Botón para enviar el formulario -->
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
