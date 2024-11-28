<html>
  <head>
    <title>ELIMINAR REGISTROS</title>
</head>
<body bgcolor="black">
  <center>
<?php
// Configuración de la conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$password = "";
$basedatos = "imc";

try {
    // Crear conexión
    $conexion = new PDO("mysql:host=$servidor;dbname=$basedatos", $usuario, $password);
    // Configurar el modo de error de PDO para que lance excepciones
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Verificar si se recibieron los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener y limpiar los datos del formulario
        $nombre = trim($_POST['nombre']);
        $apellido_paterno = trim($_POST['apellido_paterno']);
        $apellido_materno = trim($_POST['apellido_materno']);
        
        // Preparar la consulta SQL usando parámetros preparados para prevenir SQL Injection
        $sql = "DELETE FROM registro WHERE 
                nombre = :nombre AND 
                AP = :apellido_paterno AND 
                AM = :apellido_materno";
        
        // Preparar la sentencia
        $stmt = $conexion->prepare($sql);
        
        // Vincular los parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido_paterno', $apellido_paterno);
        $stmt->bindParam(':apellido_materno', $apellido_materno);
        
        // Ejecutar la consulta
        $stmt->execute();
        
        // Verificar si se eliminó algún registro
        if ($stmt->rowCount() > 0) {
          echo "<div style='
              background-color: rgba(0, 0, 0, 0.8);
              color: #ff0000;
              padding: 15px;
              margin: 10px 0;
              border-radius: 4px;
              border: 2px solid #ff0000;
              box-shadow: 0 0 5px #ff0000,
                          0 0 15px #ff0000,
                          inset 0 0 5px #ff0000;
              text-shadow: 0 0 5px #ff0000;
              font-family: Arial, sans-serif;
              letter-spacing: 1px;
              '>
              Registro eliminado exitosamente.
              </div>";
      } else {
          echo "<div style='
              background-color: rgba(0, 0, 0, 0.8);
              color: #ff0000;
              padding: 15px;
              margin: 10px 0;
              border-radius: 4px;
              border: 2px solid #ff0000;
              box-shadow: 0 0 5px #ff0000,
                          0 0 15px #ff0000,
                          inset 0 0 5px #ff0000;
              text-shadow: 0 0 5px #ff0000;
              font-family: Arial, sans-serif;
              letter-spacing: 1px;
              '>
              No se encontró ningún registro con los datos proporcionados.
              </div>";
      }
      
      // Botón con efecto neón rojo
      echo "<br><a href='consulta.html' style='
          display: inline-block;
          background-color: #1a1a1a;
          color: #ff0000;
          padding: 10px 20px;
          text-decoration: none;
          border-radius: 4px;
          border: 2px solid #ff0000;
          box-shadow: 0 0 5px #ff0000,
                      0 0 15px #ff0000;
          text-shadow: 0 0 5px #ff0000;
          font-family: Arial, sans-serif;
          letter-spacing: 1px;
          transition: all 0.3s ease;
          '>
          Volver al Inicio
          </a>";
    }
} catch(PDOException $e) {
    // Manejo de errores
    echo "<div style='background-color: #f8d7da; color: #721c24; padding: 15px; margin: 10px 0; border-radius: 4px;'>
            Error: " . $e->getMessage() . "
          </div>";
}

// Cerrar la conexión
$conexion = null;
?>
</center>
</body>
</html>