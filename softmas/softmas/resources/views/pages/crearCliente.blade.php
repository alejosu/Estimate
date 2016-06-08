@extends('layout')

@section('content')

<div class="container-fluid">
    <h2 class="text-center">CREAR CLIENTE</h2>
</div>

<div class="col-xs-4 col-xs-offset-4">
  <form class="formulario" action="/crearCliente" method="post">
    <fieldset name="cliente" class="form-group">
      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
      <label for="nit">Nit:</label>
      <input type="text" name="nit" value="" class="form-control">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" value="" class="form-control">
      <label for="pais">País:</label>
      <input type="text" name="pais" value="" class="form-control">
      <label for="ciudad">Ciudad:</label>
      <input type="text" name="ciudad" value="" class="form-control">
      <label for="direccion">Dirección:</label>
      <input type="text" name="direccion" value="" class="form-control">
      <label for="telefono">Teléfono:</label>
      <input type="text" name="telefono" value="" class="form-control">
      <label for="logo">Logo:</label>
      <input type="text" name="logo" value="" class="form-control">
      <label for="valor_hora">Valor hora:</label>
      <input type="text" name="valor_hora" value="" class="form-control">
      <label for="contacto">Contacto:</label>
      <input type="text" name="contacto" value="" class="form-control">
    </fieldset>
    <div class="form-group">
      <input type="submit" name="crear" value="Crear" class="boton btn btn-primary">
    </div>
  </form>
</div>

@stop
