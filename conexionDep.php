<?php
$host = "localhost"; // Reemplaza con el nombre del host de tu servidor de base de datos
$usuario = "root"; // Reemplaza con el nombre de usuario de tu base de datos
$contrasena = ""; // Reemplaza con la contraseña de tu base de datos
$base_datos = "base"; // Reemplaza con el nombre de tu base de datos

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $Nombre = $_POST['Nombre'];
    $Descripcion = $_POST['Descripcion'];

    // Preparar la consulta SQL para insertar los datos en la tabla departamentos
    $sql = "INSERT INTO departamentos (Nombre, Descripcion) VALUES ('$Nombre', '$Descripcion')";

    // Ejecutar la consulta
    if ($conexion->query($sql) === true) {
        echo "<script>alert('Se creo correctamente EL DEPARTAMENTO')</script>";
        echo "<script>window.location.href = 'departamentos.php'</script>";
    } else {
        echo "<script>alert('No se creo el departamento')</script>";
        echo "<script>window.location.href = 'departamentos.php'</script>";
    }
}

// Cerrar la conexión
$conexion->close();
?>


