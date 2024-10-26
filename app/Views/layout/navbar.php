<!-- app/Views/layout/navbar.php -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('new_test'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Fixer</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('new_test'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Navegación
    </div>

    <!-- Nav Item - Productos -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('productos'); ?>">
            <i class="fas fa-fw fa-box"></i>
            <span>Calculadora</span></a>
    </li>

    <!-- Nav Item - Usuarios -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('usuarios'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Usuarios</span></a>
    </li>

    <!-- Nav Item - Crear Examen -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('new_test'); ?>">
            <i class="fas fa-fw fa-pen"></i>
            <span>Crear examen</span></a>
    </li>

    <!-- Nav Item - Sobre Nosotros -->
    <li class="nav-item">
    <a class="nav-link" href="<?= base_url('ejercicios'); ?>">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>Ejercicios</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
</ul>
