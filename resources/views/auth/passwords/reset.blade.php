@extends('layouts.app')

@section('content')
<div class="container" id="tpl_login">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header pt-4" id="tpl_panel_login">
                <img src="{{ asset('themes/imgs/logo_am.png') }}" class="img-fluid" alt="">
                <hr>
                <h3>Nova Senha de Acesso</h3>
            </div>
            <hr style="opacity: 0">
            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group row">

                        <div class="col-md-12 pr-5 pl-5">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-12 pr-5 pl-5">
                            <input id="password" type="password" placeholder="Nova Senha" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirme a Senha</label><br>

                        <div class="col-md-12 pr-5 pl-5">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12 pr-5 pl-5">
                            <button type="submit" class="btn btn-warning btn-block btn-lg">
                                Cadastrar Nova Senha
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>





        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
