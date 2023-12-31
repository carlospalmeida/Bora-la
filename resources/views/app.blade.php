<!doctype html>
<html lang="pt-br">

<head>
    <title>BuserHelper</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    <!-- css personalizado -->
    <link rel="stylesheet" href="css/style.css">

    <!-- tomtom -->
    <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.23.0/maps/maps.css'>

    <link rel='stylesheet' type='text/css' href="{{url('/')}}/css/tomtom.css">

    <!-- Leafleft CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <link rel="stylesheet" href="{{url('/')}}/css/leaflet-routing-machine.css" />

</head>

<body class="pt-5">

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-light fixed-top colorazul">
            <div class="container-fluid">
                <img src="images/LOGO.png" width="90px">
                <!-- <a class="navbar-brand" href="#"><strong>Borá-la</strong> -->
                <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <img src="images/icons8-chevron-right-ios-16-favicons/Web/icons8-chevron-right-ios-16-32.png" width="20px">
                </button>
                <div class="offcanvas offcanvas-end corOFF" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Registrar/logar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('dashboard')}}">Carona</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('perfil')}}">Perfil</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    </header>



    <main>

        <!-- Barra lateral -->
        <div class="container mt-5" id="BarraLateralEsquerda">
            <div class="row">

                @yield('conteudo')

            </div>
        </div>

    </main>

    <footer class="p-5 mt-5 corrodape text-light">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white">CAEP</h5>
                    <p class="small text-muted">Centro de administração empresarial Pereira <br> Bora-lá.</p>
                    <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="https://www.linkedin.com/in/carlos-eduardo-pereira-almeida-251b03239/">Carlos Eduardo</a></p>
                    <p class="small text-muted mb-0"><a class="text-primary" href="{{route('termos')}}">Termos e condições</a></p>
                </div>
            </div>
        </div>
    </footer>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    
    <!-- js personalizado -->
    <!-- <script src="JS/code.js"></script>

    <script>
        var fecharpopup = document.getElementById("fecharuse");

        fecharpopup.addEventListener("click", () => {
            var popup = document.getElementById("usecarona");
            popup.style.display = "none";
        })
    </script> -->

</body>

</html>