<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h1>Lista de Usuarios</h1>
    <a href="<?= site_url('usuarios/crear') ?>" class="btn btn-primary mb-3">Agregar Nuevo Usuario</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($usuarios) && is_array($usuarios)) : ?>
                <?php foreach ($usuarios as $usuario) : ?>
                    <tr>
                        <td><?= esc($usuario['id_usuario']) ?></td>
                        <td><?= esc($usuario['nombre']) ?></td>
                        <td><?= esc($usuario['email']) ?></td>
                        <td><?= esc($usuario['rol']) ?></td>
                        <td>
                            <a href="<?= site_url('usuarios/editar/' . $usuario['id_usuario']) ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="<?= site_url('usuarios/eliminar/' . $usuario['id_usuario']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5" class="text-center">No hay usuarios registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
