<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda de Voleibol</title>
    <style>
        body {
            background-image: url('https://wallpapers.com/images/high/cute-volleyball-mt5w6wy8he437cib.webp');
            background-size: cover;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
            padding-bottom: 50px;
        }
        h1 {
            margin-top: 30px;
            text-shadow: 2px 2px 4px #000;
        }
        .producto {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            width: 300px;
            box-shadow: 0 0 10px #000;
        }
        img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        input[type="number"] {
            width: 60px;
            padding: 5px;
            font-size: 16px;
        }
        input[type="submit"], .boton-regresar {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        input[type="submit"]:hover, .boton-regresar:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>🏐 Tienda de Voleibol</h1>

    <!-- Balón de Voleibol -->
    <div class="producto">
        <form method="post">
            <img src="https://m.media-amazon.com/images/I/71i0YRrC3lL._AC_SL1500_.jpg" alt="Balón de Voleibol">
            <h3>Balón de Voleibol - $300</h3>
            <label>Cantidad:</label>
            <input type="number" name="cantidad_balon" min="0" value="0">
            <input type="submit" name="comprar_balon" value="Comprar">
        </form>
        <?php
        if (isset($_POST['comprar_balon'])) {
            $precio = 300;
            $cantidad = intval($_POST['cantidad_balon']);
            $descuento = ($cantidad > 3) ? 0.05 : 0;
            $subtotal = $cantidad * $precio;
            $monto_descuento = $subtotal * $descuento;
            $total = $subtotal - $monto_descuento;

            echo "<p>✅ Compra Exitosa</p>";
            echo "<p>$cantidad × Balón de Voleibol</p>";
            echo "<p>Subtotal: $$subtotal MXN</p>";
            echo "<p>Descuento: -$" . number_format($monto_descuento, 2) . " MXN</p>";
            echo "<p><strong>Total a pagar: $" . number_format($total, 2) . " MXN</strong></p>";
        }
        ?>
    </div>

    <!-- Rodilleras -->
    <div class="producto">
        <form method="post">
            <img src="https://m.media-amazon.com/images/I/71p-KGj7WoL.jpg" alt="Rodilleras de Voleibol">
            <h3>Rodilleras - $200</h3>
            <label>Cantidad:</label>
            <input type="number" name="cantidad_rodilleras" min="0" value="0">
            <input type="submit" name="comprar_rodilleras" value="Comprar">
        </form>
        <?php
        if (isset($_POST['comprar_rodilleras'])) {
            $precio = 200;
            $cantidad = intval($_POST['cantidad_rodilleras']);
            $descuento = ($cantidad > 3) ? 0.10 : 0;
            $subtotal = $cantidad * $precio;
            $monto_descuento = $subtotal * $descuento;
            $total = $subtotal - $monto_descuento;

            echo "<p>✅ Compra Exitosa</p>";
            echo "<p>$cantidad × Rodilleras</p>";
            echo "<p>Subtotal: $$subtotal MXN</p>";
            echo "<p>Descuento: -$" . number_format($monto_descuento, 2) . " MXN</p>";
            echo "<p><strong>Total a pagar: $" . number_format($total, 2) . " MXN</strong></p>";
        }
        ?>
    </div>

    <!-- Camiseta Deportiva -->
    <div class="producto">
        <form method="post">
            <img src="https://tacnacentro.cl/wp-content/uploads/2024/11/camiseta-de-voleibol-cvf-01-negro-fucsia.webp" alt="Camiseta Deportiva">
            <h3>Camiseta Deportiva - $250</h3>
            <label>Cantidad:</label>
            <input type="number" name="cantidad_camiseta" min="0" value="0">
            <input type="submit" name="comprar_camiseta" value="Comprar">
        </form>
        <?php
        if (isset($_POST['comprar_camiseta'])) {
            $precio = 250;
            $cantidad = intval($_POST['cantidad_camiseta']);
            $descuento = ($cantidad > 3) ? 0.15 : 0;
            $subtotal = $cantidad * $precio;
            $monto_descuento = $subtotal * $descuento;
            $total = $subtotal - $monto_descuento;

            echo "<p>✅ Compra Exitosa</p>";
            echo "<p>$cantidad × Camiseta Deportiva</p>";
            echo "<p>Subtotal: $$subtotal MXN</p>";
            echo "<p>Descuento: -$" . number_format($monto_descuento, 2) . " MXN</p>";
            echo "<p><strong>Total a pagar: $" . number_format($total, 2) . " MXN</strong></p>";
        }
        ?>
    </div>

    <br>
    <a href="style.php" class="boton-regresar">🔁 Regresar</a>
</body>
</html>
