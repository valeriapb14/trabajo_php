<!DOCTYPE html>
<html>
<head></title>
  <link rel="stylesheet" type="text/css" href="orden/css/stylesdepa.css">
</head>
<body>
  <div class="login-container">
    <h2 class="login-heading">DEPARTAMENTOS</h2>
    
    <form id="login-form" action="conexionDep.php" method="POST">
     
      
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="Nombre"placeholder="Ingresa el departamento" required>
      </div>

      <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <input type="descripcion" id="descripcion" name="Descripcion" placeholder="Descripcion" required>
      </div>


      
     

      

      

      <button class="save-button" type="submit" name="enviar">Crear</button>
    </form>
  </div>


</body>
</html>
