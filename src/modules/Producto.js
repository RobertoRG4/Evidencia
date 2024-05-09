const Compra = (event) => {
  if (event.target.tagName === "BUTTON") {
    const modal = new bootstrap.Modal(document.getElementById("agregadoModal"));
    modal.show();

    setTimeout(() => {
      modal.hide();
    }, 2000);
  }
};
