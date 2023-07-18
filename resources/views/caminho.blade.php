@extends('app')

@section('conteudo')
<div class="col-md-3">

    <!-- Linhas/pesquisar linhas -->
    <div class="mb-lg-3">
        <h5><a href="{{route('linhas')}}" id="Linha" class="tracking-in-contract">Linhas</a></h5>
    </div>


    <!-- Form de ponto partida -->
    <div class="mb-1">
        <label for="" class="form-label">
            <h5>Ponto de partida:</h5>
        </label>
        <input type="text" class="form-control" name="txt_inicio" id="txt_inicio" aria-describedby="helpId" placeholder="">
        <label for="" class="form-label"></label>
    </div>

    <!-- Form destino -->
    <div class="mb-3">
        <label for="" class="form-label">
            <h5>Destino:</h5>
        </label>
        <input type="text" class="form-control" name="txt_final" id="txt_final" aria-describedby="helpId" placeholder="">
    </div>

    <!-- Mostra as linhas/onibus proximo do usuario -->
    <h5>Linhas proximas de você:</h5>
    <div class="mb-3">
        <select class="form-select form-select-lg" name="" id="">
            @foreach($linhas2 as $linha)
            <option value="">{{$linha->itinerario}}</option>
            @endforeach
        </select>
    </div>

    <h5>Pontos e terminais proximas á você:</h5>
    <div class="mb-3">
        <select class="form-select form-select-lg" name="" id="">
            <option value="">Rua Saigiro Nakamura</option>
            <option value="">Av Pres Juscelino Kubitschek</option>
        </select>
    </div>


    <!-- mostra a viagem necessaria para ir ao destino -->

    <h5>Rotas sugeridas:</h5>
    <div class="card">
        <div class="card-body">
            <p class="card-text"> 231->🚶‍♂️5min->304</p>
        </div>
    </div>
</div>


<!-- div para renderizar o map -->
<div id="map" class="col-md-9"></div>

<!-- script do tomtom -->
<script src='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.23.0/maps/maps-web.min.js'></script>
<script type='text/javascript' src="{{url('/')}}/js/moblie.js"></script>
<!-- script do ibge -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


<script>
    var renderMap = (lg, lt) => {
        var latlong = new tt.LngLat(lg, lt);
        var map = tt.map({
            key: 'PGoU54kuG7mGC31MVAf6gG2m9iNT1B1C',
            container: 'map',
            dragPan: !isMobileOrTablet(),
            center: latlong,
            zoom: 18
        });
        map.addControl(new tt.FullscreenControl());
        map.addControl(new tt.NavigationControl());
    }

    //captura latutude e longitude do navegador
    //e renderiza o mapa
    var long = 0;
    var lat = 0;
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((posic) => {
            long = posic.coords.longitude;
            lat = posic.coords.latitude;
            renderMap(long, lat);

        });
    }

    // Pegar cidades por estado

    let url = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/35/municipios';
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