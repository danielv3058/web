<html>
  <head>
    <title>MODIFICAR REGISTROS</title>
</head>
<body bgcolor="black">
  <center>
<?php
// procesar_modificacion.php

$servidor = "127.0.0.1";
$userdb = "root";
$passdb = "";
$dbnom = "imc";

// Crear conexión
$con = new mysqli($servidor, $userdb, $passdb, $dbnom);

// Verificar conexión
if ($con->connect_error) {
    die("Error de conexión: " . $con->connect_error);
}

// Obtener los datos del formulario
$searchName = $_POST['searchName'];
$nombre = $_POST['nom'];
$AP = $_POST['AP'];
$AM = $_POST['AM'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$enfermedad = $_POST['enfermedad'];
$otra_enfermedad = $_POST['otra_enfermedad'];
$objetivo = $_POST['objetivo'];
$otro_objetivo = $_POST['otro_objetivo'];
$altura = $_POST['alturaSlider'];
$peso = $_POST['pesoSlider'];
$IMC = $peso / (($altura/100) * ($altura/100));

// Preparar la consulta de actualización
$sql = "UPDATE registro SET 
        nombre = ?, 
        AP = ?, 
        AM = ?, 
        edad = ?, 
        sexo = ?, 
        enfermedad = ?, 
        otra_enfermedad = ?, 
        objetivo = ?, 
        otro_objetivo = ?, 
        altura = ?, 
        peso = ?, 
        IMC = ? 
        WHERE nombre = ?";

$stmt = $con->prepare($sql);
$stmt->bind_param("sssssssssddds", 
    $nombre, $AP, $AM, $edad, $sexo, $enfermedad, 
    $otra_enfermedad, $objetivo, $otro_objetivo, 
    $altura, $peso, $IMC, $searchName);

// Ejecutar la actualización y verificar el resultado
if ($stmt->execute()) {
    echo "<div style='
        background-color: rgba(0, 0, 0, 0.8);
        color: #ff0000;
        padding: 20px;
        margin: 20px;
        border: 2px solid #ff0000;
        border-radius: 5px;
        text-align: center;
        box-shadow: 0 0 10px #ff0000;
        text-shadow: 0 0 5px #ff0000;
        font-family: Arial, sans-serif;
    '>
        Registro actualizado exitosamente
        <br><br>
        <a href='consulta.html' style='
            display: inline-block;
            color: #ff0000;
            text-decoration: none;
            padding: 10px 20px;
            border: 2px solid #ff0000;
            border-radius: 5px;
            transition: all 0.3s ease;
        '>Volver al Inicio</a>
    </div>";
} else {
    echo "<div style='
        background-color: rgba(0, 0, 0, 0.8);
        color: #ff0000;
        padding: 20px;
        margin: 20px;
        border: 2px solid #ff0000;
        border-radius: 5px;
        text-align: center;
        box-shadow: 0 0 10px #ff0000;
        text-shadow: 0 0 5px #ff0000;
        font-family: Arial, sans-serif;
    '>
        Error al actualizar el registro: " . $stmt->error . "
        <br><br>
        <a href='consulta.html' style='
            display: inline-block;
            color: #ff0000;
            text-decoration: none;
            padding: 10px 20px;
            border: 2px solid #ff0000;
            border-radius: 5px;
            transition: all 0.3s ease;
        '>Volver al Inicio</a>
    </div>";
}

$stmt->close();
$con->close();
?>
</center>
</body>
</html>