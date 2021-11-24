@extends('layouts.main')
@section('title', 'Laravel Events')
@section('content')
<main class="container">
    <div class="p-4 p-md-5 mb-4 mt-3 text-white  rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Laravel Eventos</h1>
            <p class="lead my-3">Encontre em nosso site EVENTOS DE DESENVOLVIMENTOS DE SOFTWARE E APLICATIVOS realizados em todo Brasil.</p>
        </div>
    </div>
    <div class="row mb-2">
        @foreach($eventos as $events)
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">tag : {{$events->tag}}</strong>
                    <h3 class="mb-0">{{$events->titulo}}</h3>
                    <p class="card-text mb-auto">{{$events->descricao}}</p>
                    <a href="/evento/{{$events->id}}" class="stretched-link">continue lendo...</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="/img/eventos/{{$events->image}}" width="200" height="250" alt="{{$events->titulo}}" />
                </div>
            </div>
        </div>
        @endforeach

        @if(count($eventos) == 0 && $search)
        <p class="lead my-3">Nenhum evento encontrado com a palavra {{$search}}</p>
        @elseif(count($eventos) == 0)
        <p class="lead my-3">Nenhum evento disponível por enquanto !!!</p>
        @endif

    </div>
</main>
@endsection