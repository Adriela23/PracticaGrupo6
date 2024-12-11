<?php
// Archivo JSON donde están guardados los productos
$archivoJson = "datos.json";

// Verificar si el archivo JSON existe
if (file_exists($archivoJson)) {
    // Leer el archivo JSON
    $jsonData = file_get_contents($archivoJson);
    $productos = json_decode($jsonData, true) ?? [];

    // Si el archivo contiene productos, los mostramos
    if (count($productos) > 0) {
        echo '<div class="container">';
        echo '<h1>Lista de Productos</h1>';
        echo '<table border="1" style="width:100%; border-collapse: collapse;">';
        echo '<tr><th>Código</th><th>Producto</th><th>Descripción</th><th>Precio</th></tr>';

        // Mostrar cada producto con su código, descripción y precio
        foreach ($productos as $producto) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($producto['codigo']) . '</td>';
            echo '<td>' . htmlspecialchars($producto['producto']) . '</td>';
            echo '<td>' . htmlspecialchars($producto['descripcion']) . '</td>';
            echo '<td>$' . htmlspecialchars($producto['precio']) . '</td>';
            echo '</tr>';
        }

        echo '</table>';
        echo '</div>';
    } else {
        echo '<div class="container"><p>No hay productos registrados.</p></div>';
    }
} else {
    echo '<div class="container"><p>No se encontró el archivo de productos.</p></div>';
}
?>
<style>
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

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
    }

    th {
        background-color: #f4f4f4;
    }

    td {
        background-color: #fff;
    }

    tr:nth-child(even) td {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }
</style>

