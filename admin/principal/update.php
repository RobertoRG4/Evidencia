<?php
require ("../private/init.php");
include (SHARED_PATH . 'header.php');
?>

<body>
  <div class="container ">
    <h1 class="p-4 text-white bg-info text-center">Guardar Cambios</h1>
    <div class="d-flex justify-content-between mb-3">
        <a class="btn btn-primary" href="index.php" role="button">Regresar</a>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = $_POST["id"];
      $titulo = $_POST["titulo"];
      $texto = $_POST["texto"];

      $sql_titulo = "UPDATE titulos SET titulo = '$titulo' WHERE id = $id";
      $sql_texto = "UPDATE textos SET texto = '$texto' WHERE id = $id";

      if (mysqli_query($db, $sql_titulo) && mysqli_query($db, $sql_texto)) {
        echo "<p class='alert alert-success'>Registro actualizado exitosamente</p>";
      } else {
        echo "<p class='alert alert-danger'>Error: " . $sql_titulo . "<br>" . mysqli_error($db) . "</p>";
        echo "<p class='alert alert-danger'>Error: " . $sql_texto . "<br>" . mysqli_error($db) . "</p>";
      }
    }
    ?>
  </div>
</body>
</html>
