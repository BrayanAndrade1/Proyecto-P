<?php
    include("conexion.php");
    $con = connection();
    $sql = "SELECT * FROM usuarios_datos";
    $query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Crear Cuenta</title>
        <link rel="stylesheet" type="text/css" href="css/EstiloCrearUsuario.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	</head>
	<body>
        <header class="header" id="inicio">
            <img src="img/hamburguer.svg" alt="" class="hamburguer">
            <nav class="menu">
                <a href="IniciarSesion.php"><h3>Iniciar Sesión</h3></a>
            </nav>
        </header>
        <main>
            <div class="pagina">
                <h1>Crear Cuenta</h1>
                <form action="insertar_usuario.php" class="formulario" id="formulario" method="post" enctype="multipart/form-data">
				    <!-- Grupo: Cedula -->
    				<div class="formulario_grupo" id="grupo_cedula">
                        <label for="cedula" class="formulario_label">Cédula</label>
					    <div class="formulario_grupo-input">
                            <input type="text" class="formulario_input" name="cedula" id="cedula" maxlength="10" placeholder="">
						    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                        </div>
					    <p class="formulario_input-error">La cédula tiene que ser de 10 dígitos y solo puede contener números.</p>
                    </div>
            	    <!-- Grupo: Usuario -->
				    <div class="formulario_grupo" id="grupo_usuario">
                        <label for="usuario" class="formulario_label">Usuario</label>
					    <div class="formulario_grupo-input">
                            <input type="text" class="formulario_input" name="usuario" id="usuario" placeholder="brayan123">
						    <i class="formulario_validacion-estado fas fa-times-circle"></i>
					    </div>
					    <p class="formulario_input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                    </div>
				    <!-- Grupo: Nombre -->
				    <div class="formulario_grupo" id="grupo_nombre">
                        <label for="nombre" class="formulario_label">Nombre y Apellido</label>
				        <div class="formulario_grupo-input">
					        <input type="text" class="formulario_input" name="nombre" id="nombre" placeholder="John Doe">
						    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                        </div>
					    <p class="formulario_input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                    </div>
				    <!-- Grupo: Contraseña -->
				    <div class="formulario_grupo" id="grupo_password">
				        <label for="password" class="formulario_label">Contraseña</label>
					    <div class="formulario_grupo-input">
					        <input type="password" class="formulario_input" name="password" id="password">
						    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                        </div>
					    <p class="formulario_input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
                    </div>
				    <!-- Grupo: Contraseña 2 -->
				    <div class="formulario_grupo" id="grupo_password2">
				        <label for="fecha_nac" class="formulario_label">Fecha de Nacimiento:</label>
					    <div class="formulario_grupo-input">
					        <input type="date" class="formulario_input" name="fecha_nac" id="fecha_nac">
					        <i class="formulario_validacion-estado fas fa-times-circle"></i>
                        </div>
					    <p class="formulario_input-error">La fecha debe ser correcta.</p>
                    </div>
				    <!-- Grupo: Correo Electronico -->
				    <div class="formulario_grupo" id="grupo_correo">
				        <label for="correo" class="formulario_label">Correo Electrónico</label>
					    <div class="formulario_grupo-input">
					        <input type="email" class="formulario_input" name="correo" id="correo" placeholder="alguien@paginacorreo.com">
						    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                        </div>
					    <p class="formulario_input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
                    </div>
				    <!-- Grupo: Terminos y Condiciones -->
				    <div class="formulario_grupo" id="grupo_terminos">
			 	        <label class="formulario_label">
					        <input class="formulario_checkbox" type="checkbox" name="terminos" id="terminos">
                            Acepto los Terminos y Condiciones
                        </label>
                    </div>
				    <div class="formulario_mensaje" id="formulario_mensaje">
				        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                    </div>
				    <div class="formulario_grupo formulario_grupo-btn-enviar">
                        <button type="submit" href="index1.php" class="formulario_btn"><b>Crear Cuenta</b></button>
                	    <button type="reset" href="index1.html" class="formulario_btn"><b>Cancelar</b></button>
					    <p class="formulario_mensaje-exito" id="formulario_mensaje-exito">Cuenta creada exitosamente!</p>
                    </div>
                </form>
                <h3>Ya dispone de una cuenta?...</h3>
                <h3>Haga click en el icono de la parte superior derecha para Iniciar Sesión.</h3>
            </div>
        </main>
        <script src="js/menu.js"></script>
        <!-- <script src="js/formulario.js"></script>-->
	    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>