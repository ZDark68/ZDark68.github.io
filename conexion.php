<?php
$servername = "localhost";
$database = "Login";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn -> connect_error) {
    echo"No conectado";
} else {
    #echo"Conectado";
}
?>