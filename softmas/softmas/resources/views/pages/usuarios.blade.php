@extends('layout')

@section('content')

      <div class="container-fluid">
          <h1 class="text-center">USUARIOS</h1>
      </div>

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>
              Id
            </th>
            <th>
              Nombre
            </th>
            <th>
              Empresa
            </th>
            <th>
              Cargo
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($usuarios as $usuario)
          <tr>
            <td>
              {{ $usuario->cedula }}
            </td>
            <td>
              {{ $usuario->nombre }}
            </td>
            <td>
              {{ $usuario->empresa->nombre }}
            </td>
            <td>
              {{ $usuario->cargo }}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="container-fluid">
          <h2 class="text-center">CREAR USUARIO</h2>
      </div>

      <div class="col-xs-4 col-xs-offset-4">
        <form class="formulario" action="/usuarios/crearUsuario" method="post">
          <fieldset name="usuario" class="form-group">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
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
            <input type="submit" name="crear" value="Crear" class="boton btn btn-primary">
          </div>
        </form>
      </div>

@stop
