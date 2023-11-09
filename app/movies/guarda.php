<?php

 include '../db/db.php';


 $nombre = $conexion->real_escape_string($_POST['nombre']);
 $descripcion = $conexion->real_escape_string($_POST['descripcion']);
 $genero = $conexion->real_escape_string($_POST['genero']);
 
 $sql = "INSERT INTO movies (nombre, descripcion, id_genero, fecha_alta)
 VALUES ('$nombre', '$descripcion', $genero, NOW())";
 if ($conexion->query($sql)) {
     $id = $conexion->insert_id;
 
     $_SESSION['color'] = "success";
     $_SESSION['msg'] = "Registro guardado";
 
     if ($_FILES['poster']['error'] == UPLOAD_ERR_OK) {
         $permitidos = array("image/jpg", "image/jpeg");
         if (in_array($_FILES['poster']['type'], $permitidos)) {
 
             $dir = "posters";
 
             $info_img = pathinfo($_FILES['poster']['name']);
             $info_img['extension'];
 
             $poster = $dir . '/' . $id . '.jpg';
 
             if (!file_exists($dir)) {
                 mkdir($dir, 0777);
             }
 
             if (!move_uploaded_file($_FILES['poster']['tmp_name'], $poster)) {
                 $_SESSION['color'] = "danger";
                 $_SESSION['msg'] .= "<br>Error al guardar imagen";
             }
         } else {
             $_SESSION['color'] = "danger";
             $_SESSION['msg'] .= "<br>Formato de imágen no permitido";
         }
     }
 } else {
     $_SESSION['color'] = "danger";
     $_SESSION['msg'] = "Error al guarda imágen";
 }
 
 header('Location: index.php');

?>