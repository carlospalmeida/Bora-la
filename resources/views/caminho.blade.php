@extends('app')

@section('conteudo')
<div class="col-md-3">

<!-- Linhas/pesquisar linhas -->
<div class="mb-lg-3">
    <h5><a href="{{route('linhas')}}" id="Linha" class="tracking-in-contract">Linhas</a></h5>
</div>


<!-- Form de ponto partida -->
<div class="mb-3">
    <label for="" class="form-label">
        <h5>Ponto de partida:</h5>
    </label>
    <input type="text" class="form-control" name="PontoInicio" id="PontoInicio" aria-describedby="helpId" placeholder="">
    <label for="" class="form-label">
        <a href="" id="localatual">
            <h5>
                <img src="images/ic-current-location_97657.png" width="20px" id="LocaAtual"> Local atual
            </h5>
        </a>
    </label>
</div>

<!-- Form destino -->
<div class="mb-3">
    <label for="" class="form-label">
        <h5>Destino:</h5>
    </label>
    <input type="text" class="form-control" name="PontoInicio" id="PontoInicio" aria-describedby="helpId" placeholder="">
</div>

<!-- Mostra as linhas/onibus proximo do usuario -->
<h5>Linhas proximas de você:</h5>
<div class="mb-3">
    <select class="form-select form-select-lg" name="" id="">
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
    </select>
</div>

<h5>Pontos e terminais proximas á você:</h5>
<div class="mb-3">
    <select class="form-select form-select-lg" name="" id="">
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
    </select>
</div>


<!-- mostra a viagem necessaria para ir ao destino -->

<h5>Viagem:</h5>
<div class="card">
    <div class="card-body">
        <p class="card-text">va para o ponto x</p>
    </div>
</div>





</div>

<div class="col-md-9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6168.468081019774!2d-45.85544711178482!3d-23.17775156556277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4bc96c8e4b37%3A0x961089d48d0b5240!2sSenac%20S%C3%A3o%20Jos%C3%A9%20dos%20Campos!5e0!3m2!1spt-BR!2sbr!4v1682538140621!5m2!1spt-BR!2sbr" width="100%" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection