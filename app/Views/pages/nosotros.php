<?= $this->extend('layouts/plantilla') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <h1 class="mb-4">Sobre Nosotros</h1>
    <hr>

    <p class="lead mb-4">
        Conoce más sobre nuestra historia, misión y el equipo detrás de SolarCtes.
    </p>

    <div class="row g-4">

        <div class="col-md-7">
            <h2>Nuestra Historia</h2>
            <p>
                Aquí puedes escribir un par de párrafos sobre cómo comenzó la empresa, 
                sus motivaciones, hitos importantes, etc. Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                aliquip ex ea commodo consequat.
            </p>

            <h2 class="mt-4">Misión y Visión</h2>
            <p>
                <strong>Misión:</strong> [Describe aquí tu misión de forma concisa].
            </p>
            <p>
                <strong>Visión:</strong> [Describe aquí tu visión a futuro].
            </p>
        </div>

        <div class="col-md-5">
            <div class="card mb-3">
                <img src="<?= base_url('assets/img/imagen_nosotros.jpg') ?>" class="card-img-top" alt="Imagen representativa">
                <div class="card-body">
                    <h5 class="card-title">Compromiso</h5>
                    <p class="card-text">Estamos comprometidos con la calidad y la sostenibilidad.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nuestro Equipo</h5>
                    <p class="card-text">Contamos con profesionales apasionados por las energías renovables. [Puedes añadir más detalles o enlace a una sección de equipo].</p>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>
