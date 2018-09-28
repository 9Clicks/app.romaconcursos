@extends('layouts.app')

@section('content')
<div class="container" id="tpl_login">
    <div class="row justify-content-center">
        <div class="col-md-5" id="tpl_content_form">
            <div class="card">
                <div class="card-header pt-4" id="tpl_panel_login">
                    <img src="{{ asset('themes/imgs/logo_am.png') }}" class="img-fluid" alt="">
                    <hr>
                    <h3>Administração Roma Concursos</h3>
                </div>
                <hr style="opacity: 0">
                <div class="card-body">
                    @include('includes.inc_loginPainel')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
