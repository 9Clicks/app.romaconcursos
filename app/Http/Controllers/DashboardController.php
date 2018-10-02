<?php

namespace App\Http\Controllers;
use DB;
use App\configApp;
use App\appNavbar;
use App\appCurso;
use App\appDetalhe;
use App\appVideo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $app_configs             = DB::table('config_apps')->first();
        $appNavs                 = DB::table('app_navbars')->first();
        $appDetalhes             = DB::table('app_detalhes')->first();

        $appCursos               = appCurso::orderBy('tbl_categoria', 'asc')->get();
        $appVideos               = appVideo::orderBy('id', 'asc')->get();

        return view('dashboard.home', [
            'app_configs'        => $app_configs,
            'appNavs'            => $appNavs,
            'appDetalhes'        => $appDetalhes

        ], compact('appCursos', 'appVideos'));
    }
}
