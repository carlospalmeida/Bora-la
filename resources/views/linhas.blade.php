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

    <div class="mb-3 mt-5" id="regiaodiv">
        <h5>Alterar região</h5>
        <select class="form-select form-select-lg" name="regiaolinhas" id="regiao">
        </select>
    </div>


</div>

<!-- script do ibge -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    // Pegar cidades por estado

    let url = 'https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes/3505|3506|3507|3508|3509|3510|3511|3512|3513|3514|3515';
    $.getJSON(url, (data) => {
        let conteudo = '<ul>';
        $.each(data, (v, val) => {
            conteudo += '<option>' + val.nome + '</option>'
        })
        conteudo += '</ul>'

        $("#regiao").html(conteudo)

    });
</script>
@endsection