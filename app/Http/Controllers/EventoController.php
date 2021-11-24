<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller {

    public function index() {

        $search = request('search');
        if ($search) {
            $eventos = Evento::where([
                ['titulo', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $eventos = Evento::all();
        }
        return view('welcome', ['eventos' => $eventos, 'search' => $search]);
    }

    public function create() {
        return view('eventos.create');
    }

    public function store(Request $request) {

        $evento = new Evento();
        $evento->titulo = $request->titulo;
        $evento->descricao = $request->descricao;
        $evento->cidade = $request->cidade;
        $evento->tag = strtolower($request->titulo);
        $evento->data_evento = $request->data_evento;
        $evento->is_private = $request->is_private;
        $evento->items = $request->items;
        $evento->image = 'sem-imagem.jpg';
        if ($request->hasFile('my_image') && $request->file('my_image')->isValid()) {
            $requestImage = $request->my_image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientoriginalName() . strtotime('now')) . '.' . $extension;
            $requestImage->move(public_path('/img/eventos'), $imageName);
            $evento->image = $imageName;
        }
        $evento->save();
        return redirect('/');
    }

    public function show($id) {
        $evento = Evento::findOrFail($id);
        return view('eventos.show', ['evento' => $evento]);
    }

}
