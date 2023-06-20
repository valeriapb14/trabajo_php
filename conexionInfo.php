<?php
// Validamos los datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

// Conectamos a la base de datos
$connection = mysqli_connect($host, $user, $pass);

// Verificamos la conexión a la base de datos
if (!$connection) {
    echo "No se ha podido conectar con el servidor: " . mysqli_connect_error();
    exit();
}

// Indicamos el nombre de la base de datos
$datab = "base";
// Seleccionamos la base de datos
$db = mysqli_select_db($connection, $datab);

if (!$db) {
    echo "No se ha podido encontrar la Tabla";
    exit();
}

if (isset($_POST['ObtenerInfo'])) {
    $EmpleadoID = $_POST["EmpleadoID"];

    // Consultamos la información del empleado según el ID ingresado
    $consulta = "SELECT * FROM empleados WHERE ID = '$EmpleadoID'";
    $result = mysqli_query($connection, $consulta);

    if ($result && mysqli_num_rows($result) > 0) {
        // Mostramos la información del empleado
        $empleado = mysqli_fetch_assoc($result);
        echo "<h1>Información del Empleado:</h1>";
        echo "<p>ID: " . $empleado['ID'] . "</p>";
        echo "<p>Nombre: " . $empleado['NombreEmp'] . "</p>";
        echo "<p>Apellido: " . $empleado['Apellido'] . "</p>";
        echo "<p>DepartamentoID: " . $empleado['DepartamentoID'] . "</p>";
        echo "<p>Fecha de Contratación: " . $empleado['FechaContratacion'] . "</p>";
        echo "<p>Salario: " . obtenerSalario($connection, $EmpleadoID) . "</p>"; // Obtener el salario del empleado
    } else {
        echo "No se encontró información para el ID del empleado proporcionado.";
    }
}

// Función para obtener el salario del empleado
function obtenerSalario($connection, $EmpleadoID) {
    $consultaSalario = "SELECT Salario FROM salarios WHERE EmpleadoID = '$EmpleadoID'";
    $resultSalario = mysqli_query($connection, $consultaSalario);

    if ($resultSalario && mysqli_num_rows($resultSalario) > 0) {
        $salario = mysqli_fetch_assoc($resultSalario);
        return $salario['Salario'];
    } else {
        return "No se encontró información de salario para el empleado.";
    }
}
?>
