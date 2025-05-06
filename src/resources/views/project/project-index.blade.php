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
                                <a href="/">Главная</a> /
                                <a href="{{ route('category') }}">Игровые сервера</a> /
                                <a href="{{ route('category-game', $data->game->to_url) }}">{{ $data->game->name }}</a> / {{ $data->title }}                            </strong>
                        </span>
                        </div>
                    </div>
                    <div class="col-12 block-header-bg">
                        <div class="row">
                            <div class="col-10"><h3>{{ $data->title }}</h3></div>
                            <div class="col-2">
                                <a href="{{ route('project-vote',  $data->id) }}" class="button-red float-r"
                                                  title="Голосуйте за CraftDoge PVP #1" style="margin: 4px 0;">
                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i> ГОЛОСОВАТЬ</a>
                            </div>
                        </div>
                        <div class="row block-header-content">
                            <div class="col-8">
                                <img width="100%" src="http://lk.play-mmo.ru/files/project/no-baner.jpg"
                                     style="border-bottom: 1px solid #000;">
                                <div class="post-text py-2">
                                    <!-- uSocial -->
                                    <script async src="https://usocial.pro/usocial/usocial.js?v=6.1.4"
                                            data-script="usocial" charset="utf-8"></script>
                                    <div class="uSocial-Share" data-pid="69c7cd9365a8e40afc932ccc3b03b2ac"
                                         data-type="share"
                                         data-options="round-rect,style1,default,absolute,horizontal,size24,eachCounter1,counter0"
                                         data-social="vk,fb,gPlus,twi,pinterest" data-mobile="vi,wa,sms"></div>
                                    <!-- /uSocial -->
                                    <h3 style="color: #428bca;">О сервере:</h3>
                                    <p class="" style="line-height: 26px;">
                                        Connect to IP: 37.187.249.96:26900 to play. </p>

                                </div>
                            </div>
                            <div class="col-4 my-3">
                                @include('layouts.project-box', ['data' => $data])
                            </div>
                        </div>
                    </div>
{{--                    <link href="{{ asset('css/htooltip.css') }}" rel="stylesheet">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="block-info">--}}
{{--                            <div class="icon"><i class="fa fa-server" aria-hidden="true"></i></div>--}}
{{--                            <link rel="STYLESHEET" type="text/css" href="/template/default/css/htooltip.css">--}}
{{--                            <a class="name htooltip" href="/project_id/50/server_id/53" style="font-weight: 800;">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-5 columns">CraftDoge PVP #1</div>--}}
{{--                                    <div class="col-4 columns"><p></p></div>--}}
{{--                                    <div class="col-3 columns"><p>IP: 37.187.249.96:26900</p></div>--}}
{{--                                </div>--}}
{{--                                <span>--}}
{{--                                    <p><i class="fa fa-users"></i> Online ~ 64</p>--}}
{{--                                    <p><i class="fa fa-globe"></i> Тип сервера: PVP</p>--}}
{{--                                    <p><i class="fa fa-diamond"></i> Донат: Нет</p>--}}
{{--                                    <p><i class="fa fa-question-circle"></i> Описание: <br>Connect to IP: 37.187.249.96:26900 to play.</p>--}}
{{--                                </span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    {{--            @include('layouts.footer')--}}

@endsection
