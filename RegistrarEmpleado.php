<!DOCTYPE html>
<html>

<head>
  <title>Registro empleados</title>
  <link rel="stylesheet" href="orden/css/stylesregistro.css">

</head>

<body>
  <div class="login-container">
    <a href="index.php" class="back-link"></a>

    <h2 class="login-heading">Registro empleados</h2>
    <p class="login-description">Completa los siguientes datos.</p>

    <form action="conexionEmp.php" method="POST">
      <div class="form-group">
        <span class="name-input">NombreEmp</span>
        <input type="text" name="NombreEmp" class="input-line" id="name-input" placeholder="Ingrese el nombre">
      </div>

      <div class="form-group">
        <span class="name-input">Apellido</span>
        <input type="text" name="Apellido" placeholder="Ingresa el apellido" required>
      </div>

      <div class="form-group">
        <span class="name-input">DepartamentoID</span>
        <input type="text" name="DepartamentoID" placeholder="Ingresa el departamento" required>
      </div>

      <div class="form-group">
        <label for="fecha-contratacion">Fecha de Contratación</label>
        <input type="date" id="fecha-contratacion" name="FechaContratacion" required>
      </div>

      <div class="button-group">
        <button type="submit" name="Registrar" class="button-class"><i class="fas fa-user-plus"></i>Registrar</button>
        <button type="submit" name="submit" value="buscar" class="button-class"><i class="fas fa-search"></i>Buscar</button>
        
      </div>
    </form>
  </div>
</body>

</html>
