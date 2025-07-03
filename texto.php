<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Guardar Texto</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('https://img.freepik.com/free-photo/white-wall-texture-background_53876-138197.jpg');
      background-size: cover;
      background-attachment: fixed;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      flex-direction: column;
    }

    .contenedor {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      text-align: center;
    }

    .contenido-flex {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      gap: 30px;
      margin-top: 20px;
    }

    textarea {
      padding: 10px;
      font-size: 16px;
      resize: none;
    }

    button {
      font-size: 16px;
      padding: 8px 16px;
      margin: 5px;
      cursor: pointer;
    }

    .resultado-textarea {
      width: 100%;
      max-width: 600px;
      height: 300px;
      background-color: #ffffff;
      border: 1px solid #ccc;
      padding: 10px;
      font-size: 14px;
      white-space: pre-wrap;
      margin: 20px auto 0;
      resize: none;
    }
  </style>
</head>
<body>

  <div class="contenedor">
    <h2>📝 Escribe tu texto y guárdalo</h2>

    <div class="contenido-flex">
      <!-- Imagen decorativa -->
      <img src="https://media.istockphoto.com/id/2117874301/vector/islamic-text-box-frame-with-gold-line-border-vector-illustration.jpg?s=612x612&w=0&k=20&c=r7mhPRkUJxw3LsvR08HMBWhN2wEJFd8edSKw4BKQvRE=" width="200" alt="Decoración" style="border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2);">

      <!-- Formulario -->
      <form method="post" action="">
        <textarea name="contenido" rows="10" cols="50" placeholder="Escribe aquí..."></textarea><br><br>
        <button type="submit" name="guardar">Guardar</button>
        <button type="submit" name="mostrar">Mostrar</button>
        <a href="style.php"><button type="button">Regresar</button></a>
      </form>
    </div>

    <?php
    $archivoRuta = "texto_guardado.txt";

    // Guardar texto
    if (isset($_POST["guardar"])) {
      $texto = trim($_POST["contenido"]);

      if (!empty($texto)) {
        $archivo = fopen($archivoRuta, "a");

        if ($archivo) {
          fwrite($archivo, "$texto\n----------------------\n");
          fclose($archivo);
          echo "<p style='color: green;'>✅ Texto guardado correctamente.</p>";
        } else {
          echo "<p style='color: red;'>❌ Error al abrir el archivo para escribir.</p>";
        }
      } else {
        echo "<p style='color: orange;'>⚠️ El cuadro de texto está vacío.</p>";
      }
    }

    // Mostrar contenido del archivo en un textarea
    if (isset($_POST["mostrar"])) {
      if (file_exists($archivoRuta)) {
        $contenido = file_get_contents($archivoRuta);
        echo "<h3 style='color: #333;'>📄 Contenido guardado:</h3>";
        echo "<textarea class='resultado-textarea' readonly>$contenido</textarea>";
      } else {
        echo "<p style='color: gray;'>No hay texto guardado aún.</p>";
      }
    }
    ?>
  </div>

</body>
</html>
