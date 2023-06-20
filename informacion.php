<!DOCTYPE html>
<html>
<head>
  <title>Información de Empleado</title>
  <link rel="stylesheet" href="orden/css/stylesinformacion.css">
</head>
<body>
  <center><div class="login-container">
    <a href="index.php" class="back-link"></a>

    <h2 class="login-heading">Información de Empleado</h2>
    <p class="login-description">Ingrese el ID del empleado para obtener su información.</p>

    <form action="conexionInfo.php" method="POST">
      <div class="form-group">
        <span class="name-input">ID del Empleado</span>
        <input type="text" name="EmpleadoID" class="input-line" id="id-input" placeholder="Ingrese el ID del empleado">
      </div></center>

      <div class="button-group">
        <br>
        <br>
        <center><button type="submit" name="ObtenerInfo" class="button-class"><i class="fas fa-info-circle"></i>Obtener Información</button></center>
      </div>
    </form>
  </div>
</body>
</html>
