<?php
include("conexion.php");

//Recibir los datos del formulario
$con = connection();

// Valores del formulario
$nombre = $_POST['nombre_usu'];
$password = $_POST['contraseña'];

// Consulta SQL para buscar el usuario en la tabla 'usuarios'
$sql = "SELECT * FROM usuarios_datos WHERE Usuario = '$nombre' AND Password = '$password'";
$resultUsuarios = $con->query($sql);

// Consulta SQL para buscar el usuario en la tabla 'admin'
$sql = "SELECT * FROM administrador_datos WHERE Nombre = '$nombre' AND Password = '$password'";
$resultAdmin = $con->query($sql);

// Verificar si el usuario existe en alguna de las tablas
if ($resultUsuarios->num_rows > 0) {
    // Usuario encontrado en la tabla 'usuarios'
    echo "Inicio de sesión exitoso como usuario";
    header("Location: index1.php");
    
} elseif ($resultAdmin->num_rows > 0) {
    // Usuario encontrado en la tabla 'admin'
    echo "Inicio de sesión exitoso como administrador";
    header("Location: Panel.admin.php");
    
}  else {
    // Usuario no encontrado en ninguna tabla
    echo "Correo o contraseña incorrectos. Por favor, verifica tus credenciales.";
    header("Location: IniciarSesion.php");
    
}

// Cerrar la conexión al finalizar las operaciones
mysqli_close($con);
?>