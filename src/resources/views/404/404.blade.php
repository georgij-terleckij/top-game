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
                            <a href="/">Главная</a> / <a href="{{ route('news') }}">Новости</a> / 404</strong>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="w-100 text-center ">
                        <img class="p404-img" src="/images/404-800.png">
                        <a class="p404-btn" href="#">Главная</a>
                </div>
            </div>
        </div>
    </div>


@endsection
