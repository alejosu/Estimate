@extends('layout')

@section('content')

      <div class="row">
        <div class="col-xs-12">
          <h1>Estimación de desarrollos para Dynamics AX</h1>
        </div>
      </div>
      <form class="formulario" action="index.html" method="post">
        <div class="form-group">
          <select class="combobox form-control" name="cliente" placeholder="Cliente">
            <option value="Cliente" selected>Cliente</option>
            <option value="Echeverria Izquierdo">Echeverria izquierdo</option>
            <option value="Totto">Totto</option>
            <option value="Casino Express">Casino Express</option>
            <option value="Ipal">Ipal</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" name="nombre" value="" placeholder="Nombre del desarrollo" class="input form-control">
        </div>
        <div class="form-group">
          <input type="text" name="horas_desarrollo" value="" placeholder="Horas de desarrollo" class="input form-control">
        </div>
        <div class="form-group">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Incluye pruebas
            </label>
          </div>
        </div>
        <div class="form-group">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Incluye documentacion
            </label>
          </div>
        </div>
        <div class="form-group">
          <input type="button" name="estimar" value="Estimar" class="boton btn btn-success">
        </div>
      </form>

@stop
