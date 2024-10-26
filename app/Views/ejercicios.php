<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery (necesario para Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <h1>Lista de Ejercicios</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Tema</th>
                <th>Profesor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($ejercicios) && is_array($ejercicios)) : ?>
                <?php foreach ($ejercicios as $ejercicio) : ?>
                    <tr>
                        <td><?= esc($ejercicio['id_ejercicio']) ?></td>
                        <td><?= esc($ejercicio['descripcion']) ?></td>
                        <td><?= esc($ejercicio['tema']) ?></td>
                        <td><?= esc($ejercicio['id_profesor']) ?></td>
                        <td>
                            <button class="btn btn-info btn-sm" onclick="verPDF(<?= $ejercicio['id_ejercicio'] ?>)">Ver PDF</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5" class="text-center">No hay ejercicios registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Modal para visualizar PDF -->
    <div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pdfModalLabel">Visualización del PDF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe id="pdfFrame" src="" width="100%" height="500px"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function verPDF(idEjercicio) {
    // Hacer una solicitud AJAX para obtener la URL del PDF
    $.ajax({
        url: "<?= site_url('ejercicios/verpdf') ?>/" + idEjercicio,
        method: "GET",
        dataType: "json",
        success: function(response) {
            if (response.success) {
                // Cargar el PDF en el iframe dentro del modal
                $('#pdfFrame').attr('src', response.pdfUrl);
                // Mostrar el modal
                $('#pdfModal').modal('show');
            } else {
                alert(response.message);
            }
        },
        error: function() {
            alert('Error al obtener el PDF.');
        }
    });
}
</script>
<?= $this->endSection() ?>
