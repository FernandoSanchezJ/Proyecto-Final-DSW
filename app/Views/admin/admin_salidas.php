<div class="mb-3">
        <label for="ruta">Ruta</label>
            <select name="idR" class="form-control">
                <?php foreach($rutas as $ruta):?>
                    <option value="<?=$ruta->idR?>"><?=$ruta->ruta?></option>
                <?php endforeach?>
            </select>
        </div>  