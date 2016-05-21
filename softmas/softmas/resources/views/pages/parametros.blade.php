<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Parámetros de estimación</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/styles.css" media="screen" title="no title" charset="utf-8">
  <link href='https://fonts.googleapis.com/css?family=Courgette|Josefin+Sans' rel='stylesheet' type='text/css'>


</head>
<body>
  <div class="container">
    <div class="row">
      <nav class="estimacion">
        <ul>
          <li><a href="/"></a>Home</li>
          <li><a href="/empresas"></a>Empresas</li>
          <li><a href="/clientes"></a>Clientes</li>
          <li><a href="/usuarios"></a>Usuarios</li>
          <li><a href="/parametros"></a>Parametros</li>
          <li><a href="/cotizar"></a>Cotizar</li>
        </ul>
      </nav>
    </div>
    <div class="col-xs-6">
      <div class="row">
        <div class="col-xs-12">
            <image src="images/logoCaudex.PNG" alt="Caudex IT" class="center-block"></image>
        </div>
        <div class="col-xs-12">
          <h1>Parámetros</h1>
        </div>
      </div>
      <form class="formulario" action="parametros.html" method="post">

        <fieldset name="Tecnologia" class="form-group">
          <legend>Tecnología</legend>
          <label for="porcentaje_documentacion">Porcentaje documentación:</label>
          <input type="text" name="porcentaje_documentacion" value="" placeholder="%" class="input form-control">
          <label for="porcentaje_pruebas">Porcentaje pruebas:</label>
          <input type="text" name="porcentaje_pruebas" value="" placeholder="%" class="input form-control">
        </fieldset>
        <fieldset name="Consultoria" class="form-group">
          <legend>Consultoría</legend>
          <label for="porcentaje_recopilacion">Porcentaje recopilación:</label>
          <input type="text" name="porcentaje_recopilacion" value="" placeholder="%" class="input form-control">
          <label for="porcentaje_pruebas">Porcentaje pruebas:</label>
          <input type="text" name="porcentaje_pruebas" value="" placeholder="%" class="input form-control">
          <label for="porcentaje_documentacion">Porcentaje documentación:</label>
          <input type="text" name="porcentaje_documentacion" value="" placeholder="%" class="input form-control">
        </fieldset>
        <div class="form-group">
          <input type="button" name="guardar" value="Guardar" class="boton btn btn-danger">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
