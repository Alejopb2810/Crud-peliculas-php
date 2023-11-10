
<?php
  if (isset($_GET['datos'])) {

   $nombre= $_GET['nombre'];
   $apellido= $_GET['apellido'];
   $cedula= $_GET['id'];


   echo 'Nombre: '.$nombre.'<br>'.
    'Apellido: '.$apellido.'<br>'.
    'Cedula: '.$cedula;
  }
?>