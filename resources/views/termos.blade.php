@extends('app')

@section('conteudo')
<div class="col-md-6 offset-md-4">
    <h2>Termos e condições</h2>
</div>

<!-- Definição -->

<div class="accordion accordion-flush" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button acord" type="button" data-bs-toggle="collapse" data-bs-target="#Definicao" aria-expanded="true" aria-controls="collapseOne">
                Definição
            </button>
        </h2>
        <div id="Definicao" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                Esta Política e termos visa descrever a preocupação e a importância que o site
                Bora-lá tem em respeitar a confidencialidade, legitimidade da informação e a
                privacidade dos dados pessoais, seja de seus clientes, parceiros e/ou
                colaboradores, assim
                como orientá-los a conhecer e estar seguros sobre a utilização dos seus dados
                pessoais e
                sua respectiva interação com os serviços prestados pelo site <a href="{{route('caminho')}}">
                    <strong>Bora-lá</strong></a>.
            </div>
        </div>
    </div>

</div>

<!-- Dados -->
<div class="accordion accordion-flush" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button acord" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Quais dados coletamos?
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            O nosso site coleta dados basicos de informações para o usuario comun que fará uso do <a href="{{route('caminho')}}">CARONA</a>,entretanto o usúario que deseja prestar serviço atraves do nosso site terá as seguintes informações coletadas: <br>
            Documento do veiculo; <br>
            Habilitação; <br>
            e Email (sendo esse para ambos); <br>
            Todos os documentos pedidos devem estar regularizado com os orgãos competentes de transito,em caso de não regularização o site não se resposablilizara por multas e punições.

            </div>
        </div>
    </div>

    <!-- Suporte -->
    <div class="accordion accordion-flush" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button acord collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Suport" aria-expanded="true" aria-controls="flush-collapseOne">
                    Nosso Suporte
                </button>
            </h2>
            <div id="Suport" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    O projeto não há um suporte planejado porem qualquer duvida de uso basta olhar a
                    documentação no <a href="https://github.com/carlospalmeida/front_end_BUSER-HELP">github</a>
                    É bem importante resaltar que não nos responsabilizamos por roubo,furto e qualquer crime fiscal ou contra uma pessoa cometidos pelos usuarios ou terceiros atraves do app Borá-la,não incentivamos nenhum ato ou obrigamos a realizar qualquer atividade.
                </div>
            </div>
        </div>

    </div>

    <!-- Informações e dados  -->

    <div class="accordion accordion-flush" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button acord" type="button" data-bs-toggle="collapse" data-bs-target="#Info" aria-expanded="true" aria-controls="collapseOne">
                    informações e dados
                </button>
            </h2>
            <div id="Info" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Todas as informações e dados presentes nesse projeto foram tirados das respectivos
                    lugares <br>
                    IBGE <br>
                    Api diversas <br>
                    Mais informações e teconlogias na <a href="https://github.com/carlospalmeida/front_end_BUSER-HELP">documentação</a>
                </div>
            </div>
        </div>


    </div>

    @endsection