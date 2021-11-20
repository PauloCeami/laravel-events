<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller {

    public function index() {
        $nome = 'Página inicial do site';
        return view('welcome', ['nome' => $nome]);
    }

    public function create() {
        $evento_name = 'Criando evento de PHP';
        return view('eventos.create', ['evento' => $evento_name]);
    }

}
