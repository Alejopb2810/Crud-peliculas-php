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
    <title>Ejercicio 2</title>
  </head>
  <body>
    <form class="form-row" action="ejercicio2.php" method="POST">
      <div class="form-group col-md-4">
        <label for="edad">Ingrese Edad</label>
        <input
          type="number"
          name="edad"
          class="form-control"
          id="edad"
          placeholder="Ingrese edad"
          required
        />
      </div>
      <button type="submit" name="calcular" class="btn btn-primary">
        Calcular
      </button>
    </form>

  <?php
  if (isset($_POST['calcular'])) {
   $edad= $_POST['edad'];

   if ($edad >= 18) {
    echo '<h2>Eres mayor de edad </h2>';
   }else{
    echo '<h2>Eres menor de edad </h2>';
   }
  }
  ?>

  </body>
</html>
