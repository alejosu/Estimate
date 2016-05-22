<?php

namespace softmas\Http\Controllers;

use Illuminate\Http\Request;

use softmas\Http\Requests;

class PagesController extends Controller
{

    //Método para controlar la página de inicio
    public function inicio() {
      return view('pages.index');
    }

    //Método para controlar la página de empresas
    public function empresas() {
      return view('pages.empresas');
    }

    //Método para controlar la página de clientes
    public function clientes() {
      return view('pages.clientes');
    }

    //Método para controlar la página de usuarios
    public function usuarios() {
      return view('pages.usuarios');
    }

    //Método para controlar la página de parametros
    public function parametros()
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
}
