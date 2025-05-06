@extends('layouts.app')

@section('content')
    <div class="main_page py-4">
        <div class="body">
            <div class="content">
                home.welcome
                <div class="left_info">
                    @include('layouts.sidebar')
                </div>
                <div class="row m-0 game-add-group">
                    <div class="col-lg-3 col-md-6 col-sm-12 game-add-item">
                        <div class="container-game-add"><a href="#"><img
                                    src="/images/main/1.jpg" alt=""></a></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 game-add-item">
                        <div class="container-game-add"><a href="#"><img
                                    src="/images/main/2.jpg" alt=""></a></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 game-add-item">
                        <div class="container-game-add"><a href="#"><img
                                    src="/images/main/3.jpg" alt=""></a></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 game-add-item">
                        <div class="container-game-add"><a href="#"><img
                                    src="/images/main/4.jpg" alt=""></a></div>
                    </div>
                </div>
                @include('layouts.adds')
                <div class="col-12 review_box rev_box ">
                    <h2 class="review_header">Каталог серверов:</h2>
                    <nav class="navbar">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2 search-inp" type="search" placeholder="Поиск"
                                   aria-label="Поиск">
                            <button class="btn btn-search my-2 my-sm-0" type="submit"><i class="fas fa-caret-right"></i>
                            </button>
                        </form>
                    </nav>
                </div>
            </div>
            <div class="content content-p15">
                <div class="row rev-row">

                    @forelse(\App\Models\Game::where('in_rating', 1)->orderBy('name', 'asc')->get() as $game)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="block-info-category">
                                <div class="icon"><img alt="" src="/images/games_ico/{{ $game->id }}.png" width="40px"
                                                       height="40px">
                                </div>
                                <a class="name text-center" href="/category/{{ $game->slug }}/">{{ $game->name .'
                            ('.count($game->projects).')' }}</a></div>
                        </div>
                    @empty
                    @endforelse
                </div>


                <div class="part"></div>
                @include('layouts.latest-news-block')
            </div>
        </div>
    </div>


    {{--            @include('layouts.footer')--}}

@endsection
