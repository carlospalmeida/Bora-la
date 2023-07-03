@extends('app')

@section('conteudo')
<div class="col-md-6">
    <h2>Favoritos</h2>
    <div class="list-group">
        <button type="button" class="list-group-item list-group-item-action" aria-current="true">Active
            item</button>
        <button type="button" class="list-group-item list-group-item-action">Item</button>
        <button type="button" class="list-group-item list-group-item-action">Disabled item</button>
    </div>
</div>
<div class="col-md-6">
    <h2>Linhas</h2>
    <form class="col-md-4">

        <input class="form-control mr-sm-2 align-items-center" type="search" placeholder="Pesquisar linha" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>

    </form>
    <div class="list-group">
        <button type="button" class="list-group-item list-group-item-action" aria-current="true">Active
            item</button>
        <button type="button" class="list-group-item list-group-item-action">Item</button>
        <button type="button" class="list-group-item list-group-item-action">Disabled item</button>
    </div>
</div>
@endsection