<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<html lang="en">

<head>
  <?php include ("./componets/head.php") ?>

<body>
  <?php include ("./componets/navbar.php") ?>
  <main class="container">
    <div class="titulo-principal">
      <h1 class="titulo-principal">Productos</h1>
      <i class="fa-solid fa-plus" id="add"></i>
    </div>

    <!-- The Modal -->
    <div class="modal" id="form">
      <div class="modal-content">
        <div>
          <h3 class="titulo-principal">Agregar nuevos productos</h3>
          <div id="form" class="form-container">
            <p>
              <label for="titulo">Título:</label>
              <input type="text" id="titulo" required />
            </p>
            <p>
              <label for="precio">Precio:</label>
              <input type="text" id="precio" required />
            </p>
            <p>
              <label for="talla">Talla:</label>
              <input type="text" id="talla" required />
            </p>
            <p>
              <label for="color">Color:</label>
              <input type="text" id="color" required />
            </p>
            <p>
              <label for="imagen">Imagen:</label>
              <input type="text" id="imagen" required />
            </p>
          </div>

          <div class="form-buttons">
            <button id="close" class="button">Cerrar</button>
            <button id="enviar" class="button">Enviar</button>
          </div>
        </div>
      </div>
    </div>

    <section class="grid-articulos" id="root"></section>
  </main>
  <?php include ("./componets/footer.php") ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="../src/modules/Producto.js"></script>
</body>

<div class="modal fade" id="agregadoModal" tabindex="-1" aria-labelledby="agregadoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="agregadoModalLabel">¡Listo!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">¡El producto ha sido agregado al carrito!</div>
    </div>
  </div>
</div>

</html>