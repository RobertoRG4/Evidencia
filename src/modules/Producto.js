const $add = document.getElementById("add");
const $close = document.getElementById("close");
const $enviar = document.getElementById("enviar");
const $form = document.getElementById("form");
const $root = document.getElementById("root");

const Producto = ({ titulo, precio, talla, color, src }) => {
  const $section = document.createElement("section");
  $section.classList.add("articulo");

  $section.addEventListener("click", () => {
    console.log("hola");
  });

  $section.innerHTML = `
      <img src="${src}" alt="${titulo}" />
      <h2>${titulo}</h2>
      <p class="precio">${precio}</p>
      <p class="talla">${talla}</p>
      <p class="color">${color}</p>
      <button onclick="Compra(event)" name="button">Comprar ahora</button>
    `;

  return $section;
};

const Compra = (event) => {
  if (event.target.tagName === "BUTTON") {
    // Mostrar el modal
    const modal = new bootstrap.Modal(document.getElementById('agregadoModal'));
    modal.show();

    // Cerrar el modal automáticamente después de 3 segundos (3000 milisegundos)
    setTimeout(() => {
      modal.hide();
    }, 2000);
  }
};


$root.appendChild(
  Producto({
    titulo: "Título del producto 3",
    precio: "$300",
    talla: "Talla L",
    color: "Rojo",
    src: "https://static.nike.com/a/images/t_prod_ss/w_960,c_limit,f_auto/cd3bf945-7293-49f6-a09a-c2c8bdedc2f3/fecha-de-lanzamiento-de-los-dunk-low-veneer-da1469-200.jpg",
  })
);
$root.appendChild(
  Producto({
    titulo: "Título del producto 3",
    precio: "$300",
    talla: "Talla L",
    color: "Rojo",
    src: "https://static.nike.com/a/images/t_prod_ss/w_960,c_limit,f_auto/bc05f48c-e73c-4bb2-bdac-9ad88e9ddd0a/fecha-de-lanzamiento-de-los-air-max-dn-sail-and-coconut-milk-dv3337-100.jpg",
  })
);
$root.appendChild(
  Producto({
    titulo: "Título del producto 3",
    precio: "$300",
    talla: "Talla L",
    color: "Rojo",
    src: "https://static.nike.com/a/images/t_prod_ss/w_960,c_limit,f_auto/bac5ca6b-3f69-431f-8fb1-c7211ac6a167/fecha-de-lanzamiento-de-los-nike-air-max-dn-black-and-dark-smoke-grey-dv3337-002.jpg",
  })
);
$root.appendChild(
  Producto({
    titulo: "Título del producto 3",
    precio: "$300",
    talla: "Talla L",
    color: "Rojo",
    src: "https://static.nike.com/a/images/t_prod_ss/w_960,c_limit,f_auto/bf6f67cc-bc9c-4ff0-993e-ec6c5368dbbe/fecha-de-lanzamiento-del-air-max-1-86-royal-blue-do9844-101.jpg",
  })
);
$root.appendChild(
  Producto({
    titulo: "Título del producto 3",
    precio: "$300",
    talla: "Talla L",
    color: "Rojo",
    src: "https://static.nike.com/a/images/t_prod_ss/w_960,c_limit,f_auto/37f1a17a-a29d-4fd1-8ab0-1ab0933a78e5/fecha-de-lanzamiento-del-cortez-para-mujer-light-soft-pink-hf6410-666.jpg",
  })
);
$root.appendChild(
  Producto({
    titulo: "Título del producto 3",
    precio: "$300",
    talla: "Talla L",
    color: "Rojo",
    src: "https://static.nike.com/a/images/t_prod_ss/w_960,c_limit,f_auto/3dc93cd9-67c6-4026-8a8e-1a615a54087d/fecha-de-lanzamiento-de-los-acg-torre-mid-team-red-and-dusty-cactus-fd0212-600.jpg",
  })
);

$add.addEventListener("click", () => {
  $form.style.display = "block";
});

$close.addEventListener("click", () => {
  $form.style.display = "none";
});

const $formTitulo = document.getElementById("titulo");
const $formPrecio = document.getElementById("precio");
const $formTalla = document.getElementById("talla");
const $formColor = document.getElementById("color");
const $formImagen = document.getElementById("imagen");

$enviar.addEventListener("click", () => {
  if (
    $formTitulo.value == "" ||
    $formPrecio.value == "" ||
    $formTalla.value == "" ||
    $formColor.value == "" ||
    $formImagen.value == ""
  ) {
    alert("Todos los campos son obligatorios");
  } else {
    $root.appendChild(
      Producto({
        titulo: $formTitulo.value,
        precio: $formPrecio.value,
        talla: $formTalla.value,
        color: $formColor.value,
        src: $formImagen.value,
      })
    );
    $formTitulo.value = "";
    $formPrecio.value = "";
    $formTalla.value = "";
    $formColor.value = "";
    $formImagen.value = "";
  }
});
