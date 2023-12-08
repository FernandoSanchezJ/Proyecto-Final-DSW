<div class="container">
    <div class="row">
        <div class="col-12 my-4">
            <h2 class="text-center">Salidas Del Dia</h2>
        </div>
        <div class="col-2"></div>

        <div class="col-8">
            <form action="<?= base_url('admin/insertSalida'); ?>" method="POST">
                <table class="table table-striped table-bordered table-hover my-4 text-center">
                    <thead>
                        <th class="col-2">Ruta</th>
                        <th class="col-2">No Paquetes</th>
                        <th class="col-4">Repartidor</th>
                    </thead>
                    <tbody>
                        <?php foreach($salidas as $salida): ?>
                        <tr>
                            <td>
                                <select name="ruta[]" class="form-control ruta-selector" required>
                                    <option value="" class="value">Seleccione Ruta</option>
                                    <option value="Teziutlan" class="value">Teziutlan</option>
                                    <option value="Zaragoza" class="value">Zaragoza</option>
                                    <option value="Altotonga" class="value">Altotonga</option>
                                    <option value="Cuyoaco" class="value">Cuyoaco</option>
                                    <option value="Aire Libre" class="value">Aire Libre</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control noPaquetes" name="noPaquetes[]" readonly required>
                            </td>
                            <td>
                                <input type="text" class="form-control"
                                    value="<?=$salida->nombre?> <?= $salida->apellidos ?>" name="nombre[]" readonly required>
                            </td>
                        </tr>
                        <?php endforeach ?>
                        <input type="submit" class="btn btn-success" value="Asignar">
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('.ruta-selector').change(function() {
            var rutaSeleccionada = $(this).val();
            var cantidadPaquetesPorRuta = {
                'Teziutlan': 10,
                'Zaragoza': 18,
                'Altotonga': 6,
                'Cuyoaco': 12,
                'Aire Libre': 4
            };

            var cantidadPaquetes = cantidadPaquetesPorRuta[rutaSeleccionada];
            $(this).closest('tr').find('.noPaquetes').val(cantidadPaquetes);
        });
    });
</script>
