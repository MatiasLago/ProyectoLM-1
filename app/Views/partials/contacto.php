<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Contacto</title>
    <!-- Llamada al CSS externo -->
    <link rel="stylesheet" href="<?= base_url('assets/css/miestilo.css') ?>">
</head>
<body>
    <header> 
        <h1>Contacto</h1>
    </header>

    <section id="formulario-contacto">
        <h2>Envíanos tu consulta</h2>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="success-message">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="error-message">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <p><?= $error ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="/contacto/enviarMensaje" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?= old('nombre') ?>" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" value="<?= old('email') ?>" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required><?= old('mensaje') ?></textarea>

            <button type="submit">Enviar Mensaje</button>
        </form>
    </section>
</body>
</html>
