<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html lang="{{ $lang }}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  {{-- title + favicon --}}
  <link  rel="icon"   href="img/favicon.png" type="image/png" />
  <title>{{ $title }}</title>

  <!-- Font Awesome - icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
    integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous" />

  <!-- Bootstrap CSS. Make sure it is v.4.4^ / .container-{breakpoint}  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

  <!-- custom style -->
  <link rel="stylesheet" href="css/mock.css">
</head>

<body>
  <div class="flex-center position-ref full-height">
    {{-- <!-- @if (Route::has('login'))
    <div class="top-right links">
      @auth
      <a href="{{ url('/home') }}">Home</a>
      @else
      <a href="{{ route('login') }}">Login</a>

      @if (Route::has('register'))
      <a href="{{ route('register') }}">Register</a>
      @endif @endauth
    </div>
    @endif --> --}}

    <div class="content">
      <div class="title m-b-md">

        <!-- Bootstrap 4 -->
        <main class="p-5 mx-auto border-1 border-danger">
          <h1 class="text-danger">
            en construcción
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
          </h1>

          <p>
            <q>
              <i>
                Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Quia error possimus
                suscipit! Porro cupiditate distinctio sit
                autem a exercitationem fugiat, ipsa tempore
                est. Repudiandae, exercitationem nulla.
              </i>
            </q>
          </p>

          <div class="btn">
            <a href="{{ url('/') }}">
              Volver a Inicio
            </a>
          </div>
        </main>

        <!-- / Bootstrap 4 -->
      </div>
    </div>

    <!-- custom Javascript -->
    <!-- B4 => 1.jQuery, 2.Popper.js, 3.Bootstrap JS -->
  </div>
</body>

</html>