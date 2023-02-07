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
                        <tr>
                            <td>Jonh Doe</td>
                            <td>DJ6548AD14KL</td>
                            <td>JD74554</td>
                            <td>6221458525</td>
                            <td><a class="btn btn-primary">Ver foto</a></td>    
                            <td><a class="btn btn-primary btn-circle"><i class="fa fa-eye fa-fw"></i></a> 
                                <a class="btn btn-primary btn-circle"><i class="fa fa-pencil fa-fw"></i></a> 
                                <a class="btn btn-danger btn-circle"><i class="fa fa-trash fa-fw"></i></a></td>
                        </tr>
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