<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Ejercicio 3</title>
  </head>
  <body>
    <form class="form-row" action="respuesta_ejercicio3.php" method="GET">
      <div class="form-group col-md-4">
        <label for="nombre">Nombre</label>
        <input
          type="text"
          name="nombre"
          class="form-control"
          id="nombre"
          placeholder="Ingrese nombre"
          required
        />
        <label for="apellido">Apellido</label>
        <input
          type="text"
          name="apellido"
          class="form-control"
          id="apellido"
          placeholder="ingrese apellido"
          required
        />
        <label for="id">Cedula</label>
        <input
          type="number"
          name="id"
          class="form-control"
          id="id"
          placeholder="ingrese cedula"
          required
        />
      </div>
      <button type="submit" name="datos" class="btn btn-primary">
        Enviar
      </button>
    </form>
  </body>
</html>
