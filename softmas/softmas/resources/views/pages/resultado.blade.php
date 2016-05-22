@extends('layout')

@section('content')

    <div class="col-xs-10">
      <div class="col-xs-9">
        <section class="datos_cliente">
          <h2>Nombre de cliente</h2>
          <h3>
            Desarrollo: Nombre del desarrollo
          </h3>
        </section>
      </div>
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

@stop
