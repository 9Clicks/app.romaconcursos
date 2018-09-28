@extends('layouts.html')

@section('content')

    <div class="row mt-2">
        <div class="col-xl-12">
            @include('includes.inc_caroucel')
        </div>
    </div>
    <div class="col-xl-12" id="tpl_title_pg">
        <span class="icon-pricetags"></span> <strong>Categorias</strong>
    </div>
    <hr style="opacity: 0">
    <div class="col-xl-12">
        <div class="row pt-3 pb-3" id="row_style"  style="background:transparent url('{{ url('themes/imgs/img_bg_row.jpg') }}') no-repeat center center /cover; border: thin solid #9A9A9A">
            @foreach($appCursos as $categ)
                <div class="col-xl-3" id="tpl_icon_detalhes">
                    <div class="row">
                        <a href="{{ url('/preparatorio') }}/{{ $categ->tbl_slug }}/detalhes/{{ $categ->id }}" id="tpl_show_dt" class="col-xl-12">
                            <span class="icon-medal"></span>
                            <p>{{ $categ->tbl_categoria }}</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <hr style="opacity: 0">
    <div class="col-xl-12" id="tpl_title_pg">
        <span class="icon-pricetags"></span> Preparatórios
    </div>
    <div class="row">
        @foreach($appCursos as $curso)

            <div class="col-xl-4 mt-3">
                <div class="card text-center">
                    <div class="card-header" id="card-title">
                        <strong>{{ $curso->tbl_titulo }}</strong>
                    </div>
                    <img class="card-img-top" src="{{  asset('themes/cursos') }}/{{ $curso->tbl_img }}" classe="img-fluid" alt="">
                    <div class="card-body" id="card-style">

                        <p class="card-text" style="height: 85px">{{ $curso->tbl_desc }}</p>
                        <hr>
                        <h5><small>Duração</small> <span class="icon-{{ $curso->tbl_tempo }}"></span> <small>meses</small></h5>

                    </div>
                    <div class="card-footer">
                        <a href="{{ url('/preparatorio') }}/{{ $curso->tbl_slug }}/detalhes/{{ $curso->id }}" class="btn btn-warning btn-lg btn-block"><i class="fa fa-info-circle" aria-hidden="true"></i> Saiba Mais...</a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>

@stop