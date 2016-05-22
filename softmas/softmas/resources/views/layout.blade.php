<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Consulta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/styles.css" media="screen" title="no title" charset="utf-8">
  <link href='https://fonts.googleapis.com/css?family=Courgette|Josefin+Sans' rel='stylesheet' type='text/css'>


</head>
<body>
  <div class="container">
    <header>
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
        <div class="col-xs-6">
          <image src="images/logoCaudex.PNG" alt="Caudex IT"></image>
        </div>
        <div class="col-xs-6">
          <p class="text-right">
            <a href="http://www.caudexit.com">www.caudexit.com</a>
          </p>
        </div>
      </div>
    </header>

    @yield('content')

  </div>
</body>
</html>
