@extends('layout')

@section('content')

      <div class="container-fluid">
          <h1 class="text-center">EMPRESAS</h1>
      </div>

      <div class="col-xs-12">
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
                Pais
              </th>
              <th>
                Ciudad
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($empresas as $empresa)
            <tr>
              <td>
                {{ $empresa->nit }}
              </td>
              <td>
                {{ $empresa->nombre }}
              </td>
              <td>
                {{ $empresa->direccion }}
              </td>
              <td>
                {{ $empresa->telefono }}
              </td>
              <td>
                {{ $empresa->logo }}
              </td>
              <td>
                {{ $empresa->pais }}
              </td>
              <td>
                {{ $empresa->ciudad }}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>


      </div>

      <div class="container-fluid">
          <h2 class="text-center">CREAR EMPRESA</h2>
      </div>

      <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
          <form class="formulario" action="/empresas/crearEmpresa" method="POST">
            <fieldset name="empresa" class="form-group">
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
            </fieldset>
            <div class="form-group">
              <input type="submit" name="crear" value="Crear" class="boton btn btn-primary">
            </div>
          </form>
        </div>
      </div>

      @stop
