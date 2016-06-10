@extends('layout')

@section('content')

<div class="row">
  <section class="portada">
    <div class="container">
      <h1 class="text-center">Cotizaciones</h1>
    </div>
  </section>
</div>

<div class="row">
  <nav class="navbar">
    <div class="container-fluid">
      <ul class="nav navbar-nav nav-pills">
        <li><a href="/crearCotizacion">Crear</a></li>
        <li><a href="/borrarCotizacion">Borrar</a></li>
      </ul>
    </div>
  </nav>
</div>
<div class="row">

<div class="row">
  <section class="estimacion">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>
            Número
          </th>
          <th>
            Cliente
          </th>
          <th>
            Fecha
          </th>
          <th>
            Total horas
          </th>
          <th>
            Valor total
          </th>
          <th>
            Usuario
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cotizaciones as $cotizacion)
        <tr>
          <td>
            {{ $cotizacion->id }}
          </td>
          <td>
            {{ $cotizacion->cliente->nombre }}
          </td>
          <td>
            {{ $cotizacion->created_at }}
          </td>
          <td>
            {{ $cotizacion->total_horas }}
          </td>
          <td>
            {{ $cotizacion->total_monto }}
          </td>
          <td>
            {{ $cotizacion->usuario->nombre}}
          </td>
          @endforeach
        </tr>
      </tbody>
    </table>
  </section>
</div>

@stop
