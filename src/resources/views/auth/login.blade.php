@extends('layouts.app')

@section('content')
<div class="main_page py-4">
    <div class="container body">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex align-items-center w-100">
                    <div class="w-100 auth-size">
                        <!--<div class="card-header">{{ __('Login') }}</div>-->
                        <div class="align-items-center justify-content-center text-center py-4">
                            <a class="brand" href="/"><img src="/images/logo-1.png" alt="logo"></a>
                        </div>
                        <div class="align-items-center justify-content-center auth-head">Вход:</div>
                        <div class="part"></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <!--<label for="email"-->
                                    <!--class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->

                                    <div class="col-12">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="email"
                                               value="{{ old('email') }}" required autocomplete="email"
                                               placeholder="Электронная почта">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <!--<label for="password"-->
                                    <!--class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>-->

                                    <div class="col-12">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password"
                                               required autocomplete="current-password"
                                               placeholder="Пароль">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <div class="col-12 ">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Запомнить') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-12">
                                        <button type="submit" class="btn all_news btn-auth">
                                            {{ __('Авторизироваться') }}
                                        </button>


                                    </div>
                                </div>
                                <div class="form-group row mb-0 align-items-center py-4">
                                    <div class="part-left col"></div>
                                    <p class="col m-0 text-center">или войти через</p>
                                    <div class="part col"></div>
                                </div>

                                <div class="text-center">
                                    <a class="auth-link" href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a class="auth-link" href="#"><i class="fab fa-vk"></i></a>
                                    <a class="auth-link" href="#"><i class="fab fa-google-plus-square"></i></a>
                                </div>

                                <div class="text-center pt-3">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Забыли пароль?') }}
                                    </a>
                                    @endif
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
