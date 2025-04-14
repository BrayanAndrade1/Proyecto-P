<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificar</title>
  <link href="css/styles.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1>Busqueda  Filtrada</h1>
    <form id="modify-form" action="update.php" method="post">
        
      <label for="cedula">Cédula:</label>
      <input type="text" id="cedula" name="cedula" maxlength="10" required>
      
      <input type="submit" value="Buscar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $server = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "basedatos";
    
        $conn = mysqli_connect($server, $username, $password, $database);
    
        if (!$conn) {
            die("Conexión fallida: " . mysqli_connect_error());
        }
    
        $cedula = $_POST["cedula"];
        $sql = "SELECT * FROM personas WHERE cedula='$cedula'";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo "<h2>Datos de la Persona:</h2>";
            echo "<p>Cédula: " . $row['cedula'] . "</p>";
            echo "<p>Apellidos y Nombres: " . $row['apellidonombre'] . "</p>";
            echo "<p>Fecha de Nacimiento: " . $row['fechan'] . "</p>";
            echo "<p>Correo Electrónico: " . $row['correoe'] . "</p>";
            echo "<form action='update.php' method='post'>";
            echo "<label for='correo_electronico'>Nuevo Correo Electrónico:</label>";
            echo "<input type='email' id='correo_electronico' name='correo_electronico' required>";
            echo "<input type='hidden' name='cedula' value='" . $row['cedula'] . "'>";
            echo "<input type='submit'  value='Modificar'>";
            echo "</form>";
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['correo_electronico'])) {
                $nuevo_correo = $_POST["correo_electronico"];
                $sql_update = "UPDATE personas SET correoe='$nuevo_correo' WHERE cedula='$cedula'";
                if (mysqli_query($conn, $sql_update)) {
                    echo "<p>Correo electrónico modificado correctamente.</p>";
                } else {
                    echo "<p>Error al modificar el correo electrónico: " . mysqli_error($conn) . "</p>";
                }
            }
        } else {
            echo "<p>No se encontraron resultados para la Cédula proporcionada.</p>";
        }
    
        mysqli_close($conn);
    }
    ?>
    <a style="background-color:red;"  href="Panel.admin.php">Volver a Inicio</a>
  </div>
</body>
</html>