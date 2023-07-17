@extends('app')

@section('conteudo')
<div class="col-md-6">
    <h2>Linhas</h2>
    <div class="mb-3 mt-5" id="regiaodiv">
        <h5>Região</h5>
        <select class="form-select form-select-lg" name="regiaolinhas" id="regiao">
        </select>
    </div>
    @foreach($linhas as $linha)
    <div class="emlinha mb-1" style="width: 1000px;">
        <div class="emlinha bus">
            <button><svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" width='20px'>
                    <path class="cls-1" d="M84,24V21.65A13.65,13.65,0,0,0,70.35,8H25.65A13.65,13.65,0,0,0,12,21.65V24H8V40h4V80a8,8,0,0,0,8,8h4a8,8,0,0,0,8-8V76H64v4a8,8,0,0,0,8,8h4a8,8,0,0,0,8-8V40h4V24H84ZM26,71.94a6,6,0,1,1,6-6A6,6,0,0,1,26,71.94ZM48,54.81c-14.72,0-28-6-28-8.9V24c0-3.87.93-8,5.14-8H71.79C76,16,76,20.13,76,24V45.92C76,48.82,62.71,54.81,48,54.81ZM76,66a6,6,0,1,1-6-6A6,6,0,0,1,76,66Z" />
                </svg>
                {{$linha->itinerario}}</button>

        </div>
        <div class="emlinha" style="width: max-content">{{$linha->nomelinha}}</div>
    </div>

    @endforeach
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