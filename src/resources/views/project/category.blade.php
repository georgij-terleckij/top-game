@extends('layouts.app')

@section('content')
    <div class="main_page py-4">
        <div class="body">
            <div class="content">
                <div class="left_info">
                    @include('layouts.sidebar')
                </div>
                @include('layouts.adds')
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs">
                        <span>
                            <strong>
                            <a href="/">Главная</a> / <a href="{{ route('category') }}"> Игровые сервера</a> /  {{ $data->name }}</strong>

                        </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12"><h2 class="review_header">Каталог серверов:</h2></div>
                    <div class="col-md-12 col-sm-12 mb-3">
                        <link href="{{ asset('css/htooltip.css') }}" rel="stylesheet">
                        <style>
                            .htooltip span {
                                margin-left: 0;
                            }
                        </style>

                        @forelse($data->projects as $project)
                            <div class="project-blog-post widget mb-3">
                                <div class="project-blog-wrapper">
                                    <div class="project-blog-content" style="border-top: none">
                                        <div class="project-blog-name mb-2">
                                            <div class="ticker-title"><a href="{{ route('project-view', $project->id ) }}">{{$loop->iteration}} - {{ $project->title }}</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9 col-sm-12">
                                                <div class="pb-2" style="display: flex;">
                                                    <a href="{{ route('project-view',  $project->id) }}" style="display: block;" title="">
                                                        <img alt="" src="/images/games_ico/{{ $project->game_id }}.png" width="54px"
                                                             height="54px" style=" ">
                                                    </a>
                                                    <a href="{{ route('project-view',  $project->id) }}" title="CraftDoge PVP #1">
                                                        <img width="100%" height=""
                                                             src="http://lk.play-mmo.ru/files/project/no-baner.jpg"
                                                             style="border: 1px solid black; margin-left: 10px;">
                                                    </a>
                                                </div>
                                                <span style="font-size: 13px">Connect to IP: 37.187.249.96:26900 to play.</span>
                                                <br>
{{--                                                <div class="d-none d-md-block d-lg-block d-xl-block">--}}
{{--                                                    <a href="/link/113" target="_blank" class="button warning htooltip "--}}
{{--                                                       style="width: auto; text-align: left;padding: 2px 10px;">CraftDoge--}}
{{--                                                        PVP #1--}}
{{--                                                        <span class="d-none d-md-block d-lg-block d-xl-block">--}}
{{--                                                            <p><i class="fa fa-users"></i> Online ~ 64</p>--}}
{{--                                                            <p><i class="fa fa-globe"></i> Тип сервера: </p>--}}
{{--                                                            <p><i class="fa fa-globe"></i> Тип сервера: PVP</p>--}}
{{--                                                            <p><i class="fa fa-diamond"></i> Донат: Нет</p>--}}
{{--                                                            <p><i class="fa fa-question-circle"></i> Описание: <br>Connect to IP: 37.187.249.96:26900 to play.</p>--}}
{{--                                                        </span>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
                                            </div>
                                            <div class="col-md-3 col-sm-12 d-none d-md-block d-lg-block d-xl-block">
                                                <div class="project-table">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <span class="description color-gold">Голоса</span></div>
                                                        <div class="col-xl-6 col-6">
                                                            <span class="description color-gold">Посетило</span></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-6">
                                                            <span class="description color-white">0</span></div>
                                                        <div class="col-xl-6 col-6">
                                                            <span class="description color-white">59</span></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span class="description">Рейтиг: 0</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div
                                                            class="col-md-12 col-sm-6  d-none d-md-block d-lg-block d-xl-block"
                                                            style="margin-bottom: 3px;">
                                                            <a href="/link/50" target="_blank" class="button-red">На
                                                                сайт проекта</a></div>
                                                        <div
                                                            class="col-md-12 col-sm-6 d-none d-md-block d-lg-block d-xl-block">
                                                            <a href="{{ route('project-vote',  $project->id) }}" class="button-red">Проголосовать</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="block-right-sidebar text-center">
                                <h3>В рейтинге нету не одного проекта.</h3>
                            </div>
                            <div class="part"></div>
                            @include('layouts.latest-news', ['sort' => 3])
                        @endforelse
                    </div>

                    <!--<div class="col-lg-3 d-none d-md-block d-lg-block d-xl-block">-->
                        <!--<div class="block-right-sidebar">-->
                            <!--@forelse(\App\Models\Game::where('in_rating', 1)->orderBy('name', 'asc')->get() as $game)-->
                                <!--<div class="block-info">-->
                                    <!--<a class="one" href="/category/{{ $game->to_url }}/">{{ $game->name }}</a>-->
                                <!--</div>-->
                            <!--@empty-->
                            <!--@endforelse-->
                        <!--</div>-->
                        <!--<img class="my-3" src="https://tpc.googlesyndication.com/simgad/15373518693586022331"-->
                             <!--width="240">-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>

    {{--            @include('layouts.footer')--}}

@endsection
