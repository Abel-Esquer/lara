<?php $this->extend("General"); ?>
<?php $this->section("contenido"); ?>


<div class="col-lg-12" style="padding: 50px">
    <div class="">
            <form action="<?php base_url(); ?>usuario/save" method="POST">
                <div class="form-group">
                    <label>Nombre </label>
                    <p class="form-control-static" name="nombre"></p>    
                </div>
                <div class="form-group">
                    <label>Descripcion </label>
                    <p class="form-control-static" name="descripcion"></p>
                </div> 
                <div class="form-group">
                    <label>Empresa</label>
                    <select class="form-control">
                        <option>Empresa 1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>IFE </label>
                    <p class="form-control-static" name="nombre"></p>
                </div>
                <div class="form-group">
                    <label>CURP </label>
                    <p class="form-control-static" name="curp"></p>
                </div>
                <div class="form-group">
                    <label>RFC </label>
                    <p class="form-control-static" name="rfc"></p>
                </div>
                <div class="form-group">
                    <label>NSS </label>
                    <p class="form-control-static" name="nss"></p>
                </div>
                <div class="form-group">
                    <label>Tipo de sangre </label>
                    <p class="form-control-static" name="tipo sangre"></p>
                </div>
                <div class="form-group">
                    <label>Numero de licencia</label>
                    <p class="form-control-static" name="no licencia"></p>
                </div>
                <div class="form-group">
                    <label>Tipo de licencia </label>
                    <p class="form-control-static" name="tipo licencia"></p>
                </div>
                <div class="form-group">
                    <label>RFC </label>
                    <p class="form-control-static" name="rfc"></p>
                </div>
                <div class="form-group">
                    <label>Vigencia de la licencia</label>
                    <input class="form-control" name="vigencia licencia" type="date">
                </div>
                <div class="form-group">
                    <label>Telefono </label>
                    <input class="form-control" name="telefono" placeholder="">
                </div>
                <div class="form-group">
                    <label>Foto </label>
                    <input class="" name="foto chofer" type="file">
                </div>
                <div class="form-group">
                    <label>Numero del INE </label>
                    <input class="form-control" name="no ine" placeholder="">
                </div>
                <div class="form-group">
                    <label>Expediente </label>
                    <input class="" name="expediente" placeholder="" type="file">
                </div>
                <div>
                    <button class="btn btn-success" type="submit">Guardar</button> <button
                        class="btn btn-danger">Cancelar</button>
                </div>
            </form>
    </div>
</div>
<?php $this->endSection(); ?>