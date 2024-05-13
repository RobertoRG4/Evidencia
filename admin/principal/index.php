<<<<<<< HEAD
<h1>Principal</h1>
=======
<?php
require ("../private/init.php");
include (SHARED_PATH . 'header.php');
?>
  <div class="container ">
    <h1 class="p-4 text-white bg-info text-center">Inicio</h1>
    <div class="d-flex justify-content-between">
        <a class="btn btn-primary" href="../index.php" role="button">Regresar</a>
    </div>

    <table class=" table m-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">Texto</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $titulos_y_textos = get_titulos_y_textos();

            while($fila = mysqli_fetch_assoc($titulos_y_textos)) { ?>
                <tr>
                    <td scope="row"><?= $fila['id'] ?></td>
                    <td scope="row"><?= $fila['titulo'] ?></td>
                    <td scope="row"><?= $fila['texto'] ?></td>
                    <td scope="row">
                        <a href="edit.php?id=<?= $fila['id'] ?>" class="btn btn-secondary mr-2">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
  </div>
</body>
</html>



>>>>>>> 2847456 (admin)
