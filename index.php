<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="index.css">
  <?php include ("./src/componets/head.php") ?>
</head>


<body>
  <nav class="navbar navbar-expand-lg azul sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
        <img src="./assets/logo.png" alt="Logo" width="100" height="50" class="d-inline-block align-text-center" />
        <h3 class="tituloPrincipal">Round Wear</h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item p-2">
            <a class="nav-link active" href="">
              <i class="fa-solid fa-house p-2"></i>Inicio</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link active" href="./src/productos.php"><i
                class="fa-solid fa-basket-shopping p-2"></i>Productos</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link active" href="./src/nosotros.php"><i class="fa-solid fa-users p-2"></i>Nosotros</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link active" href="./src/contactos.php"><i
                class="fa-solid fa-address-book p-2"></i>Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="container">
    <div class="row">
      <div class="contenedor-img contain-full">
        <img src="./assets/ec4121c5-743f-4989-9b98-c1d5efe81365.jpeg" class="img" />
        <div>
          <h4>Bienvenid@ a Round Wear</h4>
          <p>
            Tu sitio de sneakers favorito. Aquí podra encontrar gran variedad
            de marcas y colaboraciones.
          </p>
          <button class="button button-default" id="buttonSobreNosotros">
            Conoce Sobre Nosotros
          </button>
        </div>
      </div>
    </div>
    <hr />
    <div class="contenedor-img text-center">
      <div id="carouselExampleSlidesOnly" class="carousel slide text-center" data-bs-ride="carousel">
        <h2 class="p-2">Nuestros Productos</h2>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="https://static.nike.com/a/images/t_prod_ss/w_960,c_limit,f_auto/db3c59ca-d9b6-4bb9-9aa7-51e911377996/fecha-de-lanzamiento-del-nike-sb-dunk-low-white-and-gum-light-brown-cd2563-101.jpg"
              class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img
              src="https://static.nike.com/a/images/t_prod_ss/w_960,c_limit,f_auto/172e274c-b992-4deb-b886-b177514c751c/fecha-de-lanzamiento-del-dunk-low-red-stardust-fb8895-601.jpg"
              class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img
              src="https://static.nike.com/a/images/t_prod_ss/w_960,c_limit,f_auto/e50a3bae-b670-47bd-bff1-d709b990559b/fecha-de-lanzamiento-del-cortez-light-orewood-brown-fz4630-100.jpg"
              class="d-block w-100" alt="..." />
          </div>
        </div>
      </div>
      <div>
        <p>
          ¡Eleva tu estilo con nuestros sneakers exclusivos que fusionan moda
          y comodidad para que destaques en cada paso!
        </p>
        <button class="button button-default" id="buttonProductos">
          Conoce Sobre Nuestros Productos
        </button>
      </div>
    </div>
    <hr />
    <div class="text-center">
      <h4>Contacto</h4>
      <div class="contenedor-img">
        <div>
          <p class="m-4">
            ¿Listo para dar el siguiente paso en tu viaje sneakerhead?
            ¡Contáctanos hoy mismo y déjanos ayudarte a encontrar el par
            perfecto que elevará tu estilo al siguiente nivel! ¡Estamos aquí
            para ti en cada paso del camino!
          </p>
          <button class="button button-default" id="buttonContactanos">
            Contactanos
          </button>
        </div>
        <img class="img p-2" src="https://pbs.twimg.com/media/EuhsmBnVoAE-aAf.jpg" alt="" />
      </div>
    </div>
    <hr />
    <div class="text-center">
      <h4>Nosotros</h4>
      <div class="contenedor-img">
        <img class="img p-2" src="https://academy.sneakerart.mx/wp-content/uploads/2021/01/about-01-free-img.jpg"
          alt="" />
        <div>
          <p class="m-4">
            Descubre la esencia del estilo urbano en Round Wear! Somos
            apasionados por los sneakers y nos dedicamos a ofrecerte lo último
            en calzado urbano y deportivo. Explora nuestra colección única y
            eleva tu estilo con nosotros.
          </p>
          <button class="button button-default" id="buttonSobreNosotrosUltimaSection">
            Nosotros
          </button>
        </div>
      </div>
    </div>
  </main>
  <footer class="azul text-center footer">
    <p>&copy; Round Wear 2023</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="./index.js" type="module"></script>
</body>

</html>