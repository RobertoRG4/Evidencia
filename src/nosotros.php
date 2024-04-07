<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './componets/head.php' ?>
</head>

<body>
  <?php include './componets/navbar.php' ?>
  <main class="container">
    <h1>¿Quiénes somos?</h1>
    <div class="row">
      <div class="col-md-6">
        <div id="miParrafo" contentEditable="false">
          <p>
            <strong>Round Wear</strong> es una vibrante empresa dedicada a la confección y
          diseño de zapatos modernos y cómodos, enfocados especialmente en
          satisfacer las necesidades de los universitarios. Nuestra misión es
          fusionar estilo y funcionalidad, ofreciendo calzado que no solo
          refleje las últimas tendencias de la moda, sino que también brinde
          el confort necesario para afrontar las largas jornadas
          académicas.
          </p>
          <p>
          Con un enfoque fresco y juvenil, los zapatos de Round Wear están
          diseñados para destacar en cualquier campus universitario. Nos
          inspiramos en la diversidad y la creatividad de la vida estudiantil,
          creando modelos que se adaptan a diferentes estilos y
          personalidades. Desde zapatillas deportivas con toques urbanos hasta
          elegantes mocasines, nuestra colección abarca una amplia gama de
          estilos para satisfacer los gustos variados de la comunidad
          universitaria.
          </p>
        </div>
        <div id="masInformacion" style="display: none;" contentEditable="false">
          <p>
          La calidad es una prioridad para nosotros. Utilizamos
            materiales duraderos y técnicas de fabricación de vanguardia para
            asegurar que cada par de zapatos Round Wear sea resistente y perdure
            a lo largo del exigente ritmo universitario. Además, nos esforzamos
            por mantener precios accesibles para que la moda y la comodidad
            estén al alcance de todos los estudiantes.
          </p>
          <p>
          En Round Wear, no solo
            vendemos zapatos, sino que también promovemos un estilo de vida
            activo y dinámico. Creemos que la elección del calzado puede influir
            positivamente en la actitud y confianza de los jóvenes durante sus
            años universitarios. Únete a nosotros en esta aventura de moda y
            comodidad, donde cada paso cuenta y marca la diferencia!
          </p>
        </div>
        <button id="toggleInfo" onclick="toggleInfo()">Más información</button>
        <button id="editarTexto" onclick="editarTexto()">Editar texto</button>
      </div>
      <div class="col-md-6">
      <style>
          .azul {
            background-color: #dcedf5 !important;
          }

          #masInformacion {
            display: none;
          }

          .img-fluid {
            border-radius: 10px;
            transition: transform 0.3s ease;
          }

          .img-fluid:hover {
            transform: scale(1.05);
          }
        </style>

        <img src="https://th.bing.com/th/id/OIP.rXmjj2adQB13E8oL7XEjVAHaEa?rs=1&pid=ImgDetMain" alt="Imagen 1"
          class="img-fluid mb-3" />
        <img src="https://www.hudglobal.com/assets/images/resource/index-2.jpg" alt="Imagen 2" class="img-fluid" />

      </div>
    </div>
  </main>
  <?php include './componets/footer.php' ?>
  <script>
    function toggleInfo() {
      var info = document.getElementById("masInformacion");
      var btn = document.getElementById("toggleInfo");
      if (info.style.display === "none") {
        info.style.display = "block";
        btn.textContent = "Menos información";
      } else {
        info.style.display = "none";
        btn.textContent = "Más información";
      }
    }

    function editarTexto() {
      var miParrafo = document.getElementById('miParrafo');
      var masInformacion = document.getElementById('masInformacion');
      var btn = document.getElementById("editarTexto");
      if (miParrafo.contentEditable == "true") {
        miParrafo.contentEditable = "false";
        masInformacion.contentEditable = "false";
        btn.textContent = "Editar texto";
        localStorage.setItem('miParrafo', miParrafo.innerHTML);
        localStorage.setItem('masInformacion', masInformacion.innerHTML);
      } else {
        miParrafo.contentEditable = "true";
        masInformacion.contentEditable = "true";
        btn.textContent = "Guardar texto";
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
