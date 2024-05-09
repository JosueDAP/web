<!DOCTYPE html>
<html lang="en">
<!-- Project Name: Responsive Login Page
Youtube: https://youtube.com/@devRasen
Copyright: 2023 ©MdRasen -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iniciar Session</title>
  <!-- FontAwesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="CSSP/StyleLogin2.css?=1.0" />
</head>

<body>
  <div class="container">
    <div class="login-box">
      <!-- Login Form -->
      <form action="PHP/_functions.php" method="POST" class="formulario__login">
        <h2>Login</h2>
        <div class="input-box">
          <span class="icon"><i class="fa-solid fa-envelope"></i></span>
          <input type="text" placeholder="Email" name="usuario_email" required />
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
          <a href="Register2.php">No tienes una cuenta? Registrate!</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>