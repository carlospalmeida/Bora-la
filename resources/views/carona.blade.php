@extends('app')

@section('conteudo')
<div class="col-md-3">

    <!-- Form de ponto partida -->
    <div class="mb-3">
        <label for="" class="form-label">
            <h5>Ponto de partida:</h5>
        </label>
        <img src="images/ic-current-location_97657.png" width="30px" id="LocaAtual">
        <input type="text" class="form-control" name="PontoInicio" id="PontoInicio" aria-describedby="helpId" placeholder="">
    </div>

    <!-- Form destino -->
    <div class="mb-3">
        <label for="" class="form-label">
            <h5>Destino:</h5>
        </label>
        <input type="text" class="form-control" name="PontoInicio" id="PontoInicio" aria-describedby="helpId" placeholder="">
    </div>

    <!-- Form ver motoristas disponiveis -->

    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{Auth()->user()->name}}</h5>
            </div>
            <p class="mb-1">Avaliação &starf;&starf;&starf;&starf;</p>
            <small class="text-muted">A 50 metros de distancia</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Motorista 4</h5>
                <small class="text-muted">Description</small>
            </div>
            <p class="mb-1">Paragraph</p>
            <small class="text-muted">paragraph footer</small>
        </a>
        <br>

        <button type="button" class="btn btn-outline-success btn-lg" data-bs-toggle="modal" data-bs-target="#modalcarona">
            Solicitar
        </button>


        <div class="modal fade" id="modalcarona" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Pedindo carona</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>Seu carona:</h5>
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Motorista 1</h5>
                            <small class="text-muted">Description</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-success">Pedir</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional: Place to the bottom of scripts -->
        <script>
            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
        </script>

    </div>

</div>

<!-- div para renderizar o map -->
<div class="col-md-9" id="map"></div>



<script src='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.23.0/maps/maps-web.min.js'></script>
<script type='text/javascript' src="{{url('/')}}/js/moblie.js"></script>
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
</script>
@endsection