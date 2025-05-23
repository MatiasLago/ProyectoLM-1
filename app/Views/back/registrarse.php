<?= $this->extend('layouts/plantilla') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Crear Cuenta</h4>
                </div>
                <?php $validation = \Config\Services::validation(); ?>
                 <form method="post" action="<?php echo base_url('/enviar-form') ?>">
                <div class="card-body">
                    <form action="<?= base_url('registro/guardar') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre completo</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" name="password" class="form-control" required minlength="6">
                        </div>

                        <div class="mb-3">
                            <label for="confirmar_password" class="form-label">Confirmar contraseña</label>
                            <input type="password" name="confirmar_password" class="form-control" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    ¿Ya tienes cuenta? <a href="<?= base_url('login') ?>">Inicia sesión</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?= $this->endSection() ?>