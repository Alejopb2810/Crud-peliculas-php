<?php
 // Archivo de conexion a base de datos

 $server = "localhost";
 $user = "root";
 $pass = "";
 $db = "cinema";


 $conexion = new mysqli($server, $user, $pass, $db);

 if($conexion->connect_error){
     die("Error de conexion" .$conexion->connect_error);
 }
?>