<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Models\Albun;

class HomepageController extends Controller
{
    public function index() {

        $pesquisa = request('pesquisa');

        if($pesquisa) {
            $albuns = Albun::where([[
                'nome', 'like', '%'.$pesquisa.'%'
            ]])->get();
        }
        else{
            $albuns = Albun::all();
        }

        $faixas = DB::table('albuns')
        ->join('faixas', 'albuns.id', '=', 'faixas.album_id')
        ->orderBy('faixa','ASC')
        ->get();

        return view('albuns', ['albuns' => $albuns, 'faixas' => $faixas, 'pesquisa' => $pesquisa]);   
    }
}
