<?php $this->extend("General"); ?>
<?php $this->section("contenido"); ?>


<div class="col-lg-12" style="padding: 50px">
    <div class="panel panel-default">
        <div class="panel-heading">
            Tabla de usuarios
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>CURP</th>
                            <th>RFC</th>
                            <th>Telefono</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($usuarios as $key => $usuario){?> 
                        <tr>
                            <td><?= $usuario['nombre_completo']?></td>
                            <td><?= $usuario['curp']?></td>
                            <td><?= $usuario['rfc']?></td>
                            <td><?= $usuario['telefono']?></td>
                            <td><a class="btn btn-primary">Ver foto</a></td>    
                            <td><a href="<?php base_url()?>/usuario/<?= $usuario['id']?>" class="btn btn-primary btn-circle"><i class="fa fa-eye fa-fw"></i></a> 
                                <a class="btn btn-primary btn-circle"><i class="fa fa-pencil fa-fw"></i></a> 
                                <a class="btn btn-danger btn-circle"><i class="fa fa-trash fa-fw"></i></a></td>
                        </tr
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
        <!-- /.panel -->
</div>

<?php $this->endSection(); ?>