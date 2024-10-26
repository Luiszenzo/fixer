<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h1>Calculadora</h1>
    <form id="cramer-form">
        <label>Primera ecuación:</label>
        <input type="number" id="a1" placeholder="a1" required> x +
        <input type="number" id="b1" placeholder="b1" required> y =
        <input type="number" id="c1" placeholder="c1" required>

        <label>Segunda ecuación:</label>
        <input type="number" id="a2" placeholder="a2" required> x +
        <input type="number" id="b2" placeholder="b2" required> y =
        <input type="number" id="c2" placeholder="c2" required>

        <button type="button" onclick="resolverSistema()">Resolver</button>
    </form>

    <div class="result" id="resultado">
        <!-- Aquí se mostrarán los resultados -->
    </div>
</div>

<!-- Vinculando el archivo externo de JavaScript -->
<script src="<?= base_url('JS/Calculadora.js') ?>"></script>

<?= $this->endSection() ?>
