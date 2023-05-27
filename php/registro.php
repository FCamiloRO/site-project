<?php
include_once('db.php');
//Recibiendo todos los datos del formulario
$nombres=$_POST["nombres"];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
$email=$_POST['email'];
$clave=$_POST['clave'];

//echo "los datos ingresados son los siguientes: <br>";
//echo "$nombres, $apellidos, $direccion, $telefono, $usuario, $email y $clave";


        $conectar=conn(); //ejecuta la conexion a la base de datos
        $sql="INSERT INTO usuarios (nombres, apellidos, direccion, telefono, usuario, email, clave)
        VALUES ('$nombres', '$apellidos', '$direccion', '$telefono', '$usuario', '$email', '$clave')";
        $resultado = mysqli_query($conectar , $sql) or trigger_error("Query Failed! SQL - Error: " .mysqli_error($conectar), E_USER_ERROR);

//        echo "$sql";
        
        header("location:../login.html");

?>

