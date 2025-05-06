<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    {{--
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.2.2.min.js"></script>
    --}}


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/solid.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Styles -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/super-style.css') }}" rel="stylesheet">

    @section('headSection')
    @show

</head>
<body>
<header>
    <div class="topbar">
        <div class="content content-head">
            <div class="row align-items-center">
                <div class="container logo clear col-12 col-md-6 ">
                    <a class="brand" href="/"><img src="/images/logo-1.png" alt="logo"></a>
                </div>
                <div class="col-12 col-md-6 topbar-box">
                    <div class="social">
                        <a data-original-title="Facebook" data-toggle="tooltip" data-placement="bottom"
                           class="facebook soc-link" target="_blank" href="#"> <i class="fab fa-facebook"></i></a>
                        <a data-original-title="Вконтакте" data-toggle="tooltip" data-placement="bottom"
                           class="vk soc-link"
                           target="_blank" href="#"><i class="fab fa-vk"></i> </a>
                        <a data-original-title="Youtube" data-toggle="tooltip" data-placement="bottom"
                           class="youtube soc-link" target="_blank"
                           href="#"><i class="fab fa-youtube"></i> </a>
                    </div>
                    <span class="topbar-login float-right">
                        <a href="{{ route('login') }}" class="bg-title">
                            <i class="fa fa-user"></i> <span>Личный кабинет</span></a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="content pb-4 tr-trl">
        <div class="navbar-inner">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="head-search-box">
                    <div class="row justify-content-between">
                        <div class="col-1 p-0">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation"><span
                                class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="col-11 col-sm-8 p-0">
                            <form class="form-inline d-flex d-lg-none ">
                                <input class="form-control mr-sm-2" type="search" placeholder="Поиск"
                                       aria-label="Поиск">
                                <button class="btn btn-head-search my-2 my-sm-0" type="submit">
                                    <i class="fa fa-search serch-ic" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}" aria-current="page"><i
                                class="ubermenu-icon fa fa-home"></i><span class="px-2">Главная</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                               role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false"><i class="ubermenu-icon fa fa-crosshairs"></i><span class="px-2">Все об играх</span></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/advices/">Популярные игры</a>
                                <a class="dropdown-item" href="/news/">Новости</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                               role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="ubermenu-icon fa fa-trophy"></i>
                                <span class="px-2">Рейтинг серверов и анонсы</span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('category') }}">Каталог серверов</a>
                                <a class="dropdown-item" href="{{ route('announces', ['lineage-2']) }}">Анонсы
                                    серверов</a>
                                <a class="dropdown-item" href="#">Книга памяти</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('category-game', ['lineage-2']) }}">Рейтинг
                                    серверов Lineage 2</a>
                                <a class="dropdown-item" href="{{ route('category-game', ['aion-online']) }}">Рейтинг
                                    серверов Aion</a>
                                <a class="dropdown-item" href="{{ route('category-game', ['rf-online']) }}">Рейтинг
                                    серверов RF</a>
                                <a class="dropdown-item" href="{{ route('category-game', ['world-of-warcraft']) }}">Рейтинг
                                    серверов WoW</a>
                                <a class="dropdown-item" href="{{ route('category-game', ['minecraft']) }}">Топ серверов
                                    Minecraft</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="/news">
                                <i class="ubermenu-icon fa fa-users"></i>
                                <span class="px-2">Базы знаний</span>
                            </a>
                        </li>
                    </ul>


                </div>
            </nav>
        </div>
    </div>
</header>

@yield('content')

@include('layouts.footer')
</body>
</html>
