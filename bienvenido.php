<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="styles-b.css">
</head>
<body>
    
    <?php
include("conexion.php")
    ?>
    <table border="1">
<td>Nombre</td>
<td>Correo</td>
<td>Contraseña</td>
<td>Genero</td>
<td>Fecha de nacimiento</td>
   

    <?php
    $sql="SELECT * FROM usuarios";
    $resultado = mysqli_query($conn,$sql);

    while ($mostrar=mysqli_fetch_array($resultado)) {
        ?>
     <tr>   
        <td><?php echo $mostrar['Nombre'] ?></td>
        <td><?php echo $mostrar['Correo'] ?></td>
        <td><?php echo $mostrar['Contrasena'] ?></td>
        <td><?php echo $mostrar['Genero'] ?></td>
        <td><?php echo $mostrar['Fecha_de_nacimiento'] ?></td>
    </tr>
    
    <?php    
    }
    ?>
     </table>
</body>
</html>
