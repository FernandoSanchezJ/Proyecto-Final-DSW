<?php $session =  \Config\Services::session(); ?>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Reparti Express</a> <!-- Logo de la página -->
        <p class="text-end col-10 my-1 text-white">Menu</p> <!-- Título del menú -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> <!-- Botón para desplegar el menú -->
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Reparti Express</h5> <!-- Título del menú desplegable -->
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button> <!-- Botón para cerrar el menú desplegable -->
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3"> <!-- Lista de opciones del menú -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="<?=base_url('/admin/bienvenida') ?>">Inicio</a> <!-- Opción de inicio -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?=base_url('/admin/mostrarR')?>" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Repartidores <!-- Opción para abrir pestaña de repartidores -->
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="<?=base_url('/admin/mostrarR') ?>">Repartidores</a></li> <!-- Subopción de repartidores -->
                            <li><a class="dropdown-item" href="<?=base_url('/admin/mostrarCarro') ?>">Carro</a></li> <!-- Subopción de carro -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('/admin/mostrarP') ?>">Registro de Paquetes</a> <!-- Opción para ir a registro de paquetes -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('/admin/mostrarPNR') ?>">Historia PNR</a> <!-- Opción para ir a historia PNR -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('/admin/mostrarSalidas') ?>">Salidas</a> <!-- Opción ir a salidas -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('/cerrarSesion') ?>">Cerrar Sesion</a> <!-- Opción para cerrar sesión -->
                    </li>
            </div>
        </div>
    </div>
</nav>
