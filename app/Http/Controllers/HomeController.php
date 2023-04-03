<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    //Crear metodos para desplegar vistas
    public function go_inicio()
    {
        return view('menu.inicio');
    }
    public function go_tienda()
    {
        return view('menu.tienda');
    }
    public function go_ubicacion()
    {
        return view('menu.ubicacion');
    }
}
