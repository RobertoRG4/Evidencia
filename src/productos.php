<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
    rel="stylesheet"></script>

  <script src="../src/modules/Producto.js"></script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Round Wear</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../index.css" />
  <link rel="stylesheet" href="./productos.css" />

</head>

<body>
  <nav class="navbar navbar-expand-lg azul sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="../assets/logo.png" alt="Logo" width="100" height="50" class="d-inline-block align-text-center" />
        <h3 class="tituloPrincipal">Round Wear</h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item p-2">
            <a class="nav-link active" href="../index.php">
              <i class="fa-solid fa-house p-2"></i>Inicio</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link active" href="../src/productos.php"><i
                class="fa-solid fa-basket-shopping p-2"></i>Productos</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link active" href="../src/nosotros.php"><i class="fa-solid fa-users p-2"></i>Nosotros</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link active" href="../src/contactos.php"><i
                class="fa-solid fa-address-book p-2"></i>Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container">
    <section class="grid-articulos mt-5">
      <?php
      require ("./../admin/private/init.php");
      $productos = todo_de_tabla('productos');

      while ($row = $productos->fetch_assoc()) {
        $talla_result = get_talla('tallas', $row['talla_id']);
        $talla = ($talla_result) ? mysqli_fetch_assoc($talla_result)['talla'] : 'Desconocido';

        $color_result = get_color('colores', $row['color_id']);
        $color = ($color_result) ? mysqli_fetch_assoc($color_result)['color'] : 'Desconocido';

        $imagen_url = get_imagen_producto($row['id']);
        ?>

        <section class="articulo">
          <img src="<?= $imagen_url ?>" alt="<?= $row['nombre'] ?>" width="100" />
          <h2><?= $row['nombre'] ?></h2>
          <p class="precio">$<?= $row['precio'] ?></p>
          <p class="talla"><?= $talla ?></p>
          <p class="color"><?= $color ?></p>
          <button onclick="Compra(event)" name="button">Comprar ahora</button>
        </section>


        <?php
      }
      ?>
    </section>
  </main>

  <?php include ("./componets/footer.php"); ?>


  <!-- Modal -->
  <div class="modal fade" id="agregadoModal" tabindex="-1" aria-labelledby="agregadoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="agregadoModalLabel">¡Listo!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¡El producto ha sido agregado al carrito!
        </div>
      </div>
    </div>
  </div>
</body>

</html>