<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro y Consulta</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .container {
            max-width: 500px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            text-align: center;
            padding: 30px 20px;
        }

        h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 20px;
        }

        .botones {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        a {
            text-decoration: none;
        }

        button {
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            border: none;
            color: white;
            font-size: 18px;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        button:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-registrar {
            background: linear-gradient(135deg, #28a745, #5ed395);
        }

        .btn-registrar:hover {
            background: linear-gradient(135deg, #218838, #3ac97e);
        }

        .btn-consultar {
            background: linear-gradient(135deg, #007bff, #6bc8ff);
        }

        .btn-consultar:hover {
            background: linear-gradient(135deg, #0056b3, #469fdc);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Bienvenido</h1>
        <p>¿Deseas realizar una consulta o un registro?</p>

        <!-- Botones principales -->
        <div class="botones">
            <!-- Botón que redirige a la página de registro -->
            <a href="Registro.php">
                <button class="btn-registrar">Registrar</button>
            </a>
            <!-- Botón que redirige a la página de consulta -->
            <a href="consulta.html">
                <button class="btn-consultar">Consultar</button>
            </a>
        </div>
    </div>
</body>

</html>


