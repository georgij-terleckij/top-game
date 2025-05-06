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
                            <a href="{{ route('home') }}">Главная</a> / Популярные игры
                            </strong>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="title-wrapper">
                            <h3 class="widget-title">Топ онлайн игр которые стоит поиграть</h3>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="adv-item">
                            <a href="/game_id/1" class="bookmark first-img"></a>
                            <div class="adv-item-info">
                                <a href="#" class="adv-item-info">Lorem ipsum.</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cum dicta quisquam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cum dicta quisquam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cum dicta quisquam.</p>
                                <a href="/game_id/1" class="button" >Подробнее</a>
                                <a href="ss" class="button" target="_blank">Играть</a>
                            </div>
                        </div>
                    </div>
                    @for($s = 0; $s<12; $s++)
                    <div class="col-12 col-md-4 mb-2">
                        <div class="adv-item">
                            <a href="/game_id/1" class="bookmark"></a>
                            <div class="adv-item-info">
                                <a href="#" class="adv-item-info">Lorem ipsum.</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cum dicta quisquam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cum dicta quisquam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cum dicta quisquam.</p>
                                <a href="/game_id/1" class="button" >Подробнее</a>
                                <a href="ss" class="button" target="_blank">Играть</a>
                            </div>
                        </div>
                    </div>
                    @endfor

                </div>
            </div>
        </div>
    </div>

    {{--            @include('layouts.footer')--}}

@endsection
