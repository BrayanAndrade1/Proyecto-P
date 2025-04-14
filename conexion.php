<?php
function connection(){
    // Define parámetros para conectarse a la base de datos
    $host = "127.0.0.1";
    $user = "root";
    $pass = "";
    $bd = "pw2_cliente_datos";

    // Crea la conección
    $connect=mysqli_connect($host, $user, $pass);
    mysqli_select_db($connect, $bd);

    // Check connection
    if ($connect->connect_error) {
        die("La conexión a la base de datos ha fallado: " . $connect->connect_error);
    }
    return $connect;
}
?>