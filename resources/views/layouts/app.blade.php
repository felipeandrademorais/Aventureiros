<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ '/img/logo.png' }}" /> 
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cadastro') }}">{{ __('Inscrições') }}</a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="{{ route('contato') }}">{{ __('Contato') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('https://www.facebook.com/profile.php?id=100006001604895') }}"><img src="{{ '/img/icoface.png' }}" alt="icoface" width="18" height="18"/></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('https://www.instagram.com/luzeirinhosjba/') }}"><img src="{{ '/img/icoinsta.png' }}" alt="icoinsta" width="20" height="20"/></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @if(isset($mensagem))
                @if($mensagem)
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Inscrição realizada com Sucesso!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @else
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Ocorreu um erro com sua inscrição!</strong><label> Por favor entre em contato conosco através do menu contato.<label>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            @endif
           
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>  
</body>
</html>
