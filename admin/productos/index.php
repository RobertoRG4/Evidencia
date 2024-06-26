<?php
require ("../private/init.php");
include (SHARED_PATH . 'header.php');
$productos = todo_de_tabla('productos');
?>
<div class="container ">
    <h1 class="p-4 text-white bg-info text-center">Productos</h1>
    <div class="d-flex justify-content-between">
        <a class="btn btn-primary" href="../index.php" role="button">Regresar</a>
        <a class="btn btn-success" href="./create.php" role="button">Agregar </a>
    </div>

    <table class=" table m-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Talla</th>
                <th scope="col">Imagen</th>
                <th scope="col">Color</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $productos->fetch_assoc()) { ?>
                <?php

                $talla_result = get_talla('tallas', $row['talla_id']);
                $talla = ($talla_result) ? mysqli_fetch_assoc($talla_result)['talla'] : 'Desconocido';

                $color_result = get_color('colores', $row['color_id']);
                $color = ($color_result) ? mysqli_fetch_assoc($color_result)['color'] : 'Desconocido';

                $imagen_url = get_imagen_producto($row['id']);
                ?>

                <tr>
                    <td scope="row"><?= $row['id'] ?></td>
                    <td scope="row"><?= $row['nombre'] ?></td>
                    <td scope="row"><?= $row['precio'] ?></td>
                    <td scope="row"><?= $talla ?></td>
                    <td scope="row">
                        <?php if ($imagen_url): ?>
                            <img src="<?= $imagen_url ?>" alt="<?= $row['nombre'] ?>" width="100">
                        <?php else: ?>
                            No hay imagen
                        <?php endif; ?>
                    </td>
                    <td scope="row"><?= $color ?></td>
                    <td scope="row">
                        <a href="show.php?id=<?= $row['id'] ?>" class="btn btn-secondary">Ver</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>