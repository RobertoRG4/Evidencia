<?php
require ("../private/init.php");
include (SHARED_PATH . 'header.php');
?>
<body>
  <div class="container ">
    <h1 class="p-4 text-white bg-info text-center">Editar</h1>
    <div class="d-flex justify-content-between mb-3">
        <a class="btn btn-primary" href="index.php" role="button">Regresar</a>
    </div>
    <?php
    $id = $_GET['id'];
    $titulo = mysqli_fetch_assoc(get_titulo($id));
    $texto = mysqli_fetch_assoc(get_texto($id));
    ?>
    <form action="update.php" method="post" class="m-4">
      <input type="hidden" name="id" value="<?= $id ?>">
      <label for="titulo">Título:</label><br>
      <input type="text" id="titulo" name="titulo" value="<?= $titulo['titulo'] ?>" class="form-control"><br>
      <label for="texto">Texto:</label><br>
      <textarea id="texto" name="texto" class="form-control"><?= $texto['texto'] ?></textarea><br>
      <input type="submit" value="Guardar" class="btn btn-secondary">
    </form>
  </div>
</body>
</html>

