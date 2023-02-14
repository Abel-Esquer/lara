<?php $this->extend("General"); ?>
<?php $this->section("contenido"); ?>


<div class="col-lg-12" style="padding: 50px">
    <div class="">
            <form action="<?php base_url();?>/empresa" method="POST">
                <div class="form-group">
                    <label>Nombre de la empresa</label>
                    <input class="form-control" name="nombre" placeholder="">
                <div>
                    <button class="btn btn-success" type="submit">Guardar</button> <button
                        class="btn btn-danger">Cancelar</button>
                </div>
            </form>
    </div>
</div>
<?php $this->endSection(); ?>