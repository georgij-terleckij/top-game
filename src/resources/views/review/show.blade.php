@extends('layouts.app')

@section('content')
@php
$_monthsList = [
"01" => "Января",
"02" => "Февраля",
"03" => "Марта",
"04" => "Апреля",
"05" => "Мая",
"06" => "Июня",
"07" => "Июля",
"08" => "августа",
"09" => "Сентября",
"10" => "Октября",
"11" => "Ноября",
"12" => "Декабря"
];
$date = strtotime($data->created_at);
@endphp
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
                            <a href="/">Главная</a> / <a href="{{ route('news') }}">Новости</a> / <a
                                href="#">{{ $data->game->name }}</a> / {{ $data->title }}</strong>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="blog-title mt-3 px-3 py-1">
                        <h1>В War Thunder добавили поддержку технологии Nvidia Ansel</h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="block-header-bg">
                        <div class="block-header-content">
                            <div class="row ">
                                <div class="col-12 col-md-8">
                                    <div class="blog-image mb-3" style="overflow: hidden;">
                                        <a class="bookmark"
                                           style="height: 345px; background-image: url(http://lk.play-mmo.ru/files/news/1477905239.jpeg);"></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 pl-md-0">
                                    <div class="pinfo">
                                        <a href="/news/war-thunder/" class="bookmark"
                                           style="margin-bottom: 10px; height: 150px; background-image: url(http://lk.play-mmo.ru/files/news/1477905239.jpeg);"></a>
                                        <div class="pinfo-box">
                                            <span>Игра: </span> War Thunder<br>
                                            <span>Дата выхода: </span> 1900<br>
                                            <span>Жанр: </span> Симулятор<br>
                                            <span>Платформа: </span> PC<br>
                                            <span>Разработчик: </span> Gaijin Entertainment<br>
                                            <span>Издатель: </span> Gaijin Entertainment<br>
                                        </div>
                                    </div>
                                    <!-- uSocial -->
                                    <div class="usoc-p">
                                        <script async src="https://usocial.pro/usocial/usocial.js?v=6.1.4"
                                                data-script="usocial" charset="utf-8"></script>
                                        <div class="uSocial-Share " data-pid="69c7cd9365a8e40afc932ccc3b03b2ac"
                                             data-type="share"
                                             data-options="round-rect,style1,default,absolute,horizontal,size24,eachCounter1,counter0"
                                             data-social="vk,fb,gPlus,twi" data-mobile="vi,wa,sms"></div>
                                    </div>
                                    <!-- /uSocial -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-3 ">
                    <div>
                        <div class="project-blog-content">

                            <div class="blog-info">
                                <div class="post-pinfo">
                                    <a class="button-1" href="/user_id/4"><img
                                        src="http://lk.play-mmo.ru/files/avatar/4.gif" width="30" height="30"
                                        alt="author image"> {{ $data->user->name }}</a>
                                    |
                                    <a class="button-1" href="/game/war-thunder/"> {{ $data->game->name }} </a>
                                    |
                                    <span>{{ date('d',$date) }} {{$_monthsList[date('m',$date)]  }} {{ date('Y',$date) }}</span>
                                </div>
                            </div>
                            <div class="post-text pb-5">
                                {{ $data->text }}
                            </div>

                            <div class="blog-date d-flex justify-content-end">
                                <div class="pcomments">
                                    <a href="/news_id/v-war-thunder-dobavili-podderghku-tehnologii-nvidia-ansel#comments"><span
                                        class="comments"><i class="fa fa-commenting-o"></i> 0</span></a>
                                </div>
                                <div class="plikes">
                                    <a><span class="likes"><i class="fa fa-eye"></i>&nbsp;475</span></a>
                                </div>
                            </div>

                            @if(!empty($data->youtube_url))
                            <div class="text-center mb-3">
                                <iframe id="ytplayer" type="text/html" width="100%" height="300"
                                        src="//www.youtube.com/embed/{{ $data->youtube_url }}?showinfo=0&theme=light"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="part"></div>
                </div>
            </div>
            @include('layouts.latest-news')
        </div>
    </div>
</div>


@endsection
