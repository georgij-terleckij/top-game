@extends('layouts.app-lk')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1>Создание проекта</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <button form="form-project" type="submit" class="btn btn-sm btn-outline-secondary mx-2">Сохранить
                    </button>
                    <a class="btn btn-sm btn-outline-secondary mx-2" href="{{ route('lk.myProject') }}">Назад</a>
                </div>
            </div>
            <div class="table-responsive my-4">
                <form
                    action="{{ route('lk.myProject.store') }}"
                    method="post"
                    enctype="multipart/form-data"
                    id="form-project"
                >
                    @csrf
                    <div class="form-group">
                        <label for="game_id">Игра</label>
                        <select class="form-control" name="game_id" id="game_id">
                            @foreach($games as $game)
                                <option value="{{ $game->id }}">{{ $game->name }}</option>
                            @endforeach
                        </select>
                        @error('game_id')
                        <div class="alert alert-danger mt-3" role="alert">
                            Поле обязательное к заполнению.
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название проекта</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Ввести название" value="{{ old('title') }}">
                        @error('title')
                        <div class="alert alert-danger mt-3" role="alert">
                            Поле обязательное к заполнению.
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="site_url">Сайт</label>
                        <input type="text" name="site_url" class="form-control" id="site_url"
                               placeholder="www.Site.com" value="{{ old('site_url') }}">
                    </div>
                    <div class="form-group">
                        <label for="text">Описание проекта</label>
                        <textarea name="text" class="form-control" id="text" rows="5">{{ old('text') }}</textarea>
                        @error('text')
                        <div class="alert alert-danger mt-3" role="alert">
                            Поле обязательное к заполнению.
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="youtube_url">Видео ролик</label>
                        <input type="text" name="youtube_url" class="form-control" id="youtube_url"
                               placeholder="Ссылка на Youtube" value="{{ old('youtube_url') }}">
                    </div>

                    <div
                        class="pb-2 mb-3 border-bottom">

                        <h3 class="mt-5 w-100">Социальные сети</h3>
                        <p style="color: #979797;">Добавьте ссылки на социальные сети вашего проекта</p>
                    </div>
                    <div class="form-group">
                        <label for="vk_url">ВконтактеK</label>
                        <input type="text" name="vk_url" class="form-control" id="vk_url" placeholder="www.vk.com"
                               value="{{ old('vk_url') }}">
                    </div>
                    <div class="form-group">
                        <label for="fb_url">Facebook</label>
                        <input type="text" name="fb_url" class="form-control" id="fb_url"
                               placeholder="www.facebook.com" value="{{ old('fb_url') }}">
                    </div>
                    <div class="form-group">
                        <label for="twit_url">Twitter</label>
                        <input type="text" name="twit_url" class="form-control" id="twit_url"
                               placeholder="www.twitter.com" value="{{ old('twit_url') }}">
                    </div>


                    {{--                    <div class="form-check">--}}
                    {{--                        <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
                    {{--                        <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
                    {{--                    </div>--}}
                </form>
            </div>
        </div>
    </div>
@endsection
