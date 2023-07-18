<p align="center"><a href="/public/images/LOGO.svg" target="_blank"><img src="./public/images/LOGO.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/carlospalmeida/Bora-la"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

[<img src = "https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white">](https://github.com/carlospalmeida)
[<img src="https://img.shields.io/badge/linkedin-%230077B5.svg?&style=for-the-badge&logo=linkedin&logoColor=white" />](https://www.linkedin.com/in/carlos-eduardo-pereira-almeida-251b03239/)

<!-- [<img src = "https://img.shields.io/badge/instagram-%23E4405F.svg?&style=for-the-badge&logo=instagram&logoColor=white">](https://www.instagram.com/guiadevbrasil/) -->


## Sobre Borá-la

O site Borá-la é voltado para auxiliar e facilitar o usuário em relação ao transporte urbano podendo ver horários, linhas e até mesmo itinerário do transporte público de sua cidade, também possibilitando o pedido de carona através do site.

- Simples, Funcional e facil de enteder.
- Interface logica e sem complexiade.
- Sem cobranças abusivas no sistema carona


O borá-la foi pensado e desenvolvido num curso de habilitação tecnica de informatica como projeto,todos os recursos e tecnologias utilizadas são de natureza gratuita e sem cobrança,utilizar o web-site é gratuito e não há nenhum tipo de cobrança.

## Tecnologias

### Linguagens:

- `php`
- `css`
- `html`
- `JavaScript`

### Frameworks:
- [Laravel](https://laravel.com/)
- `Nodejs`
- `Blade`
- [Bootstrap 5](https://getbootstrap.com/)

### Api´s:
- [TomTom](https://www.tomtom.com/)
- [IBGE]()


## Funcionalidades e funcionamento:

O projeto está em fase de desenvolvimento na sua versão beta 0.1 então os recursos serão divididos em `implementados` e `a ser implementados`.

### Implementados:
- `Mapa dínamico`
- `Selecionar Regiões¹`
- `Linhas funcionais ESTATICAS²`
- `Gerenciar Perfil`

### A ser implementados:
- `Calcular rotas de transporte coletivo`
- `Pedir e efetuar Carona`
- `Ver etinerarios e linhas do transporte coletivo de sua região`
- `Comparar preços de carona ao solicitado`
- `Calcular a melhor rota de transporte coletivo`

<br>

- 1.1 as regiões não alteram o mapa e as linhas
pelo mesmo ser estatico.

- 1.2 as linhas estaticas são da cidade de são josé dos campos caso queira atualizar ou mudar estas linhas basta substituir o arquivo em `public->storage->linhassjc`

 

### Inicialização da aplicação e alteração:



- Tenha instalado o [`XAMPP`](https://www.apachefriends.org/pt_br/download.html) para iniciar em localhost

- instale os arquivos corretamente pelo [github](https://github.com/carlospalmeida/Bora-la)

- coloque os arquivos na pasta `xampp->htdocs`,vale lembra que a pasta xamp fica no C: no caso do windows

- Abre com seu editor de codigo(recomendo o [vscode](https://code.visualstudio.com/)) e inicialize os servidores locais com os seguintes comandos:

~~~~
npm run dev
~~~~

~~~~php
php artisan serve
~~~~

- para acessar o web-site vá no navegador e digite `localhost:8000`

#### **Alteração do mapa**

- **para alterar a localização por ip do mapa ou por uma localizacão estatica vá em `resources->views->caminho.blade`** no final do codigo hávera:
<br>

~~~html
<!-- div para renderizar o map -->
<div class="col-md-9" id="map"></div>

<!-- script de carregamento do tomtom -->
<script src='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.23.0/maps/maps-web.min.js'></script>
<script type='text/javascript' src="{{url('/')}}/js/moblie.js"></script>
~~~


```javaScript
//cogido javascript
<script>
    var renderMap = (lg, lt) => {
        var latlong = new tt.LngLat(lg, lt);
        var map = tt.map({
            key: 'sua chave API',
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
        //aqui ele pega a localização pelo ip da maquina
        navigator.geolocation.getCurrentPosition((posic) => {
            long = posic.coords.longitude;
            lat = posic.coords.latitude;
            renderMap(long, lat);

        // Pegar cidades por estado

        let url = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/35/municipios';
        $.getJSON(url, (data)=>{
        let conteudo = '<ul>';
        $.each(data,(v,val)=>{
            conteudo += '<option>'+val.nome+'</option>'
        })
        conteudo += '</ul>'

        $("#regiao").html(conteudo)
    });
            
        });
    }
</script>
```

É necessario ter o arquivo `mobile.js` com o codigo da documentação da [Api](https://www.tomtom.com/) que esta em `public->js` Ja existe um arquivo com o nome `mobile.js` não há necessidade de criar outro.

**Alteração da api IBGE**

Vá em `resources>views>linhas`
<br>

_script de carregamento da Api:_
```html
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
```
<br>

_codigo em javascript para o funcionamento:_
```js
    // Pegar regiões por estado (foi utilizado a query builder para fazer a url)

    //url da api
    let url = 'https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes/3505|3506|3507|3508|3509|3510|3511|3512|3513|3514|3515';
    $.getJSON(url, (data) => {
        let conteudo = '<ul>';
        $.each(data, (v, val) => {
            conteudo += '<option>' + val.nome + '</option>'
        })
        conteudo += '</ul>'
        //carrega o conteudo no html pelo id regiao
        $("#regiao").html(conteudo)
    });
```

na view `linhas.blade.php`

```html
<h2>Linhas</h2>
    <div class="mb-3 mt-5" id="regiaodiv">
        <h5>Região</h5>
        <!-- id regiao,aqui que a api carrega -->
        <select class="form-select form-select-lg" name="regiaolinhas" id="regiao">
        </select>
    </div>
```
**Banco de dados**

vá em `.env.exemple`

```js

altere estes campos:

DB_CONNECTION={sua conexão}
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={sua porta}
DB_USERNAME={usuario}
DB_PASSWORD={senha}
```

**Alterar linhas**

_alterar linhas utilizadas:_

`app>Http>controllers>linhascontroller`

```php
    //so utilize arquivo csv separado por virgulas UTF-8 
    public function insertlinhas(Linha $linha)
    {
        //pega o arquivo csv
        $fh = fopen("linhassjc.csv", "r");

        //Transforma em array
        $csvData = array();

        //gera linha por linha
        while (($row = fgetcsv($fh, 0, ";")) !== FALSE) {
            $csvData[] = $row;
        }
        
        //teste
        //dd($csvData);

        //faz a gravação no banco de dados
        foreach ($csvData as $dado) {
            $linha = new Linha;
            $linha->itinerario = $dado[0];
            $linha->nomelinha = $dado[1];
            $linha->save();
        }
    }
```
o arquivo csv está em `public>linhassjc.csv`

_vizualização das linhas:_

```php
// mostrar linhas do banco
    public function read()
    {
        //pega os dados do banco
        $linhas = Linha::get();

        $dados = [
            'linhas' => $linhas
        ];
        
        //retorna a view para carregamento dos dados
        return view('linhas', $dados);
    }
```

na view `linhas.blade.php`

```html
@foreach($linhas as $linha)
    <div class="emlinha mb-1" style="width: 1000px;">
        <div class="emlinha bus">
            <button><svg data-name="Layer 1" xmlns="http://www. w3.org/2000/svg" viewBox="0 0 96 96" width='20px'>
                    <path class="cls-1" d="M84,24V21.65A13.65,13.65,0,0,0,70.35,8H25.65A13.65,13.65,0,0,0,12,21.65V24H8V40h4V80a8,8,0,0,0,8,8h4a8,8,0,0,0,8-8V76H64v4a8,8,0,0,0,8,8h4a8,8,0,0,0,8-8V40h4V24H84ZM26,71.94a6,6,0,1,1,6-6A6,6,0,0,1,26,71.94ZM48,54.81c-14.72,0-28-6-28-8.9V24c0-3.87.93-8,5.14-8H71.79C76,16,76,20.13,76,24V45.92C76,48.82,62.71,54.81,48,54.81ZM76,66a6,6,0,1,1-6-6A6,6,0,0,1,76,66Z" />
                </svg>
                {{$linha->itinerario}}</button>

        </div>
        <div class="emlinha" style="width: max-content">{{$linha->nomelinha}}</div>
    </div>
    @endforeach
```
na view principal `caminho.blade.php`

```html
<h5>Linhas proximas de você:</h5>
    <div class="mb-3">
        <select class="form-select form-select-lg" name="" id="">
            @foreach($linhas2 as $linha)
            <option value="">{{$linha->itinerario}}</option>
            @endforeach
        </select>
    </div>
```
nesta view utiliza outro codigo de js para o carregamento dos dados porém a estrutura é identica muda apenas as variaveis.

## Contribuição:

Agradeço a instituição Senac são josé dos campos por disponiblilizar o espaço,equipamento e diversos recursos para o desenvolvimento do prejeto e aos docentes pela coloboração e ajuda durante todo o curso.

## License

O projeto usa a licença do tipo [MIT license](https://opensource.org/licenses/MIT).