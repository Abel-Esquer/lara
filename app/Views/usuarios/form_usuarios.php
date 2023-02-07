<?php $this->extend("General"); ?>
<?php $this->section("contenido"); ?>


<div class="col-lg-12" style="padding: 50px">
    <div class="">
    <form action="<?php base_url(); ?>usuario/validationRules" method="POST">
            <form action="<?php base_url(); ?>usuario/save" method="POST">
                <div class="form-group">
                    <label>Nombre </label>
                    <input class="form-control" name="nombre" placeholder="Su nombre completo">
                </div>
                <div class="form-group">
                    <label>Descripcion </label>
                    <input class="form-control" name="descripcion" placeholder="Una descripcion">
                </div> 
                <div class="form-group">
                    <label>Empresa</label>
                    <select class="form-control">
                        <option>Empresa 1</option>
                        <option>Empresa 2</option>
                        <option>Empresa 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>IFE </label>
                    <input class="form-control" name="ife" placeholder="Su nombre completo">
                </div>
                <div class="form-group">
                    <label>CURP </label>
                    <input class="form-control" name="curp" placeholder="">
                </div>
                <div>
                    <button class="btn btn-success" type="submit">Guardar</button> <button
                        class="btn btn-danger">Cancelar</button>
                </div>
            </form>
    </form>

    </div>
</div>
<?php $this->endSection(); ?>