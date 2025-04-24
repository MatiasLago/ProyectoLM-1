<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center w-100">
            <!-- Logo - Ocupa espacio proporcional -->
            <a class="navbar-brand me-auto" href="C:\xampp\htdocs\ProyectoLM\public\assets\img" style="flex: 0 0 auto;">
                <img src="<?= base_url('assets/img/logo2.png') ?>" alt="Logo" style="height: 100px;">
            </a>
            
            <!-- Botones centrados -->
            <div class="mx-auto">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link active fs-4 fw-semibold" href="<?php echo base_url('inicio');?>">Inicio</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link fs-4 fw-semibold" href="<?php echo base_url('nosotros');?>">Nosotros</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link fs-4 fw-semibold" href="<?php echo base_url('contacto');?>">Contacto</a>
                    </li>
                </ul>
            </div>
            
            <!-- Espacio vacío para balancear el diseño -->
            <div style="flex: 0 0 auto; width: calc(40px + 1rem);"></div>
        </div>
    </div>
</nav>