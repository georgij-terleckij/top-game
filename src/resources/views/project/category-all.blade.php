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
                            <a href="/">Главная</a> / Игровые сервера
                            </strong>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12"><h2 class="review_header">Каталог серверов:</h2></div>
                    @forelse(\App\Models\Game::where('in_rating', 1)->orderBy('name', 'asc')->get() as $game)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="block-info-category">
                                <div class="icon">
                                    <img alt="" src="/images/games_ico/{{ $game->id }}.png" width="40px"
                                         height="40px">
                                </div>
                                <a class="name text-center"
                                   href="/category/{{ $game->slug }}/">{{ $game->name .' ('.count($game->projects).')' }}</a>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
                <div class="part"></div>

                @include('layouts.latest-news')

            </div>
        </div>
    </div>

    {{--            @include('layouts.footer')--}}

@endsection
