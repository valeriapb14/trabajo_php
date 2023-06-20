<?php
$host = "localhost"; 
$usuario = "root"; 
$contrasena = ""; 
$base_datos = "base"; 

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $EmpleadoID = $_POST['EmpleadoID'];
    $Salario = $_POST['Salario'];
    $FechaInicio = $_POST['FehaInicio'];

    //Transformar fechita
    $parte = explode("/", $FechaInicio);
    $Fecha = implode("-", array_reverse($parte));
    //Transformacito fin

    // Preparar la consulta SQL para insertar los datos en la tabla departamentos
    $sql = "INSERT INTO salarios (EmpleadoID, Salario, FechaInicio) VALUES ('$EmpleadoID', '$Salario', '$Fecha')";

    // Ejecutar la consulta
    if ($conexion->query($sql) === true) {
        echo "<script>alert('Se estableció de manera correcta el salario')</script>";
        echo "<script>window.location.href = 'salarios.php'</script>";
    } else {
        echo "<script>alert('No se modifico de manera correcta el salario')</script>";
        echo "<script>window.location.href = 'salarios.php'</script>";
    }
}

// Cerrar la conexión
$conexion->close();
?>


