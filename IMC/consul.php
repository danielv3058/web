<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imc";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Obtener los valores de búsqueda desde el formulario
    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    
    // Preparar la consulta SQL
    $sql = "SELECT nombre, AP, AM, edad, sexo, enfermedad, otra_enfermedad, objetivo, otro_objetivo, altura, peso, IMC, Fecha_De_Visita
            FROM registro
            WHERE nombre LIKE :nombre
            AND AP LIKE :apellidoPaterno
            AND AM LIKE :apellidoMaterno";
    $stmt = $conn->prepare($sql);
    
    // Vincular los parámetros
    $stmt->bindValue(':nombre', "%$nombre%", PDO::PARAM_STR);
    $stmt->bindValue(':apellidoPaterno', "%$apellidoPaterno%", PDO::PARAM_STR);
    $stmt->bindValue(':apellidoMaterno', "%$apellidoMaterno%", PDO::PARAM_STR);
    
    // Ejecutar la consulta
    $stmt->execute();
    $estudiantes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Enviar los resultados en formato JSON
    header('Content-Type: application/json');
    echo json_encode($estudiantes);
    
} catch(PDOException $e) {
    echo json_encode(['error' => 'Error de conexión a la base de datos: ' . $e->getMessage()]);
}
?>