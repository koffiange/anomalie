<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Anomalie') }}</title>

    <!-- Styles -->
    <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-multiselect.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <img src="{{ asset('images/bug-icon.jpg') }}" width="40px" height="40px" >
                <span class="text-uppercase" style="font-size: 22px">Anomalie </span>
                <i class="text-lowercase text-muted" style="font-size: 18px">(v. alpha)</i>
            <!--
                    <strong class="text-uppercase text-primary" style="font-size: larger">{{ config('app.name', 'Laravel') }}</strong>
                    -->
            </a>
            <button type="button" class="navbar-toggler"
                    data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 5vw !important;">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->nom }} {{ Auth::user()->prenoms }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Déconnexion
                            </a>

                            <a class="dropdown-item" href="/parametrage">
                                Paramétrage
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>


    <main class="container-fluid mt-5">
        <div class="row">
            <!-- Sidebar -->
            <section class="col col-sm-2 " >
                @auth
                    @include('layouts.parametrage.sidebar')
                @endauth
            </section>

            <!-- Content -->
            <section class="col col-sm-9">
                <div class="row">
                    <div class="col col-12">
                        @yield('breadcrumbs')
                    </div>
                    <div class="col col-12">
                        @yield('content')
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>

<!-- Scripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-multiselect.js') }}"></script>
<script type="text/javascript">
    $('#correcteurs').multiselect();
</script>
</body>
</html>
