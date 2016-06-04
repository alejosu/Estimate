@extends('layout')

@section('content')

      <div class="container-fluid">
          <h1 class="text-center">PARAMETROS</h1>
      </div>


      <div class="col-xs-4 col-xs-offset-4">
        <form class="formulario" action="parametros.html" method="post">

          <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
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
            <input type="submit" name="guardar" value="Guardar" class="boton btn btn-danger">
          </div>
        </form>
      </div>

@stop
