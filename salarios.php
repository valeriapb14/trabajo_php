<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="orden/css/stylesalarios.css">
</head>
<body>
  <div class="login-container">
    <h2 class="login-heading">SALARIOS</h2>
    
    <form action="conexionSala.php" method="POST">

    <div class="form-group">
        <label for="fecha-inicio">Empleado</label>
        <input type="text" id="fecha-inicio" name="EmpleadoID" required>
      </div>
    <div class="form-group">
        <label for="salario">Salario</label>
        <input type="text" id="salario" name="Salario" required>
      </div>
 
    <div class="form-group">
        <label for="fecha-inicio">Fecha Inicio</label>
        <input type="date" id="fecha-inicio" name="FehaInicio" required>
      </div>
      

      
      <button class="save-button" type="submit" onclick="window.location.href = 'paginadepartamentos.php';">Guardar</button>


    </form>
    </div>
  </div>


</body>
</html>
