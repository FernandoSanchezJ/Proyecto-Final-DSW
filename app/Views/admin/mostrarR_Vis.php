<div class="container">
    <div class="row">
        <div class="col-12 my-4">
            <h2 class="text-center">Repartidores</h2>
        </div>

        <div class="col-2"></div>

<div class="col-8">
    <table class="table table-striped table-bordered table-hover my-4">
        <thead>
            <th>Nombre</th>
            <th>Genero</th>
            <th>Telefono</th>
            <th>Email</th>
        </thead>
        <tbody>
            
            <?php foreach($repartidores as $repartidor):?>
                
                <tr>
                    <td><?=$repartidor->nombre?> <?=$repartidor->apellidos?></td>
                    <td><?=$repartidor->genero?></td>
                    <td><?=$repartidor->telefono?></td>
                    <td><?=$repartidor->email?></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
    </div>
</div>
</div>