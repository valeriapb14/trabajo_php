<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menù Lateral con Css</title>
	<link rel="stylesheet" href="orden/css/styleMenu.css">
</head>
<body>
    
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>¡Bienvenido!</h1>
				
			</div>
			<nav class="menu">
				
				<a href="index.php">Salir</a>
			</nav>
		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="RegistrarEmpleado.php">Registrar empleado</a>
			<a href="departamentos.php">Departamentos</a>
			<a href="salarios.php">Salarios</a>
			<a href="informacion.php">informacion</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>

</body>
</html>