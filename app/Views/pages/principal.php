<?= $this->extend('layouts/plantilla') ?>

<?= $this->section('titulo') ?>
Inicio
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="hero-section mb-5">
    <div class="hero-image"></div>
    <div class="hero-text text-center">
        <h1 class="display-4">Bienvenido a nuestro sitio</h1>
        <p class="lead">Descubre nuestros productos y servicios</p>
    </div>
</section>

<div id="miCarruselPrincipal" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#miCarruselPrincipal" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Imagen 1"></button>
        <button type="button" data-bs-target="#miCarruselPrincipal" data-bs-slide-to="1" aria-label="Imagen 2"></button>
        <button type="button" data-bs-target="#miCarruselPrincipal" data-bs-slide-to="2" aria-label="Imagen 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/img/panel2.jpg') ?>" class="d-block w-100" alt="Panel Calefon">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/img/panel.jpg') ?>" class="d-block w-100" alt="Panel Electrico">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/img/logo.png') ?>" class="d-block w-100" alt="Logo empresa">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#miCarruselPrincipal" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#miCarruselPrincipal" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

<div class="container mt-5">
    <div class="row">
        <article class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Nuestra Misión</h2>
                    <p class="card-text">Somos una empresa dedicada a ofrecer soluciones innovadoras con materiales de primera calidad.</p>
                </div>
            </div>
        </article>
        <article class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Nuestros Valores</h2>
                    <p class="card-text">Calidad, innovación y servicio al cliente son nuestros pilares fundamentales.</p>
                </div>
            </div>
        </article>
    </div>
</div>

<?= $this->endSection() ?>
