<!doctype html>

<html lang="{{ $app_configs->tbl_language }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{ asset('themes/imgs/img_icon_roma.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $app_configs->tbl_title }}</title>

    @include('includes.inc_metas')

    @include('layouts.css')

    @include('layouts.js')

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1&appId=339874776758067&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

</head>

<body>

<div class="container-fluid">
        <div class="row">
            <div class="col-xl-12" id="tpl_top">

            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-5" id="tpl_logo">
                                <div class="row mt-4 mb-1">
                                    <div class="col-xl-12">
                                        <img src="{{ asset('themes/imgs/logomarca_z.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7" id="tpl_acess">
                                <div class="row mt-4">
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-6 offset-xl-6 col-sm-12">
                                                <button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#loginForm"><span class="icon-users"></span> Acesso Restrito</button>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-xl-6 offset-xl-6 col-sm-12" id="tpl_restrict">
                                                <p class="text-muted"><span class="icon-lock1"></span> Acesso Restrito, somente Usuário cadastrados!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12" id="tpl_icones">
                                        @include('includes.inc_social')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                @include('includes.inc_navbar')
                            </div>
                        </div>
                    </div>
                </div>

                @yield('content')

            </div>
        </div>
    </div>
    <hr style="opacity: 0">
    <div class="container-fluid" id="tpl_pre-footer">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-4" id="logo-footer">
                                <div class="row mt-5">
                                    <div class="col-xl-12">
                                        <img src="{{ asset('themes/imgs') }}/{{ $appDetalhes->tbl_image }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12" id="slogan">
                                        <h2>{{ $appDetalhes->tbl_slogan }}</h2>
                                    </div>
                                </div>
                                <hr style="opacity: 0; margin-top: 10px; margin-bottom: 10px">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="fb-page" data-href="https://www.facebook.com/romaconcursos/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
                                            <blockquote cite="https://www.facebook.com/romaconcursos/" class="fb-xfbml-parse-ignore">
                                                <a href="https://www.facebook.com/romaconcursos/">Roma Concursos</a>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xl-8">
                                <div class="row mt-5">
                                    <div class="col-xl-12">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.70921140595!2d-42.56516074842456!3d-19.46810022907714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xafffc986892fd1%3A0x7156049efc2b8d35!2sRoma+Concursos!5e0!3m2!1spt-BR!2sbr!4v1538049617318" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-xl-4">
                                <div class="row">
                                    <div class="col-xl-12" id="local-info">
                                        <h5 class="mt-4"><span class="icon-location1"></span>&nbsp; Onde Estamos: </h5>
                                        <h5 style="color: #cccccc"><small>{{ $appDetalhes->tbl_end }} - {{ $appDetalhes->tbl_bairro }}<br/>{{ $appDetalhes->tbl_cid }}</small></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="row">
                                    <div class="col-xl-12" id="local-info">
                                        <h5 class="mt-4"><span class="icon-phone11"></span>&nbsp; Telefones:</h5>
                                        <h5 style="color: #cccccc"><a href="http://api.whatsapp.com/send?1=pt_BR&phone=553195008584" target="_blank"><span class="icon-whatsapp"></span> <small>{{ $appDetalhes->tbl_ddd }}</small> <strong>{{ $appDetalhes->tbl_cel }}</strong></a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="row">
                                    <div class="col-xl-12" id="local-info">
                                        <h5 class="mt-4"><span class="icon-paperplane"></span>&nbsp; E-mail:</h5>
                                        <h5 class="link-email mb-5"><a href="mailto:{{ $appDetalhes->tbl_email }}">{{ $appDetalhes->tbl_email }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="footer">
        <div class="row">
            <div class="col-xl-12">
                Desenvolvido por <a href="https://www.9clicks.com.br" target="_blank">9 Clicks Developers</a> - Todos os Direitos reservados a Roma Concursos &copy; Copyright {{ date('Y') }}.
            </div>
        </div>
    </div>

</body>

    @include('includes.inc_login')
    @include('includes.inc_inscricao')

</html>