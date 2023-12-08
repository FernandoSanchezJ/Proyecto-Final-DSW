<div class="container">
    <div class="row">
        <div class="col-12 my-4">
            <h2 class="text-center">Salidas de Repartidores</h2>
        </div>

        <div class="col-5"></div>

        <div class="col-2">
            <a class="btn btn-warning" href="<?=base_url('/admin/salidas') ?>" role="button">+ Asignar Salidas</a>
        </div>
        <div class="col-5"></div>

        <div class="col-4"></div>

        <div class="col-4">

            <table class="table table-striped table-bordered table-hover my-4">
                <thead>
                    <th>Repartidor</th>
                    <th>Ruta</th>
                </thead>
                <tbody>
                    
                    <?php foreach($rutas as $ruta):?>
                        
                        <tr>
                            <td><?=$ruta->Repartidor?></td>
                            <td><?=$ruta->Ruta?></td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
    </div>
</div>
</div>