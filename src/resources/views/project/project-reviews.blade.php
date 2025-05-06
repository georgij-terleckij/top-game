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
                                <a href="/category/">Игровые сервера</a> /
                                <a href="{{ route('category-game', $data->game->to_url) }}">{{ $data->game->name }}</a> /
                                <a href="{{ route('project-view', $data->id) }}">{{ $data->title }}</a> / Голосование за сервер

                            </strong>
                        </span>
                        </div>
                    </div>
                    <div class="col-12 block-header-bg">
                        <div class="row">
                            <div class="col-10"><h3>{{ $data->title }}</h3></div>
                            <div class="col-2"><a href="/project_id/50/vote/" class="button-red float-r"
                                                  title="Голосуйте за CraftDoge PVP #1" style="margin: 4px 0;"><i
                                        class="fa fa-thumbs-up" aria-hidden="true"></i> ГОЛОСОВАТЬ</a></div>
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
                                    <h3 style="color: #428bca;">Голосование за сервер:</h3>
                                    <p class="" style="line-height: 26px;">Укажите Ваш игровой Ник или Логин для
                                        зачисления бонусов на проекте</p>
                                    <script src='https://www.google.com/recaptcha/api.js'></script>
                                    <form method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<{{ $data->id }}">
                                        <input type="text" name="user_login" placeholder="">
                                        <div class="g-recaptcha"
                                             data-sitekey="6LdG41wUAAAAAGP85UCoB1TS4z31cKt-gyLOCEbq"></div>
                                        <br>
                                        <input class="button button-red" type="submit" name="vote_submit"
                                               value="Проголосовать!" style="padding: 10px">
                                    </form>
                                </div>
                            </div>
                            <div class="col-4 my-3">
                                @include('layouts.project-box', ['data' => $data])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--            @include('layouts.footer')--}}

@endsection
