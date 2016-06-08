@extends('layout')

@section('content')

      <div class="container-fluid">
          <h1 class="text-center">CLIENTES</h1>
      </div>

      <div class="row">
        <nav class="navbar">
          <div class="container-fluid">
            <ul class="nav navbar-nav nav-pills">
              <li><a href="/crearCliente">Crear</a></li>
              <li><a href="/borrarCliente">Borrar</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="row">

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



@stop
