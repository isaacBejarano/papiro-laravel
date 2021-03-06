<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html lang="{{ $lang }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  {{-- title + favicon --}}
  <link  rel="icon"   href="img/favicon.png" type="image/png" />
  <title>{{ $title }}</title>

  <!-- Bootstrap CSS. Make sure it is v.4.4^ / .container-{breakpoint}  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

  <!-- Font Awesome - icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
    integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous" />

  <!-- Styles -->
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="bg-dark">
  <div class="flex-center position-ref full-height">
    {{-- <!-- @if (Route::has('login'))
    <div class="top-right links">
      @auth
      <a href="{{ url('/home') }}">Home</a>
      @else
      <a href="{{ route('login') }}">Login</a>

      @if (Route::has('register'))
      <a href="{{ route('register') }}">Register</a>
      @endif
      @endauth
    </div>
    @endif --> --}}

    <div class="content">
      <div class="title m-b-md">

        <!-- Bootstrap 4 -->

        <!-- HEADER -->
        <header class="container-fluid bg-secondary fixed-top">
          <div class="row">
            <!-- Logo -->
            <div class="col-4 d-flex align-items-center">
              <img id="logo_papiro" src="img/papiroAlfa.png" alt="logo aplicación Papiro" />
            </div>

            <!-- Links -->
            <nav class="col d-flex justify-content-end align-items-center">
              <!-- 1.Ayuda -->
              <a class="mr-2 mr-md-3 font-weight-lighter text-light" href="mock">
                ayuda
              </a>

              <!-- 2.Idioma -->
              <div id="idioma" class="mr-2 mr-md-3 dropdown show">
                <a class="btn dropdown-toggle font-weight-lighter text-light" href="#" role="button"
                  id="dropdownLanguages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  idiomas
                </a>
                <div class="dropdown-menu bg-ternary-grad" aria-labelledby="dropdownLanguages">
                  <a class="dropdown-item" href="#">ESP</a>
                  <a class="dropdown-item" href="mock">CAT</a>
                  <a class="dropdown-item" href="mock">ENG</a>
                </div>
              </div>

              <!-- 3.Laie -->
              <a class="gotobookshop" href="https://www.laie.es/es/" target="_blank">
                <img id="logo_laie" src="img/laie.svg" alt="logo librería Laie" />
              </a>
            </nav>
          </div>
        </header>

        <!-- NAVBAR -->
        <nav id="main-nav"
          class="pb-3 navbar navbar-expand-lg navbar-dark fixed-top border-bottom border-ternary pb-2 bg-secondary-grad-reverse">
          <!-- hamburger -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerPapiro"
            aria-controls="navbarTogglerPapiro" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- collapsable -->
          <div class="collapse navbar-collapse border-ternary" id="navbarTogglerPapiro">
            <!-- navbar 1 -->
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="#">
                  <i class="fas fa-home"></i>
                  <!-- <span class="sr-only">(current)</span> -->
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownSections" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  secciones
                </a>
                <div class="dropdown-menu bg-ternary-grad" aria-labelledby="navbarDropdownSections">
                  <a class="dropdown-item" href="mock">Novedades</a>
                  <a class="dropdown-item" href="mock">Crítica</a>
                  <a class="dropdown-item" href="mock">
                    Lo más leído
                  </a>
                  <a class="dropdown-item" href="mock">
                    Recomendado
                  </a>
                  <a class="dropdown-item" href="mock">Mixes</a>
                  <!-- <div class="dropdown-divider"></div> -->
                </div>
              </li>
            </ul>

            <!-- navbar 2 -->
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="mock">
                  <button type="button" class="btn btn-outline-light btn-sm">
                    <i class="fas fa-sign-in-alt px-1"></i>
                    Iniciar Sesión
                  </button>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mock">
                  <button type="button" class="btn btn-outline-light btn-sm">
                    <i class="fas fa-sign-out-alt px-1"></i>
                    Cerrar Sesión
                  </button>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="mock">
                  <button type="button" class="btn btn-outline-warning btn-sm">
                    Hazte Premium!
                  </button>
                </a>
              </li>
            </ul>

            <!-- search bar -->
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-2" type="search" placeholder="buscar título" aria-label="Search"
                disabled />
              <button class="btn btn-outline-secondary my-2 my-sm-0 btn-sm py-2" type="submit" disabled>
                Buscar
              </button>
            </form>
          </div>
        </nav>

        <!-- WRAPPER -->
        <div id="wrapper" class="container-fluid">
          <div class="row">
            <!-- frontpage -->
            <section id="frontpage" class="col-12 col-md-6 col-xl-8 order-md-1 p-0 bg-primary">
              <!-- breadcrumb -->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-1 pl-3 m-0 border-bottom border-ternary rounded-0 text-ternary">
                  <li class="breadcrumb-item active" aria-current="page">Inicio</li>
                  <li class="breadcrumb-item" aria-current="page"></li>
                </ol>
              </nav>

              <!-- main -->
              <main id="carousels" class="pt-0 bg-primary">
                <!-- NOVEDADES / B4-carousel --reactive-->
                <section class="pt-4 bg-papiro1 text-ternary">
                  <h1 class="display-4 text-center font-weight-lighter">
                    novedades
                  </h1>
                  <div id="carousel1" data-ride="carousel" class="carousel slide bg-papiro2-grad" data-img-width="150"
                    data-img-class="d-block mx-auto my-5 pb-5" data-caption-class="carousel-caption text-primary pb-0">
                  </div>
                </section>

                <!-- MIXES / B4-carousel --reactive-->
                <section class="pt-4 bg-papiro1 text-ternary">
                  <h1 class="display-4 text-center font-weight-lighter">
                    mix verano
                  </h1>
                  <div id="carousel2" data-ride="carousel" class="carousel slide bg-papiro2-grad" data-img-width="150"
                    data-img-class="d-block mx-auto my-5 pb-5" data-caption-class="carousel-caption text-primary pb-0">
                  </div>
                </section>

                <!-- RECOMENDADO / B4-carousel --reactive-->
                <section class="pt-4 bg-papiro1 text-ternary">
                  <h1 class="display-4 text-center font-weight-lighter">
                    recomendado
                  </h1>
                  <div id="carousel3" data-ride="carousel" class="carousel slide bg-papiro2-grad" data-img-width="150"
                    data-img-class="d-block mx-auto my-5 pb-5" data-caption-class="carousel-caption text-primary pb-0">
                  </div>
                </section>

                <!-- CRÍTICA / B4-carousel --reactive-->
                <section class="pt-4 bg-papiro1 text-ternary">
                  <h1 class="display-4 text-center font-weight-lighter">crítica</h1>
                  <div id="carousel4" data-ride="carousel" class="carousel slide bg-papiro2-grad" data-img-width="150"
                    data-img-class="d-block mx-auto my-5 pb-5" data-caption-class="carousel-caption text-primary pb-0">
                  </div>
                </section>

                <!-- LO MáS LEÍDO / B4-carousel --reactive-->
                <section class="pt-4 bg-papiro1 text-ternary">
                  <h1 class="display-4 text-center font-weight-lighter">
                    lo más leído
                  </h1>
                  <div id="carousel5" data-ride="carousel" class="carousel slide bg-papiro2-grad" data-img-width="150"
                    data-img-class="d-block mx-auto my-5 pb-5" data-caption-class="carousel-caption text-primary pb-0">
                  </div>
                </section>
              </main>
            </section>

            <!-- bibliolists -->
            <section id="bibliolists"
              class="col col-sm-7 col-md-3 col-xl-2 p-3 pt-4 border border-left-0 border-ternary text-ternary bg-secondary-grad">
              <!-- tu biblioteca -->
              <section class="mb-4" id="biblio">
                <h1 class="section-title font-weight-lighter text-papiro1">
                  mi biblioteca
                </h1>
                <ul class="list-group">
                  <li class="list-group-item bg-secondary text-ternary">
                    <a class="mr-2 mr-md-3 text-ternary" href="mock">
                      recomendado para ti
                    </a>
                  </li>
                  <li class="list-group-item bg-secondary text-ternary">
                    <a class="mr-2 mr-md-3 text-ternary" href="mock">
                      mixes
                    </a>
                  </li>
                  <li class="list-group-item bg-secondary text-ternary">
                    <a class="mr-2 mr-md-3 text-ternary" href="mock">
                      tu última lectura
                    </a>
                  </li>
                  <li class="list-group-item bg-secondary text-ternary">
                    <a class="mr-2 mr-md-3 text-ternary" href="mock">
                      <i class="fas fa-podcast"></i>
                      <span class="pl-1 font-weight-lighter">
                        podcast
                      </span>
                    </a>
                  </li>
                </ul>
              </section>

              <!-- readlists -->
              <section class="mb-4" id="readlists">
                <h1 class="section-title font-weight-lighter text-papiro1">
                  readlists
                </h1>
                <ul class="list-group">
                  <!-- gestionar -->
                  <li class="list-group-item text-left bg-secondary-dark-grad text-papiro2 pt-2 pb-1">
                    gestionar
                  </li>
                  <li class="list-group-item bg-secondary text-ternary">
                    <a class="mr-2 mr-md-3 text-ternary" href="mock">
                      <i class="far fa-eye-slash"></i>
                      <span class="pl-1 font-weight-lighter">
                        crear lista privada
                      </span>
                    </a>
                  </li>
                  <li class="list-group-item bg-secondary text-ternary">
                    <a class="mr-2 mr-md-3 text-ternary" href="mock">
                      <i class="fa fa-plus"></i>
                      <span class="pl-1 font-weight-lighter">
                        crear lista pública
                      </span>
                    </a>
                  </li>
                  <li class="list-group-item bg-secondary text-ternary">
                    <a class="mr-2 mr-md-3 text-ternary" href="mock">
                      <i class="far fa-edit"></i>
                      <span class="pl-1 font-weight-lighter">
                        editar
                      </span>
                    </a>
                  </li>
                  <!-- my readlists -->
                  <li class="list-group-item text-left bg-secondary-dark-grad text-papiro2 pt-2 pb-1">
                    mis readlists
                  </li>
                  <li class="list-group-item bg-secondary text-ternary">
                    <a class="mr-2 mr-md-3 text-ternary" href="mock">
                      <i class="fa fa-list"></i>
                      <span class="pl-1 font-weight-lighter">
                        misterio
                      </span>
                    </a>
                  </li>
                  <li class="list-group-item bg-secondary text-ternary">
                    <a class="mr-2 mr-md-3 text-ternary" href="mock">
                      <i class="fa fa-list"></i>
                      <span class="pl-1 font-weight-lighter">
                        cuentos y poemas
                      </span>
                    </a>
                  </li>
                  <li class="list-group-item bg-secondary text-ternary">
                    <a class="mr-2 mr-md-3 text-ternary" href="mock">
                      <i class="fa fa-list"></i>
                      <span class="pl-1 font-weight-lighter">
                        vacaciones 2020
                      </span>
                    </a>
                  </li>
                  <li class="list-group-item bg-secondary text-ternary">
                    <a class="mr-2 mr-md-3 text-ternary" href="mock">
                      <i class="fa fa-list"></i>
                      <span class="pl-1 font-weight-lighter">
                        syfy
                      </span>
                    </a>
                  </li>
                </ul>
              </section>
            </section>

            <!-- friends -->
            <section id="friends"
              class="col col-sm-5 col-md-3 col-xl-2 order-md-1 p-3 pt-4 border border-right-0 border-ternary text-ternary bg-secondary-grad">
              <h1 class="section-title font-weight-lighter text-papiro1">
                amistades
              </h1>
              <ul class="list-group">
                <li class="list-group-item bg-secondary px-2">
                  <a class="mr-2 mr-md-3 text-ternary" href="mock">
                    <div class="card bg-ternary text-secondary">
                      <img class="card-img-top" src="data/img/emily_blunt.jpg" alt="emily_blunt" />
                      <div class="card-body text-justify">
                        <h4 class="card-title">Emily Blunt</h4>
                        <p class="card-text">
                          está leyendo "All You Need Is Kill"
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="list-group-item bg-secondary px-2">
                  <a class="mr-2 mr-md-3 text-ternary" href="mock">
                    <div class="card bg-ternary text-secondary">
                      <img class="card-img-top" src="data/img/johnny_5.jpg" alt="johnny_5" />
                      <div class="card-body">
                        <h4 class="card-title">Johnny 5</h4>
                        <p class="card-text">
                          está leyendo "Sueñan Los Androides Con Ovejas Eléctricas?"
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="list-group-item bg-secondary px-2">
                  <a class="mr-2 mr-md-3 text-ternary" href="mock">
                    <div class="card bg-ternary text-secondary">
                      <img class="card-img-top" src="data/img/jeff_goldblum.jpg" alt="jeff_goldblum" />
                      <div class="card-body">
                        <h4 class="card-title">Jeff Goldblum</h4>
                        <p class="card-text">
                          está leyendo "El Món Perdut"
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </section>
          </div>
        </div>

        <!-- FOOTER -->
        <footer class="pt-4 bg-secondary font-weight-lighter">
          <!-- net links -->
          <section class="container-md">
            <div class="row pb-4">
              <!-- services -->
              <ul class="col-4 pl-4 pr-2 nav flex-column align-items-start">
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    ayuda
                  </a>
                </li>
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    quiero publicar
                  </a>
                </li>
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    asistencia literaria
                  </a>
                </li>
                <li class="nav-item">
                  <a class="gotobookshop" href="https://www.laie.es/es/" target="_blank">
                    <img id="footer_logo_laie" src="img/laie.svg" alt="logo librería Laie" />
                  </a>
                </li>
              </ul>

              <!-- readlists -->
              <ul class="col-4 px-2 nav flex-column align-items-start">
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    novedades
                  </a>
                </li>
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    mix verano
                  </a>
                </li>
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    recomendado
                  </a>
                </li>
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    crítica
                  </a>
                </li>
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    lo más leído
                  </a>
                </li>
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    todos los mixes
                  </a>
                </li>
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    todos los eBooks
                  </a>
                </li>
              </ul>

              <!-- legal -->
              <ul class="col-4 pl-4 pr-3 nav flex-column align-items-start">
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    aviso legal
                  </a>
                </li>
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    condiciones suscripción
                  </a>
                </li>
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    política de privacidad
                  </a>
                </li>
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    política de cookies
                  </a>
                </li>
                <li class="nav-item">
                  <a class="mr-2 mr-md-3 text-primary" href="mock">
                    reglas de moderación
                  </a>
                </li>
              </ul>
            </div>
          </section>
          <!-- copyright -->
          <section id="license" class="py-2 text-center font-weight-normal text-secondary bg-ternary">
            &#9400; Isaac Bejarano, 2020 - Licencia GPLv3
          </section>
        </footer>

        <!-- / Bootstrap 4 -->
      </div>
    </div>

    <!-- custom javascript -->
  <script src="data/novedades.js"></script>
  <script src="data/mixes.js"></script>
  <script src="data/recomendado.js"></script>
  <script src="data/critica.js"></script>
  <script src="data/leido.js"></script>
  <script src="js/carousel.component.js"></script>
  <script src="js/goto.laie.js"></script>

    <!-- B4 => 1.jQuery, 2.Popper.js, 3.Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
  </div>
</body>

</html>