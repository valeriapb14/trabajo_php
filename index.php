<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sesion</title>
  <link rel="stylesheet" type="text/css" href="orden/css/styleIndex.css">
</head>
<body>
  <div class="login-container">
    <img class="logo" src="orden/imagenes/imagen1.jpg" alt="Logo">

    <h1 class="login-heading">Inicio de  sesion</h1>
    <p class="login-description">Inicia sesion con tu cuenta <u><strong>Human Resources</strong></u>.</p>
    <br>



    <form id="login-form" action="conexionLogin.php" method="POST">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Ingresa tu email" name="usuario" required  style="background-color: #3f3b3b;">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Ingresa tu password" name="password" required style="background-color: #3f3b3b;">
      </div>

      <button class="login-button" type="submit" value="ingresar"><strong>Iniciar sesion</strong></button>
    </form>




  </div>
</body>
<script src="scriptindex.js"></script>
</html>







