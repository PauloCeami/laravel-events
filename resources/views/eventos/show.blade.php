@extends('layouts.main')
@section('title', $evento->titulo)
@section('content')
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-3">
            <div class="card bg-dark text-white">
                <img src="/img/eventos/{{$evento->image}}" class="card-img" alt="{{$evento->titulo}}">
                <div class="card-img-overlay">
                    <h4 class="card-title">{{$evento->titulo}}</h4>
                </div>
            </div>
        </div>
        <div class="col-9">
            <p><ion-icon name="calendar"></ion-icon> {{ date('d/m/Y',strtotime($evento->data_evento))}}</p>
            <p><ion-icon name="pin"></ion-icon> {{$evento->cidade}}</p>
            <p><ion-icon name="contacts"></ion-icon> 250 Participantes</p>
            <p><ion-icon name="star-outline"></ion-icon> Dono do Evento</p>

            @if($evento->items)
            <h5>O Evento conta com :</h5>
            <ul class="list-group">
                @foreach($evento->items as $item)
                <li class="list-group-item list-group-item-action"> <ion-icon name="checkmark"></ion-icon> {{$item}}</li>
                @endforeach
            </ul>
            @endif

            <p><p><a href="#" class="btn btn-dark mt-5">Confirmar Presença</a></p></p>
        </div>

    </div>
    <div class="row mt-3">
        <p><h5>Sobre o Evento :</h5></p>
        <div class="col-12">
            <h3>{{$evento->descricao}}</h3>
        </div>
    </div>
</main>
@endsection