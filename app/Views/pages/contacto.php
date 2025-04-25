<?= $this->extend('layouts/plantilla') ?>

<?= $this->section('titulo') ?>
    Contacto - SolarCtes <?php // Título específico de la página ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="mb-4">Contacto</h1>
    <hr>
    <p class="lead mb-4">
        Utiliza la siguiente información o el formulario para ponerte en contacto con nosotros.
    </p>

    <div class="row g-4"> <?php // Row con espacio (gutter) ?>

        <?php // Columna de Información ?>
        <div class="col-md-6">
            <h2>Información de Contacto</h2>
            <p><strong>Email:</strong> <a href="mailto:tuemail@dominio.com">tuemail@dominio.com</a></p> 
            <p><strong>Teléfono:</strong> +54 379 XXXXXXX</p>
            <p><strong>Dirección:</strong> Tu Dirección, Corrientes, Argentina</p>
            <p><strong>Horario:</strong> Lunes a Viernes, 8:00 - 17:00 hs</p>
            <?php // Aquí podrías añadir un mapa embebido si quieres ?>
        </div>

        <?php // Columna del Formulario ?>
        <div class="col-md-6">
            <h2>Formulario de Contacto</h2>
            <p>Envíanos tu consulta directamente:</p>

            <?php // --- INICIO FORMULARIO (SOLO HTML BÁSICO) --- ?>
            <?php // Recuerda: Necesita ruta POST y controlador para funcionar ?>
            <form action="<?= site_url('ruta/para/enviar/contacto') // Define esta ruta en Routes.php ?>" method="post">
                <?= csrf_field() ?> <?php // Protección CSRF ?>

                <div class="mb-3">
                    <label for="formNombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="formNombre" name="nombre" required>
                </div>

                <div class="mb-3">
                    <label for="formEmail" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="formEmail" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="formMensaje" class="form-label">Mensaje:</label>
                    <textarea class="form-control" id="formMensaje" name="mensaje" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <?php // --- FIN FORMULARIO --- ?>
        </div>

    </div> <?php // Fin del row ?>

<?= $this->endSection() // Fin de la sección 'content' ?>