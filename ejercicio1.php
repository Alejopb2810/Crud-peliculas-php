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
    <title>Ejercicio 1</title>
  </head>
  <body>
    <form class="form-row" action="ejercicio1.php" method="POST">
      <div class="form-group col-md-4">
        <label for="n1">Numero 1</label>
        <input
          type="number"
          step="any"
          name="n1"
          class="form-control"
          id="n1"
          placeholder="Ingrese numero"
          required
        />
        <label for="n2">Numero 2</label>
        <input
          type="number"
          step="any"
          name="n2"
          class="form-control"
          id="n2"
          placeholder="ingrese numero"
          required
        />
        <label for="operacion">Operacion a Realizar</label>
        <select name="ope" class="form-control" required>
          <option value="">Seleccionar operacion</option>
          <option value="1">Suma</option>
          <option value="2">Resta</option>
          <option value="3">Multiplicacion</option>
          <option value="4">Division</option>
        </select>
      </div>
      <button type="submit" name="operar" class="btn btn-primary">
        Operar
      </button>
    </form>

  <?php
  if (isset($_POST['operar'])) {
   $n1= $_POST['n1'];
   $n2= $_POST['n2'];
   $ope= $_POST['ope'];

   switch ($ope) {
    case '1':
      $total= $n1 + $n2;
    break;

    case '2':
      $total= $n1 - $n2;
    break;

    case '3':
      $total= $n1 * $n2;
    break;

    case '4':
      $total= $n1 / $n2;
    break;
   }

   echo '<h2>La Operacion entre numero '.$n1. ' y el numero ' .$n2. ' es: '.$total. '</h2>';
  }
  ?>

  </body>
</html>
