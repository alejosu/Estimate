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

    //Método para controlar la página de clientes
    public function clientes() {

      $clientes = Cliente::all();

      return view('pages.clientes', compact('clientes'));
    }

    //Método para controlar la página de usuarios
    public function usuarios() {

      $usuarios = Usuario::all();

      return view('pages.usuarios', compact('usuarios'));
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
