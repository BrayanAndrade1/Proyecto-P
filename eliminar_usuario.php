<?php
    include("conexion.php");
    $con = connection();

    $correo=$_GET["correo_electronico"];

    $sql="DELETE FROM usuarios_datos WHERE correo_electronico='$correo'";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: Tablas.php");
    }else{

    }
?>