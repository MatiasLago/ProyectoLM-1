
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center w-100">
            <!-- Logo -->
            <a class="navbar-brand me-auto" href="<?= base_url() ?>" style="flex: 0 0 auto;">
                <img src="<?= base_url('assets/img/logo2.png') ?>" alt="Logo" style="height: 100px;">
            </a>
            
            <!-- Botones -->
           <div class="mx-auto">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link active fs-4 fw-semibold" href="<?= base_url() ?>">Inicio</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link fs-4 fw-semibold" href="<?= base_url('nosotros') ?>">Nosotros</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link fs-4 fw-semibold" href="<?= base_url('contacto') ?>">Contacto</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link fs-4 fw-semibold" href="<?= base_url('comercializacion') ?>">Comercialización</a>
                    </li>
                </ul>
            </div>
            
            <div style="flex: 0 0 auto; width: calc(40px + 1rem);"></div>
        </div>
    </div>
</nav>
