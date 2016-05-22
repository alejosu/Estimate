@extends('layout')

@section('content')

      <div class="row">
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

@stop
