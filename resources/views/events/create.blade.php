@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" name="image" id="image" class="form-control-file">
            </div>
            <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" name="title" id="title"
            class="form-control" placeholder="Nome do evento...">
            </div>
            <div class="form-group">
            <label for="date">Date do evento:</label>
            <input type="date" name="date" id="date" class="form-control">
            </div>
            <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" name="city" id="city"
            class="form-control" placeholder="Local do evento...">
            </div>
            <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
            </div>
            <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <div class="form-group">
            <label for="title">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja Grátis"> Cerveja Grátis
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Oprn Food"> Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
            </div>
            <input type="submit" value="Criar evento" class="btn btn-primary">
        </form>
    </div>
@endsection