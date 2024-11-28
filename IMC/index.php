<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Moderno</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #00fff2;
            --secondary-color: #0051ff;
            --background-dark: #0a1128;
            --text-color: #ffffff;
            --error-color: #ff2957;
            --success-color: #00ffa3;
            --icon-glow: 0 0 10px var(--primary-color),
                        0 0 20px var(--primary-color),
                        0 0 30px var(--primary-color);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, var(--background-dark), #000810);
            padding: 2rem;
        }

        .container {
            width: 100%;
            max-width: 420px;
        }

        form {
            background: rgba(255, 255, 255, 0.03);
            padding: 2.5rem;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(0, 255, 242, 0.1);
            transition: all 0.3s ease;
        }

        form:hover {
            box-shadow: 0 0 60px rgba(0, 255, 242, 0.2);
        }

        .logo {
            width: 120px;
            height: auto;
            display: block;
            margin: 0 auto 2rem;
            filter: drop-shadow(0 0 8px rgba(0, 255, 242, 0.5));
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .input-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        input {
            width: 100%;
            padding: 1rem 1rem 1rem 3.5rem;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            color: var(--text-color);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 15px rgba(0, 255, 242, 0.3);
        }

        .input-container i {
            position: absolute;
            left: 1.2rem;
            color: var(--primary-color);
            font-size: 1.2rem;
            pointer-events: none;
            transition: all 0.3s ease;
            text-shadow: var(--icon-glow);
            animation: iconPulse 2s infinite;
        }

        @keyframes iconPulse {
            0% {
                text-shadow: 0 0 5px var(--primary-color),
                            0 0 10px var(--primary-color);
            }
            50% {
                text-shadow: 0 0 10px var(--primary-color),
                            0 0 20px var(--primary-color),
                            0 0 30px var(--primary-color);
            }
            100% {
                text-shadow: 0 0 5px var(--primary-color),
                            0 0 10px var(--primary-color);
            }
        }

        .input-container input:focus + i {
            color: var(--text-color);
            text-shadow: 0 0 15px var(--text-color),
                        0 0 30px var(--text-color);
        }

        .btn {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
            position: relative;
            overflow: hidden;
        }

        .btn[type="submit"] {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: var(--background-dark);
        }

        .btn[type="button"] {
            background: rgba(255, 255, 255, 0.1);
            color: var(--text-color);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(0, 255, 242, 0.4);
        }

        .btn[type="submit"]:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent
            );
            transition: 0.5s;
        }

        .btn[type="submit"]:hover:before {
            left: 100%;
        }

        .btn[type="button"]:hover {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 5px 20px rgba(255, 255, 255, 0.2);
        }

        .success, .error {
            text-align: center;
            padding: 1rem;
            border-radius: 8px;
            margin-top: 1rem;
            font-weight: 500;
        }

        .success {
            background: rgba(0, 255, 163, 0.1);
            color: var(--success-color);
            border: 1px solid rgba(0, 255, 163, 0.2);
        }

        .error {
            background: rgba(255, 41, 87, 0.1);
            color: var(--error-color);
            border: 1px solid rgba(255, 41, 87, 0.2);
        }
        .texto{
            color: #fcfef7;
            text-align: center;
        }
        

        /* Efecto hover para los iconos */
        .input-container:hover i {
            animation: iconHover 1s infinite;
        }

        @keyframes iconHover {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<?php
// Configuración de la conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "");

// Crear la base de datos si no existe
$sql_crear_db = "CREATE DATABASE IF NOT EXISTS imc";
if (mysqli_query($conexion, $sql_crear_db)) {
    // Seleccionar la base de datos
    mysqli_select_db($conexion, "imc");
    
    // Crear la tabla si no existe
    $sql_crear_tabla = "CREATE TABLE IF NOT EXISTS datos (
        nombre VARCHAR(100) NOT NULL,
        correo VARCHAR(100) NOT NULL,
        contrasena VARCHAR(255) NOT NULL,
        telefono VARCHAR(20) NOT NULL
    )";
    
    if (!mysqli_query($conexion, $sql_crear_tabla)) {
        die("Error al crear la tabla: " . mysqli_error($conexion));
    }
} else {
    die("Error al crear la base de datos: " . mysqli_error($conexion));
}

// Procesar el formulario cuando se envía
if (isset($_POST['send'])) {
    $nombre = mysqli_real_escape_string($conexion, $_POST['name']);
    $correo = mysqli_real_escape_string($conexion, $_POST['email']);
    $contrasena = mysqli_real_escape_string($conexion, $_POST['password']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['phone']);
    
    // Insertar datos
    $query = "INSERT INTO datos (nombre, correo, contrasena, telefono) 
              VALUES ('$nombre', '$correo', '$contrasena', '$telefono')";
    
    if (mysqli_query($conexion, $query)) {
        echo "<script>alert('Usuario registrado exitosamente');</script>";
    } else {
        echo "<script>alert('Error al registrar usuario: " . mysqli_error($conexion) . "');</script>";
    }
}
?>


<body>
    <div class="container">
        <form method="post" autocomplete="off">
            <img src="logo.jpg" alt="Logo" class="logo">
            <div class="texto">
                <p>"IMC: Midiendo tu camino hacia una mejor salud."</p>
                <br>
            </div>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                
                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo" required>
                    <i class="fa-solid fa-envelope"></i>
                </div>
                
                <div class="input-container">
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                
                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Teléfono" required>
                    <i class="fa-solid fa-phone"></i>
                </div>
            </div>

            <input type="submit" name="send" class="btn" value="CREAR CUENTA"> 
            
            <a href="sesion.php"> 
                <input type="button" class="btn" value="INICIAR SESION">
            </a>
        </form>
    </div>
</body>
</html>