<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Crear usuario</title>
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
          <h1>Crear nuevo usuario</h1>
        </div>
      </div>
      <form class="formulario" action="index.html" method="post">
        <fieldset name="usuario" class="form-group">
          <label for="cedula">Cédula:</label>
          <input type="text" name="cedula" value="" class="form-control">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" value="" class="form-control">
          <label for="pais">País:</label>
          <input type="text" name="pais" value="" class="form-control">
          <label for="ciudad">Ciudad:</label>
          <input type="text" name="ciudad" value="" class="form-control">
          <label for="direccion">Dirección:</label>
          <input type="text" name="direccion" value="" class="form-control">
          <label for="teléfono">Teléfono:</label>
          <input type="text" name="teléfono" value="" class="form-control">
          <label for="avatar">Avatar:</label>
          <input type="text" name="avatar" value="" class="form-control">
          <label for="cargo">Cargo:</label>
          <input type="text" name="cargo" value="" class="form-control">
          <label for="empresa">Empresa:</label>
          <input type="text" name="empresa" value="" class="form-control">
        </fieldset>
        <div class="form-group">
          <input type="button" name="crear" value="Crear" class="boton btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
