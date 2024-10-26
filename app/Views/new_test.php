<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h1>Subir PDF</h1>
    <form id="pdf-upload-form" action="<?= site_url('/upload') ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
        </div>

        <div class="mb-3">
            <label for="tema" class="form-label">Tema</label>
            <input type="text" class="form-control" id="tema" name="tema" required>
        </div>

        <div class="mb-3">
            <label for="id_profesor" class="form-label">ID del Profesor</label>
            <input type="number" class="form-control" id="id_profesor" name="id_profesor" required>
        </div>

        <div class="mb-3">
            <label for="ejercicios" class="form-label">Selecciona un archivo PDF</label>
            <input type="file" class="form-control" id="ejercicios" name="ejercicios" accept=".pdf" required>
        </div>

        <button type="submit" class="btn btn-primary">Generar examen</button>
    </form>

    <div class="result mt-3" id="resultado"></div>
</div>

<!-- Cargar CSS de toastr -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!-- Cargar JS de toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    var uploadUrl = "<?= site_url('test/upload') ?>"; // Definir la URL del controlador
</script>
<script src="../test.js"></script>

<?= $this->endSection() ?>
