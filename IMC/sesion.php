<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #00fff2;
            --secondary-color: #0051ff;
            --background-dark: #0a1128;
            --text-color: #ffffff;
            --error-color: #ff2957;
            --success-color: #00ffa3;
            --gradient-1: linear-gradient(135deg, rgba(0, 255, 242, 0.4), rgba(0, 81, 255, 0.4));
            --gradient-2: linear-gradient(45deg, #00fff2, #0051ff);
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
            background: radial-gradient(circle at top right, #001233, #000810);
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 20%, rgba(0, 255, 242, 0.1) 0%, transparent 40%),
                radial-gradient(circle at 80% 80%, rgba(0, 81, 255, 0.1) 0%, transparent 40%);
            filter: blur(60px);
            z-index: 0;
        }

        .container {
            width: 100%;
            max-width: 420px;
            position: relative;
            z-index: 1;
        }

        form {
            background: rgba(255, 255, 255, 0.05);
            padding: 3rem;
            border-radius: 24px;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 
                0 0 40px rgba(0, 255, 242, 0.1),
                inset 0 0 20px rgba(255, 255, 255, 0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        form:hover {
            transform: translateY(-5px);
            box-shadow: 
                0 0 60px rgba(0, 255, 242, 0.2),
                inset 0 0 30px rgba(255, 255, 255, 0.05);
        }

       .logo {
            width: 120px;
            height: auto;
            display: block;
            margin: 0 auto 2rem;
            filter: drop-shadow(0 0 8px rgba(0, 255, 242, 0.5));
        }
        @keyframes logoFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            margin-bottom: 2.5rem;
        }

        .input-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        input {
            width: 100%;
            padding: 1.2rem 1.2rem 1.2rem 4rem;
            background: rgba(255, 255, 255, 0.03);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            color: var(--text-color);
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.4);
            font-weight: 300;
        }

        input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 20px rgba(0, 255, 242, 0.2);
            background: rgba(255, 255, 255, 0.05);
        }

        .input-container i {
            position: absolute;
            left: 1.5rem;
            color: var(--primary-color);
            font-size: 1.4rem;
            pointer-events: none;
            transition: all 0.3s ease;
            animation: iconGlow 2s infinite;
        }

        @keyframes iconGlow {
            0%, 100% { filter: drop-shadow(0 0 5px var(--primary-color)); }
            50% { filter: drop-shadow(0 0 15px var(--primary-color)); }
        }

        .btn {
            width: 100%;
            padding: 1.2rem;
            border: none;
            border-radius: 16px;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            margin-bottom: 1.5rem;
            position: relative;
            overflow: hidden;
        }

        .btn[type="submit"] {
            background: var(--gradient-2);
            color: var(--background-dark);
            box-shadow: 0 5px 15px rgba(0, 255, 242, 0.3);
        }

        .btn[type="button"] {
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-color);
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
        }

        .btn:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 25px rgba(0, 255, 242, 0.4);
        }

        .btn:active {
            transform: translateY(1px);
        }

        .btn::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: rotate(45deg);
            animation: buttonShine 3s infinite;
        }

        @keyframes buttonShine {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }

        .create-account {
            text-align: center;
            margin-top: 2rem;
            color: var(--text-color);
            font-weight: 300;
        }

        .create-account p {
            margin-bottom: 0.5rem;
            opacity: 0.8;
        }

        .create-account a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            position: relative;
            transition: all 0.3s ease;
        }

        .create-account a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 1px;
            background: var(--gradient-2);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .create-account a:hover::after {
            transform: scaleX(1);
        }

        .create-account a:hover {
            text-shadow: 0 0 20px rgba(0, 255, 242, 0.8);
        }

        #button2 {
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        #button2.active {
            opacity: 1;
            background: var(--gradient-1);
            border: none;
        }

        #button2:disabled {
            cursor: not-allowed;
        }
        .mensaje-error {
            background: rgba(255, 41, 87, 0.1);
            color: var(--error-color);
            padding: 1rem;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 1rem;
            border: 1px solid rgba(255, 41, 87, 0.2);
            backdrop-filter: blur(5px);
        }

        .mensaje-exito {
            background: rgba(0, 255, 163, 0.1);
            color: var(--success-color);
            padding: 1rem;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 1rem;
            border: 1px solid rgba(0, 255, 163, 0.2);
            backdrop-filter: blur(5px);
        }
    </style>
</head>
<body>
    <?php
    // Configuración de la conexión a la base de datos
    $host = 'localhost';
    $dbname = 'imc';
    $username = 'root';
    $password = '';
    $mensaje = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Procesar el formulario cuando se envía
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correo = $_POST['email'];
            $contrasena = $_POST['password'];
            
            // Preparar la consulta
            $stmt = $pdo->prepare("SELECT * FROM datos WHERE correo = :correo AND contrasena = :contrasena");
            $stmt->execute(['correo' => $correo, 'contrasena' => $contrasena]);
            
            if ($stmt->rowCount() > 0) {
                // Usuario encontrado - Iniciar sesión
   
                $mensaje = '<div class="mensaje-exito">Inicio de sesión exitoso</div>';
                // Habilitar el botón ENTRAR mediante JavaScript
                echo "<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        document.getElementById('button2').disabled = false;
                        document.getElementById('button2').classList.add('active');
                        document.getElementById('button1').disabled = true;
                    });
                </script>";
            } else {
                // Usuario no encontrado
                $mensaje = '<div class="mensaje-error">Correo o contraseña incorrectos</div>';
            }
        }
    } catch(PDOException $e) {
        $mensaje = '<div class="mensaje-error">Error de conexión: ' . $e->getMessage() . '</div>';
    }
    ?>

    <div class="container">
        <form method="post" autocomplete="off" id="loginForm">
        
            
            <?php if ($mensaje) echo $mensaje; ?>

            <div class="input-group">
                <div class="input-container">
             
                    <input type="email" name="email" placeholder="Correo electrónico" required>
                    <i class="fa-solid fa-envelope"></i>
                </div>
                
                <div class="input-container">
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
            </div>

            <input type="submit" class="btn" id="button1" value="INICIAR SESIÓN">
            
            <a href="consulta.html">
                <input type="button" id="button2" class="btn" value="ENTRAR" disabled>
            </a>

            <div class="create-account">
                <p>¿No tienes una cuenta?</p>
                <a href="index.php">Crear cuenta</a>
               
            </div>
        </form>
    </div>
</body>
</html>