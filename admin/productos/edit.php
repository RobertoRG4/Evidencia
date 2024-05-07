<?php
require ('../private/init.php');
$id = $_GET['id'];
$producto = mysqli_fetch_assoc(producto_por_id($id));
include (SHARED_PATH . 'header.php');
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Editar categoría</h1>
            </header>
        </div>
    </div>
    <a class="btn btn-primary" href="./show.php?id=<?= $producto['id'] ?>" role="button">Regresar</a>


    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">

            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?= $producto['id'] ?>">

                <div class="mb-3">
                    <label for="" class="form-label">Nombre *</label>
                    <input type="text" name="nombre" class="form-control" value="<?= $producto['nombre'] ?>">
                </div>

                <div class="text-end">
                    <input type="submit" value="Editar Producto" class="btn btn-warning">
                </div>
            </form>

        </div>
    </div>
</div>


<?php
include (SHARED_PATH . 'footer.php');