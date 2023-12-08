<div class="container">
    <div class="row">
        <div class="col-12 my-4">
            <h2 class="text-center">Historial de PNRs</h2>
        </div>

        <div class="col-5"></div>

        <div class="col-2">
            <a class="btn btn-danger" href="<?=base_url('/admin/crear_PNR') ?>" role="button">+ Generar PNR </a>
        </div>

        <div class="col-5"> </div>


        <div class="col-1"></div>

        <div class="col-10">
            <table class="table table-striped table-hover my-4">
                <thead>
                    <th class="text-center">Id Paquete</th>
                    <th class="text-center">Repartidor</th>
                    <th class="text-center">Tipo de PNR</th>
                    <th class="text-center">Descripcion</th>
                </thead>
                <tbody>

                    <?php foreach($comparativas as $comparativa):
                    foreach($pnrs as $pnr):
                        if($pnr->idComparativa == $comparativa->idComparativa):?>

                    <tr>
                        <td class="text-center"><?=$comparativa->idCodigo?></td>
                        <td class="text-center"><?=$pnr->nombre?> <?=$pnr->apellidos?></td>
                        <td class="text-center"><?=$pnr->tipo?></td>
                        <td class="text-center"><?=$pnr->descripcion?></td>
                    </tr>
                    <?php 
                    endif;
                    endforeach; 
                endforeach; 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>