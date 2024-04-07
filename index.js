import { Nosotros, Productos, Contacto } from "./src/modules/href.js";

document.addEventListener("DOMContentLoaded", () => {
  const buttonSobreNosotros = document.getElementById("buttonSobreNosotros");
  const buttonSobreNosotrosUltimaSection = document.getElementById(
    "buttonSobreNosotrosUltimaSection"
  );
  const buttonContanctanos = document.getElementById("buttonContactanos");
  const buttonProductos = document.getElementById("buttonProductos");
  if (buttonSobreNosotros) {
    buttonSobreNosotros.addEventListener("click", () => {
      Nosotros();
    });
  }
  if (buttonContanctanos) {
    buttonContanctanos.addEventListener("click", () => {
      Contacto();
    });
  }
  if (buttonProductos) {
    buttonProductos.addEventListener("click", () => {
      Productos();
    });
  }
  if (buttonSobreNosotrosUltimaSection) {
    buttonSobreNosotrosUltimaSection.addEventListener("click", () => {
      Nosotros();
    });
  }
});
