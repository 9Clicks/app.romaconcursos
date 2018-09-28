<?php

namespace App\Http\Controllers;
use DB;
use App\configApp;
use App\appNavbar;
use App\appCurso;
use App\appDetalhe;
use App\appHistory;
use Illuminate\Http\Request;

class cursoBMMController extends Controller
{
    public function index()
    {
        $app_configs             = DB::table('config_apps')->first();
        $appNavs                 = DB::table('app_navbars')->first();
        $appDetalhes             = DB::table('app_detalhes')->first();
        $appHistorys             = DB::table('app_histories')->first();

        $appCursos               = appCurso::orderBy('tbl_categoria', 'asc')->get();

        return view('preparatorio/bombeiromilitar.index',[
            'app_configs'       => $app_configs,
            'appNavs'           => $appNavs,
            'appDetalhes'       => $appDetalhes,
            'appHistorys'       => $appHistorys

        ], compact('appCursos'));
    }

    public function detalhes($id)
    {
        $app_configs             = DB::table('config_apps')->first();
        $appNavs                 = DB::table('app_navbars')->first();
        $appDetalhes             = DB::table('app_detalhes')->first();
        $appHistorys             = DB::table('app_histories')->first();

        $appCursos               = appCurso::orderBy('tbl_categoria', 'asc')->get();

        $infoDetalhes            = appCurso::find($id);

        return view('preparatorio.detalhes',[
            'app_configs'       => $app_configs,
            'appNavs'           => $appNavs,
            'appDetalhes'       => $appDetalhes,
            'appHistorys'       => $appHistorys,
            'infoDetalhes'      => $infoDetalhes

        ], compact('appCursos'));
    }
}
