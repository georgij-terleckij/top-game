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
                        <div class="align-items-center justify-content-center auth-head">Регистрация:</div>
                        <div class="part"></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <!--<label for="email"-->
                                    <!--class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->
                                    <div class="col-12">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name"
                                               placeholder="Имя">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>

                                </div>

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

                                <div class="form-group row ">
                                    <div class="col-12">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="new-password"
                                               placeholder="Пароль">


                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password"
                                               placeholder="Повторите пароль">
                                    </div>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-12">
                                        <button type="submit" class="btn all_news btn-auth">
                                            {{ __('Зарегистрироваться') }}
                                        </button>


                                    </div>
                                </div>
                                <div class="form-group row mb-0 align-items-center py-4">
                                    <div class="part-left col"></div>
                                    <p class="col m-0 text-center">или войти через</p>
                                    <div class="part col"></div>
                                </div>

                                <div class="mb-0 text-center">
                                    <a class="auth-link" href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a class="auth-link" href="#"><i class="fab fa-vk"></i></a>
                                    <a class="auth-link" href="#"><i class="fab fa-google-plus-square"></i></a>
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
