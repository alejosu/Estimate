@extends('layout')

@section('content')

<div class="row">
  <section class="portada">
    <div class="container">
      <h1 class="text-center">Clientes</h1>
    </div>
  </section>
</div>
<div class="row">
  <section class="estimacion">
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
        <tr>
          <td>
            8999993210
          </td>
          <td>
            SoftMAS
          </td>
          <td>
            Cl 17 #1-3
          </td>
          <td>
            3333333
          </td>
          <td>
            softmas.png
          </td>
          <td>
            120.000
          </td>
          <td>
            Manuel Suárez
          </td>
        </tr>
      </tbody>
    </table>
  </section>
</div>

@stop
