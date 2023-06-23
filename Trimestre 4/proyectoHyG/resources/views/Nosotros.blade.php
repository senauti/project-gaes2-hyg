{{-- @extends('layouts.inicio')
@section('content')
<main>
    <p class="h4"> Somos una tienda de abarrotes familiar, donde nos enfocamos en ofrecer
        productos de alta calidad a precios accesibles. Encontrarás todo lo que necesitas para tu
        hogar, desde alimentos básicos como arroz, frijoles, harina y azúcar, hasta productos de
        limpieza, cuidado personal y productos para tu mascota.</p>

<main  class="container">
    <div class="container hero">
        <div class="row" id="sobreNosotros">
            <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                <h1 class="display-1 ">SOBRE NOSOTROS</h1>
                <p class="h4"> Somos una tienda de abarrotes familiar, donde nos enfocamos en ofrecer
                    productos de alta calidad a precios accesibles. Encontrarás todo lo que necesitas para tu
                    hogar, desde alimentos básicos como arroz, frijoles, harina y azúcar, hasta productos de
                    limpieza, cuidado personal y productos para tu mascota.</p>
            </div>

            <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                <div class="iphone-mockup">
                <img class="device img-fluid" src="{{ asset('Iconos/comida.png') }}">

                </div>
            </div>
        </div>
    </div>

</main>

</main>
@endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Boostrap --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .navbar {
           z-index: 1000;
           position: relative;
        }

        .container {
           position: relative;
        }
        .image-container {
            margin-top: 150px; /* Ajusta este valor según tus necesidades */
        }
        .principal{
            padding-top: 100px;
            height: 850px;
        }
     </style>
</head>

<body class="body">


    <header id="header">
        <nav class="navbar navbar-expand-md navbar bg">
            <div class="logo">
                <img id="imglogo"src="{{ asset('Iconos/image-removebg-preview.png')}}" class="img-fluid" alt="Logo empresa">

            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/Nosotros') }}">Nosotros </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/Contacto') }}">Contacto </a>
                    </li>
                </ul>
            </div>
        </nav>
            <div >
                <a class="btn btn-outline-primary" href="{{ route('login') }}">INICIO <br> DE SESIÓN</a>
            </div>
    </header>

    <main class="principal">


    <main  class="container">
        <div class="container hero">
            <div class="row" id="sobreNosotros">
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                    <h1 class="display-1 ">SOBRE NOSOTROS</h1>
                    <p class="h4"> Somos una tienda de abarrotes familiar, donde nos enfocamos en ofrecer
                        productos de alta calidad a precios accesibles. Encontrarás todo lo que necesitas para tu
                        hogar, desde alimentos básicos como arroz, frijoles, harina y azúcar, hasta productos de
                        limpieza, cuidado personal y productos para tu mascota.</p>
                </div>

                <div class="image-container col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">

                    <img class="device img-fluid" src="{{ asset('Iconos/comida.png') }}">

                </div>
            </div>
        </div>

    </main>

    </main>


      <footer class="footer">

      </footer>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
  integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

</body>
