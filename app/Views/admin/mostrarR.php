<div class="container">
    <div class="row">
        <div class="col-12 my-4">
            <h2 class="text-center">Repartidores</h2> <!-- Título de la página -->
        </div>

        <div class="col-5"></div>

        <div class="col-2">
            <a class="btn btn-warning" href="<?=base_url('/admin/agregar') ?>" role="button">+ Agregar Repartidor</a> <!-- Botón para agregar un repartidor -->
        </div>

        <table class="table table-striped table-bordered table-hover my-4"> <!-- Tabla para mostrar los repartidores -->
            <thead>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Fecha de Nacimiento</th>
                <th>Genero</th>
                <th>CURP</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Licencia</th>
                <th>Eliminar/Editar</th>
            </thead>
            <tbody>

                <?php foreach($repartidores as $repartidor):?> <!-- Bucle para mostrar cada repartidor -->

                <tr>
                    <td><?=$repartidor->nombre?> <?=$repartidor->apellidos?></td>
                    <td><?=$repartidor->edad?></td>
                    <td><?=$repartidor->cumpleaños?></td>
                    <td><?=$repartidor->genero?></td>
                    <td><?=$repartidor->curp?></td>
                    <td><?=$repartidor->telefono?></td>
                    <td><?=$repartidor->email?></td>
                    <td><?=$repartidor->licencia?></td>
                    <td>
                        <a href="<?=base_url('index.php/admin/delete/'.$repartidor->idRepartidor);?>">Eliminar</a> <!-- Enlace para eliminar un repartidor -->
                        <a href="<?=base_url('index.php/admin/editar/'.$repartidor->idRepartidor);?>">Editar</a> <!-- Enlace para editar un repartidor -->
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</div>
</div>
