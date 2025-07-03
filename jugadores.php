<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Jugadores</title>
  <style>
    body {
      background-image: url('voley2.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      color: black;
      font-family: Arial, sans-serif;
      text-align: center;
    }

    .contenedor {
      margin-top: 50px;
    }

    .radio-buttons {
      display: inline-block;
      text-align: left;
      margin-bottom: 30px;
    }

    .imagenes {
      margin-top: 20px;
      text-align: center;
    }

    .imagenes img {
      display: block;
      margin: 0 auto;
    }

    button {
      font-size: 16px;
      padding: 8px 16px;
      margin-top: 30px;
    }
  </style>
  <script>
    function mostrarImagen(id) {
      document.getElementById('img1').style.display = 'none';
      document.getElementById('img2').style.display = 'none';
      document.getElementById('img3').style.display = 'none';
      document.getElementById(id).style.display = 'block';
    }
  </script>
</head>
<body>

  <div class="contenedor">
    <h1>Selecciona un jugador</h1>

    <div class="radio-buttons">
      <input type="radio" name="jugador" onclick="mostrarImagen('img1')"> Giba<br><br>
      <input type="radio" name="jugador" onclick="mostrarImagen('img2')"> Emanuel Rego<br><br>
      <input type="radio" name="jugador" onclick="mostrarImagen('img3')"> Dante Amaral<br><br>
    </div>

    <div class="imagenes">
      <img id="img1" src="jugador1.jpg" alt="Jugador 1" width="250" style="display:none;">
      <img id="img2" src="jugador2.jpg" alt="Jugador 2" width="250" style="display:none;">
      <img id="img3" src="jugador3.jpg" alt="Jugador 3" width="250" style="display:none;">
    </div>

    <form action="style.php" method="get">
      <button type="submit">Atrás</button>
    </form>
  </div>

</body>
</html>
