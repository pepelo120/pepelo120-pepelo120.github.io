<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pasión por el Vóley</title>
  <style>
    body {
      background-color: #87CEFA;
      font-family: Arial, sans-serif;
    }
    h1 {
      color: white;
      font-size: 60px;
    }
    .boton-menu {
      font-size: 18px;
      padding: 10px 20px;
      width: 220px;
      margin-bottom: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <div align="center">
    <h1>Pasión por el Vóley</h1>
    <table>
      <tr>
        <td align="center">
          <img src="voley.jpg" alt="Partido de Vóley" width="250">
        </td>
        <td style="padding-left: 30px;" align="center">
          <form method="get" action="jugadores.php">
            <button type="submit" class="boton-menu">Mejores jugadores</button>
          </form>
          <form method="get" action="texto.php">
            <button type="submit" class="boton-menu">Texto</button>
          </form>
          <form method="get" action="tienda.php">
            <button type="submit" class="boton-menu">Tienda</button>
          </form>
          <form method="get" action="partido.php">
            <button type="submit" class="boton-menu">partido</button>
          </form>
        </td>
      </tr>
    </table>
  </div>

</body>
</html>
