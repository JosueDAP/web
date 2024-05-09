<?php

session_start();

if(isset($_SESSION['usuarios'])){
    header("location: VIEWS/PG-IN.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Login
    </title>
    <link rel="website icon" type="png" href="IMG_PAGINAS/6734512.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="CSSP/StyleLogin.css?=1.0">
</head>
<body>
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="PHP/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario O Email" name="usuario_email" id="usuario_email"required>
                    <input type="password" placeholder="Contraseña" name="contrasena" id="contrasena" required>
            <div class="remember-forget">
                    <label><input type="checkbox"/>Remember Me</label>
                    <br><br>
                    <a href="#">Forgot Password?</a>
            </div>                       
                        <button>Entrar</button>

                </form>

                <!--Register-->
                <form action="PHP/registro_usuario_be.php" method="POST" class="formulario__register" required>
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre De Usuario" name="nombre_completo" required>
                    <input type="text" placeholder="Correo Electronico" name="correo_electronico" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="JS_PAGINAS/JavaLogin.js"></script>
</body>
</html>