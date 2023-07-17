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

- Abre com seu editor de codigo(recomendo o vscode) e inicialize os servidores locais com os seguintes comandos:

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


## Contribuição:

Agradecer a instituição Senac são josé dos campos por disponiblilizar o espaço,equipamento e diversos recursos pro prejeto e aos docentes pela coloboração e ajuda no desenvolvimento.

## License

O projeto usa a licença do tipo [MIT license](https://opensource.org/licenses/MIT) que pode ser alterada no futuro.