<form method="POST" action="{{ route('login') }}" id="tpl_form_font">
    @csrf

    <div class="form-group row">
        <div class="col-md-12 pr-5 pl-5">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-lg" name="email" value="{{ old('email') }}" placeholder="E-mail de Cadastro" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12 pr-5 pl-5">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-lg" name="password" required placeholder="Sua Senha">

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12 pr-5 pl-5">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">Lembra-me</label>
            </div>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-12 pr-5 pl-5">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Acessa Painel</button>
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-12 pr-5 pl-5" id="tpl_link_reset">
            <a class="btn btn-link" href="{{ route('password.request') }}">Esqueceu a Senha?</a>
        </div>
    </div>
</form>