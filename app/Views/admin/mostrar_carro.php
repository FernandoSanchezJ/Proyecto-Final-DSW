<div class="container">
    <div class="row">
        <div class="col-12 my-4">
            <h2 class="text-center">Carros</h2>

            <table class="table table-striped table-bordered table-hover my-4">
                <thead>
                    <th>Reparidor</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Matricula</th>
                    <th>Año</th>
                </thead>
                <tbody>

                    <?php foreach($carros as $carro):?>
                        <?php foreach($repartidores as $repartidor){
                                        if($repartidor->idCarro == $carro->idCarro){;
                                            break;
                                        }
                                    }
                                ?>
                    <tr>
                        <td><?=$repartidor->nombre?></td>
                        <td><?=$carro->marca?></td>
                        <td><?=$carro->marca?></td>
                        <td><?=$carro->modelo?></td>
                        <td><?=$carro->color?></td>
                        <td><?=$carro->matricula?></td>
                        <td><?=$carro->año?></td>
                        <td>
                            <a href="<?=base_url('index.php/admin/editarCarro/'.$carro->idCarro);?>">Editar</a>
                            <a href="<?=base_url('index.php/admin/deleteC/'.$carro->idCarro);?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>