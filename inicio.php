<?php

if (isset($_POST['entrar'])) {
    $usuario = $_POST['usuario'];
    $pass = $_POST['password'];
    $nom = "cesar";
    $pas = "1234";
    if ($nom==$usuario) {
        if($pass==$pas){
            header("Location: Menu.html");

        } else{
            echo"<script>alert('La contraseña es incorrecta')</script>";
        }
       
    } else{
        echo"<script>alert('Nombre de usuario incorrecto')</script>";
    }
}
?>