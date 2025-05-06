@extends('layouts.app')

@section('content')

@php
$sortData = ($sort)??4
@endphp
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
]
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
                            <a href="/">Главная</a> / Обзоры</strong>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row m-0">
                <div class="m-auto pb-1">
                    <ul class="news-naw">
                        <li><a href="#">Все обзоры</a></li>
                        <li><a href="#">Lineage 2</a></li>
                        <li><a href="#">World of Warcraft</a></li>
                        <li><a href="#">Aion</a></li>
                        <li><a href="#">RF Online</a></li>
                        <li><a href="#">Perfect World</a></li>
                        <li><a href="#">Minecraft</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="navigation block-right-sidebar">
                            {{ $data->links() }}
                        </div>
                        <div>
                            @foreach ($data as $d)
                            @php
                            $date = strtotime($d->created_at)
                            @endphp
                            <div class="row mx-0 news-list">
                                <div class="col-12 px-0 ">
                                    <div class="pdn-10">
                                        <a href="{{ route('news_show', [$d->to_url]) }}" class="bookmark"></a>
                                    </div>
                                </div>


                                <div class="col-12 ">
                                    <div class="blog-content news-list-ct">
                                        <div class="blog-date news-list-ic">
                                            <div class="pcomments">
                                                <a href="{{ route('news_show', [$d->to_url]) }}#comments">
                                                        <span class="comments"><i
                                                            class="fa fa-comments"></i>&nbsp;0</span>
                                                </a>
                                            </div>
                                            <div class="plikes">
                                                <a>
                                                    <span class="likes"><i
                                                        class="fa fa-eye"></i>&nbsp;{{$d->viewed}}</span>
                                                </a>
                                            </div>
                                        </div>
                                        <a class="ncategory  news-list-ttl"
                                           href="{{ route('news_show', [$d->to_url]) }}">{{ $d->title }}</a>


                                        <div class="blog-info news-list-info">
                                            <div class="post-pinfo">
                                                    <span class="date"><i
                                                        class="fa fa-clock"></i> {{ date('d',$date) }} {{$_monthsList[date('m',$date)]  }} {{ date('Y',$date) }}</span>&nbsp;
                                            </div>
                                        </div>
                                        <div class="post-text news-list-txt">{{ mb_strimwidth( $d->text, 0, 300, "...")
                                            }}
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                        <div class="navigation block-right-sidebar">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    @endsection
