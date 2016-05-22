<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado de la estimación</title>
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
          <li><a href="/">Home</a></li>
          <li><a href="/empresas">Empresas</a></li>
          <li><a href="/clientes">Clientes</a></li>
          <li><a href="/usuarios">Usuarios</a></li>
          <li><a href="/parametros">Parametros</a></li>
          <li><a href="/cotizar">Cotizar</a></li>
        </ul>
      </nav>
    </div>
    <div class="row">
      <div class="container">
        <div class="col-xs-3">
            <image src="images/logoCaudex.PNG" alt="Caudex IT"></image>
        </div>
        <div class="col-xs-9">
          <section class="datos_cliente">
            <h2>Nombre de cliente</h2>
            <h3>
              Desarrollo: Nombre del desarrollo
            </h3>
          </section>
        </div>
      </div>
    </div>
    <div class="col-xs-10">
      <form class="formulario" action="index.html" method="post">
        <div class="container">
          <fieldset name="botones" class="form-group text-center">
            <input type="button" name="imprimir" value="Imprimir cotización" class="btn btn-danger">
            <input type="button" name="guardar" value="Guardar en PDF" class="btn btn-primary">
          </fieldset>
        </div>
        <fieldset name="requerimiento" class="form-group">
          <legend>Requerimiento</legend>
          <textarea name="requerimiento" rows="8" cols="40" class="form-control"></textarea>
        </fieldset>
        <fieldset name="alcance" class="form-group">
          <legend>Alcance</legend>
          <textarea name="alcance" rows="8" cols="40" class="form-control"></textarea>
        </fieldset>
        <fieldset name="datos_estimacion_desarrollo" class="form-group">
          <legend>Desarrollo</legend>
          <label for="horas">Desarrollando:</label>
          <input type="text" name="horas" value="" class="form-control">
          <label for="documentacion">Documentando:</label>
          <input type="text" name="doumentacion" value="" class="form-control">
        </fieldset>
        <fieldset name="datos_estimacion_consultoria" class="form-group">
          <legend>Consultoría</legend>
          <label for="horas">Recopilando información:</label>
          <input type="text" name="horas" value="" class="form-control">
          <label for="horas">Probando:</label>
          <input type="text" name="horas" value="" class="form-control">
          <label for="documentacion">Documentando:</label>
          <input type="text" name="doumentacion" value="" class="form-control">
        </fieldset>
        <fieldset name="datos_estimacion_consultoria" class="form-group">
          <legend>Total</legend>
          <label for="horas">Total de horas:</label>
          <input type="text" name="total_horas" value="" class="form-control">
          <label for="fecha">Fecha de entrega:</label>
          <input type="text" name="fecha" value="" class="form-control">
          <label for="valor_hora">Valor hora $:</label>
          <input type="text" name="valor_hora" value="" class="form-control">
          <label for="total_desarrollo">Total $:</label>
          <input type="text" name="total_desarrollo" value="" class="form-control">
        </fieldset>
      </form>
    </div>
  </div>
</body>
</html>
