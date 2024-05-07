<?php
require ('../private/init.php');
include (SHARED_PATH . 'header.php');
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-info text-center text-white">
                <h1 class="mb-0">Crear Nuevo Producto</h1>
            </header>
        </div>
    </div>
    <a class="btn btn-primary" href="index.php" role="button">Regresar</a>

    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">

            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                    <label for="" class="form-label">Precio</label>
                    <input type="text" name="precio" class="form-control">
                    <label for="" class="form-label">Talla</label>
                    <input type="text" name="talla" class="form-control">
                    <label for="" class="form-label">Color</label>
                    <input type="text" name="color" class="form-control">
                    <label for="" class="form-label">Imagen</label>
                    <input type="text" name="imagen" class="form-control">
                </div>

                <div class="text-end">
                    <input type="submit" value="Crear Producto" class="btn btn-success">
                </div>
            </form>

        </div>
    </div>
</div>


<?php
include (SHARED_PATH . 'footer.php');