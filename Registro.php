<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Compras</title>
    
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
    width: 600px;          /* Ajustar el ancho del contenedor */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: left;
    border-radius: 8px;
    margin: 20px;
}

h1 {
    background-color: #d9d9d9;  /* Color de fondo gris */
    padding: 15px;
    text-align: center;
    margin: -20px -20px 20px -20px; /* Expandir para cubrir el borde del contenedor */
    font-size: 24px;
    font-weight: bold;
    border-bottom: 1px solid #ccc;
}

.form-section, .info-section {
    margin-bottom: 20px;
}

label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    width: 100%;
    cursor: pointer;
    border-radius: 4px;
    font-size: 16px;
    margin-top: 10px;
}

button:hover {
    background-color: #0056b3;
}

/* Estilo para el botón de Consultar en color verde */
.consultar-btn {
    background-color: #28a745;
}

.consultar-btn:hover {
    background-color: #218838;
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
                <input type="text" name="producto2" placeholder="Producto 2">
                <input type="text" name="producto3" placeholder="Producto 3">
                <input type="text" name="producto4" placeholder="Producto 4">
                <input type="text" name="producto5" placeholder="Producto 5">
                <button type="submit" name="consultar" class="consultar-btn">Consultar</button>
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
        if (isset($_POST['consultar'])) {
            echo '<div class="result">';
            echo '<h3>Productos Ingresados:</h3>';
            for ($i = 1; $i <= 5; $i++) {
                $producto = $_POST["producto$i"];
                if (!empty($producto)) {
                    echo "<p>Producto $i: $producto</p>";
                }
            }
            echo '</div>';
        }

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
