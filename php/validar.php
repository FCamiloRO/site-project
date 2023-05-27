<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    INCLUDE('db.php');

    $emaillogin=$_POST['emaillogin'];
    $clavelogin=$_POST['clavelogin'];
    session_start();
    $_SESSION['email']=$emaillogin;


    $conectar=conn(); //ejecuta la conexion a la base de datos
    $consulta="SELECT*FROM usuarios where email='$emaillogin' and clave='$clavelogin'";
    $result=mysqli_query($conectar,$consulta);

    $filas=mysqli_num_rows($result);

    

    if($filas){
        
        header("location:../home.html");
        
    }else{

        include("../login.html");
    ?>
        <h1 class="bad">ERROR EN LA AUTENTIFICACIÓN</h1>
    <?php


    }
    //mysqli_free_result($resultado);
    mysqli_close($conectar);


    ?>    


</body>
</html>



