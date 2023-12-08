<div class="container">
    <div class="row">
        <div class="col-12 my-4">
            <h2 class="text-center">Paquetes</h2>
        </div>

        <div class="col-5"></div>

        <div class="col-2">
            <a class="btn btn-warning" href="<?=base_url('/admin/agregar_paq') ?>" role="button">+ Agregar ID Mercado
            </a>
        </div>

        <div class="col-5"> </div>

        <div class="col-2"></div>

        <div class="col-4">
            <table class="table table-striped table-hover my-4">
                <thead>
                    <th class="text-center">Lista de ID(s) Del Día</th>

                </thead>
                <tbody>

                    <?php foreach($comparativas as $comparativa):?>

                    <tr>
                        <td class="text-center"><?=$comparativa->idCodigo?></td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>

        <div class="col-4">
            <table class="table table-striped table-hover my-4">
                <thead>
                    <th class="text-center">Id(s) Registrados de la Paqueteria</th>

                </thead>
                <tbody>

                    <?php foreach($paquetes as $paquete):?>

                    <tr>
                        <td class="text-center"><?=$paquete->idML?></td>
                        <td class="text-end">
                            <a href="<?=base_url('admin/deleteP/'.$paquete->idPk);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/admin/editarP/'.$paquete->idPk);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
    </div>
</div>
</div>


