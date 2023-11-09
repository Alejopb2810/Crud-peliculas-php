let nuevoModal = document.getElementById("nuevoModal");
let editaModal = document.getElementById("editaModal");
let eliminaModal = document.getElementById("eliminaModal");

nuevoModal.addEventListener("shown.bs.modal", (event) => {
  nuevoModal.querySelector(".modal-body #nombre").focus();
});

nuevoModal.addEventListener("hide.bs.modal", (event) => {
  nuevoModal.querySelector(".modal-body #nombre").value = "";
  nuevoModal.querySelector(".modal-body #descripcion").value = "";
  nuevoModal.querySelector(".modal-body #genero").value = "";
  nuevoModal.querySelector(".modal-body #poster").value = "";
});

editaModal.addEventListener("hide.bs.modal", (event) => {
  editaModal.querySelector(".modal-body #nombre").value = "";
  editaModal.querySelector(".modal-body #descripcion").value = "";
  editaModal.querySelector(".modal-body #genero").value = "";
  editaModal.querySelector(".modal-body #img_poster").value = "";
  editaModal.querySelector(".modal-body #poster").value = "";
});

editaModal.addEventListener("shown.bs.modal", (event) => {
  let button = event.relatedTarget;
  let id = button.getAttribute("data-bs-id");

  let inputId = editaModal.querySelector(".modal-body #id");
  let inputNombre = editaModal.querySelector(".modal-body #nombre");
  let inputDescripcion = editaModal.querySelector(".modal-body #descripcion");
  let inputGenero = editaModal.querySelector(".modal-body #genero");
  let poster = editaModal.querySelector(".modal-body #img_poster");

  let url = "getPelicula.php";
  let formData = new FormData();
  formData.append("id", id);

  fetch(url, {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      inputId.value = data.id;
      inputNombre.value = data.nombre;
      inputDescripcion.value = data.descripcion;
      inputGenero.value = data.id_genero;
      poster.src = "<?= $dir ?>" + data.id + ".jpg";
    })
    .catch((err) => console.log(err));
});

eliminaModal.addEventListener("shown.bs.modal", (event) => {
  let button = event.relatedTarget;
  let id = button.getAttribute("data-bs-id");
  eliminaModal.querySelector(".modal-footer #id").value = id;
});
