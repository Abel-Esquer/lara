<?php $this->extend("General"); ?>
<?php $this->section("contenido"); ?>


<div class="col-lg-12" style="padding: 50px">
    <div class="">
            <form action="<?php base_url(); ?>/usuario">

                <div class="form-group">
                    <label>Nombre </label>
                    <p class="form-control-static" name="nombre" type=""><?=$usuario['nombre_completo']?></p>    
                </div>
                <div class="form-group">
                    <label>Descripcion </label>
                    <p class="form-control-static" name="descripcion"><?=$usuario['descripcion']?></p>
                </div> 
                <div class="form-group">
                    <label>Empresa</label>
                    <p class="form-control-static" name="empresa"><?=$usuario['empresa']?></p>
                </div>
                <div class="form-group">
                    <label>INE </label>
                    <p class="form-control-static" name="ine"><?=$usuario['ine']?></p>
                </div>
                <div class="form-group">
                    <label>CURP </label>
                    <p class="form-control-static" name="curp"><?=$usuario['curp']?></p>
                </div>
                <div class="form-group">
                    <label>RFC </label>
                    <p class="form-control-static" name="rfc"><?=$usuario['rfc']?></p>
                </div>
                <div class="form-group">
                    <label>NSS </label>
                    <p class="form-control-static" name="nss"><?=$usuario['nss']?></p>
                </div>
                <div class="form-group">
                    <label>Tipo de sangre </label>
                    <p class="form-control-static" name="tipo sangre"><?=$usuario['tipo sangre']?></p>
                </div>
                <div class="form-group">
                    <label>Numero de licencia</label>
                    <p class="form-control-static" name="no licencia"><?=$usuario['no licencia']?></p>
                </div>
                <div class="form-group">
                    <label>Tipo de licencia </label>
                    <p class="form-control-static" name="tipo licencia"><?=$usuario['tipo licencia']?></p>
                </div>
                <div class="form-group">
                    <label>Vigencia de la licencia</label>
                    <p class="form-control-static" name="vigencia licencia"><?=$usuario['vigencia licencia']?></p>
                </div>
                <div class="form-group">
                    <label>Telefono </label>
                    <p class="form-control-static" name="telefono"><?=$usuario['telefono']?></p>
                </div>
                <div class="form-group">
                    <label>Foto </label>
                    
                </div>
                <div class="form-group">
                    <label>Numero del INE </label>
                    <p class="form-control-static" name="no ine"><?=$usuario['no ine']?></p>
                </div>
                <div class="form-group">
                    <label>Expediente </label>
                    <p class="form-control-static" name="expediente"><?=$usuario['expediente']?></p>
                </div>
                <div>
                    <button class="btn btn-danger">Regresar</button>
                </div>
            </form>
    </div>
</div>
<?php $this->endSection(); ?>