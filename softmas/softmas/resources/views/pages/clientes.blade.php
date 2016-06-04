@extends('layout')

@section('content')

      <div class="row">
        <div class="col-xs-12">
          <h1>Crear nuevo cliente</h1>
        </div>
      </div>


      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>
              Nit
            </th>
            <th>
              Nombre
            </th>
            <th>
              Dirección
            </th>
            <th>
              Teléfono
            </th>
            <th>
              Logo
            </th>
            <th>
              Valor hora
            </th>
            <th>
              Contacto
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($clientes as $cliente)
          <tr>
            <td>
              {{ $cliente->nit }}
            </td>
            <td>
              {{ $cliente->nombre }}
            </td>
            <td>
              {{ $cliente->direccion }}
            </td>
            <td>
              {{ $cliente->telefono }}
            </td>
            <td>
              {{ $cliente->logo }}
            </td>
            <td>
              {{ $cliente->valor_hora }}
            </td>
            <td>
              {{ $cliente->contacto }}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="col-xs-4 col-xs-offset-4">
        <form class="formulario" action="index.html" method="post">
          <fieldset name="cliente" class="form-group">
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
            <label for="teléfono">Teléfono:</label>
            <input type="text" name="teléfono" value="" class="form-control">
            <label for="logo">Logo:</label>
            <input type="text" name="logo" value="" class="form-control">
            <label for="valor_hora">Valor hora:</label>
            <input type="text" name="valor_hora" value="" class="form-control">
            <label for="contacto">Contacto:</label>
            <input type="text" name="contacto" value="" class="form-control">
          </fieldset>
          <div class="form-group">
            <input type="button" name="crear" value="Crear" class="boton btn btn-primary">
          </div>
        </form>
      </div>

@stop
