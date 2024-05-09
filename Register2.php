<!DOCTYPE html>
<html lang="en">
<!-- Project Name: Responsive Login Page
Youtube: https://youtube.com/@devRasen
Copyright: 2023 ©MdRasen -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrarse</title>
  <!-- FontAwesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="CSSP/StyleRegister2.css?=1.0" />
</head>

<body>
  <div class="container">
    <div class="login-box">
      <!-- Login Form -->
      <form action="PHP/registro_usuario_be.php" method="POST" class="formulario__register" required>
        <h2>Rsgister</h2>
        <div class="input-box">
          <span class="icon"><i class="fa-solid fa-user"></i></span>
          <input type="text" placeholder="Name" name="nombre_completo" required />
        </div>
        <div class="input-box">
          <span class="icon"><i class="fa-solid fa-envelope"></i></span>
          <input type="email" placeholder="Email" name="correo_electronico" required />
        </div>
        <div class="input-box">
          <span class="icon"><i class="fa-solid fa-lock"></i></span>
          <input type="password" placeholder="Password" name="contrasena" required />
        </div>
        
        <div class="remember-forget">
          <label><input type="checkbox" />Remember Me</label>
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit">Login</button>
        <div class="register-link">
          <a href="Login2.php">Ya tienes una cuenta? Inicia session</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>