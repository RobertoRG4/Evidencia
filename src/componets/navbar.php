<nav class="navbar navbar-expand-lg azul sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="<?php print $logo ?>" alt="Logo" width="100" height="50"
                class="d-inline-block align-text-center" />
            <h3 class="tituloPrincipal">Round Wear</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item p-2">
                    <a class="nav-link active" href="<?php print $inicio ?>">
                        <i class="fa-solid fa-house p-2"></i>Inicio</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link active" href="<?php print $productos ?>"><i
                            class="fa-solid fa-basket-shopping p-2"></i>Productos</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link active" href="<?php print $nosotros ?>"><i
                            class="fa-solid fa-users p-2"></i>Nosotros</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link active" href="<?php print $contacto ?>"><i
                            class="fa-solid fa-address-book p-2"></i>Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>