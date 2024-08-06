<?php
include("conexion.php");

if ($_POST['Guardar']) {
    mysqli_query($conn, "INSERT INTO usuarios (Nombre, Correo, Contrasena, Genero, Fecha_de_nacimiento) 
    VALUES('$_POST[nombre]','$_POST[email]','$_POST[password]','$_POST[genero]','$_POST[fecha_nacimineto]')");
}

header("Location:index.php");

?>