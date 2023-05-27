<?php
//Configuración para acceder a la base de datos
function conn(){
$hostname = "localhost";
$usuariodb = "root";
$passworddb = "";
$dbname = "proyecto";

    //Conectando con el servidor
    $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;
    }

?>
