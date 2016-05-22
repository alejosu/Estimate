@extends('layout')

@section('content')

      <div class="row">
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
      
@stop
