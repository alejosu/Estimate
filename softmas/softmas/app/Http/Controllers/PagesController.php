<?php

namespace softmas\Http\Controllers;

use Illuminate\Http\Request;

use softmas\Http\Requests;

use softmas\Empresa;
use softmas\Cliente;
use softmas\Usuario;

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

    //Método para crear clientes
    public function crearCliente(Request $request) {

      $cliente = new Cliente();

      $cliente->nombre = $request->nombre;
      $cliente->nit = $request->nit;
      $cliente->direccion = $request->direccion;
      $cliente->telefono = $request->telefono;
      $cliente->logo = $request->logo;
      $cliente->contacto = $request->contacto;
      $cliente->valor_hora = $request->valor_hora;

      $cliente->save();

      return back();
    }

    //Método para controlar la página de usuarios
    public function usuarios() {

      $usuarios = Usuario::all();

      return view('pages.usuarios', compact('usuarios'));
    }

    //Método para crear usuarios
    public function crearUsuario(Request $request) {

      $usuario = new Usuario();

      $usuario->empresa_id = $request->empresa;
      $usuario->cedula = $request->cedula;
      $usuario->nombre = $request->nombre;
      $usuario->cargo = $request->cargo;

      $usuario->save();

      return back();

    }

    //Método para controlar la página de parametros
    public function parametros() {
      return view('pages.parametros');
    }

    //Método para controlar la página de cotizar
    public function cotizar() {
      return view('pages.cotizar');
    }

    //Método para controlar la página de resultado
    public function resultado() {
      return view('pages.resultado');
    }

    //Método para controlar la página de cotizacion
    public function cotizacion() {
      return view('pages.cotizacion');
    }

    //Método para controlar la página de consulta
    public function consulta() {
      return view('pages.consulta');
    }


}
