<?php
$archivoJson = "datos.json";

if (isset($_POST['guardar'])) {
    // Capturar productos, descripciones y generar precios aleatorios
    $productos = [];
    for ($i = 1; $i <= 5; $i++) {
        $producto = $_POST["producto$i"];
        $descripcion = $_POST["descripcion$i"];
        if (!empty($producto) && !empty($descripcion)) {
            // Generar un precio aleatorio entre 10 y 100
            $precio = rand(10, 100);
            $codigo = uniqid("prod_");  // Generar un código único para el producto

            // Crear un array con los datos del producto
            $productos[] = [
                'codigo' => $codigo,
                'producto' => $producto,
                'descripcion' => $descripcion,
                'precio' => $precio
            ];
        }
    }

    // Leer datos existentes en el JSON
    $datosExistentes = [];
    if (file_exists($archivoJson)) {
        $jsonData = file_get_contents($archivoJson);
        $datosExistentes = json_decode($jsonData, true) ?? [];
    }

    // Agregar los nuevos productos al archivo JSON
    $datosExistentes = array_merge($datosExistentes, $productos);
    file_put_contents($archivoJson, json_encode($datosExistentes, JSON_PRETTY_PRINT));

    echo '<div class="result">';
    echo '<p>Productos guardados exitosamente.</p>';
    echo '</div>';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Compras</title>
    <style>
        /* Estilos igual que antes */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            border-radius: 8px;
            margin: 20px;
        }
        h1 {
            background-color: #d9d9d9;
            padding: 15px;
            text-align: center;
            margin: -20px -20px 20px -20px;
            font-size: 24px;
            font-weight: bold;
            border-bottom: 1px solid #ccc;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        input[type="text"], button {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Registro</h1>
    <form method="POST">
        <div class="form-section">
            <label>Compra</label>
            <input type="text" name="producto1" placeholder="Producto 1">
            <input type="text" name="descripcion1" placeholder="Descripción del Producto 1">

            <input type="text" name="producto2" placeholder="Producto 2">
            <input type="text" name="descripcion2" placeholder="Descripción del Producto 2">

            <input type="text" name="producto3" placeholder="Producto 3">
            <input type="text" name="descripcion3" placeholder="Descripción del Producto 3">

            <input type="text" name="producto4" placeholder="Producto 4">
            <input type="text" name="descripcion4" placeholder="Descripción del Producto 4">

            <input type="text" name="producto5" placeholder="Producto 5">
            <input type="text" name="descripcion5" placeholder="Descripción del Producto 5">

            <button type="submit" name="guardar" class="guardar-btn">Guardar</button>
        </div>

        <div class="info-section">
            <label for="saldoAnterior">Saldo Anterior</label>
            <input type="text" name="saldoAnterior" placeholder="Saldo Anterior">

            <label for="abono">Abono</label>
            <input type="text" name="abono" placeholder="Abono">
            <button type="submit" name="abonar">Abonar</button>
        </div>
    </form>

    <?php
    if (isset($_POST['abonar'])) {
        $saldoAnterior = isset($_POST['saldoAnterior']) ? (float)$_POST['saldoAnterior'] : 0;
        $abono = isset($_POST['abono']) ? (float)$_POST['abono'] : 0;
        $nuevoSaldo = $saldoAnterior - $abono;

        echo '<div class="result">';
        echo "<p><strong>Saldo Anterior:</strong> $ $saldoAnterior</p>";
        echo "<p><strong>Abono:</strong> $ $abono</p>";
        echo "<p><strong>Nuevo Saldo:</strong> $ $nuevoSaldo</p>";
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
