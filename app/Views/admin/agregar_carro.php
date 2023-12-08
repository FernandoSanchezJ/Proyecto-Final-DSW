<!-- formulario de Carro-->
<div class="container">
    <div class="row">
        <div class="col-4"></div>

        <div class="col-4 my-5">
            <form action="<?= base_url('admin/insertCarro'); ?>" method="POST">
                <?= csrf_field() ?>

                <h2 class="text-center">Agregar Informacion del Carro</h2>

                <div class="mb-3 my-2"><label for="marca" class="form-label">Marca</label>
                    <input type="text" class="form-control" name="marca" id="marca">
                </div>

                <div class="mb-2 my-3"><label for="modelo" class="form-label">Modelo</label>
                    <input type="text" class="form-control" name="modelo" id="modelo">
                </div>

                <div class="mb-2 my-3"><label for="color" class="form-label">Color</label>
                    <input type="text" class="form-control" name="color" id="color">
                </div>

                <div class="mb-2 my-3"><label for="matricula" class="form-label">Matricula</label>
                    <input type="text" class="form-control" name="matricula" id="matricula">
                </div>

                <div class="mb-2 my-3"><label for="año" class="form-label">Año</label>
                    <input type="text" class="form-control" name="año" id="año">
                </div>

                <div class="mb-2 my-3 ">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

        </div>