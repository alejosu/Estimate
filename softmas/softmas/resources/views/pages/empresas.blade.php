@extends('layout')

@section('content')

      <div class="container-fluid">
          <h1 class="text-center">EMPRESAS</h1>
      </div>

      <div class="row">
        <nav class="navbar">
          <div class="container-fluid">
            <ul class="nav navbar-nav nav-pills">
              <li><a href="/crearEmpresa">Crear</a></li>
              <li><a href="/borrarEmpresa">Borrar</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="row">

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

      @stop
