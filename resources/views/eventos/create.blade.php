@extends('layouts.main')
@section('title', 'Laravel Events')
@section('content')

<main class="container mt-5">
    <form class="row g-3" method="POST" action="/evento" enctype="multipart/form-data" >
        @csrf

        <div class="col-12">
            <label for="formFile" class="form-label">Imagem do Evento:</label>
            <input class="form-control form-control-lg" name="my_image" id="my_image" type="file">
        </div>

        <div class="col-12">
            <label for="titulo" class="form-label">Título do Evento:</label>
            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título do evento">
        </div>

        <div class="col-12">
            <label for="titulo" class="form-label">Descrição do Evento:</label>
            <textarea class="form-control" name="descricao"></textarea>
        </div>

        <div class="col-12">
            <label for="titulo" class="form-label">Cidade:</label>
            <input type="text" class="form-control" name="cidade" id="descricao" placeholder="nome da cidade">
        </div>

        <div class="col-12">
            <label for="data_evento" class="form-label">Data do evento:</label>
            <input type="date" class="form-control" name="data_evento" id="descricao">
        </div>



        <div class="col-md-12">
            <label for="is_private" class="form-label">É Privado</label>
            <select id="is_private" name="is_private" class="form-select">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="col-md-12">
            <h5>Items do Evento:</h5>
            <div class="btn-group" role="group" aria-label="items do evento">
                <input type="checkbox" name="items[]" value="Cadeiras" class="btn-check" id="Cadeiras" autocomplete="off">
                <label class="btn btn-outline-dark" for="Cadeiras"> Cadeiras</label>

                <input type="checkbox" name="items[]" value="Palco" class="btn-check" id="Palco" autocomplete="off">
                <label class="btn btn-outline-dark" for="Palco">Palco</label>

                <input type="checkbox" name="items[]" value="Open-Food" class="btn-check" id="OpenFood" autocomplete="off">
                <label class="btn btn-outline-dark" for="OpenFood">Open Food</label>
               
                <input type="checkbox" name="items[]" value="Brindes" class="btn-check" id="Brindes" autocomplete="off">
                <label class="btn btn-outline-dark" for="Brindes">Brindes</label>
            </div>

        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-dark mb-5">Cadastrar Evento</button>
        </div>
    </form>


</main>



@endsection