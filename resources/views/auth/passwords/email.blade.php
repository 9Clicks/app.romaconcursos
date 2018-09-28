@extends('layouts.app')

@section('content')
<div class="container" id="tpl_login">
    <div class="row justify-content-center">
        <div class="col-md-5" id="tpl_content_form">
            <div class="card">
                <div class="card-header pt-4" id="tpl_panel_login">
                    <img src="{{ asset('themes/imgs/logo_am.png') }}" class="img-fluid" alt="">
                    <hr>
                    <h3>Redefinição de Senha</h3>
                </div>
                <hr style="opacity: 0">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">

                                <div class="col-md-12 pr-5 pl-5">
                                    <input id="email" type="email" placeholder="Digite seu E-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-lg" name="email" value="{{ old('email') }}" required>
                                    <small id="emailHelp" class="form-text text-muted">* E-mail de cadastro na 9 Clicks Developers</small>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 pr-5 pl-5">
                                    <button type="submit" class="btn btn-info btn-lg btn-block">
                                        Recuperar o Acesso
                                    </button>
                                    <small id="emailHelp" class="form-text text-muted text-center">Um link para redefinir a senha será enviada em seu e-mail cadastrado em nosso sistema.</small>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
