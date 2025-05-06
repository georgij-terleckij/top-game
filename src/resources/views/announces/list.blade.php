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
                            <a href="/">Главная</a>  / Анонсы серверов - {{ $game->name }}</strong>

                        </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row m-0">
                            <div class="col-12 col-md p-0">
                                <a class="button-red w-100" href="{{ route('announces', ['lineage-2']) }}">Lineage 2</a>
                            </div>
                            <div class="col-12 col-md p-0">
                                <a class="button-red w-100" href="{{ route('announces', ['world-of-warcraft']) }}">World of Warcraft</a>
                            </div>
                            <div class="col-12 col-md p-0">
                                <a class="button-red w-100" href="{{ route('announces', ['aion-online']) }}">Aion</a>
                            </div>
                            <div class="col-12 col-md p-0">
                                <a class="button-red w-100" href="{{ route('announces', ['perfect-world']) }}">Perfect World</a>
                            </div>
                            <div class="col-12 col-md p-0">
                                <a class="button-red w-100" href="{{ route('announces', ['mu-online']) }}">Mu-Online</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3 order-last order-md-last">
                        <div class="review_box pd-10">
                            <h3 class="px-3">СКОРО ОТКРОЮТСЯ</h3>
                        </div>
                        <div class="block-info">
                            <div class="icon">
                                <i class="fas fa-external-link-alt"></i>
                            </div>
{{--                            mb_strimwidth($news->text, 0, 150, "...")--}}
                            <span class="name name-bg">
                                <div class="row box-bg m-0">
                                    <div class="col-4 pr-0"><a class="ann_name cut-b" href="/announces_link/185" target="_blank">МЕЛЬНИЦА ТАРРЕН</a></div>
                                    <div class="col-4 text-center cut-b" title="Vanilla Classic">Vanilla Classic</div>
                                    <div class="col-1 d-none d-md-block text-center">x100</div>
                                    <div class="col-3 text-center">21/02/2018</div>
                                </div>
                            </span>

                        </div>
                        <div class="block-info">
                            <div class="icon">
                                <i class="fas fa-external-link-alt"></i>
                            </div>
                            {{--                            mb_strimwidth($news->text, 0, 150, "...")--}}
                            <span class="name name-bg">
                                <div class="row box-bg m-0">
                                    <div class="col-4 pr-0"><a class="ann_name cut-b" href="/announces_link/185" target="_blank">МЕЛЬНИЦА ТАРРЕН</a></div>
                                    <div class="col-4 text-center cut-b" title="Vanilla Classic">Vanilla Classic</div>
                                    <div class="col-1 d-none d-md-block text-center">x100</div>
                                    <div class="col-3 text-center">21/02/2018</div>
                                </div>
                            </span>

                        </div>

                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-3 order-lg-last">
                        <div class="review_box pd-10">
                            <h3 class="px-3">УЖЕ ОТКРЫЛИСЬ</h3>
                        </div>
                        <div class="block-info">
                            <div class="icon">
                                <i class="fas fa-external-link-alt"></i>
                            </div>
                            {{--                            mb_strimwidth($news->text, 0, 150, "...")--}}
                            <span class="name name-bg">
                                <div class="row box-bg m-0">
                                    <div class="col-4 pr-0"><a class="ann_name cut-b" href="/announces_link/185" target="_blank">МЕЛЬНИЦА ТАРРЕН</a></div>
                                    <div class="col-4 text-center cut-b" title="Vanilla Classic">Vanilla Classic</div>
                                    <div class="col-1 d-none d-md-block text-center">x100</div>
                                    <div class="col-3 text-center">21/02/2018</div>
                                </div>
                            </span>

                        </div>
                        <div class="block-info">
                            <div class="icon">
                                <i class="fas fa-external-link-alt"></i>
                            </div>
                            {{--                            mb_strimwidth($news->text, 0, 150, "...")--}}
                            <span class="name name-bg">
                                <div class="row box-bg m-0">
                                    <div class="col-4 pr-0"><a class="ann_name cut-b" href="/announces_link/185" target="_blank">МЕЛЬНИЦА ТАРРЕН</a></div>
                                    <div class="col-4 text-center cut-b" title="Vanilla Classic">Vanilla Classic</div>
                                    <div class="col-1 d-none d-md-block text-center">x100</div>
                                    <div class="col-3 text-center">21/02/2018</div>
                                </div>
                            </span>

                        </div>
                    </div>
                </div>
                <div class="part"></div>
                @include('layouts.latest-news-block')
            </div>
        </div>
    </div>


@endsection
