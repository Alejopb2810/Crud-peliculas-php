<?php
session_start();

include '../db/db.php';

$id = $conexion->real_escape_string($_POST['id']);

$sql = "DELETE FROM movies WHERE id=$id";
if ($conexion->query($sql)) {

    $dir = "posters";
    $poster = $dir . '/' . $id . '.jpg';

    if (file_exists($poster)) {
        unlink($poster);
    }

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro eliminado";
} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al eliminar registro";
}

header('Location: ./index.php');
?>