<?php
require ('../private/init.php');
$id = $_GET['id'];
$producto = mysqli_fetch_assoc(producto_por_id($id));
$imagen_url = get_imagen_producto($id);

$talla_result = get_talla('tallas', $id);
$talla = ($talla_result) ? mysqli_fetch_assoc($talla_result)['talla'] : 'Desconocido';
include (SHARED_PATH . 'header.php');
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Categoría: <?= $producto['id'] ?></h1>
            </header>
        </div>
    </div>
    <a class="btn btn-primary" href="./index.php" role="button">Regresar</a>

    <div class="row justify-content-center mb-4 text-center">
        <div class="col-12 col-md-9 col-lg-6">
            <img src="<?= $imagen_url ?>" alt="<?= $producto['nombre'] ?>" width="500" />
            <p class="fs-4"><b>Nombre: </b><?= $producto['nombre'] ?></p>
            <p class="fs-4"><b>Precio: </b><?= $producto['precio'] ?></p>
            <p class="fs-4"><b>Talla: </b><?= $talla ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col text-end">
            <a href="edit.php?id=<?= $producto['id'] ?>" class="btn btn-warning me-4">Editar</a>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Eliminar
            </button>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p>¿Estás seguro que quieres eliminarla?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <a href="delete.php?id=<?= $producto['id'] ?>" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>


<?php
include (SHARED_PATH . 'footer.php');