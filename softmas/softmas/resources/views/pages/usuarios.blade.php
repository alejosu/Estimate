@extends('layout')

@section('content')

      <div class="container-fluid">
          <h1 class="text-center">USUARIOS</h1>
      </div>

      <div class="row">
        <nav class="navbar">
          <div class="container-fluid">
            <ul class="nav navbar-nav nav-pills">
              <li><a href="/crearUsuario">Crear</a></li>
              <li><a href="/borrarUsuario">Borrar</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="row">

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

@stop
