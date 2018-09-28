@extends('layouts.html')

@section('content')

    <div class="col-xl-12 mt-4" id="tpl_title_pg">
        <h1><span class="icon-film1"></span> Videos:</h1>
    </div>
    <div class="col-xl-12">
        <div class="row mt-5">
            @foreach($appVideos as $youtube)
            <div class="col-xl-4">
                <div class="row mb-3">
                    <div class="col-xl-12" id="tpl_title_video">
                        {{ $youtube->tbl_title }}
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-xl-12">
                        <a href="" data-toggle="modal" data-target=".bd-{{ $youtube->tbl_video_id }}-modal-lg">
                            <img src="{{ asset('themes/imgs/img_video_preview.png') }}" class="img-fluid img-thumbnail" alt="">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12" id="tpl_video_categ">
                        <p class="text-muted">Categoria: {{ $youtube->tbl_categoria }}</p>
                    </div>
                </div>
            </div>
                <div class="modal fade bd-{{ $youtube->tbl_video_id }}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="tpl_modal_title"><span class="icon-film1"></span> Roma Concursos</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="color: red"><span class="icon-cancel"></span></span>
                                </button>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $youtube->tbl_video_id }}?rel=0" allowfullscreen></iframe>
                            </div>
                            <div class="modal-footer">
                                <p>
                                    <?php echo nl2br("$youtube->tbl_desc") ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-xl-12" id="tpl_link_canal">
                Canal Official<br/>
                <a href="https://www.youtube.com/channel/UC7nkM0nKg5mmrDpASpuUtmA" target="_blank" data-toggle="canalyoutube" data-placement="bottom" title="Conheça nosso Canal Official!">
                    <img src="{{ asset('themes/imgs/img_youtube_logo.png') }}" width="200" alt="">
                </a>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('[data-toggle="canalyoutube"]').tooltip()
                })
            </script>
        </div>
    </div>

@stop