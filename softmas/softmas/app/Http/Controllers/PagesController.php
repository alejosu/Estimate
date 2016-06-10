<?php

namespace softmas\Http\Controllers;

use Illuminate\Http\Request;

use softmas\Http\Requests;

use softmas\Empresa;
use softmas\Cliente;
use softmas\Usuario;
use softmas\Cotizacion;

class PagesController extends Controller
{

    //Método para controlar la página de inicio
    public function inicio() {
      return view('pages.index');
    }

    //Método para controlar la página de empresas
    public function empresas() {

      $empresas = Empresa::all();

      return view('pages.empresas', compact('empresas'));

    }

    //Método para llamar la página de creacion de empresas
    public function crearEmpresa() {

      return view('pages.crearEmpresa');

    }

    //Método para crear empresas
    public function crearEmpresaRequest(Request $request) {

      $emp = new Empresa();

      $emp->nombre = $request->nombre;
      $emp->pais = $request->pais;
      $emp->ciudad = $request->ciudad;
      $emp->logo = $request->logo;
      $emp->direccion = $request->direccion;
      $emp->telefono = $request->telefono;
      $emp->nit = $request->nit;

      $emp->save();

      $empresas = Empresa::all();

      return view('pages.empresas', compact('empresas'));

    }

    //Método para controlar la página de clientes
    public function clientes() {

      $clientes = Cliente::all();

      return view('pages.clientes', compact('clientes'));
    }

    //Método para llamar la pagina de creación de clientes
    public function crearCliente() {

      return view('pages.crearCliente');

    }

    //Método para crear clientes
    public function crearClienteRequest(Request $request) {

      $cliente = new Cliente();

      $cliente->nombre = $request->nombre;
      $cliente->nit = $request->nit;
      $cliente->direccion = $request->direccion;
      $cliente->telefono = $request->telefono;
      $cliente->logo = $request->logo;
      $cliente->contacto = $request->contacto;
      $cliente->valor_hora = $request->valor_hora;

      $cliente->save();

      $clientes = Cliente::all();

      return view('pages.clientes', compact('clientes'));
    }

    //Método para controlar la página de usuarios
    public function usuarios() {

      $usuarios = Usuario::all();

      return view('pages.usuarios', compact('usuarios'));
    }

    //Método para la página de creación de usuarios
    public function crearUsuario() {

      return view('pages.crearUsuario');

    }

    //Método para crear usuarios
    public function crearUsuarioRequest(Request $request) {

      $usuario = new Usuario();

      $usuario->empresa_id = $request->empresa;
      $usuario->cedula = $request->cedula;
      $usuario->nombre = $request->nombre;
      $usuario->cargo = $request->cargo;

      $usuario->save();

      $usuarios = Usuario::all();

      return view('pages.usuarios', compact('usuarios'));

    }

    //Método para controlar la página de parametros
    public function parametros() {
      return view('pages.parametros');
    }

    //Método para controlar la página de resultado
    public function resultado() {
      return view('pages.resultado');
    }

    //Método para controlar la página de cotizaciones
    public function cotizaciones() {

      $cotizaciones = Cotizacion::all();

      return view('pages.cotizaciones', compact('cotizaciones'));

    }

    //Método para la página de creación de cotizaciones
    public function crearCotizacion() {

      return view('pages.crearCotizacion');

    }

    //Método para controlar la página de cotizar
    public function crearCotizacionRequest(Request $request) {

      $cotizacion = new Cotizacion();

      $cotizacion->usuario_id = $request->usuario_id;
      $cotizacion->cliente_id = $request->cliente_id;

      $cotizacion->save();

      $cotizaciones = Cotizacion::all();

      return view('pages.cotizaciones', compact('cotizaciones'));

    }

    //Método para controlar la página de consulta
    public function consulta() {
      return view('pages.consulta');
    }


}
