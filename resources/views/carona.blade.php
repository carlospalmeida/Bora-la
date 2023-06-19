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
                <h5 class="mb-1">Motorista 1</h5>
                <small class="text-muted">Description</small>
            </div>
            <p class="mb-1">Motorista 2</p>
            <small class="text-muted">paragraph footer</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Motorista 3</h5>
                <small class="text-muted">Description</small>
            </div>
            <p class="mb-1">Paragraph</p>
            <small class="text-muted">paragraph footer</small>
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

<div class="col-md-9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6168.468081019774!2d-45.85544711178482!3d-23.17775156556277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4bc96c8e4b37%3A0x961089d48d0b5240!2sSenac%20S%C3%A3o%20Jos%C3%A9%20dos%20Campos!5e0!3m2!1spt-BR!2sbr!4v1682538140621!5m2!1spt-BR!2sbr" width="100%" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection