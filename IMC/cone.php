<html>
<head>
    <meta charset="utf-8">
    <title>Registro de IMC</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #ff0000;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
            text-shadow: 0 0 5px #ff0000;
        }

        h1 {
            text-align: center;
            color: #ff0000;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 0 0 10px #ff0000,
                         0 0 20px #ff0000,
                         0 0 30px #ff0000;
            margin-bottom: 30px;
            animation: neonPulse 1.5s infinite alternate;
        }

        @keyframes neonPulse {
            from {
                text-shadow: 0 0 10px #ff0000,
                            0 0 20px #ff0000,
                            0 0 30px #ff0000;
            }
            to {
                text-shadow: 0 0 15px #ff0000,
                            0 0 25px #ff0000,
                            0 0 35px #ff0000,
                            0 0 45px #ff0000;
            }
        }

        form {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background: rgba(0, 0, 0, 0.8);
            border: 2px solid #ff0000;
            border-radius: 10px;
            box-shadow: 0 0 10px #ff0000,
                       0 0 20px #ff0000,
                       inset 0 0 10px #ff0000;
        }

        .data-row {
            margin: 10px 0;
            padding: 15px;
            border-bottom: 1px solid #ff000050;
            transition: all 0.3s ease;
            transform-origin: left;
            cursor: pointer;
            position: relative;
        }

        .data-row:hover {
            transform: translateX(20px) scale(1.02);
            background: rgba(255, 0, 0, 0.1);
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
            padding-left: 25px;
        }

        .data-row::before {
            content: '►';
            position: absolute;
            left: -20px;
            opacity: 0;
            transition: all 0.3s ease;
            color: #ff0000;
        }

        .data-row:hover::before {
            opacity: 1;
            left: 5px;
        }

        .label {
            font-weight: bold;
            color: #ff3333;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .data-row:hover .label {
            transform: scale(1.05);
            text-shadow: 0 0 8px #ff0000;
        }

        a {
            display: inline-block;
            color: #ff0000;
            text-decoration: none;
            padding: 10px 20px;
            margin: 10px 5px;
            border: 2px solid #ff0000;
            border-radius: 5px;
            background: transparent;
            transition: all 0.3s ease;
            text-shadow: 0 0 5px #ff0000;
            box-shadow: 0 0 10px #ff0000;
            position: relative;
            overflow: hidden;
        }

        a:hover {
            background: #ff0000;
            color: #000;
            box-shadow: 0 0 15px #ff0000,
                       0 0 25px #ff0000;
            transform: translateY(-3px);
        }

        a::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 0, 0, 0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        a:hover::before {
            width: 200px;
            height: 200px;
        }

        input[type="button"] {
            background: transparent;
            color: #ff0000;
            border: 2px solid #ff0000;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.3s ease;
            text-shadow: 0 0 5px #ff0000;
            box-shadow: 0 0 10px #ff0000;
        }

        input[type="button"]:hover {
            background: #ff0000;
            color: #000;
            box-shadow: 0 0 15px #ff0000,
                       0 0 25px #ff0000;
            transform: translateY(-3px);
        }

        .success-message {
            background: rgba(0, 0, 0, 0.8);
            color: #ff0000;
            padding: 15px;
            margin: 20px 0;
            border: 2px solid #ff0000;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 0 10px #ff0000;
            text-shadow: 0 0 5px #ff0000;
            transition: all 0.3s ease;
            animation: messagePulse 2s infinite;
        }

        @keyframes messagePulse {
            0% { box-shadow: 0 0 10px #ff0000; }
            50% { box-shadow: 0 0 20px #ff0000, 0 0 30px #ff0000; }
            100% { box-shadow: 0 0 10px #ff0000; }
        }

        .buttons-container {
            text-align: center;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .buttons-container a {
            margin: 0;
        }
    </style>
</head>
<body>
    <form name="miformulario" method="post">
        <h1>Registro de IMC</h1>
        
        <div class="data-row">
            <span class="label">Nombre:</span> <?php echo $_POST['nom']?>
        </div>
        <div class="data-row">
            <span class="label">Apellido Paterno:</span> <?php echo $_POST['AP']?>
        </div>
        <div class="data-row">
            <span class="label">Apellido Materno:</span> <?php echo $_POST['AM']?>
        </div>
        <div class="data-row">
            <span class="label">Edad:</span> <?php echo $_POST['edad']?>
        </div>
        <div class="data-row">
            <span class="label">Sexo:</span> <?php echo $_POST['sexo']?>
        </div>
        <div class="data-row">
            <span class="label">Problema de Salud:</span> <?php echo $_POST['enfermedad']?>
        </div>
        <div class="data-row">
            <span class="label">Otro Problema de Salud:</span> <?php echo $_POST['otra_enfermedad']?>
        </div>
        <div class="data-row">
            <span class="label">Objetivo de Pérdida de Peso:</span> <?php echo $_POST['objetivo']?>
        </div>
        <div class="data-row">
            <span class="label">Otro Objetivo:</span> <?php echo $_POST['otro_objetivo']?>
        </div>
        <div class="data-row">
            <span class="label">Altura:</span> <?php echo $_POST['alturaSlider']?>
        </div>
        <div class="data-row">
            <span class="label">Peso:</span> <?php echo $_POST['pesoSlider']?>
        </div>
        <div class="data-row">
            <span class="label">IMC:</span> <?php echo $_POST['IMC']?>
        </div>

        <?php
        $NOM =$_POST['nom'];
        $AP =$_POST['AP'];
        $AM =$_POST['AM'];
        $EDAD =$_POST['edad'];
        $SEX =$_POST['sexo'];
        $ENFER =$_POST['enfermedad'];
        $OTRO1 =$_POST['otra_enfermedad'];
        $OB =$_POST['objetivo'];
        $OTRO2 =$_POST['otro_objetivo'];
        $ALT =$_POST['alturaSlider'];
        $PES =$_POST['pesoSlider'];
        $IMC =$_POST['IMC'];
    
        $servidor="127.0.0.1";
        $userdb="root";
        $passdb="";
        $dbnom="imc";
    
        $con = new mysqli($servidor, $userdb, $passdb, $dbnom);

        if ($con->connect_error) {
            echo "<div class='success-message'>Error de conexión: " . $con->connect_error . "</div>";
        }

        $consulta = "INSERT INTO registro(nombre,AP,AM,edad,sexo,enfermedad,otra_enfermedad,objetivo,otro_objetivo,altura,peso,IMC) 
                     VALUES ('$NOM','$AP','$AM','$EDAD','$SEX','$ENFER','$OTRO1','$OB','$OTRO2','$ALT','$PES','$IMC')";

        if ($con->query($consulta) === TRUE) {
            echo "<div class='success-message'>Registro exitoso</div>";
        } else {
            echo "<div class='success-message'>Error: " . $consulta . "<br>" . $con->error . "</div>";
        }

        $con->close();
        ?>

        <div class="buttons-container">
            <a href="consulta.html">VOLVER AL INICIO</a>
           
            <a href="IMC1.html">NUEVO REGISTRO</a>
        </div>
    </form>
</body>
</html>