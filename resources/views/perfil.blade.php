@extends('app')

@section('conteudo')
<section style="background-color: #C4EAF2">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <!-- imagem de perfil -->
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <!--  -->
                        <h5 class="my-3">Nome do Usuario</h5>
                        <p class="text-muted mb-1">Motorista/Passageiro</p>
                        <p class="text-muted mb-4">São josé dos campos, SP</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="#"><button type="button" class="btn btn-primary">Editar perfil</button></a>
                            &nbsp;&nbsp;
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" role="button">
                                    <button type="button" class="btn btn-outline-danger">Sair</button>
                                </a>
                            </form>
                            
                            <!-- <a href=""><button type="button" class="btn btn-outline-danger ms-1">Sair</button></a> -->
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <h4 class="text-bg-danger">Ultimas corridas:</h4>
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fas fa-globe fa-lg text-warning"></i>
                                <p class="mb-0">SJC</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                <p class="mb-0">ZONA NORTE</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                <p class="mb-0">ZONA SUL</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                <p class="mb-0">ZONA LESTE</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                <p class="mb-0">CENTRAL </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nome</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Seu nome</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Disponiblilidade</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><strong>Ativo</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p>Imagen e informações do veiculo</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p>Avaliação</p>
                                <p>&star;&star;&star;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection