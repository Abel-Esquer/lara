<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crud </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php base_url() ?>/starmin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php base_url() ?>/starmin/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php base_url() ?>/starmin/css/timeline.css" rel="stylesheet">

    <!-- Template CSS -->
    <link href="<?php base_url() ?>/starmin/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php base_url() ?>/starmin/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php base_url() ?>/starmin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Estilos de proyecto -->
    <link href="<?php base_url() ?>/starmin/css/custom/style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/777822fdd5.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <header class="header navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="header__button">
                <div class="header__button-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php base_url(); ?>/tabla"> <i class="active" > <i class="fa fa-table fa-fw"></i> Usuarios </a></i> 
                      </li>
                        <li>
                            <a href="<?php base_url(); ?>/form"><i class="fa fa-user fa-fw"></i> Nuevo usuario </a>
                        </li>
                        <li>
                            <a href="<?php base_url(); ?>/perfil"><i class="fa fa-shop fa-fw"></i> Nueva Empresa </a>
                        </li>
                    </ul>

                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <?php $this->renderSection("contenido") ?>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php base_url() ?>/starmin/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php base_url() ?>/starmin/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php base_url() ?>/starmin/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php base_url() ?>/starmin/js/startmin.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    $(document).ready(function() {
        function eliminar() {

            Swal.fire({
                title: 'Estas seguro?',
                text: "Se borrara completamente",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                }
            })

        }
        $(".btn-eliminar").click(function() {
            eliminar();
        });
    });
    </script>

</body>

</html>