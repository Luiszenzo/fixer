<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <!-- Vincular CSS de SB Admin 2 -->
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        main {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?= $this->include('layout/navbar'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <ul class="navbar-nav ml-auto">
                    <!-- Enlaces de navegación -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('new_test'); ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('productos'); ?>">Calculadora</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('usuarios'); ?>">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('new_test'); ?>">Crear examen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('ejercicios'); ?>">Ejercicios</a>
                    </li>
                </ul>
            </nav>

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?= $this->renderSection('content'); ?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Vincular JS de SB Admin 2 -->
<script src="<?= base_url('vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script src="<?= base_url('js/sb-admin-2.min.js'); ?>"></script>


</body>
</html>
