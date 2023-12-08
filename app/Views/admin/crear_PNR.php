<div class="container">
    <div class="row">
        <h2 class="text-center">Agregar Repartidor</h2>
        <div class="col-4"></div>

        <div class="col-4">
            <form action="<?= base_url('admin/insertPNR'); ?>" method="POST">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="repartidor">Responsable de Entrega</label>
                    <select name="repartidor" class="form-control text-center">
                        <?php foreach($repartidores as $repartidor):?>
                        <option value="<?=$repartidor->idRepartidor?>"><?=$repartidor->nombre?> <?=$repartidor->apellidos?></option>
                        <?php endforeach?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="comparativa">Id Paquete</label>
                    <select name="idCodigo" class="form-control text-center">
                        <?php foreach($comparativas as $comparativa):?>
                        <option value="<?=$comparativa->idComparativa?>"><?=$comparativa->idCodigo?></option>
                        <?php endforeach?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tipoPNR">Tipo</label>
                    <select name="tipoPNR" class="form-control text-center">
                        <?php foreach($tipos as $tipo):?>
                        <option value="<?=$tipo->idT?>"><?=$tipo->tipo?></option>
                        <?php endforeach?>
                    </select>
                </div>

                <div class="mb-3 my-4"><label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                </div>

                <div class="mb-3 my-4">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
