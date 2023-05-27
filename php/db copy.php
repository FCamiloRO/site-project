<?php
//Configuración para acceder a la base de datos
function conn(){
$hostname = "sql208.epizy.com";
$usuariodb = "epiz_32350656";
$passworddb = "qKtl2XFBClu";
$dbname = "epiz_32350656_proyecto";

    //Conectando con el servidor
    $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;
    }

?>
